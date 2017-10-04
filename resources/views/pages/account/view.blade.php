@extends('layouts.page')

@section('title', 'Your Details')

@section('content')

@if ($user_testType == 'A')
@include('pages.account.viewA')
@else
@include('pages.account.viewB')
@endif

@endsection
