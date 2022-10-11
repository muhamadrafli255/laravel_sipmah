<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;

class DataTableController extends Controller
{
    public function getMembers(Request $request)
    {
        $data = \App\Models\User::getMembers($request->query());
        return DataTables::of($data)->make(true);
    }

    public function getOfficers(Request $request)
    {
        $data = \App\Models\User::getOfficers($request->query());
        return DataTables::of($data)->make(true);
    }

    public function getCategories(Request $request)
    {
        $data = \App\Models\Category::getCategories($request->query());
        return DataTables::of($data)->addColumn('quantity_books', function($data){
            return $data->Book->count();
        })->make(true);
    }
}
