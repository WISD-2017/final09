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
            <form action="/admin/addproducklist" method="POST" role="form">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>標題</label>
                    <input name="book_name" class="form-control" placeholder="請輸入書籍標題">
                </div>
                <div class="form-group">
                    <label>內容</label>
                    <textarea name="text" class="form-control" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label>ISBN</label>
                    <textarea name="ISBN" class="form-control" rows="1"></textarea>
                </div>
                <div class="form-group">
                    <label>商品類別編號</label>
                    <textarea name="category_id" class="form-control" rows="1"></textarea>
                </div>
                <div class="form-group">
                    <label>價格</label>
                    <textarea name="price" class="form-control" rows="1"></textarea>
                </div>
                <div class="form-group">
                    <label>圖片檔名</label>
                    <textarea name="path" class="form-control" rows="1"></textarea>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-success">新增</button>
                </div>
            </form>
    </div>
@endsection