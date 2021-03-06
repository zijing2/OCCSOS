@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="/css/app.css">
@endsection

@section('content')
   	<div class="container">
		    <div class="row" style="margin:10px">
	        <div class="col-md-8 col-md-offset-1">
	            <passport-clients></passport-clients>
				<passport-authorized-clients></passport-authorized-clients>
				<passport-personal-access-tokens></passport-personal-access-tokens>
	        </div>
	    </div>
	</div>
@endsection

@section('scripts')
<script src="/js/app.js"></script>
@endsection

