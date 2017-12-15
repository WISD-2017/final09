@extends('admin.layout.master')
@section('title','訂單觀看')
@section('content')
    <div class='container'>
        @if(count($order) == 0)
            <p class="text-center">
                沒有任何訂單
            </p>
        @endif
        @foreach ($order as $order)
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="container-fluid" style="padding:0;">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 style="margin-top:0;">{{ $order->order_id}}</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                @if($order->orderType!=null)
                                    <span class="badge" style="margin-left:10px;">{{ $order->orderType->name }}</span>
                                @endif
                            </div>
                            <div class="col-md-4 text-right">
                                {{ $order->created_at->toDateString() }}
                            </div>
                        </div>
                        <hr style="margin:10px 0;" />
                        <div class="row">
                            <div class="col-md-12" style="height:100px;overflow:hidden;">
                                {{ $order->content }}
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px;">
                            <div class="col-md-8">
                                @if(Auth::check())
                                    <form method="ORDER" action="{{ route('order.destroy',['post'=>$order->id]) }}">
                                            <span style="padding-left: 10px;">
                                                <a class="btn btn-xs btn-primary" href="{{ route('order.show',['order'=>$order->id]) }}">
                                                    <i class="glyphicon glyphicon-pencil"></i>
                                                    <span style="padding-left: 5px;">觀看訂單</span>
                                                </a>
                                                {{ csrf_field() }}
                                                <input type="hidden" name="_method" value="DELETE" />
                                                <button type="submit" class="btn btn-xs btn-danger">
                                                    <i class="glyphicon glyphicon-trash"></i>
                                                    <span style="padding-left: 5px;">註銷訂單</span>
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
    @endsection