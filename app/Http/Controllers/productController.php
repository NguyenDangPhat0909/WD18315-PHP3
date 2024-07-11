<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class productController extends Controller
{
    // Public, Private, Default , Protected
    // public function showProduct(){
    //     $data = [
    //         [
    //             'id'     => '1',
    //             'name'   => 'HIHI'
    //         ],
    //         [
    //             'id'     => '2',
    //             'name'   => 'HAHA'
    //         ]
    //         ];
    //     return view('listProduct')->with([
    //         'listProduct' => $data
    //     ]);
    // }

    // public function getProduct($id, $name = ''){
    //     echo $id;
    //     echo $name;
    // }

    // public function updateProduct(Request $request){
    //     echo $request->id;
    //     echo $request->name;
    // }

    // public function queryBuilder(){
       //1. Lấy danh sách toàn bộ user
       // $result = DB::table('users')->get();

       //2. Lấy thông tin user có id = 4 
       // $result = DB::table('users')->where("id" , "=" , "4")->first();

       //3. Lấy thuộc tính 'name' của user có id = 16
       //$result = DB::table('users')->where("id" , "=" , "16")->value('name');

       //4. Lấy danh sách idUser của phòng ban 'Ban giám hiệu'
       //$idPhongBan = DB::table('phongban')->where('ten_donvi', 'like', 'Ban Giám Hiệu')->value('id');
       //$result = DB::table('users')->where("phongban_id" , $idPhongBan)->pluck('id');

       //5. Tìm user có độ tuổi lớn nhất trong công ty
    //    $result = DB::table('users')->where('tuoi', DB::table('users')->max('tuoi'))->get();

        //6. Tìm user có độ tuổi nhỏ nhất trong công ty
        // $result = DB::table('users')->where('tuoi', DB::table('users')->min('tuoi'))->get();

        // 7. Đếm xem phòng ban 'Ban giám hiệu' có bao nhiêu user 
        // $result = DB::table('users')->where("phongban_id",DB::table('phongban')->where('ten_donvi', 'like', 'Ban Giám Hiệu')->value('id'))->count();

        // 8. Lấy danh sách tuổi các user 
        // $result = DB::table('users')->select('tuoi')->get();

        // 9. Tìm danh sách user có tên 'Khải' hoặc có tên 'Thanh'
        // $result = DB::table('users')->where('name', 'like', '%Khải')->orWhere('name', 'like', '%Thanh')->get();

        // 10. Lấy danh sách user ở phòng ban 'Ban đào tạo'
        // $result = DB::table('users')->where("phongban_id", DB::table('phongban')->where('ten_donvi', 'like', 'Ban Đào Tạo')->value('id'))->pluck('id');

        // 11. Lấy danh sách user có tuổi lớn hơn hoặc bằng 30, danh sách sắp xếp tăng dần
        // $result = DB::table('users')->where('tuoi', '>=', '30')->orderBy('tuoi', 'asc')->get();

        // 12. Lấy danh sách 10 user sắp xếp giảm dần độ tuổi, bỏ qua 5 user đầu tiên
        // $result = DB::table('users')->orderBy('tuoi', 'desc')->limit(10)->offset(5)->get();

        // 13. Thêm một user mới vào công ty
        //Cách 1
        // $result = DB::table('users')->insert([
        //     'name' => 'Nguyễn Đăng Phát', 
        //     'email' => 'phatnd@fpt.edu',
        //     'phongban_id'=>1,
        //     'songaynghi' =>0,
        //     'tuoi'=>21,
        //    ]);

        // 14. Thêm chữ 'PĐT' sau tên tất cả user ở phòng ban 'Ban đào tạo' 
        //15. Xóa user nghỉ quá 15 ngày
        // $result = DB::table('users')->where('songaynghi', '>', '15')->delete();
        
        // dd($result);

    public function listProducts(Request $request){
        $query = DB::table('product')
        ->join('category', 'product.category_id', '=', 'category.id')
        ->select('product.name', 'product.price', 'category.namecy', 'product.id', 'product.view')
        ->orderBY('view', 'DESC');
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('product.name', 'LIKE', "%{$search}%");
        }
        $products = $query->get();
        return view('product/list-product')->with([
            'listProducts' => $products
        ]);
    }

    public function addProducts(){
        $Category = DB::table('category')->select('id', 'namecy')->get();
        return view('product/add-product')->with([
            'Category' => $Category
        ]);
    }
    public function addPostProducts(Request $req){
        $data = [
            'name'          =>$req->name,   
            'price'         =>$req->price,
            'category_id'   =>$req->category,
            'view'          =>$req->view,
            'create_at'    => Carbon::now(),
            'update_at'    => Carbon::now(),
        ];
        DB::table('product')->insert($data);

        return redirect()->route('products.listProducts');
    }

    public function deleteProducts($idproduct){
        DB::table('product')->where('id', $idproduct)->delete();
        return redirect()->route('products.listProducts');
    }

    public function editProducts(int $id) {
        $data = DB::table('product')->where('id', $id)->first();
        $category = DB::table('category')->select('id', 'namecy')->get();
        return view('product/edit-product', compact('data', 'category'));
    }
    public function updateProducts(Request $request, int $id) {

        $data = $request->except('_token', '_method');
        DB::table('product')->where('id', $id)->update($data);
        return redirect()->route('products.listProducts');
    }
}
// }
