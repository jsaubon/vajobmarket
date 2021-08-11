<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\JobSeeker;
use Illuminate\Http\Request;

class JobSeekerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index(Request $request) {
        if($request->page) {
            $model = new \App\JobSeeker();
            $fields = $model->getTableColumns();
            $fields[] = \DB::raw('CONCAT(users.firstname, " ", users.lastname)');
            $fields[] = 'email';
            $fields[] = 'job_seeker_professions.job_title';
            
            $exclude_fields = ['id','created_at','updated_at'];

            $datas = \App\JobSeeker::select([
                    \DB::raw('CONCAT(users.firstname, " ", users.lastname) as `name`'),
                    \DB::raw('users.email'),
                    \DB::raw('job_seekers.*'),
                    \DB::raw('job_seeker_professions.job_title'),
                    \DB::raw('job_seeker_professions.skills_summary'),
            ])
            ->with([
                'user',
                'client_employees.employee_monitors',
                'client_employees.client_job_post',
                'jobseeker_educations',
                'jobseeker_experiences',
                'jobseeker_languages',
                'jobseeker_profession',
                'jobseeker_references',
                'jobseeker_specialized_skills',
            ])
            ->join('users','users.id','=','job_seekers.user_id')
            ->join('job_seeker_professions','job_seeker_professions.jobseeker_id','=','job_seekers.id')
            ->where(function($query) use ($request, $fields,$exclude_fields) {
                if($request->search) {
                    foreach ($fields as $key => $field) {
                        if(!in_array($field,$exclude_fields)) {
                            $query->orWhere($field,'LIKE',"%$request->search%");    
                        }
                        
                    }
                }
            })
            ->groupBy('job_seekers.id');
            if($request->sort_order != '') {
                if(in_array($request->sort_field, $fields)) {
                    $datas->orderBy($request->sort_field, $request->sort_order == 'ascend' ? 'asc' : 'desc');
                }
            }
            $datas = $datas->paginate(50);

        } else {
            $datas = \App\JobSeeker::orderBy('id','asc')->get();
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
            'user_id' => 'required'
        ]);
        
        $data = JobSeeker::updateOrCreate(['user_id' => $request->user_id],$request->all());
        $data = JobSeeker::where('user_id',$request->user_id)->first();
       
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
        $data = JobSeeker::with([
            'user',
            'user.comments.created_by.client.client_business_info',
            'client_employees.employee_monitors',
            'client_employees.client_job_post.client.client_business_info',
            'jobseeker_educations',
            'jobseeker_experiences',
            'jobseeker_languages',
            'jobseeker_profession',
            'jobseeker_references',
            'jobseeker_specialized_skills',
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
            $data = JobSeeker::where('id',$id)->first();
            if(!$data) {
                $data = new JobSeeker();
            }
            
            //Display File Name
            $file_name = time().'.jpg';
            //Move Uploaded File
            $destinationPath = 'public/'.$file_name;
            \Storage::disk('local')->put($destinationPath, base64_decode($request->logo));
            
            $data->jobseeker_photo = $file_name;
            $data->save();
            return response()->json([
                'success' => true,
                'data' => $data
            ]);
        }



        $data = JobSeeker::find($id);

        if (!$data) {
            return response()->json([
                'success' => false,
                'message' => 'JobSeeker with id ' . $id . ' not found'
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
                'message' => 'JobSeeker could not be updated'
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
        $data = JobSeeker::find($id);

        if (!$data) {
            return response()->json([
                'success' => false,
                'message' => 'JobSeeker with id ' . $id . ' not found'
            ], 400);
        }

        if ($data->delete()) {
            return response()->json([
                'success' => true
            ],200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'JobSeeker could not be deleted'
            ], 500);
        }
    }
}
