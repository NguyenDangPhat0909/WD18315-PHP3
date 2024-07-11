<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function listUsers(){
        $data = DB::table('users')
        ->join('phongban', 'users.phongban_id', '=', 'phongban.id')
        ->select('users.name', 'users.email', 'phongban.ten_donvi', 'users.id')
        ->get();
        return view('users/list-user')->with([
            'listUsers' => $data
        ]);
    }

    public function addUsers(){
        $phongBan = DB::table('phongban')->select('id', 'ten_donvi')->get();
        return view('users/add-user')->with([
            'phongBan' => $phongBan
        ]);
    }
    public function addPostUsers(Request $req){
        $data = [
            'name'          =>$req->name,   
            'email'         =>$req->email,
            'phongban_id'   =>$req->phongban,
            'tuoi'          =>$req->tuoi,
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now(),
        ];
        DB::table('users')->insert($data);

        return redirect()->route('users.listUsers');
    }

    public function deleteUsers($iduser){
        DB::table('users')->where('id', $iduser)->delete();
        return redirect()->route('users.listUsers');
    }
}

