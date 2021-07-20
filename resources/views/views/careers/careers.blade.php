@section('career')
<link href="{{URL::asset('assets/css/career.css')}}" rel="stylesheet">
<section class="careerSection">
    <div class="container">
        <br /><br />
        <h2 class="text-center">{{ $careers['title'] }}</h2>
        <center>
            <span class="btn findOutMore"><small>{{ $careers['btnTitle'] }}</small></span>
        </center>
        <br/>
        <div class="d-flex justify-content-center">
            @foreach($careers['careers'] as $row)
            <div class="card shadow p-3 m-2" style="width:180px;">
                <h5 class="text-center">{{ $row }}</h5>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection