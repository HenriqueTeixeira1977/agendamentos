<?php include 'includes/header.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>Tela de Login</title>
</head>
<style>
    body{
        background-color: #F6F6F6FF;
    }    
    .row{
        background-color: #FFA07000;
        display: flex;
        align-items: center;
        margin: auto;
        height: 400px;
    }
    .card-body{
        background-color: #FFFFFFFF;
        margin: auto;
        height: 350px;
        border-radius: 10px;
    }


</style>
<body>

    
    <div class="container-fluid" style="background-color: #D9D9D9FF;  display: flex; align-items: center; height: 100vh">
        <div class="row">
            <div class="col-lg-4 offset-lg-4" style= "background-color: #FFFFFF00;">
                <div class="card" style="border: none; background-color: #59FF4000">
                    <div class="card-body">

                        <h2>Login</h2>
                        <form id="loginForm" method="POST">
                            <div class="form-group">
                                <label for="email">E-mail:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Senha:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Entrar</button>
                        </form>
                        <!-- Opção para cadastro -->
                        <div class="mt-3">
                            <p>Não tem uma conta? <a href="../views/register.php" class="btn btn-link">Cadastre-se aqui</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>     
    <div id="errorMessage" class="alert alert-danger mt-3" style="display:none;"></div>

    
    
</div>

<script src="assets/js/script.js"></script>
</body>
</html>




<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'includes/db.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_email'] = $user['email'];
            header("Location: appointments.php");
        } else {
            echo "Credenciais inválidas!";
        }
    } else {
        echo "Usuário não encontrado!";
    }

    $conn->close();
}
?>

<?php include 'includes/footer.php'; ?>