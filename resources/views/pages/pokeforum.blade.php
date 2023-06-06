
@extends('template.layout')

@section('content')

	<div class="container">
		<section class="row mt-5">
		</section>

		<section class="row d-flex mt-4" id="pokedexSectionResult">

			<div class="col-12 col-lg-9">

				<div id="forumLatest">
					
				</div>
					
			</div>

			<div class="d-none d-lg-block col-lg-3">

				<div style="height:98%;">
					<div style=" position: -webkit-sticky; position: sticky; top: 70px;">

						<div class="row">
							<div class="card my-4 px-1 animate__animated animate__fadeIn animate__delay-1s" style="border-radius: 5px; height: 100%;" id="secondCard">
								<div class="card-body container-fluid">

									<div class="navbar rounded" style="background-color: #D1CFC9;">
										<h6 class="ms-4">{{strtoupper($user->name)}}</h6>
										<img class="me-4" width="15%" src="<?php echo $user->image?>" alt="">
									</div>

									<button class="btn btn-dark my-2" style="width:100%;" data-mdb-toggle="modal" data-mdb-target="#postThread">
										<i class="far fa-pen-to-square me-1"></i>
										Post
									</button>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="card my-1 px-1 animate__animated animate__fadeIn animate__delay-1s" style="border-radius: 5px; height: 100%;" id="secondCard">
								<div class="card-body container-fluid">
									<div class="d-flex justify-content-between" type="button" data-mdb-toggle="collapse" data-mdb-target="#categories" aria-expanded="false" aria-controls="categories"><h6 class="ms-4">Categories</h6><i class="fas fa-angles-down"></i></div>
									<ul  class="collapse mt-3" id="categories" >
									</ul>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="card my-1 px-1 animate__animated animate__fadeIn animate__delay-1s" style="border-radius: 5px; height: 100%;" id="secondCard">
								<div class="card-body container-fluid">
									<div class="d-flex justify-content-between" type="button" data-mdb-toggle="collapse" data-mdb-target="#myThreads" aria-expanded="false" aria-controls="myThreads"><h6 class="ms-4">My threads</h6><i class="fas fa-angles-down"></i></div>
									<ul class="collapse mt-4" id="myThreads">
									</ul>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="card my-1 px-1 animate__animated animate__fadeIn animate__delay-1s" style="border-radius: 5px; height: 100%;" id="secondCard">
								<div class="card-body container-fluid">
									<div class="d-flex justify-content-between" type="button" data-mdb-toggle="collapse" data-mdb-target="#trendingTopics" aria-expanded="true" aria-controls="trendingTopics"><h6 class="ms-4">Trending Topics</h6><i class="fas fa-angles-down"></i></div>
									<ul class="collapse show mt-4" id="trendingTopics">
									</ul>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>
		</section>


		
	</div>


@endsection   

 
@section('script')
	<script src="{{asset('assets/js/pokeforum.js')}}"></script>


	<script>
		let userData = @json($user);
	

		adminChecker(userData);
		
	</script>
@endsection