<?php
$perguntas = $_REQUEST['perguntas'];

$icons = array("create" => "Editor", "done" => "Respondida", "remove_red_eye" => "Somente Leitura", "clear" => "Não Respondida", "supervisor_account" => "Professor", "person" => "Aluno", "verified_user" => "Administrador");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perguntas (MVC)</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        .tooltipped {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div id="modalPergunta" class="modal">
        <div class="modal-content">
            <h4>Pergunta</h4>

            <br><br><br>

            <div class="row">
                <form id="formPergunta" method="post" action="./controller/InserirController.php">
                    <div class="input-field col m4 s12">
                        <input id="pergunta" name="pergunta" type="text" class="validate">
                        <label for="pergunta">Pergunta</label>
                    </div>

                    <div class="input-field col m4 s12">
                        <select id="statusPergunta" name="statusPergunta">
                            <option value="done" selected>Respondida</option>
                            <option value="clear">Não Respondida</option>
                        </select>
                        <label>Status da Pergunta</label>
                    </div>

                    <br><br><br><br><br><br><br><br><br>

                    <div class="col s12 right-align">
                        <a class="waves-effect waves-light btn light-blue lighten-1 btnSubmit" id="btnSubmitPergunta" data-form="formPergunta">Enviar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <nav class="light-blue lighten-1" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="index.php?p=home" class="brand-logo">Perguntas (MVC) - Engenharia de Software</a>
    </nav>

    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s12 m6">
                    <h4>Perguntas</h4>
                </div>
            </div>
        </div>

        <table>
            <tr>
                <th>ID</th>
                <th>Pergunta</th>
                <th>ID do Usuário</th>
                <th>Status</th>
            </tr>

            <?php
            foreach ($perguntas as $pergunta) {
            ?>
                <tr>
                    <td><?= $pergunta["id"] ?></td>
                    <td><?= $pergunta["pergunta"] ?></td>
                    <td><?= $pergunta["usuario_id"] ?></td>
                    <td><i class="material-icons tooltipped" data-position="bottom" data-tooltip="<?= $icons[$pergunta["status"]] ?>"><?= $pergunta["status"] ?></i></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>

    <div class="fixed-action-btn">
        <a class="btn-floating btn-large red" id="btn-add-pergunta">
            <i class="large material-icons">add</i>
        </a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        $(() => {
            $('.modal').modal();
            $('.tooltipped').tooltip();
            $('.fixed-action-btn').floatingActionButton();

            $('#btn-add-pergunta').click(() => {
                $('.modal').modal('open');
            })

            $('select').formSelect();

            $('#btnSubmitPergunta').click(() => {
                $('#formPergunta').submit();
            })
        });
    </script>
</body>

</html>