@section('testimonials')
<link href="{{URL::asset('assets/css/testimonials.css')}}" rel="stylesheet">
<section class="testiSection">
            <div class="container">
                <br /><br />
                @foreach($testimonials as $row)
                <div class="row">
                    <div class="col-sm-6">
                        <img src="{{ $row['img'] }}"
                            class="bgImg"
                        />
                    </div>
                    <div class="col-sm-6">
                        <h5><b>{{ $row['title'] }}</b></h5>
                        <div class="d-flex justify-content-start">
                            @foreach(array_keys($row['metaData']) as $data)
                            <p class="p-2">Icon {{ $row['metaData'][$data] }}</p>
                            @endforeach
                        </div>
                        <p> {{ $row['body'] }} </p>
                        <div class="d-flex justify-content-between mt-5">
                            <div class="d-flex">
                                <img src="{{ $row['user']['img'] }}" class="userImg" />
                                <span class="userContext">
                                    <p>{{ $row['user']['name'] }}{{ $row['user']['job'] }}</p>
                                </span>
                            </div>
                            <a href="#seemore"><span class="btn readMoreBtn"><small>READ MORE</small></span></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
@endsection