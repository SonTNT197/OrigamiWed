<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ModelProduct extends Model
{
    public function listProduct()
    {
      
        return DB::table('tblorigami')->get();
    }
    

    public function listProductById($category)
    {
        return DB::table('tblorigami')->where('category', '=', $category)->get();
    }

    public function listProductByLev($level)
    {
        return DB::table('tblorigami')->where('level', '=', $level)->get();
    }

    public function productById($id){
        return DB::table('tblorigami')->where('id_origami', '=', $id)->get();
    }

    public function listCategory($id)
    {
        // dd($id);
        if (!empty($id)) {
            return DB::table('tblcategory')->where('id_category', '=', $id)->get();
        }
    }

    public function listCategori()
    {
        return DB::table('tblcategory')->get();
    }

    public function listLevel()
    {
        return DB::table('tbllevel')->get();
    }

    public function listStep($id)
    {
        return DB::table('tblstep')->where('id_origami', '=', $id)->get();
    }

    public function deleteById($proID)
    {
        DB::table('tblorigami')->where('id_origami', '=', $proID)->delete();
    }

    public function editViewbyID($proID)
    {
        $product = DB::table('tblorigami')->where('id_origami', '=', $proID)->get();
        return $product;
    }

    public function editPro($id, $req)
    {
        $proName = $req->name_origami;
        $proStyle = $req->category;
        $prolevel = $req->level;
        if ($req->has('img_origami')) {
            $file = $req->img_origami;
            $ext = $file->extension();
            $file_name = time() . '-' . 'origami.' . $ext;
            $path = 'proImg' . '/' . time() . '-' . 'origami.' . $ext;
            $file->move(public_path('proImg'), $file_name);
            DB::table('tblorigami')->where('id_origami', '=', $id)->update(['name_origami' => $proName, 'img_origami' => $path, 'category' => $proStyle, 'level' => $prolevel]);
        } else {
            DB::table('tblorigami')->where('id_origami', '=', $id)->update(['name_origami' => $proName, 'category' => $proStyle, 'level' => $prolevel]);
        }

        $nameStep = $req->name_step;
        $describle = $req->deseribe;
        $imgStep = $req->img_step;
        $idStep = $req->id_step;
        $arrlength = count($nameStep);
        // dd($idStep);
        if ($req->has('img_step')) {
            for ($x = 1; $x <= $arrlength; $x += 1) {
                // dd($id_origami);
                if (!empty($imgStep[$x])) {
                    $file[$x] = $imgStep[$x];
                    $ext = $file[$x]->extension();
                    $file_name[$x] = time() . '-' . 'step' . $x . '.' . $ext;
                    $path[$x] = 'stepImg' . '/' . time() . '-' . 'step' . $x . '.' . $ext;
                    $file[$x]->move(public_path('stepImg'), $file_name[$x]);
                    DB::table('tblstep')->Where('id_step', '=', $idStep[$x])->update(['name_step' => $nameStep[$x], 'img_step' => $path[$x], 'deseribe' => $describle[$x]]);
                } else {
                    DB::table('tblstep')->Where('id_step', '=', $idStep[$x])->update(['name_step' => $nameStep[$x], 'deseribe' => $describle[$x]]);
                }
            }
        } else {
            for ($x = 1; $x <= $arrlength; $x += 1) {
                DB::table('tblstep')->Where('id_step', '=', $idStep[$x])->update(['name_step' => $nameStep[$x], 'deseribe' => $describle[$x]]);
            }
        }
    }

    public function addPro($data)
    {
        $proName = $data->name_origami;
        $proImg = $data->imgPath;
        $proStyle = $data->category;
        $prolevel = $data->level;
        DB::table('tblorigami')->insert(['name_origami' => $proName, 'img_origami' => $proImg, 'category' => $proStyle, 'level' => $prolevel]);
        // dd($data->name_step);

    }

    public function getNewId($name)
    {
        return DB::table('tblorigami')->where('name_origami', '=', $name)->get('id_origami');
    }

    public function addStep($id_origami, $data)
    {
        // dd($data->all());
        $nameStep = $data->name_step;
        $describle = $data->describle;
        $imgStep = $data->img_step;
        if (is_array($nameStep)) {
            // dd($describle);
            $arrlength = count($nameStep);
            for ($x = 1; $x <= $arrlength; $x++) {
                $file[$x] = $imgStep[$x];
                $ext = $file[$x]->extension();
                $file_name[$x] = time() . '-' . 'step' . $x . '.' . $ext;
                $path[$x] = 'stepImg' . '/' . time() . '-' . 'step' . $x . '.' . $ext;
                $file[$x]->move(public_path('stepImg'), $file_name[$x]);
                DB::table('tblstep')->insert(['id_origami' => $id_origami, 'name_step' => $nameStep[$x], 'img_step' => $path[$x], 'deseribe' => $describle[$x]]);
            }
        } else {
            $file = $imgStep;
            $ext = $file->extension();
            $file_name = time() . '-' . 'step'  . '.' . $ext;
            $path = 'stepImg' . '/' . time() . '-' . 'step'  . '.' . $ext;
            $file->move(public_path('stepImg'), $file_name);
            DB::table('tblstep')->insert(['id_origami' => $id_origami, 'name_step' => $nameStep, 'img_step' => $path, 'deseribe' => $describle]);
        }
    }
}
