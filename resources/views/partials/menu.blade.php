<section id="menu">
	<div class="container">
		<ul>
			@foreach($menuItems as $item)
				<li>
					<a href="">
						<img src="/images/{{ $item['src'] }}" alt="{{ $item['alt'] }}"/>
						<h4 class="text-uppercase">
							{{ $item['text'] }}
						</h4>
					</a>
				</li>
			@endforeach
		</ul>
	</div>
</section>