@extends('admin.layout.master')
@section('title','訂單觀看')
@section('content')
    <div class='container'>
        @if(count($order) == 0)
            <p class="text-center">
                沒有任何訂單
            </p>
            @else
            @foreach ($order as $order)
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="container-fluid" style="padding:0;">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 style="margin-top:0;">訂單編號:{{ $order->id}}</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 text-right">
                                    {{ $order->created_at->toDateString() }}
                                </div>
                            </div>
                            <hr style="margin:10px 0;" />
                            <div class="row">
                                書名:{{$order->book_id}}<br>數量:{{$order->quantity}}
                            </div>
                        </div>
                            <div class="row" style="margin-top:10px;">
                                會員名稱:{{$order->member_id}}
                            </div>
                    </div>
                </div>
             @endforeach
        @endif
    </div>

@endsection