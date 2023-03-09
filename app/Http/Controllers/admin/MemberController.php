<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\admin\ModelMember;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\MemberRequest;


class MemberController extends Controller
{
    public function __construct()
    {
        $this->mem = new ModelMember();
    }

    public function getUsers(){
        $users = $this->mem->listUser();
        return view('admin.members.user',compact('users'));
    }

    public function deleteUser(Request $req){
        $id=$req->id;
        if(Gate::allows('deleteMember',auth()->user()->authority)){
            $this->mem->deleteUserById($id);
        }
        return redirect()->back();
    }

    public function getAdmins(){
        $ads = $this->mem->listAdmin();
        return view('admin.members.admin',compact('ads'));
    }

    public function deleteAdmin(Request $req){
        $id=$req->id;
        if(Gate::allows('deleteMember',auth()->user()->authority)){
            $this->mem->deleteAdminById($id);
        }
        return redirect()->back();
    }

    public function addNewAdmin(MemberRequest $req){
        if(Gate::allows('deleteMember',auth()->user()->authority)){
            $this->mem->addAdmin($req);
            return redirect()->route('list-admin');
        }
        
    }
}
