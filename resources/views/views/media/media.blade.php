@section('media')
<link href="{{URL::asset('assets/css/media.css')}}" rel="stylesheet">
<section class="mediaSection">
    <div class="container">
        <div class="content">
            <br /><br /><br /><br /><br />
            <h1 class="text-center">{{ $media['title'] }}</h1>
            <button class="btn playIcon">
                Play icon here
            </button><br />
            <button class="btn findOutBtn">{{ $media['btnTitle'] }}</button>
        </div>
    </div>
</section>
@endsection