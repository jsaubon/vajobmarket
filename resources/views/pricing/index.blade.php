@extends('layouts.app')

@section('content')
<section class="pricingSection-1">
    <div class="container-fluid">

        <div class="col-md-6">
            <h2>Exceptuer sint occeaecat cupidatat non proident, sunt in culpa qui</h2>

            <button class="btn-foh">
                WATCH THE VIDEO AND FIND OUT HOW
            </button>

        </div>

        <div class="col-md-6">

        </div>

    </div>
</section>
<section class="pricingSection-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow text-center">
                    <h2>PRO ENTREPRENEUR PACKAGE</h2>
                    <p>We'll help you find your skilled virtual staff to scale your business.</p>
   
                    <h2>$ <span style="font-size: 70px;"><b>99</b></span>/month</h2>
     
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem laborum illo quaerat incidunt in recusandae ad quam! Placeat dolor nesciunt magni fugiat odio.</p>

                    <button class="btn-learn"><b>SUBSCRIBE NOW</b></button>
                </div>
            </div>

            <div class="col-md-6">
                <div class="rightColumn">
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
