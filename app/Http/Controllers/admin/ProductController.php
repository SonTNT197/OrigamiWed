<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\admin\ModelProduct;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\EditProRequest;


class productController extends Controller
{
    public function __construct()
    {
        $this->pro = new ModelProduct();
    }

    public function getProduct(Request $req){
        $category=$this->pro->listCategori();
        $level=$this->pro->listLevel();
        // dd($category);
        $products = $this->pro->listProduct();
        return view('admin.product.list',['products'=>$products,'category'=>$category,'level'=>$level]);
    }

    public function deletePro(Request $req){
        $proID=$req->proID;
        $this->pro->deleteById($proID);
        return redirect()->back();
    }

    public function editPro($proID){
        $category=$this->pro->listCategori();
        $level=$this->pro->listLevel();
        $product = $this->pro->editViewbyID($proID);
        $step = $this->pro->listStep($proID);
        return view('admin.product.edit',['product'=>$product[0],'category'=>$category,'level'=>$level,'step'=>$step]);
    }

    public function postEditPro($proID,EditProRequest $req){
        // dd($proID);
        $this->pro->editPro($proID,$req);
        
        return redirect()->route('list-product');
    }

    public function getFormAdd(){
        $category=$this->pro->listCategori();
        $level=$this->pro->listLevel();
        return view('admin.product.add',['category'=>$category,'level'=>$level]);
    }

    public function addNewPro(ProductRequest $req){
        if($req->has('img_origami')){
            $file=$req->img_origami;
            $ext=$file->extension();
            $file_name=time().'-'.'origami.'.$ext;
            $path='proImg'.'/'.time().'-'.'origami.'.$ext;
            $file->move(public_path('proImg'),$file_name);
        }
        $req->merge(['imgPath'=>$path]);
        $this->pro->addPro($req);
        // dd($req->all());
        // dd($req->img_step);
        $id=$this->pro->getNewId($req->name_origami);
        $this->pro->addStep($id[0]->id_origami,$req);
        return redirect()->route('list-product');
    }

    
}

