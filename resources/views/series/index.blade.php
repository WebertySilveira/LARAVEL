<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Controle de Séries</title>
</head>
<body>
    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center">
                <div>
                    <button type="button" class="btn btn-outline-light me-2">Entrar</button>
                    <button type="button" class="btn btn-warning">Cadastrar-se</button>
                </div>
            </div>
        </div>
    </header>

    <div class="px-4 pt-5 my-5 border-bottom">
        <h1 class="display-4 fw-bold text-center">Minhas Séries</h1>
        <div class="container my-auto col-xxl-8 px-4 py-5">
            <a href="series/create" class="btn btn-primary mb-2">Adicionar</a>

            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Série</th>
                        <th scope="col">Nota</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($series as $key => $name): ?>
                    <tr>
                        <td><?= $key+1; ?></td>
                        <td><?= $name->series; ?></td>
                        <td>
                            <?php
                            echo(
                                str_repeat('<i class="fas fa-star"></i>',  $name->ranks)
                            ); 
                            ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
    
</body>
</html>