@section('teams')
<link href="{{URL::asset('assets/css/teams.css')}}" rel="stylesheet">
<section class="teamSection container-fluid">
    <div class="container">
        <br /><br />
        <center>
            <h2>{{ $teams['title'] }}</h2>
            <h5 class="text-center teamsBody">{{ $teams['body'] }}</h5>
            <span class="btn findOutMoreBtn"><small> {{ $teams['btnTxt'] }} </small></span>
        </center>
        <br/>
        <div class="d-flex justify-content-between">
            @foreach($teams['workers'] as $row)
            <div>
                <img src="{{ $row['img'] }}" />
                <p class="text-center"><b>{{ $row['name'] }}</b></p>
                <p class="text-center">{{ $row['ratings'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
