{{-- <footer class="home-footer">
	<section class="footer-nav">
		<div class="container">
			<nav>
				<div class="footer-list-col">
					<h3 class="text-uppercase">Dc Comics</h3>
					<ul>
						<li v-for="(link, index) in footerDcComicsNavLinks" :key="index">
							<a :href="link.url">{{ link.text }}</a>
						</li>
					</ul>
					<h3 class="text-uppercase">Shop</h3>
					<ul>
						<li v-for="(link, index) in footerShopNavLinks" :key="index">
							<a :href="link.url">{{ link.text }}</a>
						</li>
					</ul>
				</div>
				<div class="footer-list-col">
					<h3 class="text-uppercase">Dc</h3>
					<ul>
						<li v-for="(link, index) in footerDcNavLinks" :key="index">
							<a :href="link.url">{{ link.text }}</a>
						</li>
					</ul>
				</div>
				<div class="footer-list-col">
					<h3 class="text-uppercase">Sites</h3>
					<ul>
						<li v-for="(link, index) in footerSitesNavLinks" :key="index">
							<a :href="link.url">{{ link.text }}</a>
						</li>
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
				<img
					v-for="(item, index) in footerSocials"
					:key="index"
					:src="require(`../assets/img/${item.src}`)"
					:alt="item.alt"
				/>
			</div>
		</div>
	</section>
</footer> --}}