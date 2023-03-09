<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class ModelMember extends Model
{
    public function listUser()
    {
        $result = DB::table('users')->get();
        return $result;
    }

    public function deleteUserById($id)
    {
        DB::table('users')->where('id', '=', $id)->delete();
    }
    public function listAdmin()
    {
        $result = DB::table('admins')->get();
        return $result;
    }

    public function deleteAdminById($id)
    {
        DB::table('admins')->where('id', '=', $id)->delete();
    }

    public function addAdmin($req)
    {
        $name = $req->name;
        $email = $req->email;
        $password = Hash::make($req->password);
        $authority = $req->authority;
        DB::table('admins')->insert(['name' => $name, 'email' => $email, 'password' => $password, 'authority' => $authority]);
    }
}
