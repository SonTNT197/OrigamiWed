<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ModelCategory extends Model
{
    public function listCategory(){
        
        return DB::table('tblcategory')->get();
    }

    public function deleteCatById($catID){
        DB::table('tblcategory')->where('id_category','=',$catID)->delete();
    }

    public function editCatViewbyID($catID){
        $category = DB::table('tblcategory')->where('id_category','=',$catID)->get();
        return $category;
    }

    public function editCat($id,$req){
        $catName = $req->name_category;
        if ($req->has('img_category')) {
            $file = $req->img_category;
            $ext = $file->extension();
            $file_name = time() . '-' . 'category.' . $ext;
            $path = 'catImg' . '/' . time() . '-' . 'category.' . $ext;
            $file->move(public_path('catImg'), $file_name);
            DB::table('tblcategory')->where('id_category', '=', $id)->update(['name_category' => $catName, 'img_category' => $path]);
        } else {
            DB::table('tblcategory')->where('id_category', '=', $id)->update(['name_category' => $catName]);
        }

    }

    public function addCat($data){
        $catName = $data->name_category;
        $catImg = $data->imgPath;
        DB::table('tblcategory')->insert(['name_category'=>$catName,'img_category'=>$catImg]);
    }
}
