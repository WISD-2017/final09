@extends('layouts.product_top')
@section('title','會員觀看')
@section('bookcontent')
</br>
</br>
    <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{route('firstpage')}}">誠品書局</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('product.shopindex')}}">首頁
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">登入會員</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-lg-3">
            <h1 class="my-4">書籍資訊</h1>
            <div class="list-group">
                <h3 class="my-4">書籍類別</h3>
                @foreach($categorys as $category)
                    <a href="{{route('product.shoplist',$category->id)}}"
                       class="list-group-item">{{$category->category_name}}</a>
                @endforeach
            </div>
        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">
            @foreach($books as $book)
                <div class="card mt-4">
                    <img class="card-img-top img-fluid" src="{{$book->path}}"alt="">
                    <div class="card-body">
                        @endforeach
                        @foreach ($books as $book)
                            <p>書名{{$book->book_name}}</p>
                            <p>價格：${{$book->price}}</p>
                        @endforeach
                        書籍介紹：
                        @foreach($books as $book)
                            <p class="card-text">{{$book->text}}</p>
                        @endforeach
                    </div>
                </div>
                <!-- /.card -->

                <div class="card card-outline-secondary my-4">
                    <div class="card-header">
                        書籍資訊
                    </div>
                    <div class="card-body">
                        @foreach($books as $book)
                            <p class="card-text">ISBN:{{$book->ISBN}}</p>
                        @endforeach
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore,
                            similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat
                            laborum.
                            Sequi mollitia, necessitatibus quae sint natus.</p>
                        <small class="text-muted">Posted by Anonymous on 3/1/17</small>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore,
                            similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat
                            laborum.
                            Sequi mollitia, necessitatibus quae sint natus.</p>
                        <small class="text-muted">Posted by Anonymous on 3/1/17</small>
                        <hr>
                        <a href="#" class="btn btn-success">Leave a Review</a>
                    </div>
                </div>
                <!-- /.card -->

        </div>
        <!-- /.col-lg-9 -->

    </div>

</div>
<!-- /.container -->
@endsection