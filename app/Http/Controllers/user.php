<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class user extends Controller
{
    public function create(){
        $courses=DB::table("courses")->get();
        $governments=DB::table("government")->get();
        return view("users.create",compact("courses"),compact("governments"));
    }
    public function store(Request $req){
        $req->validate([
            "username"=>"required|min:3",
            "userpassword"=>"required|min:8",
            "useremail"=>"required|min:10",
        ]);
        DB::table("users")->insert([
            "username"=>$req->username,
            "useremail"=>$req->useremail,
            "userpassword"=>$req->userpassword,
            "role"=>$req->role,
            "usergov"=>$req->government,
            "usercou"=>$req->courses,

        ]);
        return redirect("user/list");
    }
    public function list(){
        $users=DB::table("users")->get();
        return view("users.list",compact("users"));
    }
    public function delete($userid){
        DB::table("users")->delete($userid);
        return redirect("user/list");
    }
    public function edit($userid){
        $user = DB::table("users")->where("userid",$userid)->first();
        return view("users.update",compact("user"));
    }
    public function update(Request $req){
        $req->validate([
            "username"=>"required|min:3",
            "userpassword"=>"required|min:8",
            "useremail"=>"required|min:10",
        ]);
        DB::table("users")->where("userid",$req->userid)->update([
            "username"=>$req->username,
            "useremail"=>$req->useremail,
            "userpassword"=>$req->userpassword,
            "role"=>$req->role,
            "usergov"=>$req->government,
            "usercou"=>$req->courses,
        ]);
        return redirect("user/list");
    }
    public function login(){
        return view("login");
    }

    public function loginRequest(Request $req){
        $data = [
            "useremail"=>$req->useremail,
            "userpassword"=>$req->userpassword
        ];

        if(Auth::attempt($data)){
            return redirect("user/list");
        }
        return redirect("login");
    }

}