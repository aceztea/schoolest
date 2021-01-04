@extends('layouts.app')

@section('content')
<section class="contact">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6">
                <h2>Contact Us</h2>
                <form action="">
                    <div class="form-group row">
                        <label for="nama" class="col-md-2 col-form-label">Nama</label>
                        <div class="col-md-10">
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Fullname">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-md-2 col-form-label">email</label>
                        <div class="col-md-10">
                            <input type="email" name="email" id="email" class="form-control" placeholder="youremaiL@mail.com">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telephone" class="col-md-2 col-form-label">Phone Number</label>
                        <div class="col-md-10">
                            <input type="tel" name="telephone" id="telephone" class="form-control" placeholder="08123456789">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="message" class="col-md-2 col-form-label">Message</label>
                        <div class="col-md-10">
                            <textarea class="form-control" id="message" rows="3" placeholder="your feedback"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-5 offset-1">
                <h1 class="display-1">Schoolest</h1>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <p>&copy; {{ date('Y', time()) }} Schoolest Academy.</p>
            </div>
        </div>
    </div>
</footer>
@endsection
