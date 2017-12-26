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
                                <h1 style="margin-top:0;">會員ID:{{ $member->id }}</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                @if($member->orderType!=null)
                                    <span class="badge" style="margin-left:10px;">{{ $member->orderType->name }}</span>
                                @endif
                            </div>
                            <div class="col-md-4 text-right">
                                註冊日期:
                                {{ $member->created_at->toDateString() }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12" style="height:30px;overflow:hidden;">
                                會員名稱:
                                {{ $member->name}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12" style="height:30px;overflow:hidden;">
                                會員E-MAIL:
                                {{ $member->email}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
   </div>
@endsection