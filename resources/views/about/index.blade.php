@extends('layouts.app')

@section('content')
<link href="{{URL::asset('assets/css/about.css')}}" rel="stylesheet">
<section class="aboutSection">
    <div class="container">
        <div class="card p-4 cardSize text-start">
            <h4><b>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat!</b></h4>
            <br/>
            <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ab quasi maiores dolorem sapiente saepe earum, cupiditate veniam rerum repellendus dolore quo facere nobis, repudiandae error asperiores cum vitae natus quia nostrum id voluptate voluptatum. Tempore consectetur sapiente molestias adipisci. Voluptatibus quos soluta corporis ipsam exercitationem iusto repellat repudiandae reprehenderit?</small>
            <br/>
            <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, possimus fuga ex iusto aliquam esse ab iure officia harum similique rerum voluptatibus assumenda corporis voluptates provident placeat, tenetur atque enim illum, expedita praesentium. Possimus distinctio, facere ipsa, porro eaque labore consectetur ullam nesciunt, debitis laborum voluptatum voluptas animi beatae corporis!</small>
            <br/>
            <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae consequatur repudiandae voluptatum labore obcaecati fugiat. Eaque earum, voluptatum perspiciatis rem ipsum iure neque error, corporis dolorem corrupti consequuntur ipsam porro explicabo magnam repudiandae adipisci consectetur. Nesciunt tempore voluptatem illum tempora fugit, atque deserunt itaque enim, facere reiciendis officiis. Ex, saepe?</small>
            <div class="d-flex justify-content-end">
            <img src="nothing here" alt="about us" style="border: 1px solid #000"/>
            </div>
        </div>    
    </div>
</section>
<section class="about2section">
    <div class="container">
        <div class="row mt-5 lowtext">
            <div class="col-sm-6">
                <h2 class="text-right"><b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, alias!</b></h2>
            </div>
            <div class="col-sm-6">
                <div class="ml-5 text-justify">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae minima ab itaque ad cumque laudantium facilis provident inventore fugiat pariatur excepturi nam aut ratione eum molestiae numquam dolorum ipsam obcaecati, esse amet quasi tenetur quaerat? Qui neque necessitatibus enim consectetur, quam aliquam illo, optio quod possimus sit magnam fuga rem?</p>
                    <p><b>1.) Lorem ipsum dolor sit amet.</b></p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae minima ab itaque ad cumque laudantium facilis provident inventore fugiat pariatur excepturi nam aut ratione eum molestiae numquam dolorum ipsam obcaecati, esse amet quasi tenetur quaerat? Qui neque necessitatibus enim consectetur, quam aliquam illo, optio quod possimus sit magnam fuga rem?</p>
                    <p><b>1.) Lorem ipsum dolor sit amet.</b></p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae minima ab itaque ad cumque laudantium facilis provident inventore fugiat pariatur excepturi nam aut ratione eum molestiae numquam dolorum ipsam obcaecati, esse amet quasi tenetur quaerat? Qui neque necessitatibus enim consectetur, quam aliquam illo, optio quod possimus sit magnam fuga rem?</p>
                    <p><b>1.) Lorem ipsum dolor sit amet.</b></p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae minima ab itaque ad cumque laudantium facilis provident inventore fugiat pariatur excepturi nam aut ratione eum molestiae numquam dolorum ipsam obcaecati, esse amet quasi tenetur quaerat? Qui neque necessitatibus enim consectetur, quam aliquam illo, optio quod possimus sit magnam fuga rem?</p>
                </div>
            </div>
            <div class="card p-4 mt-5 mb-5">
                <div class="row">
                    <div class="col-sm-6">

                    </div>
                    <div class="col-sm-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem quos repellendus tenetur quod beatae voluptatum debitis nesciunt vel delectus similique?</p>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</section>
<section class="servicesSection">
    <div class="container">
        <div class="text-center">
            <h1><b>OUR SERVICES</b></h1>
            <div class="d-flex justify-content-center">
                <p style="width:500px;" class="lowtext">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum nobis pariatur reprehenderit, consectetur nemo temporibus.</p>
            </div>
            <div class="d-flex justify-content-between">
                @foreach($services as $row)
                <div class="card shadow p-3 m-2 lowtext" style="width:180px;">
                    <h5 class="text-center"><b>{{ $row['title'] }}</b></h5>
                    <p>{{ $row['desc'] }}</p>
                    <a href="{{ $row['link'] }}" class="btn btn-primary">
                        Learn more
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection