<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeleteUserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:sanctum', 'verified', 'password.confirm']);
    }


    /**
     * @param Request $request
     * @return mixed
     */
    public function __invoke(Request $request)
    {
        return $request->user()->delete();
    }
}
