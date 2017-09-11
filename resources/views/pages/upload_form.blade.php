@extends('layouts.app')

@section('title', 'Home')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Upload File</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif
                    <form action="/upload" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        Product photos (can attach more than one):
                        <br />
                        <input type="file" name="pdfUploaded[]" multiple />

                        <br /><br />
                        <input type="submit" value="Upload" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection