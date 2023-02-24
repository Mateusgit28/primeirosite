<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid"><a class="navbar-brand" href="#"><img src="logocarro.png" alt="" height=" 100 " width="100"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid"><a class="navbar-brand" href="#">Concessionária Camargo'S</a><button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">HOME</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">PRODUTOS</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#">CADASTRO</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">CONTATO</a></li>
                            </ul>
                            <form class="d-flex" role="search"> <input class="form-control me-2" type="search" placeholder="PROCURAR" aria-label="PROCURAR"><button class="btn btn-outline-success" type="submit">BUSCAR</button></form>
                </nav>
            </button>
        </div>
    </nav>
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="audir8.png" class="d-block w-100" alt="..." width="800">
                </div>
                <div class="carousel-item">
                    <img src="ferrari.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="lamborghini.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="masseratii.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="porsche.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="porsche.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">PORSCHE 911</h5>
                        <p class="card-text">
                            Conta com potência máxima de 450 cv e 54 kgfm de torque. Velocidade máxima de 308 km/h e em 0/100 km/h em 3,5 segundos.</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            VEJA
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="r8.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">AUDI R8</h5>
                        <p class="card-text">
                            Conta com motor V8 de 4,2 litros e 32 válvulas (4 por cilindro) que rende 500 cv (441 hp) a 7800 rpm, e o faz acelerar de 0 a 100 km/h em 3,8 segundos.</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            VEJA
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="spider.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">FERRARI SPIDER</h5>
                        <p class="card-text">
                            Três preciosidades levam o nome Ferrari 488, vendidas no mercado brasileiro: GTB, Pista e Spider. A GTB é equipada com motor 3.9 V8 turbo.</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            VEJA
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="folgore.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">MASSERATI FOLGORE</h5>
                        <p class="card-text">
                            Três motores com potência combinada de 761 cv e torque de 137,8 m·kgf, alimentados por uma bateria de 92,5 kW·h com tração integral</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            VEJA
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5"></div>
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="urus.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">URUS</h5>
                        <p class="card-text">
                            Conta com potência máxima de 450 cv e 54 kgfm de torque. Velocidade máxima de 308 km/h e em 0/100 km/h em 3,5 segundos.</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            VEJA
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="macan.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">PORSCHE MACAN</h5>
                        <p class="card-text">
                            Conta com motor V8 de 4,2 litros e 32 válvulas (4 por cilindro) que rende 500 cv (441 hp) a 7800 rpm, e o faz acelerar de 0 a 100 km/h em 3,8 segundos, atingindo uma velocidade máxima entre 300 km/h a 320 km/h. Partilha a plataforma com o seu irmão Lamborghini Gallardo..</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            VEJA
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="aventador.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">LAMBORGHINI AVENTADOR</h5>
                        <p class="card-text">
                            Três preciosidades levam o nome Ferrari 488, vendidas no mercado brasileiro: GTB, Pista e Spider. A GTB é equipada com motor 3.9 V8 turbo, de 670 cv de potência e 77,5 kgfm de torque, aliado ao câmbio automatizado de sete marchas..</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            VEJA
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="m55.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">BMW M5</h5>
                        <p class="card-text">
                            rês motores com potência combinada de 761 cv e torque de 137,8 m·kgf, alimentados por uma bateria de 92,5 kW·h com tração integral. Seu desempenho impressiona: de 0 a 100 km/h em 2,7 segundos, de 0 a 200 em 8,8 segundos, velocidade máxima de 320 km/h..</p>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            VEJA
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="cow">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d933388.8702804175!2d-47.49664776875001!3d-23.958662299999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce1d05857ab87d%3A0xd023a926283d2d21!2zR8OqbWVvcyBWZcOtY3Vsb3M!5e0!3m2!1spt-BR!2sbr!4v1677200150027!5m2!1spt-BR!2sbr" width="100% "height=" 400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">BEM VINDO</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">EMAIL</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">TELEFONE</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">NOME</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">FECHAR</button>
                        <button type="button" class="btn btn-primary">SALVAR</button>
                    </div>
                </div>
            </div>
        </div>
    </div>








</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

</html>