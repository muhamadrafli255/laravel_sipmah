<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\District;
use App\Models\SubDistrict;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function getCities(Request $request)
    {
        $cities = City::where('province_id', $request->province_id)->get();

        echo "<option>Kabupaten / Kota</option>";

        foreach($cities as $city)
        {
            echo "
                    <option value='$city->id'>$city->name</option>
                ";
        }
    }

    public function getDistricts(Request $request)
    {
        $districts = District::where('city_id', $request->city_id)->get();

        echo "<option>Kecamatan</option>";

        foreach($districts as $district)
        {
            echo "
                    <option value='$district->id'>$district->name</option>
                ";
        }
    }

    public function getSubDistricts(Request $request)
    {
        $subdistricts = SubDistrict::where('district_id', $request->district_id)->get();

        echo "<option>Desa</option>";

        foreach($subdistricts as $subdistrict)
        {
            echo "
                    <option value='$subdistrict->id'>$subdistrict->name</option>
                ";
        }
    }
}
