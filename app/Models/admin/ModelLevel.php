<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class ModelLevel extends Model
{
    public function listlevel(){
        
        return DB::table('tbllevel')->get();
    }

    public function listLevelById($id)
    {
        // dd($id);
        if (!empty($id)) {
            return DB::table('tbllevel')->where('id_level', '=', $id)->get();
        }
    }
}
