<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon</title>
    <link rel="icon" href="{{asset('/assets/images/misc/pokeball_loader.png')}}">

    
    <!-- Font Awesome -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.css"rel="stylesheet"/>
    <!-- splide -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
    <!-- animate -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- hover -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css" integrity="sha512-csw0Ma4oXCAgd/d4nTcpoEoz4nYvvnk21a8VA2h2dzhPAvjbUIK6V3si7/g/HehwdunqqW18RwCJKpD7rL67Xg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- sweetalert -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css" rel="stylesheet">
	<!-- datatables -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.3.3/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css">
    <!-- hovercss -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css" integrity="sha512-csw0Ma4oXCAgd/d4nTcpoEoz4nYvvnk21a8VA2h2dzhPAvjbUIK6V3si7/g/HehwdunqqW18RwCJKpD7rL67Xg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- summernote -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.css" integrity="sha512-ngQ4IGzHQ3s/Hh8kMyG4FC74wzitukRMIcTOoKT3EyzFZCILOPF0twiXOQn75eDINUfKBYmzYn2AA8DkAk8veQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <!-- <link href="{{asset('https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css')}}" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" integrity="sha512-ZbehZMIlGA8CTIOtdE+M81uj3mrcgyrh6ZFeG33A4FHECakGrOsTPlPQ8ijjLkxgImrdmSVUHn1j+ApjodYZow==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" integrity="sha512-ngQ4IGzHQ3s/Hh8kMyG4FC74wzitukRMIcTOoKT3EyzFZCILOPF0twiXOQn75eDINUfKBYmzYn2AA8DkAk8veQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <!-- mystyle -->    
    <!-- tiny -->
    <!-- <script src="https://cdn.tiny.cloud/1/07stqy3e3io0chwjtj12mvoyin2kczgj764vk1lbl40pxwki/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.0.19/css/froala_editor.min.css" integrity="sha512-frSJfZcjS/cE378Llgugnv4c8y/0a3cS2oVHM08FSEq3dYfJe90KZBI2yEwXDlXnC9My2S2MTEU770dx1lJ9Pw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.4.2/tinymce.min.js" integrity="sha512-sWydClczl0KPyMWlARx1JaxJo2upoMYb9oh5IHwudGfICJ/8qaCyqhNTP5aa9Xx0aCRBwh71eZchgz0a4unoyQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
    

