@extends('layouts.page')

@section('title', 'PDF')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
			
				<div class="panel-heading">PDF Uploaded</div>
				<ul>
					<li>Reference Number: {{ $refNumber }}</li>
					<li>Date: {{ $dateMatched }}</li>
					<li>Client Name: {{ $clientName }}</li>
					<li>Letter Template: {{ $letterTemplateID }}</li>
				</ul>
			</div>
		</div>
	</div>
</div>
@endsection
