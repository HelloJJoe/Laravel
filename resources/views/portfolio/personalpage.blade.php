@extends('layout.master')
@section('title', 'Portfolio')
@section('content')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('../img/portfolio.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>Portfolio</h1>

              </form>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-body">
                <img class="img-fluid" src="../img/pp.png">
                <h2 class="section-heading">Personal Page</h2>
                <blockquote class="blockquote">               
                  後端框架Laravel實作
                </blockquote>
                <p>
                  <a href='http://hellojjoe.com/'>作品連結</a>
                </p>
                <p>
                  作品介紹：
                </p>
                <p>
                  用後端框架Laravel重構之前的作品comment board，並且規劃成個人網頁
                </p>
                <p>
                  學習目的：
                  <ul>
                    <li>熟悉後端框架Laravel</li>
                  </ul>
                </p>
                <p>
                  使用技術：
                  <ul>
                    <li>Laravel</li>
                  </ul>
                </p>
              </div>
            </div>
            <br>
            <!-- Pager -->
            <div class="clearfix">
              <a class="btn btn-primary float-right" href="{{ route('portfolio') }}">Previous Page &rarr;</a>
            </div>
          </div>
        </div>
      </div>
    <hr>
@endsection