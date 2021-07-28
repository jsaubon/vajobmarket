@extends('layouts.app')

@section('content')

<section class="aboutSection-1">
    <div class="container-fluid text-center">
        <button class="playIcon"></button>
    </div>
</section>
<section class="about2section-2">
    <div class="container-fluid">
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
            <div class="card shadow p-4 mt-5 mb-5">
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

<section class="aboutSection-3 mt-5 mb-5">
    <div class="container-fluid">
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

<section class="aboutSection-4">
    <div class="container-fluid">
        <br/>
        <br/>
        <br/>
        <div class="row">
            <div class="col-sm-6">
                <div class="p-5 card-css">
                    <h1 class="text-center"><b>OUR GOALS</b></h1>
                    <h5 class="lowtext text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos minus soluta libero hic iusto blanditiis nulla animi eos repudiandae suscipit harum iste adipisci, similique laborum et laudantium. Sapiente iusto vel aliquid praesentium distinctio! Nostrum reiciendis porro praesentium esse, officiis adipisci possimus, quis soluta molestiae saepe est fugit quo ex pariatur!
                    </h5>
                    <hr/>
                    <h1 class="text-center"><b>THE VISION</b></h1>
                    <h5 class="lowtext text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nobis officiis fugit ad earum iusto rem rerum eligendi aliquam voluptas suscipit voluptates perferendis, quibusdam vitae atque esse maxime recusandae quisquam autem, sed obcaecati. Voluptatem adipisci neque blanditiis cum illo sunt asperiores, nisi alias, tempora aliquid labore fugit tempore debitis doloribus.
                    </h5>
                    <hr/>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="aboutSection-5">
    <div class="container-fluid">
        <br/>
        <br/>
        <br/>
        <div class="row">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6">
                <div class="p-5 card-css">
                    <h3 class="text-center text-bold">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto, aliquid?</h3>
                    <br/>
                    <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero iusto quas provident dolore amet dicta deserunt et rem mollitia, natus dolor quae ab nesciunt sunt vel cum esse facere quibusdam. Esse necessitatibus natus quidem cupiditate, dolores quas. Nisi illo illum inventore temporibus cumque quo est in, incidunt aut perspiciatis corporis rerum sit aliquam impedit provident saepe accusantium totam, vel esse. Quidem nobis odit eveniet pariatur tenetur rem assumenda molestiae aut?
                    </p>
                    <br/>
                    <b>KENN COLLIER</b><br/>
                    <small>Chief Executive Officer</small>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
