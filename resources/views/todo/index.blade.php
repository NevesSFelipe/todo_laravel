<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>FSN | ToDo</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    </head>
    <body>
        <div class="container mt-3">
            <div class="row">
                <div class="col-6">
                    <h1 class="text-info">Lista de Tarefas</h1>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#add">
                        <i class="fa-solid fa-plus"></i>
                        &nbsp; 
                        Adicionar
                    </button>
                </div>
            </div>

            <table class="table table-striped table-bordered mt-3 text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Atividade</th>
                        <th scope="col">Status</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <form>
                            <th scope="row"><h6>Estudar Laravel</h6></th>
                            <td><input type="checkbox" value="true" /></td>
                            <td>
                                <a href="#" class="text-danger"><i class="fa-sharp fa-solid fa-trash"></i></a>
                            </td>
                        </form>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Modal -->
        <form>
            <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">O que você precisa fazer hoje?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" class="form-control" name="activity" placeholder="Descreva sua atividade" />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info">Salvar</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/910e6444fa.js" crossorigin="anonymous"></script>
    </body>
</html>