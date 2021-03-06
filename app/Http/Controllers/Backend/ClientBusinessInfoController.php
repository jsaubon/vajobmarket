<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\ClientBusinessInfo;
use Illuminate\Http\Request;

class ClientBusinessInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index(Request $request) {
        if($request->page) {
            $model = new \App\ClientBusinessInfo();
            $fields = $model->getTableColumns();
            $datas = \App\ClientBusinessInfo::with([
                'client'
            ])
            ->where(function($query) use ($request, $fields) {
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
            $datas = \App\ClientBusinessInfo::orderBy('type','asc')->get();
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
            'client_id' => 'required'
        ]);
        
        $data = ClientBusinessInfo::updateOrCreate(['client_id'=> $request->client_id],$request->all())->save();
       
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
        $data = ClientBusinessInfo::with([
            'client'
        ])->find($id);
        
        if (!$data) {
            return response()->json([
                'success' => false,
                'message' => 'Product with id ' . $id . ' not found'
            ], 400);
        }

        return response()->json([
            'success' => true,
            'data' => $data
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
        
        if($request->logo) {
            $data = ClientBusinessInfo::where('client_id',$id)->first();
            if(!$data) {
                $data = new ClientBusinessInfo();
            }
            
            //Display File Name
            $file_name = time().'.jpg';
            //Move Uploaded File
            $destinationPath = 'public/'.$file_name;
            \Storage::disk('local')->put($destinationPath, base64_decode($request->logo));
            
            $data->client_id = $id;
            $data->business_logo = $file_name;
            $data->save();
            return response()->json([
                'success' => true,
                'data' => $data
            ]);
        }


        $data = ClientBusinessInfo::find($id);
        

        if (!$data) {
            return response()->json([
                'success' => false,
                'message' => 'ClientBusinessInfo with id ' . $id . ' not found'
            ], 400);
        }
        $data->fill($request->all());
        $updated = $data->save();

        if ($updated)
            return response()->json([
                'success' => true,
                'request' => $request->all()
            ],200);
        else
            return response()->json([
                'success' => false,
                'message' => 'ClientBusinessInfo could not be updated'
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
        $data = ClientBusinessInfo::find($id);

        if (!$data) {
            return response()->json([
                'success' => false,
                'message' => 'ClientBusinessInfo with id ' . $id . ' not found'
            ], 400);
        }

        if ($data->delete()) {
            return response()->json([
                'success' => true
            ],200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'ClientBusinessInfo could not be deleted'
            ], 500);
        }
    }
}
