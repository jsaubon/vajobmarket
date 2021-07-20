<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $faker = Faker\Factory::create();

        $sectors = [
            ['sector' => 'Virtual Assistant'],
            ['sector' => 'Appointment Setter'],
            ['sector' => 'Content Writer'],
            ['sector' => 'Credit Repair Assistant'],
            ['sector' => 'Customer Service Representative'],
            ['sector' => 'Digital Marketing Specialist'],
            ['sector' => 'Executive Assistant'],
            ['sector' => 'Finance & Accounting'],
            ['sector' => 'Graphic Designer'],
            ['sector' => 'Search Engine Optimization'],
            ['sector' => 'Senior Web Developer'],
            ['sector' => 'Social Media Manager'],
            ['sector' => 'Web Developer']
        ];
    
        $model_sectors = \App\Sector::insert($sectors);
    
        $job_types = [
            ['job_type' => 'FULLTIME'],
            ['job_type' => 'PARTTIME'],
            ['job_type' => 'FREELANCE'],
        ];
    
        $model_job_types = \App\JobType::insert($job_types);
    
        $users = [];
        $types = ['JobSeeker','Client'];
        $user_count = 50;
        for ($i=0; $i < $user_count; $i++) { 
    
            $users[] = [
                'firstname' => $faker->firstName,
                'middlename' => $faker->lastName,
                'lastname' => $faker->lastName,
                'email' => $faker->email,
                'password' => bcrypt('admin123'),
                'mobile_no' => $faker->phoneNumber,
                'phone_no' => $faker->phoneNumber,
                'type' => $types[rand(0,1)]
            ];
        }
    
        $model_users = \App\User::insert($users);
        
        $users = \App\User::where('type','Client')->get();
        $user_ids = array_column($users->toArray(),'id');
        $clients = [];
        foreach ($user_ids as $key => $id) {
            $clients[] = [
                'user_id' => $id,
                // 'date_of_birth' => $faker->company,
                'nationality' => $faker->name,
                'address1' => $faker->streetAddress,
                'address2' => $faker->secondaryAddress,
                'city' => $faker->city,
                'state' => $faker->state,
                'country' => $faker->country,
                'zip' => $faker->postcode
            ];
        }
    
        $model_clients = \App\Client::insert($clients);
    
        
        
        $clients = \App\Client::all();
        $client_ids = array_column($clients->toArray(),'id');
        $client_business_infos = [];
        foreach ($client_ids as $key => $id) {
            $client_business_infos[] = [
                'client_id' => $id,
                'business_name' => $faker->company,
                'business_owner_name' => $faker->name,
                'type_of_business' => array_column($sectors,'sector')[rand(0,12)],
                'address1' => $faker->streetAddress,
                'address2' => $faker->secondaryAddress,
                'city' => $faker->city,
                'state' => $faker->state,
                'country' => $faker->country,
                'zip' => $faker->postcode,
                'email' => $faker->email,
                'mobile_no' => $faker->phoneNumber,
                'phone_no' => $faker->phoneNumber,
                'business_description' => $faker->sentence(30),
                // 'business_photo' => $faker->name,
            ];
        }
        $model_client_business_infos = \App\ClientBusinessInfo::insert($client_business_infos);
    
    
    
    
        $client_job_posts = [];
        foreach ($client_ids as $key => $id) {
            for ($i=0; $i < rand(1,20); $i++) { 
                $sector = array_column($sectors, 'sector')[rand(0,12)];
                $job_title = 'Looking For '.$sector;
                $client_job_posts[] = [
                    'client_id' => $id,
                    'job_title' => $sector,
                    'job_description' => $faker->sentence(rand(10,20)),
                    'sector' => $sector,
                    'job_type' => array_column($job_types, 'job_type')[rand(0,2)],
                    'salary' => rand(4,15).'/hr',
                    // 'monthly_rate' => $faker->name,
                    // 'hourly_rate' => $faker->name,
                    'start_date' => '2021-01-01',
                    'end_date' => '2022-01-01',
                    'visits' => 0,
                ];
            }
        }
        // dd($client_job_posts);
        $model_client_job_posts = \App\ClientJobPost::insert($client_job_posts);
    
        $client_job_post_ids = \App\ClientJobPost::all()->toArray();
        $client_job_post_ids = array_column($client_job_post_ids, 'id');
        $required_skills = [];
        $profeciencies = [
            'Beginner',
            'Advanced',
            'Expert'
        ];
        foreach ($client_job_post_ids as $key => $id) {
            for ($i=0; $i < rand(1,3); $i++) { 
                $required_skills[] = [
                    'client_job_post_id' => $id,
                    'skill' => $faker->text,
                    'profeciency' => $profeciencies[rand(0,2)],
                ];
            }
        }





        $user_ids = \App\User::where('type','JobSeeker')->get()->toArray();
        $user_ids = array_column($user_ids,'id');
        $jobseekers = [];
        foreach ($user_ids as $key => $id) {
            $gender = ['Male','Female'];
            $jobseekers[] = [
                'user_id' => $id,
                // 'jobseeker_photo' => $faker->gender,
                'gender' => $gender[rand(0,1)],
                // 'date_of_birth' => $faker->gender,
                'nationality' => $faker->name,
                'address1' => $faker->streetAddress,
                'address2' => $faker->secondaryAddress,
                'city' => $faker->city,
                'state' => $faker->state,
                'country' => $faker->country,
                'zip' => $faker->postcode
            ];
        }
    
        $model_jobseekers = \App\JobSeeker::insert($jobseekers);


        $jobseekers = \App\JobSeeker::all()->toArray();
        $jobseeker_ids = array_column($jobseekers,'id');
        $educations = [];
        foreach ($jobseeker_ids as $key => $id) {
            for ($i=0; $i < rand(1,3); $i++) { 
                $educations[] = [
                    'jobseeker_id' => $id,
                    'name_of_school' => $faker->company,
                    'year_graduated' => rand(2005, 2020),
                    'course_graduated' => $faker->text,
                ];
            }
        }

        $model_educations = \App\JobSeekerEducation::insert($educations);
        
        $references = [];
        foreach ($jobseeker_ids as $key => $id) {
            for ($i=0; $i < rand(1,3); $i++) { 
                $references[] = [
                    'jobseeker_id' => $id,
                    'website' => $faker->text,
                    'link' => $faker->url,
                ];
            }
        }

        $model_references = \App\JobSeekerReference::insert($references);


        $professions = [];
        foreach ($jobseeker_ids as $key => $id) {
            for ($i=0; $i < rand(1,3); $i++) { 
                $professions[] = [
                    'jobseeker_id' => $id,
                    'job_title' => array_column($sectors,'sector')[rand(0,12)],
                    'availabilty' => '',
                    'salary' => rand(4,15).'/hr',
                    'skills_summary' => $faker->sentence(rand(2,20)),
                ];
            }
        }
        // dd($professions);
        $model_professions = \App\JobSeekerProfession::insert($professions);

        $languages = [];
        foreach ($jobseeker_ids as $key => $id) {
            for ($i=0; $i < rand(1,3); $i++) { 
                $languages[] = [
                    'jobseeker_id' => $id,
                    'language' => $faker->word,
                    'written_preffeciency' => $profeciencies[rand(0,2)],
                    'oral_preffeciency' => $profeciencies[rand(0,2)],
                ];
            }
        }

        $model_languages = \App\JobSeekerLanguage::insert($languages);
        
        
        $experiences = [];
        foreach ($jobseeker_ids as $key => $id) {
            for ($i=0; $i < rand(1,3); $i++) { 
                $experiences[] = [
                    'jobseeker_id' => $id,
                    'company_name' => $faker->company,
                    'job_description' => $faker->text,
                    'from_date' => $faker->date,
                    'to_date' => $faker->date,
                    'job_scope' => $faker->text,
                ];
            }
        }

        $model_experiences = \App\JobSeekerExperience::insert($experiences);

        $skills = [];
        foreach ($jobseeker_ids as $key => $id) {
            for ($i=0; $i < rand(1,3); $i++) { 
                $skills[] = [
                    'jobseeker_id' => $id,
                    'title' => $faker->text,
                    'experience' => $faker->text,
                    'prefeciency' => $profeciencies[rand(0,2)],
                    'description' => $faker->text,
                ];
            }
        }

        $model_skills = \App\JobSeekerSpecializedSkill::insert($skills);


        foreach ($users as $key => $user) {
            $comment = $user->comments()->create([
                'created_by' => rand(1,$user_count),
                'content' => $faker->sentence(20)
            ]);

            $likes = [];
            for ($i=0; $i < rand(1,40); $i++) { 
                $likes[] = [
                    'comment_id' => $comment->id,
                    'user_id' => rand(1,$user_count)
                ];
            }

            $model_likes = \App\CommentLike::insert($likes);
        }



        foreach ($clients as $key => $client) {
            $employees_count = rand(0,5);
            $employees = [];
            $statuses = ['Hired','Terminated','Applied','Dismissed','End of Contract','Shortlisted'];
            for ($i=0; $i < $employees_count; $i++) { 
                $employees[] = [
                    'client_id' => $client->id,
                    'jobseeker_id' => $jobseeker_ids[rand(0, count($jobseeker_ids))],
                    'employment_status' => $statuses[rand(0,5)],
                    // 'status' => '',
                    'salary' => rand(4,15).'/hr',
                    'working_hours' => rand(20,40).'hrs./Week',
                    'date_hired' => $faker->date,
                    'job_description' => $faker->sentence(50),
                    'responsibilities' => $faker->sentence(50),
                    'contract' => rand(1,4).'yr',
                ];
            }
        }
        
    }
}
