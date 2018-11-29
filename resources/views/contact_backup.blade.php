@extends('layout.master')
@section('title', 'Contact')
@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/contact-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>Contact Me</h1>
              <span class="subheading">Have questions? I have answers.</span>
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
            {{Form::open(['url'=>'/contact', 'method'=>'post'])}} 
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  {{ Form::label('Name', 'Name:') }}
                  {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name', 'required data-validation-required-message' => 'Please enter your name']) }}
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  {{ Form::label('Message', 'Message:') }}
                  {{ Form::textarea('message', null, ['class' => 'form-control', 'placeholder' => 'Message', 'required data-validation-required-message' => 'Please enter your message', 'rows' => 3])}}
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                {{ Form::submit('Send', ['class' => 'btn btn-primary']) }}
              </div>
                {{ Form::hidden('parent_id', 0) }}
            {{ Form::close() }}
          @else
            <a class="nav-link" href='{{ route('login') }}' style="color:grey">Guests? Please Login</a>
          @endauth
        </div>
      </div>
      <hr>
    </div>

    

    @include('comment.comment')
@endsection

  