@extends('layouts.app')

@section('front')
    @include('front.front');
    @include('subscription.subscription');
    @include('media.media');
    @include('careers.careers');
    @include('teams.teams');
    @include('testimonials.testimonials');
@endsection