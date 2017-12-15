@extends('admin.layout.master')
@section('title','會員觀看')
@section('content')
    <div class='container'>
        @if(count($member) == 0)
            <p class="text-center">
                沒有任何會員
            </p>
        @endif
        @foreach ($member as $member)
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="container-fluid" style="padding:0;">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 style="margin-top:0;">{{ $member->title }}</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                @if($member->orderType!=null)
                                    <span class="badge" style="margin-left:10px;">{{ $member->orderType->name }}</span>
                                @endif
                            </div>
                            <div class="col-md-4 text-right">
                                {{ $member->created_at->toDateString() }}
                            </div>
                        </div>
                        <hr style="margin:10px 0;" />
                        <div class="row">
                            <div class="col-md-12" style="height:100px;overflow:hidden;">
                                {{ $member->content }}
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px;">
                            <div class="col-md-8">
                                @if(Auth::check())
                                    <form method="ORDER" action="{{ route('order.destroy',['post'=>$member->id]) }}">
                                            <span style="padding-left: 10px;">
                                                <a class="btn btn-xs btn-primary" href="{{ route('order.show',['order'=>$member->id]) }}">
                                                    <i class="glyphicon glyphicon-pencil"></i>
                                                    <span style="padding-left: 5px;">觀看會員資料</span>
                                                </a>
                                                {{ csrf_field() }}
                                                <input type="hidden" name="_method" value="DELETE" />
                                                <button type="submit" class="btn btn-xs btn-danger">
                                                    <i class="glyphicon glyphicon-trash"></i>
                                                    <span style="padding-left: 5px;">剔除會員</span>
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