@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="quick-escape_wrapper">
                    <button type="button" class="btn btn-danger">Quick<br/>Escape</button>
                </div>
                <div class="welcome-banner">
                    <h3>{{ $message }} {{ Auth::user()->firstName }}</h3>
                </div>
                <div class="dashboard_notifications">
                    <p>Your Application for the Victorian Housing Register is being reviewed.</p>
                    <p>You have <strong>1 new letter</strong>.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-wrapper tools-wrapper">
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="toolbox-banner col-md-8 col-xs-6">
                <h3>Tools</h3>
            </div>
            <div class="toolbox-banner manage-profiles_link"><br/>
                <p><i class="fa fa-cog" aria-hidden="true"></i> Manage Profile</p>
            </div>
            <div class="row toolbox-row">
                <div class="col-md-12 col-xs-12 col-lg-12 tool-box">
                    <a href="/letters"><i class="fa fa-envelope-o" aria-hidden="true"></i>Mail</a>
                </div>
            </div>
            <div class="row toolbox_half-row">
            <div class="tool-box_half col-xs-12">
                    <!-- <a href="/upload">Upload</a> -->
                    <a href="/accounts">Account Details</a>
                </div>
                <div class="tool-box_half col-xs-12">
                    <a href="/status">Status</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection