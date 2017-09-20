@extends('layouts.app')

@section('title', 'Home')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-7 services_heading_right">
                        <h3>Upload XML</h3>
                    </div>
                    <div class="col-md-2 services_heading_right">
                        <div class="toolbox-banner mail_icon-link">
                        </div>
                    </div>
                    <div class="col-md-1 services_heading_right">
                        <div class="toolbox-banner mail_icon-link">
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-7 services_heading_right">
                    @if(Session::has('message'))
                    <p class="alert alert-success">{{ Session::get('message') }}</p>
                    @endif
                        @if (count($errors) > 0)
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        @endif
                        <form action="/upload_xml" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            Product photos (can attach more than one):
                            <br />
                            <input type="file" name="xmlUploaded[]" multiple />

                            <br /><br />
                            <input type="submit" value="Upload XML" />
                        </form>
                    </div>
                    <div class="col-md-2 services_heading_right">
                        <div class="toolbox-banner mail_icon-link">
                        </div>
                    </div>
                    <div class="col-md-1 services_heading_right">
                        <div class="toolbox-banner mail_icon-link">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection