<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;
use Auth;
class PassportController extends Controller
{
    /**
     * Handles Registration Request
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users',
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
        ]);
        $raw_password = $request->password ? $request->password : \Str::random(8);
        $user = User::create([
            'firstname' => $request->firstname,
            'middlename' => $request->middlename,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => bcrypt($raw_password),
            'type' => $request->type
        ]);

        
        $token = $user->createToken('VAJOBMARKET2021')->accessToken;

        return response()->json(['token' => $token], 200);
    }

    /**
     * Handles Login Request
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (auth()->attempt($credentials)) {
            $user = Auth::guard('web')->user();
            $token = auth()->user()->createToken('VAJOBMARKET2021')->accessToken;
            return response()->json(['token' => $token , 'userdata'=>$user], 200);
        } else {
            return response()->json(['error' => 'Username or Password is Invalid', 'data' => $credentials], 401);
        }
    }

    /**
     * Returns Authenticated User Details
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function details()
    {
        return response()->json(['user' => auth()->user()], 200);
    }
}