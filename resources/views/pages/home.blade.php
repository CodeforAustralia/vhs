@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Dashboard&nbsp;&nbsp;<i class="fa fa-magic" aria-hidden="true"></i>

                    <i class="icon-magic"></i></div>

                <div class="panel-body">
                    <a href="/accounts">Account Details</a>
                </div>
                <div class="panel-body">
                    <a href="/upload">Upload</a>
                </div>
                <div class="panel-body">
                    <a href="/letters">Letters</a>
                </div>
                <div class="panel-body">
                    <a href="/status">Status</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection