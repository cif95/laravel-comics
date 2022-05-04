<footer class="home-footer">
	<section class="footer-nav">
		<div class="container">
			<nav>
				<div class="footer-list-col">
					<h3 class="text-uppercase">Dc Comics</h3>
					<ul>
						@foreach ($footerNav['footerDcComicsNavLinks'] as $link)
							<li>
								<a href="{{ $link['url'] }}">
									{{ $link['text'] }}
								</a>
							</li>
						@endforeach
					</ul>
					<h3 class="text-uppercase">Shop</h3>
					<ul>
						@foreach ($footerNav['footerShopNavLinks'] as $link)
							<li>
								<a href="{{ $link['url'] }}">
									{{ $link['text'] }}
								</a>
							</li>
						@endforeach
					</ul>
				</div>
				<div class="footer-list-col">
					<h3 class="text-uppercase">Dc</h3>
					<ul>
						@foreach ($footerNav['footerDcNavLinks'] as $link)
						<li>
							<a href="{{ $link['url'] }}">
								{{ $link['text'] }}
							</a>
						</li>
					@endforeach
					</ul>
				</div>
				<div class="footer-list-col">
					<h3 class="text-uppercase">Sites</h3>
					<ul>
						@foreach ($footerNav['footerSitesNavLinks'] as $link)
						<li>
							<a href="{{ $link['url'] }}">
								{{ $link['text'] }}
							</a>
						</li>
						@endforeach
					</ul>
				</div>
			</nav>
		</div>
	</section>
	<section class="footer-social">
		<div class="container">
			<button class="my-btn-outline-primary">Sign up now!</button>
			<div class="socials">
				<h2 class="text-uppercase">Follow us</h2>
					@foreach ($footerNav['footerSocials'] as $link)
						<img src="/images/{{ $link['src'] }}"alt="{{ $link['alt'] }}"/>
					@endforeach
			</div>
		</div>
	</section>
</footer>