@extends('layout.master')
@section('title', 'Portfolio')
@section('content')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/portfolio.jpg')">
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

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">

        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase"></h2>
            <h3 class="section-subheading text-muted"></h3>
          </div>
        </div>
        <div class="row">

          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" href="{{ route('portfolio_cb') }}">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                </div>
              </div>
              <img class="img-fluid" src='img/cb.png' alt="">
            </a>
            <div class="portfolio-caption">
              <br>
              <h4>Comment Board</h4>
              <p class="text-muted"></p>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" href="{{ route('portfolio_pp') }}">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                </div>
              </div>
              <img class="img-fluid" src="img/pp.png" alt="">
            </a>
            <div class="portfolio-caption">
              <br>
              <h4>Personal Page</h4>
              <p class="text-muted"></p>
            </div>
          </div>

     

     

        </div>
      </div>
    </section>

    <hr>
@endsection