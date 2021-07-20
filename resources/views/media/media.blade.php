@section('media')
<link href="{{URL::asset('assets/css/media.css')}}" rel="stylesheet">
<section class="mediaSection">
    <div class="container h-100 d-flex flex-column justify-content-center">
        <div class=" text-center">
            <h1 class="content">{{ $media['title'] }}</h1>
            <button class="playIcon"></button><br />
            <button class="btn findOutBtn">{{ $media['btnTitle'] }}</button>
        </div>
    </div>
</section>
@endsection
