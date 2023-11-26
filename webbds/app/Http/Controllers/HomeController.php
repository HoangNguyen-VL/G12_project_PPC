<?php

namespace App\Http\Controllers;

use App\Models\Tbl_fullcontract;
use App\Models\Tbl_property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function viewIndex(){
        $list = Tbl_fullcontract::with('property')->get();

        return view('index', compact('list'));
    }
    public function viewAdd(){
        $list = Tbl_property::all();

        return view('add', compact('list'));

    }
    public function edit($Contract_ID)
    {
        $list = Tbl_fullcontract::with('property')->get();
        $product=Tbl_fullcontract::find($Contract_ID);
        $list_properties = Tbl_property::all();
        return view('edit', compact('list', 'product', 'list_properties'));
       
    }

}
