<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon</title>
    <link rel="icon" href="assets/images/misc/pokeball_loader.png">


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
    <!-- mystyle -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- sweetalert -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css" rel="stylesheet">



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
                        src="assets/images/brand/pokemonBrandName.png"
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
                        <li class="nav-item active">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pokedex.html">Pokedex</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pokecard.html">PokeCard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                    </ul>
    
                    <!-- Right elements -->
                    <!-- <div class="d-flex align-items-center">
                
                        <div class="dropdown">
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
                        </div>
                        <div class="dropdown">
                        <a
                            class="dropdown-toggle d-flex align-items-center hidden-arrow"
                            href="#"
                            id="navbarDropdownMenuAvatar"
                            role="button"
                            data-mdb-toggle="dropdown"
                            aria-expanded="false"
                        >
                            <img
                            src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                            class="rounded-circle"
                            height="25"
                            alt="Black and White Portrait of a Man"
                            loading="lazy"
                            />
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
                            <a class="dropdown-item" href="#">Logout</a>
                            </li>
                        </ul>
                        </div>
                    </div> -->
                    <!-- Right elements -->
    
                </div>
            </div>
          </nav>
        <!-- Navbar -->
      
        <!-- Background image -->
        <div class="p-5 text-center bg-image hero" style="background-image: url('assets/images/hero/hero.jpg'); height: 80vh; top:0;">
          <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="text-white">
                <h1 class="mb-3"><img src="assets/images/brand/pokemonBrandName2.png" width="40%"></h1>
                <form class="d-flex input-group w-auto mt-5 container" action="pokedex.html" method="get">
                    <input id="pokemonName" name="pokemonName" type="search" class="form-control rounded" placeholder="Pokemon Search" aria-label="Search" aria-describedby="search-addon" required/>
                    <button class="btn bg-dark" type="submit">
                        <i class="fas fa-search text-white"></i>
                    </button>
                </form>
                <!-- <a class="btn btn-outline-light btn-lg" href="#!" role="button"
                >Call to action</a
                > -->
              </div>
            </div>
          </div>
        </div>
        <!-- Background image -->
    </header>
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

        <button id="scrollButton" class="scroll-button bg-dark rounded-circle  text-white" style="display: none;"><i class="fa-solid fa-arrow-up"></i></button>


    </main>

    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Images -->
            <!-- <section class="">
                <div class="row">
                <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                    <div
                    class="bg-image hover-overlay ripple shadow-1-strong rounded"
                    data-ripple-color="light"
                    >
                    <img
                        src="https://mdbcdn.b-cdn.net/img/new/fluid/city/113.webp"
                        class="w-100"
                    />
                    <a href="#!">
                        <div
                        class="mask"
                        style="background-color: rgba(251, 251, 251, 0.2);"
                        ></div>
                    </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                    <div
                    class="bg-image hover-overlay ripple shadow-1-strong rounded"
                    data-ripple-color="light"
                    >
                    <img
                        src="https://mdbcdn.b-cdn.net/img/new/fluid/city/111.webp"
                        class="w-100"
                    />
                    <a href="#!">
                        <div
                        class="mask"
                        style="background-color: rgba(251, 251, 251, 0.2);"
                        ></div>
                    </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                    <div
                    class="bg-image hover-overlay ripple shadow-1-strong rounded"
                    data-ripple-color="light"
                    >
                    <img
                        src="https://mdbcdn.b-cdn.net/img/new/fluid/city/112.webp"
                        class="w-100"
                    />
                    <a href="#!">
                        <div
                        class="mask"
                        style="background-color: rgba(251, 251, 251, 0.2);"
                        ></div>
                    </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                    <div
                    class="bg-image hover-overlay ripple shadow-1-strong rounded"
                    data-ripple-color="light"
                    >
                    <img
                        src="https://mdbcdn.b-cdn.net/img/new/fluid/city/114.webp"
                        class="w-100"
                    />
                    <a href="#!">
                        <div
                        class="mask"
                        style="background-color: rgba(251, 251, 251, 0.2);"
                        ></div>
                    </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                    <div
                    class="bg-image hover-overlay ripple shadow-1-strong rounded"
                    data-ripple-color="light"
                    >
                    <img
                        src="https://mdbcdn.b-cdn.net/img/new/fluid/city/115.webp"
                        class="w-100"
                    />
                    <a href="#!">
                        <div
                        class="mask"
                        style="background-color: rgba(251, 251, 251, 0.2);"
                        ></div>
                    </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                    <div
                    class="bg-image hover-overlay ripple shadow-1-strong rounded"
                    data-ripple-color="light"
                    >
                    <img
                        src="https://mdbcdn.b-cdn.net/img/new/fluid/city/116.webp"
                        class="w-100"
                    />
                    <a href="#!">
                        <div
                        class="mask"
                        style="background-color: rgba(251, 251, 251, 0.2);"
                        ></div>
                    </a>
                    </div>
                </div>
                </div>
            </section> -->
            <!-- Section: Images -->
            <!-- Section: Social media -->
            <section class="my-4">
                <!-- Facebook -->
                <!-- <div class="row justify-content-center align-items-center g-2"> -->
                    

                    <!-- <div class="col-12 col-md-6"> -->

                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                        ><i class="fab fa-facebook-f"></i
                        ></a>
                
                        <!-- Twitter -->
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                        ><i class="fab fa-twitter"></i
                        ></a>
                
                        <!-- Google -->
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                        ><i class="fab fa-google"></i
                        ></a>

                    <!-- </div> -->
            
                    <!-- Instagram -->
                    <!-- <div class="col-12 col-md-6"> -->

                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                        ><i class="fab fa-instagram"></i
                        ></a>
                
                        <!-- Linkedin -->
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                        ><i class="fab fa-linkedin-in"></i
                        ></a>
                
                        <!-- Github -->
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                        ><i class="fab fa-github"></i
                        ></a>
                    <!-- </div> -->

                </div>

            </section>
          <!-- Section: Social media -->
        </div>
        <!-- Grid container -->
      
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2020 Copyright:
          <a class="text-white" href="https://sandy-luis-balbuena.epizy.com/">sandy-luis-balbuena.epizy.com</a>
        </div>
        <!-- Copyright -->
    </footer>

    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js"></script>
    <!-- splide -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js"></script>
    <!-- axios -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <!-- sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>


    <!-- myscript -->   
    <script src="assets/js/index.js"></script>
</body>
</html>