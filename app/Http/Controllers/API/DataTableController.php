<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
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

    public function getBooksOnCategories(Request $request)
    {
        $data = \App\Models\Book::getBooksOnCategories($request->query());
        return DataTables::of($data)->make(true);
    }

    public function getRacks(Request $request)
    {
        $data = \App\Models\Rack::getRacks($request->query());
        return DataTables::of($data)->addColumn('quantity_category', function($data){
            return $data->categories->count();
        })->make(true);
    }

    public function getCategoriesOnRack(Request $request)
    {
        $data = \App\Models\Rack::getCategoriesOnRack($request->query());
        return DataTables::of($data)->addColumn('quantity_book', function($data){
            return $data->Book->count();
        })->make(true);
    }

    public function getPublishers(Request $request)
    {
        $data = \App\Models\Publisher::getPublishers($request->query());
        return DataTables::of($data)->addColumn('quantity_book', function($data){
            return $data->Book->count();
        })->make(true);
    }

    public function getBooksOnPublishers(Request $request)
    {
        $data = \App\Models\Book::getBooksOnPublishers($request->query());
        return DataTables::of($data)->make(true);
    }

    public function getBooks(Request $request)
    {
        $data = \App\Models\Book::getBooks($request->query());
        return DataTables::of($data)->addColumn('category_name', function($data){
            return $data->Category->name;
        })->addColumn('publisher_name', function($data){
            return $data->publisher->name;
        })->make(true);
    }

    public function getBorrows(Request $request)
    {
        $data = \App\Models\Borrow::getBorrows($request->query());
        return DataTables::of($data)->addColumn('borrower_name', function($data){
            return $data->User->name;
        })->addColumn('book_title', function($data){
            return $data->Book->title;
        })->make(true);
    }
}
