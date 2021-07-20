<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\User;
use App\Member;
use Auth;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index(Request $request) {
        if($request->page) {
            $user = \App\User::with([
                'client',
                'comments',
                'created_comments',
                'messages',
                'created_messages'
            ])
            ->where(function($query) use ($request, $fields) {
                if($request->search) {
                    $query->where('firstname','LIKE',"%$request->search%")
                    ->orWhere('middlename','LIKE',"%$request->search%")
                    ->orWhere('lastname','LIKE',"%$request->search%")
                    ->orWhere('email','LIKE',"%$request->search%")
                    ->orWhere('mobile_no','LIKE',"%$request->search%")
                    ->orWhere('phone_no','LIKE',"%$request->search%");
                }
            });
            if($request->sort_order != '') {
                $user->orderBy($request->sort_field, $request->sort_order == 'ascend' ? 'asc' : 'desc');
            }
            $user = $user->paginate(50);

        } else {
            $user = \App\User::orderBy('type','asc')->get();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        
        $user = User::create([
            'firstname' => $request->firstname,
            'middlename' => $request->middlename,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'type' => $request->type,
            'mobile_no' => $request->mobile_no,
            'phone_no' => $request->phone_no
        ]);
       
        return response()->json([
            'success' => true,
            'data' => $user,
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::with([
            'client',
            'comments',
            'created_comments',
            'messages',
            'created_messages'
        ])->find($id);
        
        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Product with id ' . $id . ' not found'
            ], 400);
        }

        return response()->json([
            'success' => true,
            'data' => $user
        ],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'User with id ' . $id . ' not found'
            ], 400);
        }
        $user->fill($request->all());
        if(isset($request->password)) {
            $user->password = bcrypt($request->password);
        }
        $updated = $user->save();

        if ($updated)
            return response()->json([
                'success' => true,
                'request' => $request->all()
            ],200);
        else
            return response()->json([
                'success' => false,
                'message' => 'User could not be updated'
            ], 500);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'User with id ' . $id . ' not found'
            ], 400);
        }

        if ($user->delete()) {
            return response()->json([
                'success' => true
            ],200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'User could not be deleted'
            ], 500);
        }
    }

}
