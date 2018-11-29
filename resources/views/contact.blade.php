@extends('layout.master_backend')
@section('title', 'Contact')
@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/backup.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              @guest
                <h1>Contact Me</h1>
                <span class="subheading">Have questions? I have answers.</span>
              @else
                <h1>Hi, {{ $user->username}}</h1>
                <span class="subheading">Welcome To Leave Your Message</span>
              @endguest
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-s-8 col-md-10 mx-auto">
          <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
          @auth
            <form method="POST" action="{{ route('contact') }}">
                @csrf
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label for="name">Name:</label>
                  <input type='text' name='name' class='form-control', placeholder="Name", required data-validation-required-message='Please enter your name' />
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label for="Message">Message:</label>
                  <textarea name='message' class='form-control', placeholder="Message", required data-validation-required-message='Please enter your message' rows=3 ></textarea>          
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary pull-right">
                  Send
                </button>
              </div>
                <input type='hidden' name='parent_id' value=0 />
            </form>
          @else
            <a class="nav-link" href='{{ route('login') }}' style="color:grey">Guests? Please Login</a>
          @endauth
        </div>
      </div>
      <hr>
    </div>
    @include('comment.comment')
@endsection






  