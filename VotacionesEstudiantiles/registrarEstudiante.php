<!DOCTYPE html>
<cshtml lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscribir Estudiantes</title>


    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 25px;">
            <div class="col-6 shadow-lg p-3 mb-5 bg-body rounded ">
                <form>
                    <div class="text">
                        <h6 class="display-6" style="text-align: center; margin-bottom: 30px;"> Inscripción Estudiantes</h6>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Nombre" aria-label="nombres" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Apellidos" aria-label="apellidos"
                                   required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Identificacion" aria-label="Identificacion"
                                   required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <select class="form-select" aria-label="grado" required>
                                <option selected>Grado</option>
                                <option value="0">Pre-escolar</option>
                                <option value="1">1°</option>
                                <option value="2">2°</option>
                                <option value="3">3°</option>
                                <option value="4">4°</option>
                                <option value="5">5°</option>
                                <option value="6">6°</option>
                                <option value="7">7°</option>
                                <option value="8">8°</option>
                                <option value="9">9°</option>
                                <option value="10">10°</option>
                                <option value="11">11°</option>
                            </select>
                        </div>
                        <div class="col">
                            <select class="form-select" aria-label="curso" required>
                                <option selected>Curso</option>
                                <option value="1">01</option>
                                <option value="2">02</option>
                                <option value="3">03</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 d-grid gap-2">
                        <button type="submit" class="btn" style="background-color: #1FD68D;">Guardar</button>
                    </div>
                    <div>
                        <a href="./Index">
                            <button type="button" class="salir" style="width:525px;">Salir</button>
                        </a>
                    </div>
                </form>
                
            </div>
        </div>
    </div>




    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
            crossorigin="anonymous"></script>
</body>

</html>