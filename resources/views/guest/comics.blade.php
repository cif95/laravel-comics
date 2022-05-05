@extends('layouts.app')

@section('title', 'Comics')

@section('hero')
	<section id="comics-jumbo">
		<button class="my-btn-primary">Current Series</button>
	</section>
@endsection

@section('content')
	<section id="comics-content">
		<div id="cards-wrapper" class="container">
			@foreach($comicsCards as $index => $card)
				<div class="card">
					<a href="{{ route("guest-comics-detail", ['i' => $index]) }}">
						<img src="{{ $card['thumb'] }}" alt="{{ $card['series'] }}" />
						<h4 class="text-uppercase">
							{{ $card['series'] }}
						</h4>
					</a>
				</div>
			@endforeach
			<button class="my-btn-primary">Load More</button>
		</div>
	</section>
	@include('partials.menu')

@endsection