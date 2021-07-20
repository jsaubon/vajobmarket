@section('front')
<link href="{{URL::asset('assets/css/front.css')}}" rel="stylesheet">
<section class=frontSection>
    <div class="container content-container">
        <div class="frontContent">
            <h1 class="text-light heroimg-text">{{$front['title']}}</h1>
            <p class="text-light heroimg-subtext">{{ $front['body'] }}</p>
            <button class="btn findOutHowBtn">{{ $front['btnTxt'] }}</button>
            <div class="frontForm shadow">
                <div class="form-container">
                    <input type="text" class="form-control search-form" placeholder="Start your search here"/>
                    <select class="form-control select-form">
                        <option class="others" value="">Select Category</option>
                        <option value="">Category 1</option>
                        <option value="">Category 2</option>
                        <option value="">Category 3</option>
                    </select>
                    <button class="btn-search"><i></i>SEARCH</button>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
