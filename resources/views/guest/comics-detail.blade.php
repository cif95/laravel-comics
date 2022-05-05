@extends('layouts.app')

@section('title', 'Comics - Detail')

@section('hero')
	<section id="comics-jumbo" class="jumbo-cm-detail">
	</section>
@endsection

@section('content')
	<section id="comics-detail">
		<div class="container">
			<div class="thumb">
				<img src="{{ $comicsCard['thumb'] }}" alt="{{ $comicsCard['title'] }}">
			</div>
			<div class="wrapper">
				<div class="info">
					<h1>
						{{ $comicsCard['title'] }}
					</h1>
					<div class="info-availability">
						<p>
							U.S. Price: 
							<span>{{ $comicsCard['price'] }}</span>
						</p>
						<p>
							Available
						</p>
						<span>
							Check Availability
						</span>
					</div>
					<p>
						{{ $comicsCard['description'] }}
					</p>
				</div>
				<div class="adv">
					<img src="{{ asset("/images/adv.jpg") }}" alt="comics advertisement">
				</div>
			</div>
		</div>
		<div id="more">
			<div class="container">
				<div id="talent">
					<h3>Talent</h3>
					<div class="row">
						<h4>Art by:</h4>
						<p>
							@foreach($comicsCard['artists'] as $artist)
								{{ $artist }},
							@endforeach
						</p>
					</div>
					<div class="row">
						<h4>Written by:</h4>
						<p>
							@foreach($comicsCard['writers'] as $writer)
								{{ $writer }},
							@endforeach
						</p>
					</div>
				</div>
				<div id="specs">
					<h3>Specs</h3>
					<div class="row">
						<h4>Series:</h4>
						<p>{{ $comicsCard['series'] }}</p>
					</div>
					<div class="row">
						<h4>U.S. Price:</h4>
						<span>{{ $comicsCard['price'] }}</span>
					</div>
					<div class="row">
						<h4>On sale date:</h4>
						<span>{{ $comicsCard['sale_date'] }}</span>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('menu')
	<section id="detail-menu">
		<div class="container">
			<ul>
				@foreach($menuItems as $item)
					<li>
						<h4 class="text-uppercase">
							{{ $item['text'] }}
						</h4>
						<img src="/images/{{ $item['src'] }}" alt="{{ $item['alt'] }}"/>
					</li>
				@endforeach
			</ul>
		</div>
	</section>
@endsection