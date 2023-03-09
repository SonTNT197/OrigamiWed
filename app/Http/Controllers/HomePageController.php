<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\admin\ModelProduct;
use App\Models\admin\ModelCategory;
use App\Models\admin\ModelLevel;


class HomePageController extends Controller
{
    public $cat, $pro, $lev;
    public function __construct()
    {
        $this->pro = new ModelProduct();
        $this->cat = new ModelCategory();
        $this->lev = new ModelLevel();
        
    }
  
    public function menu(Request $req){
        $category = $this->cat->listcategory();
        $level = $this->lev->listLevel();
        // dd($category);
        return view('welcome',['category'=>$category,'level'=>$level]);
    }

    public function listCat(Request $req){
        $category = $this->cat->listcategory();
        // dd($category);
        return view('main.listCategory',compact('category'));
    }

    public function listLev(Request $req){
        $level = $this->lev->listlevel();
        // dd($category);
        return view('main.listLevel',compact('level'));
    }

    public function listOrigamiByCat($category){
        $origami=$this->pro->listProductById($category);
        $cat=$this->pro->listCategory($category);
        // dd($cat);
        return view('main.listOrigami',['origami'=>$origami,'cat'=>$cat[0]]);
    }

    public function listOrigamiByLev($level){
        $origami=$this->pro->listProductByLev($level);
        $lev=$this->lev->listLevelById($level);
        // dd($lev);
        return view('main.listOrigamiLev',['origami'=>$origami,'lev'=>$lev[0]]);
    }

    public function origami($id_origami){
        $origami=$this->pro->productById($id_origami);
        $step=$this->pro->listStep($id_origami);
        return view('main.origami',['step'=>$step,'origami'=>$origami[0]]);
    }

    public function history(){
        return view('main.history');
    }

    public function aboutUs(){
        return view('main.aboutUs');
    }

}