</head>
<body>

    <div id="preloader-background">
        <div id="preloader"></div>
    </div>

    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg  navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand mt-2 mt-lg-0" href="#">
                    <img
                        src="{{asset('/assets/images/brand/pokemonBrandName.png')}}"
                        height="30"
                        alt="MDB Logo"
                        loading="lazy"
                    />
                </a>
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01" aria-controls="navbarExample01"aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarExample01">
                    
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item hvr-underline-from-center">
                            <a class="nav-link" href="/" onclick="showLoader()">Home</a>
                        </li>
                        <li class="nav-item hvr-underline-from-center" id="pokedexLink">
                            <a class="nav-link" href="/pokedex" onclick="showLoader()">Pokedex</a>
                        </li>
                        <li class="nav-item hvr-underline-from-center">
                            <a class="nav-link" href="/pokecard" onclick="showLoader()">PokeCard</a>
                        </li>
                        <li class="nav-item hvr-underline-from-center">
                            <a class="nav-link" href="/pokeforum" onclick="showLoader()">PokeForum</a>
                        </li>
                        @if(auth()->check() && auth()->user()->role == '1')
                        <li class="nav-item hvr-underline-from-center">
                            <a class="nav-link" href="/admin/dashboard" onclick="showLoader()">Dashboard</a>
                        </li>
                        @endif
                        <li class="nav-item hvr-underline-from-center">
                            <a class="nav-link" href="/about" onclick="showLoader()">About</a>
                        </li>
                    </ul>
                    @yield('nav')

                    <!-- Right elements -->
                    <div class="d-flex align-items-center me-5">
                    @guest

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        @if (Route::has('login'))
                        <li class="nav-item hvr-underline-from-center">
                            <a class="nav-link" href="{{ route('login') }}" onclick="showLoader()">Log In</a>
                        </li>
                        @endif
                        @if (Route::has('register'))

                        <li class="nav-item hvr-underline-from-center">
                            <a class="nav-link" href="{{ route('register') }}" onclick="showLoader()">Sign In</a>
                        </li>
                        @endif

                    </ul>

                    @else
                        <!-- <div class="nav-item dropdown me-4">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div> -->
                        <div class="dropdown">
                            <a class="dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown" aria-expanded="false" v-pre style="text-decoration: none; color:white;">
                            <div class="rounded-circle bg-secondary me-2"><img class="m-1" width="30px" src="{{Auth::user()->image}}"/></div>
                            {{ strtoupper(Auth::user()->name) }}
                            </a>
                            <ul
                                class="dropdown-menu dropdown-menu-end"
                                aria-labelledby="navbarDropdownMenuAvatar"
                            >
                                <li>
                                <a class="dropdown-item" href="#">My profile</a>
                                </li>
                                <li>
                                <a class="dropdown-item" href="#">Settings</a>
                                </li>
                                <li>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </ul>
                        </div>
                      
                    @endguest
                
                        <!-- <div class="dropdown">
                        <a
                            class="text-reset me-3 dropdown-toggle hidden-arrow"
                            href="#"
                            id="navbarDropdownMenuLink"
                            role="button"
                            data-mdb-toggle="dropdown"
                            aria-expanded="false"
                        >
                            <i class="fas fa-bell"></i>
                            <span class="badge rounded-pill badge-notification bg-danger">1</span>
                        </a>
                        <ul
                            class="dropdown-menu dropdown-menu-end"
                            aria-labelledby="navbarDropdownMenuLink"
                        >
                            <li>
                            <a class="dropdown-item" href="#">Some news</a>
                            </li>
                            <li>
                            <a class="dropdown-item" href="#">Another news</a>
                            </li>
                            <li>
                            <a class="dropdown-item" href="#">Something else here</a>
                            </li>
                        </ul>
                        </div> -->
                        

                        
                    </div>
                    <!-- Right elements -->

                    <!-- <button class="btn btn-light bg-light btn-sm mx-1" onclick="login()">Log In</button>
                    <button class="btn btn-light bg-light btn-sm me-3" data-mdb-toggle="modal" data-mdb-target="#staticBackdrop">Sign In</button> -->
                    

                   

                </div>
            </div>
        </nav>
        <!-- Navbar -->
    </header>



    @yield('content')

    
 


    <button id="scrollButton" class="scroll-button bg-dark rounded-circle  text-white" style="display: none;"><i class="fa-solid fa-arrow-up"></i></button>

    <div class="modal fade modal-lg" id="postThread" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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


    <footer class="bg-dark text-center text-white">
        <div class="container p-4 pb-0">
            <section class="my-4">
                <div>
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                    ><i class="fab fa-facebook-f"></i
                    ></a>
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                    ><i class="fab fa-twitter"></i
                    ></a>
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                    ><i class="fab fa-google"></i
                    ></a>
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                    ><i class="fab fa-instagram"></i
                    ></a>
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                    ><i class="fab fa-linkedin-in"></i
                    ></a>
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                    ><i class="fab fa-github"></i
                    ></a>
                </div>
            </section>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">© 2020 Copyright:
            <a class="text-white" href="https://sandy-luis-balbuena.epizy.com/">sandy-luis-balbuena.epizy.com</a>
        </div>
    </footer>

    <!-- jquery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js"></script>
	<!-- splide -->
	<script src="{{asset('https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js')}}"></script>
    <!-- axios -->
    <script src="{{asset('https://unpkg.com/axios/dist/axios.min.js')}}"></script>
    <!-- js chart -->
    <script src="{{asset('https://cdn.jsdelivr.net/npm/chart.js@4.3.0/dist/chart.umd.min.js')}}"></script>
	<!-- datatables -->
	<script src="{{asset('https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('https://cdn.datatables.net/rowreorder/1.3.3/js/dataTables.rowReorder.min.js')}}"></script>
    <script src="{{asset('https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js')}}"></script>
    <!-- sweetalert -->
    <script src="{{asset('https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js')}}"></script>
	<script src="{{asset('https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js')}}"></script>
 
    
    <script src="{{asset('/assets/js/navbar.js')}}"></script>
    <script src="{{asset('/assets/js/main.js')}}"></script>

    

    <script>

        tinymce.init({
            selector: 'textarea#summernote',
            height: 350,
            // plugins: [
            //     'advlist', 'autolink', 'lists', 'link',  'charmap', 'preview',
            //     'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
            //     'insertdatetime', 'media', 'table', 'help', 'wordcount'
            // ],
            toolbar: 'undo redo | blocks | ' +
            'bold italic backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat | help',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }',
            image_class_list: [
            { title: 'Small', value: 'custom-small' },
            { title: 'Medium', value: 'custom-medium' },
            { title: 'Large', value: 'custom-large' }
            ],
            image_dimensions: true,
        });
    </script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js" integrity="sha512-lVkQNgKabKsM1DA/qbhJRFQU8TuwkLF2vSN3iU/c7+iayKs08Y8GXqfFxxTZr1IcpMovXnf2N/ZZoMgmZep1YQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->


    <!-- myscript -->   
    @yield('script')



</body>
</html>