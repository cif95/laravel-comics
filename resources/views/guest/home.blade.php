@extends('layouts.app')

@section('title', 'Welcome')

@section('hero')
	<section id="home-jumbo" class="slider">
		<span id="back-arrow">
			&#60;
		</span>
		@foreach ($sliderItems as $index => $item)
			<img 
			src="/images/{{ $item['src'] }}" 
			alt="{{ $item['alt'] }}" 
			class="slider-item {{ ( @activeItem == $index ) ? 'active' : '' }}"
			>
		@endforeach
		<span id="next-arrow">
			&#62;
		</span>
		<button class="my-btn-primary">Discover</button>
	</section>
@endsection

@section('content')

@endsection

@section('menu')
	@include('partials.menu')
@endsection