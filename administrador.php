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
                <a class="navbar-brand" href="index.html">PetCare</a>
                <div>
                    <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="index.html">Home <span class="sr-only">(Página atual)</span></a>
                        <a class="nav-item nav-link active" href="servicos.html">Serviços</a>

                    </div>
                </div>
            </nav>
        </div>
    </header>

    <nav class="menu-lateral col-md-2 d-none d-md-block sidebar" style="width: 225px; float: left;">
        <h3 class="servico" style="text-align: center;">Editar Dados</h3>
        <div class="list-group shadow-lg">
            <form action="atualizar.php" method="post" name="form">
            <?php
                @$id = $_GET["id"];
                @$nome = $_GET["nome"];
                @$dia = $_GET["dia"];
                @$horario = $_GET["horario"];
                @$tipo_servico = $_GET["tipo_servico"];
                @$descricao = $_GET["descricao"];
            ?>
                <span style="color: white;">Nome:</span>
                <input type="text" name="fnome" id="name" style="border-radius: 20px; border: none;" value="<?php echo $nome; ?>">
                <span style="color: white;">Dia:</span>
                <input type="text" name="fdia" id="dia" style="border-radius: 20px; border: none;" value="<?php echo $dia; ?>">
                <span style="color: white;">Horário:</span>
                <input type="text" name="fhorario" id="dia" style="border-radius: 20px; border: none;" value="<?php echo $horario; ?>">
                <span style="color: white;">Qual seria o serviço? </span>
                        <select name="fservico" id="tipo_servico" required>
                            <option selected="selected" value="<?php echo $tipo_servico; ?>"><?php echo $tipo_servico; ?></option>
                            <option value="Vacina">Vacina</option>
                            <option value="Internação">Internação</option>
                            <option value="Banho e Tosa">Banho e Tosa</option>
                            <option value="Hotel">Hotel</option>
                            <option value="Outro">Outro</option>
                        </select>
                <span style="color: white;">Descriçãop:</span>
                <textarea type="text" name="fdescricao" id="descricao" style="border-radius: 20px; border: none;"><?php echo $descricao; ?></textarea>
                <input type="text" name="fid" id="fid" style="border-radius: 20px; border: none; background-color: transparent; color: transparent;" value="<?php echo $id; ?>">
                <button type="submit" name="enviar" value="enviar" class="btn-link">Enviar</button>
            </form>
            
        </div>
    </nav>
    <div>
        <h3 class="servico" style="text-align: center;">Vacinas</h3>
        <table class="table table-dark shadow-lg dt-resposive" id="tabela" style="width: 1050px;">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Dia</th>
                    <th>Horário</th>
                    <th>Tipo de Serviço</th>
                    <th>Descrição</th>
                    <th class="coluna-opcao">Opções</th>
                </tr>
            </thead>
            <tbody style="text-align: center;">
            <?php
                include_once 'conexao.php';
                $consulta = $conn->query("SELECT id, nome, dia, horario, tipo_servico, descricao FROM tb_agendamento;");

                while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td id='tid'> {$linha['id']} </td>";
                    echo "<td id='tnome'> {$linha['nome']} </td>";
                    echo "<td id='tdia'> {$linha['dia']} </td>";
                    echo "<td id='thorario'> {$linha['horario']} </td>";
                    echo "<td id='tservico'> {$linha['tipo_servico']} </td>";
                    echo "<td id='tdescricao'> {$linha['descricao']} </td>";
                    echo "<td>
                            <div class='btn-group' role='group' aria-label='Basic example'>
                            <a href='administrador.php?id=".$linha['id']."&dia=".$linha['dia']."&horario=".$linha['horario']."&tipo_servico=".$linha['tipo_servico']."&nome=".$linha['nome']."&descricao=".$linha['descricao']."' type='button' class='btn btn-primary'>Editar</a>
                                <a href='deletar.php?id=".$linha['id']."' type='button' class='btn btn-danger'>Remover</a>
                            </div>
                        </td>";
                    
                }
            ?>
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