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
        <h1 class="display-4 fw-bold text-center">Adicionar Série</h1>
        <div class="col-xxl-8 px-4 py-5">
            <form 
                method="POST" 
                class="row row-cols-lg-auto g-3 align-items-center d-flex justify-content-center"
            >
            @csrf
                <div class="col-12">
                    <label class="visually-hidden" for="inlineFormInputGroupUsername">Série</label>
                    <div class="input-group">
                    <input type="text" name="serie" class="form-control" id="inlineFormInputGroupUsername" placeholder="Série">
                    </div>
                </div>

                <div class="col-6">
                    <select class="form-select" id="inlineFormSelectPref" name="rank">
                        <option selected>Nota</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>

                <div class="col-6">
                    <button type="submit" class="btn btn-primary">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>