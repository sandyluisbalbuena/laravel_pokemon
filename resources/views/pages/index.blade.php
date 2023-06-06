
@extends('template.layout')

@section('content')

	<div class="p-5 text-center bg-image hero" style="background-image: url('assets/images/hero/hero.jpg'); height: 80vh; top:0;">
		<div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
			<div class="d-flex justify-content-center align-items-center h-100">
				<div class="text-white">
					<h1 class="mb-3"><img src="assets/images/brand/pokemonBrandName2.png" width="40%"></h1>
					<form class="d-flex input-group w-auto mt-5 container" action="/pokedex" method="get">
						@csrf
						<input id="pokemonName" name="pokemonName" type="search" class="form-control rounded" placeholder="Pokemon Search" aria-label="Search" aria-describedby="search-addon" required/>
						<button class="btn bg-dark" type="submit" onclick="showLoader()">
							<i class="fas fa-search text-white"></i>
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>

    <main class="container-fluid">
		<section>
			<div class="row">
				<div class="splide">
					<div class="splide__track">
						<ul class="splide__list">
							
						</ul>
					</div>
				</div>
			</div>
		</section>
	</main>
@endsection   





@section('script')
	<script src="{{asset('assets/js/index.js')}}"></script>
@endsection