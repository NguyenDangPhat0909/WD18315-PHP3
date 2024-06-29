<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    // Public, Private, Default , Protected
    public function showProduct(){
        $data = [
            [
                'id'     => '1',
                'name'   => 'HIHI'
            ],
            [
                'id'     => '2',
                'name'   => 'HAHA'
            ]
            ];
        return view('listProduct')->with([
            'listProduct' => $data
        ]);
    }

    public function getProduct($id, $name = ''){
        echo $id;
        echo $name;
    }

    public function updateProduct(Request $request){
        echo $request->id;
        echo $request->name;
    }
}
