<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">

        <title>Bootstrap 4</title>
    </head>
    <body>
        <div class="container">
            <h1>Container</h1><h1>Container</h1>
        </div>
        <div class="container-fluid">
            <h1>Container-fluid</h1><h1>Container-fluid</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-6 bg-light">
                    <p class="mx-auto">hola mundo</p>
                </div>
                <div class="col-6 bg-secondary">
                    <p>hola mundo</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <p class="col-12 col-sm-4 col-md bg-danger">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                <p class="col-12 col-sm-4 col-md bg-warning text-center m-4 p-3">lorem ipsum</p>
                <p class="col-12 col-sm-4 col-md bg-info text-center pt-3 pb-3">lorem ipsum</p>
                <p class="col-12 col-sm-6 col-md bg-gradient text-center">lorem ipsum</p>
                <p class="col-12 col-sm-6 col-md bg-light text-center">lorem ipsum</p>
            </div>
        </div>
        <div class="container py-2">
            <div class="row">
                <div class="alert alert-primary col mx-1" role="alert">
                    This is a primary alert—check it out!
                </div>
                <div class="alert alert-secondary col mx-1" role="alert">
                    This is a secondary alert—check it out!
                </div>
                <div class="alert alert-success col mx-1" role="alert">
                    This is a success alert—check it out!
                </div>
                <div class="alert alert-danger col mx-1" role="alert">
                    This is a danger alert—check it out!
                </div>
            </div>
            <div class="row">
                <div class="alert alert-warning col mx-1" role="alert">
                    This is a warning alert—check it out!
                </div>
                <div class="alert alert-info col mx-1" role="alert">
                    This is a info alert—check it out!
                </div>
                <div class="alert alert-light col mx-1" role="alert">
                    This is a light alert—check it out!
                </div>
                <div class="alert alert-dark col mx-1" role="alert">
                    This is a dark alert—check it out!
                </div>
            </div>
            <div class="container text-center py-3 bg-primary my-3 rounded">
                <h2>Example heading <span class="badge bg-secondary rounded">New</span></h2>
            </div>
            <div class="container">
                <div class="row text-center">
                    <button type="button" class="btn btn-primary col m-3 p-3">
                        Notifications <span class="badge bg-secondary">4</span>
                    </button>
                    <button type="button" class="btn btn-primary col m-3 p-3">
                        Profile <span class="badge bg-secondary">9</span>
                        <span class="sr-only">unread messages</span>
                    </button>
                </div>
            </div>
            <div class="container my-3">
                <div class="row">
                    <span class="badge bg-primary col p-3 m-3 rounded-pill">Primary</span>
                    <span class="badge bg-secondary col p-3 m-3 rounded-pill">Secondary</span>
                    <span class="badge bg-success col p-3 m-3 rounded-pill">Success</span>
                    <span class="badge bg-danger col p-3 m-3 rounded-pill">Danger</span>
                </div>
                <div class="row">
                    <span class="badge bg-warning text-dark col p-3 m-3 rounded-pill">Warning</span>
                    <span class="badge bg-info text-dark col p-3 m-3 rounded-pill">Info</span>
                    <span class="badge bg-light text-dark col p-3 m-3 rounded-pill">Light</span>
                    <span class="badge bg-dark col p-3 m-3 rounded-pill">Dark</span>
                </div>
            </div>
            <div class="container bg-info text-light rounded-pill">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                </nav>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <button type="button" class="btn btn-primary col m-3 p-3">Primary</button>
                    <button type="button" class="btn btn-secondary col m-3 p-3">Secondary</button>
                    <button type="button" class="btn btn-success col m-3 p-3">Success</button>
                    <button type="button" class="btn btn-danger col m-3 p-3">Danger</button>
                </div>
                <div class="row">
                    <button type="button" class="btn btn-warning col m-3 p-3">Warning</button>
                    <button type="button" class="btn btn-info col m-3 p-3">Info</button>
                    <button type="button" class="btn btn-light col m-3 p-3">Light</button>
                    <button type="button" class="btn btn-dark col m-3 p-3">Dark</button>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <button type="button" class="btn btn-outline-primary col m-3 p-3">Primary</button>
                    <button type="button" class="btn btn-outline-secondary col m-3 p-3">Secondary</button>
                    <button type="button" class="btn btn-outline-success col m-3 p-3">Success</button>
                    <button type="button" class="btn btn-outline-danger col m-3 p-3">Danger</button>
                </div>
                <div class="row">
                    <button type="button" class="btn btn-outline-warning col m-3 p-3">Warning</button>
                    <button type="button" class="btn btn-outline-info col m-3 p-3">Info</button>
                    <button type="button" class="btn btn-outline-light col m-3 p-3">Light</button>
                    <button type="button" class="btn btn-outline-dark col m-3 p-3">Dark</button>
                </div>
            </div>
            <div class="btn-group me-2" role="group" aria-label="First group">
                <button type="button" class="btn btn-primary">1</button>
                <button type="button" class="btn btn-primary">2</button>
                <button type="button" class="btn btn-primary">3</button>
                <button type="button" class="btn btn-primary">4</button>
            </div>
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="container-fluid my-3">
                    <div class="carousel-inner">
                        <div class="carousel-item active"><!-- imágenes deben tener el mismo tamaño -->
                            <img src="https://media.a24.com/p/dabda78051b0fcd1f37fe0764648b14f/adjuntos/296/imagenes/008/674/0008674234/naruto-netflixpng.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTi3VaYyfNj8qGdMAfP5vmumW_si9b-G-3aMw&usqp=CAU" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqMWHmJXT8dfZzIy0Id-AVplQ48hHXG3IdJQ&usqp=CAU" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
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
            <div class="container-fluid">
                <p>
                    <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button>
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
                </p>
                <div class="row">
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                            <div class="card card-body">
                                Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                            <div class="card card-body">
                                Some placeholder content for the second collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid bg-danger">
                
            </div>
        </div>
        <!-- no-gutter elimina todos los padding del elemento -->
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>