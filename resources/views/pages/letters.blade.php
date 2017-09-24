@extends('layouts.app')

@section('title', 'Letters')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Letters</div>
                <div class="panel-body">
                    @foreach ($Letters as $letter)
                    {{ date('d F Y', strtotime($letter->letter_date)) }}&nbsp;-&nbsp;
                    {{ $letter->template_id }} &nbsp;-&nbsp;

                    @foreach ($Templates as $template)
                    {{ $template->summary }}
                    @endforeach

                    <br/>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
