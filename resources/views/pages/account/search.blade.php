@extends('layouts.page')

@section('title', 'Your Details')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="col-md-2">

                </div>
                <div class="col-md-7 services_heading_right">
                    <h3>All Users</h3>
                </div>
                <div class="col-md-2 services_heading_right">
                    <div class="toolbox-banner">
                        <form action="/search" method="POST" role="search">
                            {{ csrf_field() }}
                            <div class="input-group">
                                <input type="text" class="form-control" name="q"
                                placeholder="Search users">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-1 services_heading_right">
                    <div class="toolbox-banner mail_icon-link">
                        <form action="/search" method="POST" role="search">

                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="col-md-9 services_heading_right">
                        <div class="table-responsive">
                           @if(isset($details))
                           
                           
                           <p> The Search results for your query <b> {{ $query }} </b> are :</p>
                           <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th class="visible-md visible-lg">Email</th>
                                    <th>Gender</th> 
                                    <th>Client ID</th>
                                </tr>
                                <thead>
                                    <tbody>
                                        @foreach($details as $AccountDetail)
                                        <tr>
                                            <td class="account-list"><a href="/accounts/{{$AccountDetail->id}}">{{ $AccountDetail->firstName }} {{ $AccountDetail->lastName }}</a></td>
                                            <td class="visible-md visible-lg account-list"><a href="/accounts/{{$AccountDetail->id}}">{{ $AccountDetail->email }}</a></td>
                                            <td class="account-list"><a href="/accounts/{{$AccountDetail->id}}">{{ $AccountDetail->gender }}</a></td>
                                            <td class="account-list"><a href="/accounts/{{$AccountDetail->id}}">{{ $AccountDetail->client_id }}</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @else
                            <p> There are no Search results for your query <b> {{ $query }} </b>.</p>                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection