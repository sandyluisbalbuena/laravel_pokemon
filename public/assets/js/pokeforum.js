let category = document.getElementById('category');
let title = document.getElementById('title');
let summernote = document.getElementById('summernote');
let trendingTopics = document.getElementById('trendingTopics');
let forumLatest = document.getElementById('forumLatest');

formPostThread.addEventListener('submit', (e)=>{
	e.preventDefault();

	let formData = {
		'category' : category.value,
		'title' : title.value,
		'content' : summernote.value,
	};
	// let result = JSON.stringify(formData);


	axios.post('/pokeforum', formData)
    .then(response => {

		if(response.data.success){
			document.getElementById('postThread').classList.remove('show');
			let backdrop = document.getElementsByClassName('modal-backdrop')[0];
			backdrop.classList.remove('show');

			Swal.fire({
				icon: 'success',
				title: 'Post Created successfully!',
			})
		
		}else{
			document.getElementById('categoryError').textContent = response.data.message.category;
			document.getElementById('titleError').innerHTML = response.data.message.title;													
			document.getElementById('contentError').innerHTML = response.data.message.content;
			Swal.fire({
				icon: 'error',
				title: 'Something went wrong!',
			})
		}
    })
    .catch(function (error){
		console.error(error);
	})
    .then(() => { 

    })
})

function getForumLatest(){
	axios.get('/pokeforum/getforumlatest')
    .then(response => {

		response.data.forEach(data => {
			forumLatest.innerHTML+=`<div class="card my-4 px-1 animate__animated animate__fadeInUp" style="border-radius: 5px;" id="secondCard">
										<div class="card-body container">
											<div class="row">
												<h2 id="categoryName">`+data.name+` Discussions</h2>
												<div class="list-group list-group-light" id="`+data.name+`Id" style="height:400px; overflow-y:auto;">
												</div>
											</div>
										</div>
									</div>`

			data.threads.reverse().forEach(thread => {
				document.getElementById(data.name+'Id').innerHTML += `<a data-slug="`+thread.slug+`" href="/pokeforum/`+thread.slug+`" class="forumItems list-group-item list-group-item-action px-3 border-0">
				<div class="row">
					<div class="col-12 col-lg-3 d-flex">
						<i class="fas fa-comments mx-3"></i>
						<p>`+thread.title+`</p>
					</div>
					<div class="d-none d-lg-block col-lg-2">
						<span class="badge badge-secondary pill-rounded">`+thread.messages.length+` Messages</span>
					</div>
					<div class="d-none d-lg-block col-lg-3 d-lg-flex">
						<img width="35px" height="35px" src="`+thread.user.image+`"/>
						<p class="ms-3">`+thread.user.name.toUpperCase()+`</p>
					</div>
					<div class="d-none d-lg-block col-lg-4">
						<span class="badge badge-secondary pill-rounded">`+new Date(thread.created_at).toLocaleString()+`</span>
					</div>
				</div>
				</a>`
			});
			
		});

    })
    .catch(function (error){
		console.error(error);
	})
    .then(() => { 

    })
}

function getForumLatestUpdate(){

	let forumItems = document.getElementsByClassName('forumItems');
	console.log(forumItems[0]);



	// forumItems.forEach(forumItem => {
	// 	console.log(forumItem.getAttribute('custom-forum-data'));
	// });

	for (let i = 0; i < forumItems.length; i++) {
		const element = forumItems[i];
		const dataIdValue = element.getAttribute('data-slug');
		console.log(dataIdValue);
	}

	// axios.get('/pokeforum/getforumlatest')
    // .then(response => {

		

    // })
    // .catch(function (error){
	// 	console.error(error);
	// })
    // .then(() => { 

    // })
}

// getForumLatestUpdate();




function getTrendingTopics(){
	axios.get('/pokeforum/gettrendingtopics')
    .then(response => {

		response.data.forEach(thread => {
			trendingTopics.innerHTML += '<a  href="/pokeforum/'+thread.slug+'"><li class="px-2 py-1 rounded list-group-item threads-latest my-2" style="font-size:12px; text-decoration:none; color:black;">'+thread.title+'</li></a>';
			// trendingTopics.innerHTML += '<li href="/pokeforum/'+thread.slug+'" class="list-group-item threads-latest" style="font-size:12px;">'+thread.title+'</li>';
		});

    })
    .catch(function (error){
		console.error(error);
	})
    .then(() => { 

    })
}getTrendingTopics();

// setInterval(() => {
	getForumLatest();
// }, 5000);


// setInterval(() => {
// 	getForumLatestUpdate();
// }, 10000);
