@extends('layouts.product_top')
@section('title','會員觀看')
@section('bookcontent')
<!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          </br>
          </br>
          <h1 class="my-4">商品列表</h1>
          <div class="list-group">
            <h3 class="my-4">書籍類別</h3>
            @foreach($categorys as $categorys)
            <a href="{{route('product.shoplist',$categorys->id)}}" class="list-group-item">{{$categorys->category_name}}</a>
            @endforeach
          </div>
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">
          <br/>
          <br/>
          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="/image/activity1.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="/image/activity2.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="/image/activity3.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="row">
            @foreach($books as $book)
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="{{route('product.shopitem',$book->id)}}"><img class="card-img-top" src="{{$book->path}}" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="{{route('product.shopitem',$book->id)}}">{{$book->book_name}}</a>
                  </h4>
                  <h5>${{$book->price}}</h5>
                      <a href="{{route('product.buyitem', ['id'=>$book->id])}}" class="btn btn-success pull-right" role="button">加入購物車</a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <!-- /.row -->
        </div>
        <!-- /.col-lg-9 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
@endsection