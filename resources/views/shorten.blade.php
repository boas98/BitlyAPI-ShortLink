@extends('welcome')

@section('content')
	<h4>
		<a href="{{session('url')}}" target="_blank">{{ session('url') }}</a>
	</h4>
@endsection