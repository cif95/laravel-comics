<header>
	<section id="upper-header">
		<div class="container">
			<h6>dc power visa</h6>
			<h6>additional dc sites</h6>
		</div>
	</section>
	<section id="lower-header" class="container">
		<div class="header-logo">
			<img src="{{ asset("images/dc-logo.png")}}" alt="dc comics logo" />
		</div>
		<nav class="header-nav">
			<ul>
				@foreach($headerLinks as $link)
						<li class="{{ ($link['active']) ? 'active' : '' }}">
							<a href="{{ url($link['url']) }}">
								{{ $link['text'] }}
							</a>
						</li>
				@endforeach
			</ul>
		</nav>
		<input type="text" placeholder="Search..">
	</section>
</header>