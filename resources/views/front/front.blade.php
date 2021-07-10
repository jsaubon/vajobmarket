@section('front')
<link href="{{URL::asset('assets/css/front.css')}}" rel="stylesheet">
<section class=frontSection>
    <div class="container">
        <div class="frontContent">
            <h1 class="text-light">{{$front['title']}}</h1>
            <p class="text-light">{{ $front['body'] }}</p>
            <button class="btn findOutHowBtn">{{ $front['btnTxt'] }}</button>
            <div class="frontForm">
                <div class="d-flex p-4 justify-content-around">
                    <input type="text" class="form-control" placeholder="Start your search here"/>
                    <select class="form-control">
                        <option value="">Select Category</option>
                        <option value="">Category 1</option>
                        <option value="">Category 2</option>
                        <option value="">Category 3</option>
                    </select>
                    <button class="btn btn-primary">SEARCH</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection