@extends('layouts.app')

@section('content')
<link href="{{ asset('css/song.css') }}" rel="stylesheet">
<div>
	@foreach($songs as $so)
	<div class="content">
		<p>Song: {{ $so->name }}</p>
		<p>Artist: {{ $so->artist }}</p>
		
		<audio class="ap" controls>
			<source src="{{ $so->filepath }}" >
				toodles
		</audio>
	</div>
	
	@endforeach
</div>
@endsection