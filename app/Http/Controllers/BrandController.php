<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Helper\ResponseHelper;
use Illuminate\Http\JsonResponse;

class BrandController extends Controller
{
    public function BrandList():JsonResponse
    {
        $data = Brand::all();
        return ResponseHelper::out('success', $data, '200');
    }
}
