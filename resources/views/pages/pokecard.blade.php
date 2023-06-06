
@extends('template.layout')

@section('nav')
	<div id="pokemonSearchBar" class="d-flex input-group w-auto me-5" style="display:none;">
		<input onkeypress="handleKeyPress(event)" id="pokemonName" type="search" class="form-control rounded" placeholder="Pokemon Card Name" aria-label="Search" aria-describedby="search-addon" required/>
		<button class="btn bg-dark" type="submit"  onclick="getonecard()">
			<i class="fas fa-search text-white"></i>
		</button>
	</div>
@endsection   

@section('content')

	<div class="container">
		<section class="row mt-5">
		</section>

		<!-- <section class="row d-flex mt-5" id="pokedexSectionResult">
			<div class="col-12 mt-2">
				<div class="card my-1 px-1 animate__animated animate__fadeInUp" style="border-radius: 5px; height: 100%;" id="secondCard">
					<div class="card-body container-fluid">
						<div class="row">
							<div class="splide" id="splideCard">
								<div class="splide__track">
									<ul class="splide__list" id="splideCardList">

									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->

		<section class="row d-flex mt-5" id="pokedexSectionResult">
			<div class="col-12 mt-2">
				<div class="card my-1 px-1 animate__animated animate__fadeInUp" style="border-radius: 5px; height: 100%;" id="secondCard">
					<div class="card-body container-fluid">
						<div class="row">

							<div class="navbar navbar-dark bg-dark rounded cardNav">
								<h6 id="cardName" class="ms-3 text-white"></h6>
								<!-- <p id="cardId" class="cardId text-secondary"></p> -->
								<div class="me-3 d-flex leftNavCard">
									<h6 id="cardHp" class="me-3 text-white"></h6>
									<div id="cardType" class="me-3"></div>
								</div>
							</div>	

							<div class="row my-4 px-4">
								
								<div class="col-12 col-lg-3">
									<div id="cardImage"  onmouseover="showResult()" onmouseout="hideResult()"  class="img-zoom-container">
									</div>

									@if(auth()->check())

									<button onclick="createThreadCard()" class="mt-3 btn btn-dark" style="width:100%;" data-mdb-toggle="modal" data-mdb-target="#postThread">
										<i class="far fa-pen-to-square me-1"></i>
										Create a thread
									</button>

									@endif

								</div>
								<div class="col-12 col-lg-9">
									<div class="row">
										<div id="myresult" class="img-zoom-result rounded" style="visibility:hidden;"></div>
										<div id="cardTyping">
											<h6>Attack(s)</h6>
											<table id="myTable2" class="display nowrap mb-3 table-sm" style="width:100%;">
												<thead>
													<tr>
														<th>Name</th>
														<th>Cost</th>
														<th>Damage</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td></td>
														<td></td>
														<td></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="row">
										<h6 id="abilityName"></h6>
										<p id="abilityDescription"></p>
									</div>
									<div class="row">
										<p id="textInfo"></p>
									</div>
									<div class="cardFooter mt-5">
										<div class="row mt-5">
											<div class="col-12 col-lg-4">
												<h6>Weakness</h6>
												<div id="cardWeakness"></div>
											</div>
											<div class="col-12 col-lg-4">
												<h6>Resistance</h6>
												<div id="cardResistance"></div>
											</div>
											<div class="col-12 col-lg-4">
												<h6>Retreat Cost</h6>
												<div id="cardRetreatCost"></div>
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

		<section class="row d-flex my-4" id="pokedexSectionResult">
			<div class="col-12">
				<div class="card my-1 px-1 animate__animated animate__fadeInUp" style="border-radius: 5px; height: 100%;" id="secondCard">
					<div class="card-body container-fluid">

						<div class="row my-4">
							<div class="btn-group bg-dark" role="group" aria-label="Basic example">
								<button id="gridbtn" type="button" class="btn btn-dark" onclick="gridshow()">Grid</button>
								<button id="listbtn" type="button" class="btn btn-dark" onclick="tableshow()" disabled>List</button>
							</div>
						</div>

						<div class="row my-4 d-none" id="filterbtnrow" style="overflow-y: auto;">
							<div class="btn-group bg-dark" role="group" aria-label="Basic example" id="filterbtns">
							</div>
						</div>

						<div class="row my-5" id="tablerow">
							<table id="myTable" class="display nowrap mb-3" style="width:100%;">
								<thead>
									<tr>
										<th>Id</th>
										<th>Image</th>
										<th>Name</th>
										<th>Rarity</th>
										<th>Set</th>
										<!-- <th>type</th> -->
									</tr>
								</thead>
								<tbody>
									<tr>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
								</tbody>
							</table>
						</div>

						<div class="row my-5 d-none" id="gridrow">
							<div class="grid" id="myGrid">
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>

	</div>
@endsection   

@section('script')
	<script src="{{asset('assets/js/pokecard.js')}}"></script>
@endsection