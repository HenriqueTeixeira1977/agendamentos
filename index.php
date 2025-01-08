<!-- index.php -->
<?php include 'includes/header.php';?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Sistema de Agendamentos</title>
</head>
<style>
    body{
        background-color: #60606062;
    }    
    .container-fuid {background-color: #E1E1E1FF;
        margin: auto;
        padding: 20px;
        width: 100%;
        border: none;
    }
    .row{
        display: flex;
        align-items: center;
        background-color: #FFFFFF00;
        height:80vh; 
        padding: 10px 10px;
        border: none;
    }
    .card{background-color: #000000FF;
        width: 100%;
        border: none;
    }
    .card-body{background-color: #FFFFFFFF;         
        padding: 20px;
        margin: 10px;
        padding: 50px;
        border: none;
        box-shadow: 10px 10px 10px #0000002C;
        border-radius: 10px;
    }

</style>
<body>
    <div class="container-fuid text-center">
        <div class="row">
            <div class="col-lg-4 offset-lg-4" style= "background-color: #FFFFFF00;">
                <div class="card" style="border: none; background-color: #59FF4000">
                    <div class="card-body">
                        <h1>Bem-vindo ao Sistema de Agendamentos</h1>
                        <p>Por favor, faça login para continuar.</p>
                        <a href="login.php"><button type="button" class="btn btn-primary btn-lg">Login</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--
    <div class="row">
        <div class="container">
            <div class="col-lg-12 offset-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h1>Bem-vindo ao Sistema de Agendamentos</h1>
                        <p>Por favor, faça login para continuar.</p>
                        <a href="login.php"><button>Login</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->    
    <?php include 'includes/footer.php';?>
    <script src="assets/js/script.js"></script>

</body>
</html>
