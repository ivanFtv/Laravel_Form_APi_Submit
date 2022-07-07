<?php

namespace App\Http\Controllers;

use App\DatabaseJson\Models\User;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Http;

class UserApiController extends Controller
{

    public function store(StorePostRequest $request) {
        try {
            $data = $request->validated();
            User::create($data);
            return response()->json(["Status" => "Data registered"]);
        } catch (\Exception $e) {
            return response()->json(["errors" => $e]);
        }
    }
}
