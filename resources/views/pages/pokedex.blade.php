
@extends('template.layout')

@section('nav')
	<div id="pokemonSearchBar" class="d-flex input-group w-auto me-5" style="display:none;">
		<input onkeypress="handleKeyPress(event)" id="pokemonName" type="search" class="form-control rounded" placeholder="Pokemon Name" aria-label="Search" aria-describedby="search-addon" required/>
		<button class="btn bg-dark" type="submit"  onclick="pokemonSearch()">
			<i class="fas fa-search text-white"></i>
		</button>
	</div>
@endsection   

@section('content')
	<div class="container">
		<section class="row mt-5">
		</section>

		<section class="row d-flex mt-5" id="pokedexSectionResult">
			<div class="col-12 col-lg-3 mt-2">
				<div style="height: 99.7%;">
					<div class="card my-1 animate__animated animate__fadeInLeft" style="border-radius: 5px; position: -webkit-sticky; position: sticky; top: 70px;" id="firstCard">
						<div id="backgroundColor" style="border-radius: 5px;" class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
							<!-- <img id="pokemonImage" class="animate__animated animate__fadeIn animate__delay-1s p-3" src="https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/<?php echo $pokemonData['pokemonId']?>.png" width="100%" height="100%" class="img-fluid"/> -->
							<img id="pokemonImage" class="animate__animated animate__fadeIn animate__delay-1s p-3" src="https://img.pokemondb.net/artwork/avif/<?php echo strtolower($pokemonData['pokemonName'])?>.avif" width="100%" height="100%" class="img-fluid"/>
							<a href="#!">
								<div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
							</a>
						</div>
						<div class="card-body text-center">
							<h5 id="cardTitlePokemonName" class="card-title bg-dark text-white rounded p-2 m-1">{{$pokemonData['pokemonName']}}</h5>
							<hr/>
							<p class="card-text" id="pokemonDescription"></p>
							<hr/>
							<div id="pokemonTypes">
								<?php foreach ($pokemonData['pokemonTypes'] as $type): ?>
									<img class="mx-1" height="25px" onclick="dipatapos()" src="assets/images/pokemonTypes/<?php echo $type[0]?>text.png" alt="">
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-9 mt-2">
				<div class="container-fluid">
					<div class="row">
						<div class="card my-1 px-1 animate__animated animate__fadeInUp" style="border-radius: 5px; height: 100%;" id="secondCard">
							<div class="card-body container-fluid">
								<div class="row">
									<div class="col-12 col-lg-4">
										<h6 class="card-title">Abilities</h6>
										<div id="pokemonAbilities">
											<?php foreach ($pokemonData['pokemonAbilities'] as $ability): ?>
												<button style="width:100%;" onclick="get_ablities_description('<?php echo$ability[1]?>')" class="btn btn-dark m-1" type="button">{{$ability[0]}}<?php echo$ability[2]?'&nbsp;&nbsp;<span class="badge badge-primary badge-sm badge-light bg-light">HIDDEN</span>':'';?></button>
											<?php endforeach; ?>
										</div>
									</div>
									<!-- <div class="col-12 col-lg-3">
										<h6 class="card-title">Type(s)</h6>
										<div id="pokemonTypes">
											<?php foreach ($pokemonData['pokemonTypes'] as $type): ?>
												<img class="m-1" height="25px" onclick="dipatapos()" src="assets/images/pokemonTypes/<?php echo $type[0]?>text.png" alt="">
											<?php endforeach; ?>
										</div>
									</div> -->
									<div class="col-12 col-lg-4">
										<h6 class="card-title">Advantages</h6>
										<div id="pokemonAdvantage">
											
										</div>
									</div>
									<div class="col-12 col-lg-4">
										<h6 class="card-title">Disadvantages</h6>
										<div id="pokemonDisadvantage">
										
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">

						<div class="card my-1 px-2 animate__animated animate__fadeInUp" style="border-radius: 5px; height: 100%;" id="secondCard">
							<div class="card-body container-fluid">

								<!-- Navbar -->
								<nav class="navbar navbar-expand-sm navbar-dark bg-dark rounded ">
								<!-- Container wrapper -->
									<div class="container-fluid">
										<!-- Toggle button -->

										<!-- Collapsible wrapper -->
										<div class="collapse navbar-collapse justify-content-center" id="navbarCenteredExample">
										<!-- Left links -->
										<ul class="navbar-nav mb-2 mb-lg-0">
											<li class="nav-item hvr-underline-from-center">
												<a class="nav-link" href="#">Moves</a>
											</li>
											<li class="nav-item hvr-underline-from-center">
												<a class="nav-link" href="#">Attributes</a>
											</li>
											<!-- <li class="nav-item hvr-underline-from-center">
												<a class="nav-link">Disabled</a>
											</li> -->
										</ul>
										<!-- Left links -->
										</div>
										<!-- Collapsible wrapper -->
									</div>
								<!-- Container wrapper -->
								</nav>
								<!-- Navbar -->


								<div class="row my-4">
									<div class="col-12 col-lg-8">
										<div class="row">
											<h6>Moves</h6>
											<table id="myTable" class="display nowrap mb-3" style="width:100%;">
												<thead>
													<tr>
														<th>Name</th>
														<th>Accuracy</th>
														<th>Damage class</th>
														<th>Power</th>
														<th>PP</th>
														<th>type</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="col-12 col-lg-4">
										<div class="row">
											<!-- <div style="height: 400px; overflow: auto;" > -->
												<canvas id="pokemonStatscanvas" style="width: 100%; height: 520px" class=" mb-3"></canvas>
											<!-- </div> -->
										</div>
									</div>
									
								</div>
								<!-- <h5 class="card-title">Card title</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<a href="#!" class="btn btn-primary">Button</a> -->
							</div>
						</div>
					</div>
					<div class="row">
						<div class="card my-1 px-1" style="border-radius: 5px; height: 100%;" id="secondCard">
							<div class="card-body container-fluid">
									<!-- <h5 class="card-title">Card title</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<a href="#!" class="btn btn-primary">Button</a> -->
								<div class="row">
									<h6 class="card-title">Evolution</h6>
										<button id="evolutionButton" data-custom="0" onclick='' class="btn btn-dark" type="button"  data-mdb-toggle="collapse" data-mdb-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
											Show&nbsp;&nbsp;<span id="EvolutionChainSectionBtn"></span>
										</button>
									<hr/>
									<div class="collapse" id="collapseExample2">
										<div id="EvolutionChainSection">
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
						<div class="row">
							<div class="card my-1 px-1" style="border-radius: 5px; height: 100%;" id="secondCard">
								<div class="card-body container-fluid">
										<!-- <h5 class="card-title">Card title</h5>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									<a href="#!" class="btn btn-primary">Button</a> -->
									<div class="row">
										<h6 class="card-title" id="relatedTo">Pokemon related to {{$pokemonData['pokemonName']}}</h6>
										<button id="pokemonrelatedtobutton" data-custom="0" class="btn btn-dark" onclick='get_pokemon_related(<?php echo json_encode($pokemonData["pokemonTypes"])?>)' type="button" data-mdb-toggle="collapse" data-mdb-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
											Show
										</button>
										<hr/>
										<div class="collapse" id="collapseExample1">
											<div class="splide">
												<div class="splide__track">
													<ul class="splide__list" id="splide1">
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
			</div>
		</section>

		<section class="row mb-5">
			<div class="col-12">
				<div class="card my-1" style="border-radius: 5px; height: 100%;">
					<div class="card-body">
						<h5 class="card-title" id="pokeCard"></h5>
						<div class="splide" id="splideCards">
							<div class="splide__track">
								<ul class="splide__list" id="splideCardsId">
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- <section class="row">
			<div class="col-12">
				<div class="card my-1" style="border-radius: 5px; height: 100%;">
					<div class="card-body">
						<h5 class="card-title">Recent Search</h5>
						<div class="splide" id="splideRecentSearch">
							<div class="splide__track">
								<ul class="splide__list" id="splideRecentSearchID">
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->

	</div>
@endsection   

@section('script')
	
	<!-- customJS -->
	<!-- <script src="{{asset('assets/js/pokedex.js')}}"></script> -->
	<script src="{{asset('assets/js/pokedex2.js')}}"></script>

	<!-- triggers -->
	{{-- var flavor_text_entry = @json($pokemonData['pokemonFlavor_text_entries']);--}}
		
	<script>
		var moves_entry = @json($pokemonData['pokemonMoves']);
		var attributes_entry = @json($pokemonData['pokemonStats']);
		var types_entry = @json($pokemonData['pokemonTypes']);
		var species_entry = @json($pokemonData['pokemonSpecies']);
		var name_entry = @json($pokemonData['pokemonName']);

		flavor_text(species_entry);
		pokemon_moves(moves_entry);
		pokemon_attributes(attributes_entry);
		// get_pokemon_related(types_entry);
		get_pokemon_advantages(types_entry);
		get_pokemon_disadvantages(types_entry);
		get_pokemon_immunity_from(types_entry);
		get_pokemon_immunity_to (types_entry);
		get_pokemon_species(species_entry);
		get_pokemon_cards(name_entry);
		
		
	</script>
@endsection