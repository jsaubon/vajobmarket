@section('subs')
<link href="{{URL::asset('assets/css/subscription.css')}}" rel="stylesheet">
<section class="subsSection">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="firstCol">
                    <div class="text-center" style="width:500px;">
                        <h4 class="text-light">{{ $subs['title'] }}</h4>
                        <hr class="bg-white" />
                        <p class="text-light">{{ $subs['body'] }}</p>
                        <button class="btn bg-danger p-4 text-light shadow hiringProcessBtn">{{ $subs['btnTxt'] }}</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card p-5 mt-4 shadow" style="border-radius: 20px;">
                    <b class="text-center">{{ $subs['cardTitle'] }}</b>
                    <h4 class="text-center">{{ $subs['cardSubtitle'] }}</h4>
                    <p class="text-center">{{ $subs['cardBody'] }}</p>
                    @foreach($subs['checkList'] as $list)
                        <span>
                            <input class="mr-2" type="checkbox" checked />
                            <label>{{ $list }}</label>
                        </span>
                    @endforeach
                    
                    <button class="btn learnBtn">{{ $subs['learnBtn'] }}</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection