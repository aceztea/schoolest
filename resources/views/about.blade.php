@extends('layouts.app')

@section('content')
<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>About Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur laborum voluptates reiciendis ex perferendis rem odio, quo in quidem voluptatem voluptatum dignissimos doloribus, iure magni repellendus facilis alias modi quas, ab veniam! Asperiores, illum velit doloremque eaque unde veritatis earum! Quam dolorem obcaecati quo voluptas maxime et. Sed numquam mollitia in, est repellendus tempore dolorum voluptas aperiam aliquid quia sint cum nesciunt architecto porro esse perspiciatis velit atque dolor. Fugiat, esse doloremque. Ea laboriosam harum id reiciendis ad aspernatur, perferendis, aperiam, sunt ducimus quaerat repellat? Aut odio, porro tempore nostrum, reiciendis quidem provident totam quae corrupti aliquam distinctio possimus sapiente?</p>
                <p>Interesting?</p>
                <a href="{{ route('contact') }}" class="btn btn-success">Contact Us!</a>
            </div>
            <div class="col-md-5 offset-1">
                <h1 class="display-1">Schoolest</h1>
            </div>
        </div>
    </div>
</section>
@endsection
