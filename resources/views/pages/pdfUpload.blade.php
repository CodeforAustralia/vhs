@extends('layouts.page')

@section('title', 'PDF')

@section('content')


<div class="panel-heading">Uplaod your PDF</div>
<form enctype="multipart/form-data">
	<div class="form-group" action="{{ route('report.submit') }}">
		<input id="file-5" name="image" class="file" type="file" multiple data-preview-file-type="any" data-upload-url="#">
	</div>
</form>  
@endsection
