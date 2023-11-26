<?php

namespace App\Http\Controllers;

use App\Models\Tbl_city;
use App\Models\Tbl_fullcontract;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function store(Request $request)
    {
        try {
            $data=$request->all();
            $product=new Tbl_fullcontract();
            $product->Full_Contract_Code=$data['mahopdong'];
            $product->Customer_Name=$data['hoten'];
            $product->Year_of_Birth=$data['namsinh'];
            $product->SSN=$data['cmnd'];
            $product->Customer_Address=$data['diachi'];
            $product->Mobile=$data['sdt'];
            $product->property_id=$data['mabatdongsan'];
            $product->Date_of_Contract=$data['ngaylaphopdong'];
            $product->Price=$data['giatrihopdong'];
            $product->Deposit=$data['tiendacoc'];
            $product->Remain=$data['tienconlai'];
            $product->Status=$data['trangthai'];

            $product->save();
            return redirect()->route('viewAdd');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

    }
    public function update(Request $request){

        $data=$request->all();
        $product=Tbl_fullcontract::find($request->Contract_ID);
        $product->Full_Contract_Code=$data['mahopdong'];
        $product->Customer_Name=$data['hoten'];
        $product->Year_of_Birth=$data['namsinh'];
        $product->SSN=$data['cmnd'];
        $product->Customer_Address=$data['diachi'];
        $product->Mobile=$data['sdt'];
        $product->property_id=$data['mabatdongsan'];
        $product->Date_of_Contract=$data['ngaylaphopdong'];
        $product->Price=$data['giatrihopdong'];
        $product->Deposit=$data['tiendacoc'];
        $product->Remain=$data['tienconlai'];
        $product->Status=$data['trangthai'];

        //thêm hình ảnh

        $product->save();
        return redirect()->route('viewAdd');
    }
    public function delete(Request $request)
    {
        try{
            Tbl_fullcontract::find($request->Contract_ID)->delete();
            return redirect()->back();
        }catch (\Exception $e) {
            dd($e->getMessage());
        }


    }
}
