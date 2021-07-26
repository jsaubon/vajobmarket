@extends('layouts.app')

@section('content')
<link href="{{URL::asset('assets/css/pricing.css')}}" rel="stylesheet">
<section class="pricingSection">
    <div class="container">
        <div class="pricingContent">
            <h1 class="aboutTitle">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo!</h1>
            <br/>
            <button class="btn btnVideo p-2" style="width:400px">WATCH THE VIDEO AND FIND OUT HOW</button>
        </div>
    </div>
</section>
<section class="sectionNumTwo">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="card p-5 text-center cardShadow">
                    <h4>PRO ENTREPRENEUR PACKAGE</h4>
                    <h5>We'll help you find your skilled virtual staff to scale your business.</h5>
                    <br/>
                    <h1>$ <span style="font-size: 70px;"><b>99</b></span>/month</h1>
                    <br/>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem laborum illo quaerat incidunt in recusandae ad quam! Placeat dolor nesciunt magni fugiat odio.</p>
                    <button class="btn subscribeBtn"><b>SUBSCRIBE NOW</b></button>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="ml-5 mt-4">
                    <h4><b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero.</b></h4>
                    <br/>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, quod? Eum, modi eos in id fugit aperiam! Cupiditate est temporibus recusandae ullam esse nostrum deserunt voluptates ab accusamus natus reprehenderit doloribus ea sunt, sapiente vel repudiandae voluptatibus odio minus blanditiis.</p>
                    @foreach($checkList as $list)
                        <div>
                            <input class="mr-2" type="checkbox" checked />
                            <label>{{ $list }}</label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
