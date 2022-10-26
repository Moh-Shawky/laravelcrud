<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use PHPUnit\Framework\ComparisonMethodDoesNotDeclareBoolReturnTypeException;

class user extends Controller
{
    // public function store(Request $req){
    //     $req->validate([
    //         "username"=>"required|min:3",
    //         "userpassword"=>"required|min:8",
    //         "useremail"=>"required|min:10",
    //     ]);
    //     DB::table("users")->insert([
    //         "username"=>$req->username,
    //         "useremail"=>$req->useremail,
    //         "userpassword"=>$req->userpassword,
    //         "role"=>$req->role,
    //         "usergov"=>$req->government,
    //         "usercou"=>$req->courses,

    //     ]);
    //     return redirect("user/list");
    // }
    

    public function store(Request $req){
        DB::table("admins")->insert([
                    "name"=>$req->username,
                    "email"=>$req->useremail,
                    "password" => Crypt::encryptString($req->userpassword),
                    // "password"=>$password,
                    // "role"=>$req->role,
                    // "usergov"=>$req->usergov,
                    // "usercou"=>$req->usercou,
        ]);
        return response()->json(["status code"=>200,"data"=>"","msg"=>"data inserted"]);
    }
    public function list(){
        $users=DB::table("admins")->get();
        return response()->json(["status code"=>200,"data"=>$users,"msg"=>""]);
    }
    // public function delete($userid){
    //     DB::table("users")->delete($userid);
    //     return redirect("user/list");
    // }
    // public function edit($userid){
    //     $user = DB::table("users")->find($userid);
    //     return view("users.update",compact("user"));
    // }
}
