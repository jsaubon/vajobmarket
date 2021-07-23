@extends('layouts.blank-layout')

@section('content')

<div class="user-dashboard">

    <div class="container fullwidth">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"> <a href="#">Dashboard</a></li>
            <li class="breadcrumb-item" aria-current="page">All Job Post</li>
        </ol>
    </nav>


        <table class="table">
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

                <tr>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                    <td class="text-center">25</td>
                    <td class="text-center">123</td>
                    <td class="text-center">April 20, 2021</td>
                    <td class="text-center">May 20, 2021</td>
                    <td class="text-center">A1 A2 A3</td>
                </tr>

            </tbody>

        </table>
    </div>

</div>

@endsection
