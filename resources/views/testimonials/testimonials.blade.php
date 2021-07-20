@section('testimonials')
<section class="testiSection container-fluid">
            <div class="container py-4">

                @foreach($testimonials as $row)
                <div class="row">
                    <div class="col-md-6 d-flex justify-content-center flex-column">
                        <div class="{{ $row['img'] }}"> </div>
                    </div>
                    <div class="col-md-6  d-flex justify-content-center flex-column">
                        <h5><b>{{ $row['title'] }}</b></h5>
                        <div class="d-flex justify-content-start">
                            @foreach(array_keys($row['metaData']) as $data)
                            <p class="p-2">Icon {{ $row['metaData'][$data] }}</p>
                            @endforeach
                        </div>
                        <p> {{ $row['body'] }} </p>
                        {{-- <div class="d-flex justify-content-between mt-5">
                            <div class="d-flex">
                                <img src="{{ $row['user']['img'] }}" class="userImg" />
                                <span class="userContext">
                                    <p>{{ $row['user']['name'] }}{{ $row['user']['job'] }}</p>
                                </span>
                            </div>
                            <a href="#seemore"><span class="btn readMoreBtn"><small>READ MORE</small></span></a>
                        </div> --}}
                    </div>
                </div>
                @endforeach
            </div>
        </section>
@endsection
