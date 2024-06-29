<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class phatndph39954Controller extends Controller
{
    public function showThongTin(){
        $data = [
            [
                'MaSV'     => 'PH39954',
                'Ten'   => 'Nguyễn Đăng Phát',
                'gioiTinh' => 'Nam',
                'lop'   => 'WD18315'
            ]
        ];
        return view('thongTin')->with([
            'thongTin' => $data
        ]);
    }
}
