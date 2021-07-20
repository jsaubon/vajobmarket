<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\JobSeekerEducation;
use Illuminate\Http\Request;

class JobSeekerEducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if($request->page) {
            $model = new \App\JobSeekerEducation();
            $fields = $model->getTableColumns();
            $datas = \App\JobSeekerEducation::with([
                'jobseeker'
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
            $datas = \App\JobSeekerEducation::orderBy('type','asc')->get();
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
        
        $data = JobSeekerEducation::create($request->all())->save();
       
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
        $data = JobSeekerEducation::with([
            'jobseeker'
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
        $data = JobSeekerEducation::find($id);

        if (!$data) {
            return response()->json([
                'success' => false,
                'message' => 'JobSeekerEducation with id ' . $id . ' not found'
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
                'message' => 'JobSeekerEducation could not be updated'
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
        $data = JobSeekerEducation::find($id);

        if (!$data) {
            return response()->json([
                'success' => false,
                'message' => 'JobSeekerEducation with id ' . $id . ' not found'
            ], 400);
        }

        if ($data->delete()) {
            return response()->json([
                'success' => true
            ],200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'JobSeekerEducation could not be deleted'
            ], 500);
        }
    }
}
