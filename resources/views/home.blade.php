@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <img src="https://www.gettyimages.de/gi-resources/images/500px/983794168.jpg" style="width: 15rem; height:15rem" class="rounded-circle">
            </div>
            <div class="col-9 pt-5">
                <div>
                    <h1>{{$user->username}}</h1>
                </div>
                <div class="d-flex">
                    <div class="pe-3 pt-2"><strong>153</strong> posts</div>
                    <div class="pe-3 pt-2"><strong>23K</strong> followers</div>
                    <div class="pe-3 pt-2"><strong>212</strong> following</div>
                </div>
                <div class="pt-4 fw-bold">{{$user->profile->title}}</div>
                <div>{{$user->profile->description}}</div>
                <div><a class="text-decoration-none color-black" style="color:rgb(0, 109, 149)"
                        href="#">{{$user->profile->url}}</a></div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-4 ">
                <img src="https://codetheweb.blog/assets/img/posts/css-advanced-background-images/cover.jpg"class="w-100 h-100">
            </div>
            <div class="col-4">
                <img src="https://www.asiapowerforum.com/wp-content/uploads/2014/10/background-img-slider.jpg" class="w-100 h-100">
            </div>
            <div class="col-4">
                <img src="https://miro.medium.com/max/1400/1*dwLGnkgwmMSU7XN7Yojo1g.png"class="w-100 h-100">
            </div>
        </div>
    </div>
@endsection
