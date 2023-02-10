<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class category extends Controller
{
    public function index()
    {
        $categories = DB::table("categories")->get();
        return response()->json(["status" => 200, "data" => $categories]);
    }

    public function show($id)
    {
        $category = DB::table("categories")->find($id);
        return response()->json(["status" => 200, "data" => $category]);
    }

    public function store(Request $request)
    {
        DB::table("categories")->insert($request->all());
        return response()->json(["status" => 201, "message" => "Category Created Successfully!"]);
    }

    public function delete($id)
    {
        DB::table("categories")->delete($id);
        return response()->json(["status" => 201, "message" => "Category Deleted"]);
    }

    public function update(Request $request)
    {
        DB::table("categories")->where("id", $request->id)->update($request->except("id"));
        return response()->json(["status" => 201, "message" => "Category Updated Successfully!"]);
    }
}
