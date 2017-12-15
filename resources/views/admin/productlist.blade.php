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
                                <h1 style="margin-top:0;">{{ $books->title }}</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                @if($books->orderType!=null)
                                    <span class="badge" style="margin-left:10px;">{{ $books->orderType->name }}</span>
                                @endif
                            </div>
                            <div class="col-md-4 text-right">
                                {{ $books->created_at->toDateString() }}
                            </div>
                        </div>
                        <hr style="margin:10px 0;" />
                        <div class="row">
                            <div class="col-md-12" style="height:100px;overflow:hidden;">
                                {{ $books->content }}
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px;">
                            <div class="col-md-8">
                                @if(Auth::check())
                                    <form method="ORDER" action="{{ route('order.destroy',['post'=>$books->id]) }}">
                                            <span style="padding-left: 10px;">
                                                <a class="btn btn-xs btn-primary" href="{{ route('order.show',['order'=>$books->id]) }}">
                                                    <i class="glyphicon glyphicon-pencil"></i>
                                                    <span style="padding-left: 5px;">觀看書籍資訊</span>
                                                </a>
                                                {{ csrf_field() }}
                                                <input type="hidden" name="_method" value="DELETE" />
                                                <button type="submit" class="btn btn-xs btn-danger">
                                                    <i class="glyphicon glyphicon-trash"></i>
                                                    <span style="padding-left: 5px;">產品下架</span>
                                                </button>
                                            </span>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach


    </div>