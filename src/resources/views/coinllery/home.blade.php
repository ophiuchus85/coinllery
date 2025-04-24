@extends('coinllery.layouts.default')

@section('content')
    <section class="container justify-content-center">
        <h3 class="text-uppercase text-center mt-5">Featured Coinllery</h3>
		<article class="col">
			<div id="carouselExampleCaptions" class="carousel slide colorful-container" data-bs-ride="carousel">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
					<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<a href="/coinllery/e02df16b-691e-4172-85b2-d1644c1d7419">
							<figure class="squared-image">
								<img src="https://scontent-iad4-1.choicecdn.com/-/rs:fill:2000:2000/g:ce/f:webp/aHR0cHM6Ly9tYWdpYy5kZWNlbnRyYWxpemVkLWNvbnRlbnQuY29tL2lwZnMvYmFmeWJlaWMydjU0YmhyZ3M2bG4yNTM1c2trdHJvcDZocnN0bGY1N3RnazI1NmFxNmV4ZW5yemxweGE" alt="...">
							</figure>
							<div class="carousel-caption d-none d-md-block">
								<h5>Coinllery by Jake</h5>
								<p>Some representative placeholder content for the coinllery made by Jake.</p>
							</div>
						</a>
					</div>
					<div class="carousel-item">
						<a href="/coinllery/be0c72b0-e382-48f4-a03f-b49b0d118c18">
							<figure class="squared-image">
								<img src="https://scontent-iad4-1.choicecdn.com/-/rs:fill:2000:2522/g:ce/f:webp/aHR0cHM6Ly9tYWdpYy5kZWNlbnRyYWxpemVkLWNvbnRlbnQuY29tL2lwZnMvYmFmeWJlaWdzcGIyYmV6b2N3a2hsaWlxY2ZzcXE3MmJpYmJkZDVpemY1YXFzM2pmN2lqZjVlZHdsbnU" alt="Coinllery Image">
							</figure>
							<div class="carousel-caption d-none d-md-block">
								<h5>Coinllery by Qab</h5>
								<p>Some representative placeholder content for the coinllery made by Qab.</p>
							</div>
						</a>
					</div>
					<div class="carousel-item">
						<a href="/coinllery/0c22ba14-27b2-4cab-89bb-234042598199">
							<figure class="squared-image">
								<img src="https://media.decentralized-content.com/-/rs:fill:2000:2000/g:ce/f:webp/aHR0cHM6Ly9tYWdpYy5kZWNlbnRyYWxpemVkLWNvbnRlbnQuY29tL2lwZnMvYmFmeWJlaWV4dDdpN2g1emR2YW1scHdhNGhudmdvenhpN2toYmJlYzdlYmhpZHE0MzN0YWZkMnhsYm0" alt="...">
							</figure>
							<div class="carousel-caption d-none d-md-block">
								<h5>Coinllery by Ophiuchus</h5>
								<p>Some representative placeholder content for the coinllery made by Ophiuchus.</p>
							</div>
						</a>
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</article>
	</section>
	<section class="container justify-content-center">
		<h3 class="text-uppercase text-center mt-5">Recent</h3>
        <article class="col coinllery-card">
			<a href="/coinllery/be0c72b0-e382-48f4-a03f-b49b0d118c18">
				<figure class="colorful-image-container squared-image">
					<img src="https://scontent-iad4-1.choicecdn.com/-/rs:fill:2000:2522/g:ce/f:webp/aHR0cHM6Ly9tYWdpYy5kZWNlbnRyYWxpemVkLWNvbnRlbnQuY29tL2lwZnMvYmFmeWJlaWdzcGIyYmV6b2N3a2hsaWlxY2ZzcXE3MmJpYmJkZDVpemY1YXFzM2pmN2lqZjVlZHdsbnU" alt="Coinllery Image">
				</figure>
			</a>
			<footer>
				<h5 class="mb-0">Artcoins</h5>
				<small>Coinllery by <a href="https://zora.co/@qabqabqab" target="_blank">Qab</a></small>
				<p class="mt-3">First art coinllery to inaugurate the project, highlighting artists by turning their art into coins.</p>
			</footer>
        </article>
		<hr>
		<article class="col">
			<a href="/coinllery/e02df16b-691e-4172-85b2-d1644c1d7419">
				<figure class="colorful-image-container">
					<img src="https://media.decentralized-content.com/-/rs:fill:2000:2000/g:ce/f:webp/aHR0cHM6Ly9tYWdpYy5kZWNlbnRyYWxpemVkLWNvbnRlbnQuY29tL2lwZnMvYmFmeWJlaWV4dDdpN2g1emR2YW1scHdhNGhudmdvenhpN2toYmJlYzdlYmhpZHE0MzN0YWZkMnhsYm0" alt="Coinllery Image">
				</figure>
			</a>
			<footer>
				<h5>Coinllery by Ophiuchus</h5>
				<p>Some representative placeholder content for the coinllery made by Ophiuchus.</p>
			</footer>
        </article>
		<hr>
		<article class="col">
			<a href="/coinllery/0c22ba14-27b2-4cab-89bb-234042598199">
				<figure class="colorful-image-container">
					<img src="https://scontent-iad4-1.choicecdn.com/-/rs:fill:2000:2000/g:ce/f:webp/aHR0cHM6Ly9tYWdpYy5kZWNlbnRyYWxpemVkLWNvbnRlbnQuY29tL2lwZnMvYmFmeWJlaWMydjU0YmhyZ3M2bG4yNTM1c2trdHJvcDZocnN0bGY1N3RnazI1NmFxNmV4ZW5yemxweGE" alt="Coinllery Image">
				</figure>
			</a>
			<footer>
				<h5>Coinllery by Jake</h5>
				<p>Some representative placeholder content for the coinllery made by Jake.</p>
			</footer>
        </article>
    </section>
@endsection