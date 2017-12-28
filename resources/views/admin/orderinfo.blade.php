@extends('admin.layout.master')
@section('title','訂單觀看')
@section('content')
    <form action="orderlist" method="POST" role="form">
        {{ csrf_field() }}
        <div class="form-group">
            <label>請輸入要查詢之訂單：</label>
            <input name="order_id" class="form-control" placeholder="請輸入訂單編號">
        </div>
        <div class="text-right">
            <button type="submit" class="btn btn-success">查詢</button>
        </div>
    </form>
@endsection