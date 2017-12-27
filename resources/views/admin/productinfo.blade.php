@extends('admin.layout.master')
@section('title','書籍修改')
@section('content')
    <div class='container'>
        @foreach ($books as $books)
            <form action="/admin/fixproductlist/{{$books->id}}" method="POST" role="form">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="form-group">
                    <label>標題：</label>
                    <input name="book_name" class="form-control" placeholder="請輸入文章標題" value="{{$books->book_name}}">
                </div>
                <div class="form-group">
                    <label>存貨：</label>
                    <textarea name="inventory" class="form-control" rows="1">{{$books->inventory}}</textarea>
                </div>
                <div class="form-group">
                    <label>ISBN：</label>
                    <textarea name="ISBN" class="form-control" rows="1">{{$books->ISBN}}</textarea>
                </div>
                <div class="form-group">
                    <label>類別編號：</label>
                    <textarea name="category_id" class="form-control" rows="1">{{$books->category_id}}</textarea>
                </div>
                <div class="form-group">
                    <label>內容：</label>
                    <textarea name="text" class="form-control" rows="3">{{$books->text}}</textarea>
                </div>
                <div class="form-group">
                    <label>價格：</label>
                    <textarea name="price" class="form-control" rows="1">{{$books->price}}</textarea>
                </div>
                <div class="form-group">
                    <label>圖片：</label>
                    <textarea name="path" class="form-control" rows="1">{{$books->path}}</textarea>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-success">修改完成</button>
                </div>
            </form>

        @endforeach
    </div>
@endsection