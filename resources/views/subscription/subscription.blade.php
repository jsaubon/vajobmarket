@section('subs')
<section class="subsSection container-fluid">
    <div class="container-fluid h-50">
        <div class="row text-center">
            <div class="col col-md-6  ">
                {{-- <div class="text-center" style="width:500px;"> --}}
                    <div class="container py-3 h-100 d-flex flex-column justify-content-end">
                        <h4 class="text-light w-75 mx-auto ">{{ $subs['title'] }}</h4>
                        <hr class="bg-light " />
                        <p class=" w-50 mx-auto text-light">{{ $subs['body'] }}</p>
                        <button class="btn w-50 mx-auto text-light hiringProcessBtn">{{ $subs['btnTxt'] }}</button>
                    </div>
                {{-- </div> --}}
            </div>
            <div class=" col col-md-6 ">
                <div class="card p-5 m-4 shadow" style="border-radius: 20px;">
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
