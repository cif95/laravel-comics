@extends('layouts.app')

@section('title', 'News')

@section('content')
	<section id="news-jumbo">
		<button class="my-btn-primary">News</button>
	</section>
	<section id="news">
		<div class="container">
			@foreach ($newsCards as $card)
				<div class="card">
					<div class="card-img">
						<img src="/images/{{ $card['img'] }}" alt="{{ $card['title'] }}"/>
					</div>
					<div class="card-info">
						<h4>
							{{ $card['title'] }}
						</h4>
						<p>
							{{ $card['text'] }}
						</p>
					</div>
				</div>
			@endforeach
		</div>
	</section>

@endsection