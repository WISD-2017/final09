@extends('layouts.product_top')
@section('title','會員觀看')
@section('bookcontent')
</br>
</br>
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
                            <p>書名：{{$book->book_name}}</p>
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