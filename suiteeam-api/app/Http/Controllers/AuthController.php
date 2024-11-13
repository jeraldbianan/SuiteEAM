<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

class AuthController extends Controller {
    public function login(Request $request) {
    }

    public function logout(Request $request) {
    }

    public function getUser(Request $request) {
        return new UserResource($request->user());
    }
}
