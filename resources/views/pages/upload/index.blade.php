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
                        <h3>Select what to upload</h3>
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
                        <div class="col-md-6">
                            <a href="/upload_pdf"><button type="button" class="btn btn-primary upload_index-button"><h4><strong>PDF</strong></h4></button></a>
                        </div>
                        <div class="col-md-6">
                            <a href="/upload_xml"><button type="button" class="btn btn-primary upload_index-button"><h4><strong>XML</strong></h4></button></a>
                        </div>
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

@endsection