<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\ClientJobPost;
use Illuminate\Http\Request;

class ClientJobPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        if($request->page) {
            $model = new \App\ClientJobPost();
            $fields = $model->getTableColumns();
            $datas = \App\ClientJobPost::with([
                'client',
                'client.client_business_info',
            ])
            ->where(function($query) use ($request, $fields) {
                if($request->search) {
                    foreach ($fields as $key => $field) {
                        $query->orWhere($field,'LIKE',"%$request->search%");    
                    }
                }
            });
            $datas->where(\DB::raw('DATE(start_date)'),'<=',date('Y-m-d'));
            $datas->where(\DB::raw('DATE(end_date)'),'>=',date('Y-m-d'));
            if($request->sort_order != '') {
                if(in_array($request->sort_field, $fields)) {
                    $datas->orderBy($request->sort_field, $request->sort_order == 'ascend' ? 'asc' : 'desc');
                }
            }
            $datas = $datas->paginate(50);

        } else {
            $datas = \App\ClientJobPost::orderBy('id','asc')->get();
        }

        return response()->json([
            'success' => true,
            'data' => $datas,
            'page_count' => $request->page ? $datas->count() : 0
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
        
        $data = ClientJobPost::create($request->all());
       
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
        $data = ClientJobPost::with([
            'client',
            'client.client_business_info',
            'client_job_post_required_skills',
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
        $data = ClientJobPost::find($id);

        if (!$data) {
            return response()->json([
                'success' => false,
                'message' => 'ClientJobPost with id ' . $id . ' not found'
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
                'message' => 'ClientJobPost could not be updated'
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
        $data = ClientJobPost::find($id);

        if (!$data) {
            return response()->json([
                'success' => false,
                'message' => 'ClientJobPost with id ' . $id . ' not found'
            ], 400);
        }

        if ($data->delete()) {
            return response()->json([
                'success' => true
            ],200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'ClientJobPost could not be deleted'
            ], 500);
        }
    }

    public function visitIncrement(Request $request) {
        $job_id = $request->job_id;
        $client_job_post = \App\ClientJobPost::find($job_id);

        if($client_job_post) {
            $client_job_post->visits = $client_job_post->visits + 1;
            $client_job_post->save();

            return response()->json([
                'success' => true
            ]);
        }
    }

}


