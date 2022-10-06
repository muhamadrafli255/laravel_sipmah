<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\District;
use App\Models\Province;
use App\Models\SubDistrict;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function getProvinces(Request $request)
    {
        $data = Province::get();
        return $data;
    }

    public function getCities(Request $request)
    {
        $data = City::getCities($request->query());
        return $data;
    }

    public function getDistricts(Request $request)
    {
        $data = District::getDistricts($request->query());
        return $data;
    }

    public function getSubDistricts(Request $request)
    {
        $data = SubDistrict::getSubDistricts($request->query());
        return $data;
    }
}
