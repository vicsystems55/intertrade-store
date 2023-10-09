<?php

namespace App\Http\Controllers\API\V1;
use App\Http\Controllers\Controller;
use App\Models\StoreSubDetail;
use Illuminate\Http\Request;

class StoreProfileController extends Controller
{
    //
    function store_profile(Request $request) {

        $storeDetails = StoreSubDetail::where('user_id', $request->user()->id)->first();

        return $storeDetails;


    }
}
