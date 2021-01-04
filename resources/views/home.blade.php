@extends('layouts.app')

@section('content')
<section class="hero" style="background-image: linear-gradient(to right, rgba(3, 0, 8, 0.692), rgba(3, 0, 8, 0.5)),url({{asset('/storage/images/hero/hero_school.jpg')}});background-position: center center; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <div class="row justify-content-center align-items-center text-center text-white" style="height: 92vh">
            <div class="col-md-8">
                <h1>Schoolest</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima inventore eius totam ipsum quidem eveniet, dolorem qui, temporibus mollitia eligendi cum laboriosam earum quo labore animi, reiciendis veritatis? Consectetur, illo.</p>
                <a href="{{ route('about') }}" class="btn btn-light font-weight-bold">About Us</a>
            </div>
        </div>
    </div>
</section>
@endsection
