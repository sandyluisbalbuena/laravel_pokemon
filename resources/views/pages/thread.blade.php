
@extends('template.layout')

@section('content')
	<div class="container">

		<section class="row mt-5">
		</section>

		<section class="row d-flex mt-5" id="pokedexSectionResult">
			<div class="col-12 col-lg-9 px-3 px-lg-1 animate__animated animate__fadeInUp">
				<div class="container">
					<div class="row">
						<div class="card" style="border-radius: 5px;" id="firstCard">
							<div class="p-2 py-3 px-lg-5">

								<div class="row text-center">
									<h2 id="threadTitle">{{ $thread[0]->title}}</h2>
								</div>

								<div class="container summernote_container">
									<div class="row text-center">
										<div id="summernoteContent" style="padding-top:20px;">
										</div>
									</div>
								</div>

								<span class="d-flex">
									<img class="me-2" src="{{$thread[0]->user->image}}" style="width:25px; height:25px;"/>
									<p style="font-weight:bolder; font-size:12px;">{{strtoupper($thread[0]->user->name)}}</p>
								</span>
								<span class="py-3">
									<i class="fas fa-thumbs-up ms-2"></i>
									<i class="fas fa-thumbs-down ms-2"></i>
									<i class="fas fa-reply ms-2"></i>
								</span>
							

									

							</div>
						</div>
					</div>

					<div class="row my-3">
						<div class="card" style="border-radius: 5px;" id="firstCard">
							<div class="p-2 py-3 px-lg-5">
								<h6 type="button" data-mdb-toggle="collapse" data-mdb-target="#replies" aria-expanded="false" aria-controls="replies">Comments&nbsp;&nbsp;<i class="fas fa-angles-down"></i></h6>
								<div id="replies" class="collapse">
								</div>
							</div>
						</div>
					</div>

					<div class="row my-3">
						<div class="card" style="border-radius: 5px;" id="firstCard">
							<div class="p-2 py-3 px-lg-5">
								<form id="commentForm">
									@csrf
									<div id="commentError" class="text-danger text-sm"></div>
									<div class="form-outline">
										<textarea class="form-control" id="commentArea" rows="4"></textarea>
										<label class="form-label" for="commentArea">Comment</label>
									</div>
									<button type="submit" class="btn btn-dark my-2 col-12"><i class="fas fa-paper-plane"></i></button>
								</form>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="d-none d-lg-block col-lg-3 animate__animated animate__fadeIn">
				<div class="container" style="height:100%;">
						<div style=" position: -webkit-sticky; position: sticky; top: 70px;">

							<div class="row">
								<div class="card mb-2 px-1 animate__animated animate__fadeIn animate__delay-1s" style="border-radius: 5px; height: 100%;">
									<div class="card-body container-fluid">
										<div class="d-flex justify-content-between" type="button" data-mdb-toggle="collapse" data-mdb-target="#categories" aria-expanded="false" aria-controls="categories"><h6 class="ms-4">Categories</h6><i class="fas fa-angles-down"></i></div>
										<ul  class="collapse mt-3" id="categories" >
										</ul>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="card mb-2 px-1 animate__animated animate__fadeIn animate__delay-1s" style="border-radius: 5px; height: 100%;">
									<div class="card-body container-fluid">
										<div class="d-flex justify-content-between" type="button" data-mdb-toggle="collapse" data-mdb-target="#myThreads" aria-expanded="false" aria-controls="myThreads"><h6 class="ms-4">My threads</h6><i class="fas fa-angles-down"></i></div>
										<ul class="collapse mt-4" id="myThreads">
										</ul>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="card px-1 animate__animated animate__fadeIn animate__delay-1s" style="border-radius: 5px; height: 100%;" style="border-radius: 5px;" id="thirdCard">
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
	<script src="{{asset('assets/js/thread.js')}}"></script>


	<script>
		let contentSummernote = @json($thread[0]);
	

		summernote_content(contentSummernote);
		replies_content(contentSummernote);
		
	</script>
@endsection