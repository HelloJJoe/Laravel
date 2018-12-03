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
                <img class="img-fluid" src="../img/cb.png">
                <h2 class="section-heading">Comment Board</h2>
                <blockquote class="blockquote">                  
                  網頁開發入門作品
                </blockquote>
                <p>
                  <a href='http://hellojjoe.com/CommentBoard'>作品連結</a>
                </p>
                <p>
                  作品介紹：
                  此為網頁開發入門作品，練習前後端基礎操作、資料串接，以及部署網站。留言板有以下功能：
                  <ol>
                    <li>會員註冊、登入、登出功能</li>
                  
                    <li>留言板留言、子留言、分頁功能</li>
                  </ol>
                </p>
                <p>
                  學習目的：
                  <ol>
                    <li>熟悉前端HTML / CSS / Javascript操作</li>
                    <li>熟悉後端PHP、MySQL</li>
                    <li>熟悉操作ajax，前後端的資料串接</li>
                  </ol>
                </p>
                <p>
                  使用技術：
                  <ol>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>Javascript(jQuery/VanillaJS)</li>
                    <li>AJAX</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                  </ol>
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