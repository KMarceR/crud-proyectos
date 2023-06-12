<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome"></script>
    <script src="https://kit.fontawesome.com/9580af8d46.js" crossorigin="anonymous"></script>
</head>


<body>

    <h1 class="text-center p-3">Proyectos</h1>



    <div class="p-5 table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre del Proyecto</th>
                    <th scope="col">Fondo Fuente</th>
                    <th scope="col">Monto Planificado</th>
                    <th scope="col">Monto Patrocinado</th>
                    <th scope="col">Monto Fondos Propios</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($datos as $item)
                <tr>
                    <th scope="row">{{$item->idProyecto}}</th>
                    <td>{{$item->idProyecto}}</td>
                    <td>{{$item->nombreProyecto}}</td>
                    <td>{{$item->fuenteFondos}}</td>
                    <td>{{$item->montoPlanificado}}</td>
                    <td>{{$item->montoPatrocinado}}</td>
                    <td>{{$item->montoFondosPropios}}</td>
                    <td>
                        <a href="" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditar"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-file-pdf"></i></a>
                        <a href="" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                    </td>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#modalAgregar">
                        <i class="fa-solid fa-plus"></i> Agregar un nuevo proyecto
                    </button>

                    <button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fa-solid fa-file-pdf"></i> Generar reporte
                    </button>

                    <!-- Modal de agregar datos-->
                    <div class="modal fade" id="modalAgregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar proyecto</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('crud.create'}}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nombre del proyecto</label>
                                            <input type="text" class="form-control" id="txtNombre" aria-describedby="emailHelp" name="txtNombre">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Fondos fuentes</label>
                                            <input type="text" class="form-control" id="txtNombre" aria-describedby="emailHelp" name="txtFondosFuentes">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Monto planificado</label>
                                            <input type="text" class="form-control" id="txtNombre" aria-describedby="emailHelp" name="txtMontoPlanificado">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Monto patrocinado</label>
                                            <input type="text" class="form-control" id="txtNombre" aria-describedby="emailHelp" name="txtMontoPatrocinado">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Monto fondos propios</label>
                                            <input type="text" class="form-control" id="txtNombre" aria-describedby="emailHelp" name="txtMontoPropios">
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                            <button type="button" class="btn btn-primary">Guardar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Modal de modificar datos-->
                    <div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modificar proyecto</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nombre del proyecto</label>
                                            <input type="text" class="form-control" id="txtNombre" aria-describedby="emailHelp" name="txtNombre">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Fondos fuentes</label>
                                            <input type="text" class="form-control" id="txtNombre" aria-describedby="emailHelp" name="txtFondosFuentes">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Monto planificado</label>
                                            <input type="text" class="form-control" id="txtNombre" aria-describedby="emailHelp" name="txtMontoPlanificado">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Monto patrocinado</label>
                                            <input type="text" class="form-control" id="txtNombre" aria-describedby="emailHelp" name="txtMontoPatrocinado">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Monto fondos propios</label>
                                            <input type="text" class="form-control" id="txtNombre" aria-describedby="emailHelp" name="txtMontoPropios">
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                            <button type="button" class="btn btn-primary">Guardar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>