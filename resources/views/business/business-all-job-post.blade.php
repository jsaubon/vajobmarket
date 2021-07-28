@extends('layouts.blank-layout')

@section('content')

<div class="user-dashboard h-auto">

    <div class="container fullwidth">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"> <a href="/DashboardBusiness">Dashboard</a></li>
            <li class="breadcrumb-item" aria-current="page">All Job Post</li>
        </ol>
    </nav>

    <div class="wrapper">
        <table class="display tbl_bo_job_posts_all" id="myDataTable-AllJobPost">
            <thead>
                <tr>
                <th class="text-center" scope="col">Job Posted</th>
                <th class="text-center" scope="col">Application</th>
                <th class="text-center" scope="col">Visits</th>
                <th class="text-center" scope="col">Date Posted</th>
                <th class="text-center" scope="col">Date End</th>
                <th class="text-center" scope="col">Actions</th>
                </tr>
            </thead>

            <tbody>

            </tbody>

        </table>
    </div>
    </div>

</div>


<script>
if(!token) {
    window.location.href = '/';
}
// $(document).ready(function() {
    getData('/api/Client/'+userdata.client.id, ({data:res}) => {
        if(res.success) {
            console.log('ClientJobPost',res.data);
            let client_job_posts = res.data.client_job_posts;
            client_job_posts.map((post, key) => {
                $('.tbl_bo_job_posts_all').find('tbody').append('\
                    <tr>\
                        <td>'+post.job_title+'</td>\
                        <td class="text-center">'+post.applicants.length+'</td>\
                        <td class="text-center">'+post.visits+'</td>\
                        <td class="text-center">'+post.start_date+'</td>\
                        <td class="text-center">'+post.start_date+'</td>\
                        <td class="text-center">A1 A2 A3</td>\
                    </tr>\
                ');
            });
        }
    });
// });
</script>

@endsection
