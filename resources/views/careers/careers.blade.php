@section('career')
<section class="careerSection container-fluid">
    <div class="container h-100">
        <br /><br />
        <h2 class="text-center">{{ $careers['title'] }}</h2>
        <center>
            <span class="btn findOutMore mt-3"><small>{{ $careers['btnTitle'] }}</small></span>
        </center>
        <br/>
        <div class="container mt-4">
               <div class="row d-flex ">
            @foreach($careers['careers'] as $row)
            <div class="col-md-2 career-margin">
                <div class="card shadow h-100 py-2 mx-4 carrer-box" style="width:180px;">
                    <div class="my-4 img-career-container{{ $row['img'] }}"></div>
                    <h5 class="pb-4 text-center">{{ $row['name'] }}</h5>
                </div>
            </div>
            @endforeach
        </div>
        </div>
    </div>
</section>
@endsection
