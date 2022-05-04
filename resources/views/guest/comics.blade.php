@extends('layouts.app')

@section('title', 'Comics')

@section('content')
	<section id="comics-jumbo">
		<button class="my-btn-primary">Current Series</button>
	</section>
	<section id="comics-content">
		<div id="cards-wrapper" class="container">
			@foreach($comicsCard as $card)
				<div class="card">
					<img src="{{ $card['thumb'] }}" alt="{{ $card['series'] }}" />
					<h4 class="text-uppercase">
						{{ $card['series'] }}
					</h4>
				</div>
			@endforeach
			<button class="my-btn-primary">Load More</button>
		</div>
	</section>

@endsection