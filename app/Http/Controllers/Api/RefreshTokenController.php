<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RefreshTokenController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function __construct()
    {
        $this->middleware('auth:api');
    }
    public function __invoke(Request $request)
    {
        return response()->json([
            'user'  => Auth::user(),
            'refreshToken'  => Auth::refresh()
        ]);
        
    }
}
