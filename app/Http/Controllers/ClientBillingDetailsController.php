<?php

namespace App\Http\Controllers;

use App\ClientBillingDetails;
use Illuminate\Http\Request;

class ClientBillingDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if($request->page) {
            $model = new \App\ClientBillingDetails();
            $fields = $model->getTableColumns();
            $datas = \App\ClientBillingDetails::with([
                'client'
            ])
            ->where(function($query) use ($request) {
                if($request->search) {
                    foreach ($fields as $key => $field) {
                        $query->orWhere($field,'LIKE',"%$request->search%");    
                    }
                }
            });
            if($request->sort_order != '') {
                if(in_array($request->sort_field, $fields)) {
                    $datas->orderBy($request->sort_field, $request->sort_order == 'ascend' ? 'asc' : 'desc');
                }
            }
            $datas = $datas->paginate(50);

        } else {
            $datas = \App\ClientBillingDetails::orderBy('type','asc')->get();
        }


        return response()->json([
            'success' => true,
            'data' => $datas
        ]);
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
            'client_id' => 'required',
            'card_number' => 'required',
            'cart_type' => 'required',
            'exp_date' => 'required',
            'cardholder_name' => 'required',
            'cvv' => 'required'
        ]);
        
        $data = ClientBillingDetails::create($request->all())->save();
       
        return response()->json([
            'success' => true,
            'data' => $data,
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
        $datas = ClientBillingDetails::with([
            'client'
        ])->find($id);
        
        if (!$datas) {
            return response()->json([
                'success' => false,
                'message' => 'Product with id ' . $id . ' not found'
            ], 400);
        }

        return response()->json([
            'success' => true,
            'data' => $datas
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
        $datas = ClientBillingDetails::find($id);

        if (!$datas) {
            return response()->json([
                'success' => false,
                'message' => 'ClientBillingDetails with id ' . $id . ' not found'
            ], 400);
        }
        $datas->fill($request->all());
        $updated = $datas->save();

        if ($updated)
            return response()->json([
                'success' => true,
                'request' => $request->all()
            ],200);
        else
            return response()->json([
                'success' => false,
                'message' => 'ClientBillingDetails could not be updated'
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
        $datas = ClientBillingDetails::find($id);

        if (!$datas) {
            return response()->json([
                'success' => false,
                'message' => 'ClientBillingDetails with id ' . $id . ' not found'
            ], 400);
        }

        if ($datas->delete()) {
            return response()->json([
                'success' => true
            ],200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'ClientBillingDetails could not be deleted'
            ], 500);
        }
    }

}
