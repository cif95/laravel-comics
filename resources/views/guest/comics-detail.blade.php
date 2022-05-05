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
	</section>
@endsection