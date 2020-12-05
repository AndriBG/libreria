<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/dashboard.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Nuevo libro</title>
</head>

<body>
    <?php
    session_start(); ?>
    <div class="row" id="panel">
        <div class="col-md-12">
            <div class="text-center">
                <h1>Ingresar libros al almacén</h1>

            </div>
        </div>
    </div>

    <div class="container">
        <br>
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header  text-center">
                    Datos del libro

                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-row">
                            <div class="col-md-4">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="paginas">Paginas</label>
                                <input type="number" name="paginas" id="paginas" class="form-control" min="1">
                            </div>
                            <div class="col-md-4">
                                <label for="precio">Precio</label>
                                <input type="text" name="precio" id="precio" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4">
                                <label for="stock">Unidades entrantes</label>
                                <input type="number" name="stock" id="stock" class="form-control" min="1">
                            </div>
                            <div class="col-md-4">
                                <label for="autor_id">Autor</label>
                                <i class="far fa-question-circle"></i>
                                <select name="autor_id" id="autor_id" class="form-control">

                                </select>
                                <a href="#" data-toggle="modal" data-target="#autoresModal">Agregar autor</a>
                            </div>
                            <div class="col-md-4">
                                <label for="editorial_id">Editorial</label>
                                <i class="far fa-question-circle"></i>
                                <select name="editorial_id" id="editorial_id" class="form-control">

                                </select>
                                <a href="#" data-toggle="modal" data-target="#editorialModal">Agregar editorial</a>

                            </div>
                        </div>

                </div>
                <div class="card-footer">
                    <input type="submit" value="Guardar" class="btn btn-success form-control">
                </div>
                </form>
            </div>
            <br>
            <a href="../administrador/dashboard.php" role="button" class="btn btn-danger">Regresar</a>
        </div>
    </div>


    <!-- modal autores-->
    <div class="modal fade" id="autoresModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar autor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

     <!-- modal autores-->
     <div class="modal fade" id="editorialModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar editorial</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://kit.fontawesome.com/039cae277a.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>