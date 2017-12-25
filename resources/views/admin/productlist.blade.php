@extends('admin.layout.master')
@section('title','書籍觀看')
@section('content')
    <div class='container'>
        @if(count($books) == 0)
            <p class="text-center">
                沒有任何書籍
            </p>
        @endif
        @foreach ($books as $books)
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="container-fluid" style="padding:0;">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 style="margin-top:0;">{{ $books->book_name }}</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 text-right">
                                進貨日期:
                                {{ $books->created_at->toDateString() }}
                            </div>
                        </div>
                        <hr style="margin:10px 0;" />
                        <div class="row">
                            <div class="col-md-12">
                                商品庫存:
                                {{ $books->inventory }}
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px;">
                            <div class="col-md-12">
                                    <a href="{{route('books.destroy',['post'=>$books->id]) }}" class="btn btn-xs btn-danger">產品下架</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
            <br>
            <a href="{{route('books.add')}}" class="btn btn-xs btn-danger">新增資料</a>
    </div>
@endsection