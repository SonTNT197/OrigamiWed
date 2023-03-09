<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\ModelCategory;
use App\Http\Requests\categoryRequest;
use App\Http\Requests\EditCategoryRequest;


class CategoryController extends Controller
{
    public $cat;
    public function __construct()
    {
        $this->cat = new ModelCategory();
    }

    public function getCategory(Request $req){
        $category = $this->cat->listCategory();
        return view('admin.category.list',compact('category'));
    }

    public function deleteCat(Request $req){
        $catID=$req->id_category;
        $this->cat->deleteCatById($catID);
        return redirect()->back();
    }

    public function editCat($id_category){
        $category = $this->cat->editCatViewbyID($id_category);
        return view('admin.category.edit',['category'=>$category[0]]);
    }

    public function postEditCat($id_category,EditCategoryRequest $req){
        $this->cat->editCat($id_category,$req);
        return redirect()->route('list-category');
    }
    public function getFormAdd(){
        
        return view('admin.category.add');
    }

    public function addNewCat(categoryRequest $req){
        if($req->has('img_category')){
            $file=$req->img_category;
            $ext=$file->extension();
            $file_name=time().'-'.'category.'.$ext;
            $path='catImg'.'/'.time().'-'.'category.'.$ext;
            $file->move(public_path('catImg'),$file_name);
            $req->merge(['imgPath'=>$path]);
        }
        // dd($req->all());
        // dd($req->imgPath);
        $this->cat->addCat($req);
        return redirect()->route('list-category');
    }
}
