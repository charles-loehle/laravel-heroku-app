@extends('layouts.app')

@section('content')
<h1>All Footballers</h1>
	@if ($footballers->count())

		<ul>
			@foreach ($footballers as $footballer)
				<li>
					<h3>{{ $footballer->name }}</h3>
					<p>position: {{ $footballer->position }}</p>
				</li>
			@endforeach
		</ul>

	@endif
@endsection