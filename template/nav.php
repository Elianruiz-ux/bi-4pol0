<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    
    <title>Puntaciones BI</title>
</head>

<body>


    <!-- Se inicia navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Puntuaciones</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#regpar">Registrar Participante</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#regprem">Registrar Premio</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Se cierra navbar -->


    <!-- Se inicia container -->
    <div class="container">
        <div>


            <div class="modal fade" id="regpar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Registrar Participante</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div>
                                <!-- Formulario de registrar participante -->
                                <div>
                                    <div>
                                        <form name="form" action="template-msg/principal.php" method="POST" autocomplete="off" >
                                            <div class="group">
                                                <input type="text" name="documento" required="required" pattern="[0-9]+" minlength="6" maxlength="12" /><span class="highlight"></span><span class="bar"></span>
                                                <label>Documento</label>
                                                <input type="hidden" name="puntaje" />
                                            </div>
                                            <div class="group">
                                                <input type="text" name="nombre" required="required" pattern="[A-Z-a-z\s]+" /><span class="highlight"></span><span class="bar"></span>
                                                <label>Nombre</label>
                                                <input type="hidden" name="puntaje" />
                                            </div>
                                            <input type="submit" value="Registrar" class="input_btn_form" reset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



            <div class="modal fade" id="regprem" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Registrar Premio</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div>
                                <div>
                                    <form action="template-msg/premio.php" method="POST" autocomplete="off">
                                        <div class="group">
                                            <input type="text" name="nombre" required="required" pattern="[A-Z-a-z\s ]+" /><span class="highlight"></span><span class="bar"></span>
                                            <label>Premio</label>
                                            <input type="hidden" name="puntaje" />
                                        </div>

                                        <div class="group">
                                            <input type="number" name="pts" required="required" pattern="[0-9]+" min="5" max="100" /><span class="highlight"></span><span class="bar"></span>
                                            <label>Puntos</label>
                                            <input type="hidden" name="puntaje" />
                                        </div>
                                        <div>
                                            <input type="submit" value="Registrar" class="input_btn_form" reset>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>