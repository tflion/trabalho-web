<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/administrador/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
</head>

<body>
    <header>
        <div>
            <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
                <a class="navbar-brand" href="#">PetCare</a>
                <div>
                    <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(Página
								atual)</span></a>
                        <a class="nav-item nav-link active" href="#">Clientes</a>
                        <a class="nav-item nav-link active" href="#">Planos</a>
                        <a class="nav-item nav-link active" href="#">Serviços</a>
                        <a class="nav-item nav-link active" href="#">Funcionarios</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <nav class="menu-lateral col-md-2 d-none d-md-block sidebar" style="width: 225px; float: left;">
        <h3 class="servico" style="text-align: center;">Serviços</h3>
        <div class="list-group shadow-lg">
            <a href="#" class="list-group-item list-group-item-action">Vacinas</a>
            <a href="#" class="list-group-item list-group-item-action">Internação</a>
            <a href="#" class="list-group-item list-group-item-action">Banho e Tosa</a>
            <a href="#" class="list-group-item list-group-item-action">Hotel</a>
        </div>
    </nav>
    <div>
        <h3 class="servico" style="text-align: center;">Vacinas</h3>
        <table class="table table-dark shadow-lg dt-resposive" id="tabela" style="width: 1050px;">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Horário</th>
                    <th>Dia</th>
                    <th>Tipo de Serviço</th>
                    <th class="coluna-opcao">Opções</th>
                </tr>
            </thead>
            <tbody style="text-align: center;">
            <?php
                include_once 'conexao.php';
                $consulta = $conn->query("SELECT id, nome, dia, horario, tipo_servico FROM tb_agendamento;");


                while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td> {$linha['nome']} </td>";
                    echo "<td> {$linha['dia']} </td>";
                    echo "<td> {$linha['horario']} </td>";
                    echo "<td> {$linha['tipo_servico']} </td>";
                    echo "<td>
                            <div class='btn-group' role='group' aria-label='Basic example'>
                                <button type='button' class='btn btn-primary'>Editar</button>
                                <a href='deletar.php?id=".$linha['id']."' type='button' class='btn btn-danger'>Remover</a>
                                <button type='button' class='btn btn-warning'>Descrição</button>
                            </div>
                        </td>";
                    
                }
            ?>
                <!-- <tr>
                    <td>Tiger Nixon</td>
                    <td>20:59</td>
                    <td>27/07/2020</td>
                    <td>Vacina</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-primary">Editar</button>
                            <button type="button" class="btn btn-danger">Remover</button>
                            <button type="button" class="btn btn-success">Concluir</button>
                            <button type="button" class="btn btn-warning">Descrição</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Rafael Nicolas</td>
                    <td>20:51</td>
                    <td>27/12/2020</td>
                    <td>Vacina</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-primary">Editar</button>
                            <button type="button" class="btn btn-danger">Remover</button>
                            <button type="button" class="btn btn-success">Concluir</button>
                            <button type="button" class="btn btn-warning">Descrição</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>José de Assis</td>
                    <td>22:30</td>
                    <td>17/02/2020</td>
                    <td>Vacina</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-primary">Editar</button>
                            <button type="button" class="btn btn-danger">Remover</button>
                            <button type="button" class="btn btn-success">Concluir</button>
                            <button type="button" class="btn btn-warning">Descrição</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>José de Assis</td>
                    <td>22:30</td>
                    <td>17/02/2020</td>
                    <td>Vacina</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-primary">Editar</button>
                            <button type="button" class="btn btn-danger">Remover</button>
                            <button type="button" class="btn btn-success">Concluir</button>
                            <button type="button" class="btn btn-warning">Descrição</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Lucas Eduardo</td>
                    <td>22:30</td>
                    <td>17/02/2020</td>
                    <td>Vacina</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-primary">Editar</button>
                            <button type="button" class="btn btn-danger">Remover</button>
                            <button type="button" class="btn btn-success">Concluir</button>
                            <button type="button" class="btn btn-warning">Descrição</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Daniel da Silva</td>
                    <td>22:30</td>
                    <td>17/02/2020</td>
                    <td>Vacina</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-primary">Editar</button>
                            <button type="button" class="btn btn-danger">Remover</button>
                            <button type="button" class="btn btn-success">Concluir</button>
                            <button type="button" class="btn btn-warning">Descrição</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Dirceu Lopes</td>
                    <td>22:30</td>
                    <td>17/02/2020</td>
                    <td>Vacina</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-primary">Editar</button>
                            <button type="button" class="btn btn-danger">Remover</button>
                            <button type="button" class="btn btn-success">Concluir</button>
                            <button type="button" class="btn btn-warning">Descrição</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Rafael de Andrade</td>
                    <td>22:30</td>
                    <td>17/02/2020</td>
                    <td>Vacina</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-primary">Editar</button>
                            <button type="button" class="btn btn-danger">Remover</button>
                            <button type="button" class="btn btn-success">Concluir</button>
                            <button type="button" class="btn btn-warning">Descrição</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Raimundo Nonato</td>
                    <td>22:30</td>
                    <td>17/02/2020</td>
                    <td>Vacina</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-primary">Editar</button>
                            <button type="button" class="btn btn-danger">Remover</button>
                            <button type="button" class="btn btn-success">Concluir</button>
                            <button type="button" class="btn btn-warning">Descrição</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Nonato de Souza</td>
                    <td>22:30</td>
                    <td>17/02/2020</td>
                    <td>Vacina</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-primary">Editar</button>
                            <button type="button" class="btn btn-danger">Remover</button>
                            <button type="button" class="btn btn-success">Concluir</button>
                            <button type="button" class="btn btn-warning">Descrição</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Italo Miguel</td>
                    <td>22:30</td>
                    <td>17/02/2020</td>
                    <td>Vacina</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-primary">Editar</button>
                            <button type="button" class="btn btn-danger">Remover</button>
                            <button type="button" class="btn btn-success">Concluir</button>
                            <button type="button" class="btn btn-warning">Descrição</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Giovanny Santos</td>
                    <td>22:30</td>
                    <td>17/02/2020</td>
                    <td>Vacina</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-primary">Editar</button>
                            <button type="button" class="btn btn-danger">Remover</button>
                            <button type="button" class="btn btn-success">Concluir</button>
                            <button type="button" class="btn btn-warning">Descrição</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Jonas Rafael</td>
                    <td>22:30</td>
                    <td>17/02/2020</td>
                    <td>Vacina</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-primary">Editar</button>
                            <button type="button" class="btn btn-danger">Remover</button>
                            <button type="button" class="btn btn-success">Concluir</button>
                            <button type="button" class="btn btn-warning">Descrição</button>
                        </div>
                    </td>
                </tr> -->
            </tbody>
            <tfoot>
                <tr>
                    <th>Nome</th>
                    <th>Horário</th>
                    <th>Dia</th>
                    <th>Tipo de Serviço</th>
                    <th>Opções</th>
                </tr>
            </tfoot>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script src="js/administrador/administrador.js"></script>

</body>

</html>