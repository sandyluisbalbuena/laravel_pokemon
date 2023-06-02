
@extends('template.layout')

@section('content')
	<div class="container">

		<section class="row mt-5">
		</section>

		<!-- <section class="row d-flex mt-5" id="pokedexSectionResult">
		</section> -->


		<section class="row d-flex mt-5" id="pokedexSectionResult">

			<div class="col-12 col-lg-9 mt-2">
				@foreach ($discussions as $category)
					<div class="card my-4 px-1 animate__animated animate__fadeInUp" style="border-radius: 5px;" id="secondCard">
						<div class="card-body container">
							<div class="row">
								<h2>{{ $category->name }} Discussions</h2>
								<table class="table table-hover mt-4">
									<tbody>
									@foreach ($category->threads as $thread)

										<tr>
											<td>
												<i class="fas fa-comments"></i>
											</td>
											<td>
												<h6><a href="/pokeforum/{{ $thread->slug }}">{{ $thread->title }}</a></h6>
											</td>
											<td>
												<p style="display:flex; flex-direction:column; align-item:center;"><?php echo count($thread->messages)?'<span class="badge badge-secondary">'.count($thread->messages).' Messages</span>':"";?></p>
											</td>
											<td class="d-flex">
												<img width="40px" src="{{$thread->user->image}}" alt="">&nbsp;&nbsp;<p>{{ $thread->user->name }}</p>
											</td>
											<td>
												<p> {{ \Carbon\Carbon::parse($thread->created_at)->format('F j, Y g:i A') }}</p>
											</td>
										</tr>
										
										
										<!-- Display other thread information -->

										{{--<h4>Messages</h4>
										@foreach ($thread->messages as $message)
											<p>{{ $message->content }}</p>
											<p>Posted by: {{ $message->user->name }}</p>
											<!-- Display other message information -->
										@endforeach--}}

										<!-- Add any other elements you need for each thread -->

									@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				@endforeach
			</div>

			<div class="d-none d-lg-block col-lg-3 mt-2">

				<div style="height:100%;">
					<div style=" position: -webkit-sticky; position: sticky; top: 70px;">
						<div class="row">

							<div class="card my-4 px-1 animate__animated animate__fadeInUp" style="border-radius: 5px; height: 100%;" id="secondCard">
								<div class="card-body container-fluid">

									<div class="navbar bg-secondary rounded">
										<h6 class="ms-4">{{$user->name}}</h6>
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
							<div class="card my-1 px-1 animate__animated animate__fadeInUp" style="border-radius: 5px; height: 100%;" id="secondCard">
								<div class="card-body container-fluid">
									<h6 class="ms-4">Latest Uploads</h6>
									
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>


		<div class="modal fade" id="postThread" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Create a Post</h5>
						<!-- <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button> -->
					</div>
					<form id="formPostThread">
						<div class="modal-body">
							@csrf
							<div id="categoryError" class="text-danger text-sm"></div>
							<select name="category" type="text" id="category" class="form-control mb-4">
								<option value="">--Select a Category--</option>
								<option value="1">Pokemon</option>
								<option value="2">Pokecard</option>
							</select>

							<div id="titleError" class="text-danger text-sm"></div>
							<div class="form-outline mb-4">
								<input name="title" type="text" id="title" class="form-control"/>
								<label class="form-label" for="title">Title</label>
							</div>

							<!-- <input name="attachImage" type="file" class="form-control mb-4" id="attachImage" /> -->

							<div id="contentError" class="text-danger text-sm"></div>
							<div class="form-outline mb-4">
								<textarea id="summernote" name="editordata" class="rounded"></textarea>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-dark">Post</button>
							<button type="button" class="btn btn-dark" data-mdb-dismiss="modal">Cancel</button>
						</div>
					</form>
				</div>
			</div>
		</div>

	</div>
@endsection   


@section('script')
	<script src="{{asset('assets/js/pokeforum.js')}}"></script>
@endsection