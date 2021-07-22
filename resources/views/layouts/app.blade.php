<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>VA Job Market</title>
        <link href="{{URL::asset('css/app.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <script src="{{URL::asset('js/app.js')}}"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>


        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        
        <style>


        .hide {
            display: none;
        }
        </style>
    </head>
    <body>
    <script>
        let token = localStorage.token;
        let userdata = localStorage.userdata ? JSON.parse(localStorage.userdata) : null; 

        function getData(url, then_function = () => {}, catch_function = () => {}) {
            axios.post(url,{
                headers: {
                    Authorization: "Bearer " + token
                }
            }).then(then_function).catch(catch_function);
        };
        
        function postData(url,data, then_function = () => {}, catch_function = () => {}) {
            axios.post(url, data,{
                headers: {
                    Authorization: "Bearer " + token
                }
            }).then(then_function).catch(catch_function);
        };

        function uploadImage(url,data, then_function = () => {}, catch_function = () => {}) {
            axios.put(url, data,{
                headers: {
                    Authorization: "Bearer " + token,
                    "Content-Type": "multipart/form-data"
                }
            }).then(then_function).catch(catch_function);
        };

        function updateData(url,data, then_function = () => {}, catch_function = () => {}) {
            axios.put(url, data,{
                headers: {
                    Authorization: "Bearer " + token
                }
            }).then(then_function).catch(catch_function);
        };

        function deleteData(url,data, then_function = () => {}, catch_function = () => {}) {
            axios.delete(url, data,{
                headers: {
                    Authorization: "Bearer " + token
                }
            }).then(then_function).catch(catch_function);
        };
    </script>

        @include('layouts.headers')

        <div style="position:relative;">
            @include('layouts.messenger')
            @yield('content')
            @yield('front')
            @yield('subs')
            @yield('media')
            @yield('career')
            @yield('teams')
            @yield('testimonials')
        </div>

        @include('layouts.footers')


    <script src="{{URL::asset('js/app.js')}}"></script>
    </body>
</html>
