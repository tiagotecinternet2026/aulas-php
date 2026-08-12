<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04 (corrigido)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        /* Para estilizar as células de uma determinada linha: */
        tr:nth-child(3) td { background-color: pink; }  
    </style>
</head>
<body>
    <div class="container">
        <h1>Exercício 04 (corrigido)</h1>
        <hr>

<?php  
$linguagens = [
    [
        "id" => 1,
        "nome" => "HTML",
        "descricao" => "Estruturação"
    ],
    [
        "id" => 2,
        "nome" => "CSS",
        "descricao" => "Estilos"
    ],
    [
        "id" => 3,
        "nome" => "JS",
        "descricao" => "Comportamentos"
    ],
    [
        "id" => 4,
        "nome" => "PHP",
        "descricao" => "Back-End"
    ],
    [
        "id" => 5,
        "nome" => "SQL",
        "descricao" => "Manipulação"
    ],
]
?>
    <?php foreach($linguagens as $linguagem): ?>   
        <p> 
            <b><?= $linguagem["id"] ?></b> 
            <?= $linguagem["nome"] ?>
            <?= $linguagem["descricao"] ?>
        </p>
    <?php endforeach; ?>   

        <hr>

        <table class="table table-hover table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Linguagem</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            
            <tbody>
<?php foreach($linguagens as $linguagem): ?>
                <tr>
                    <td><?= $linguagem['id'] ?></td>
                    <td><?= $linguagem['nome'] ?></td>
                    <td><?= $linguagem['descricao'] ?></td>
                </tr>
<?php endforeach; ?> 
            </tbody>           
        </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>