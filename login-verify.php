<h1>Tela Login-verify</h1>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'config.php'; // Inclui a configuração de conexão com o banco de dados
    if (!isset($conn) || $conn->connect_error) {
        $errorMessage = "Erro: Conexão com o banco de dados não foi estabelecida.";
    } else {
        // Sanitiza e valida os dados enviados pelo formulário
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $password = trim($_POST['password']);
        if (empty($email) || empty($password)) {
            $errorMessage = "Preencha todos os campos!";
        } else {
            // Consulta ao banco para verificar as credenciais
            $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();
                // Verifica a senha utilizando password_verify
                if (password_verify($password, $user['password'])) {
                    session_start();
                    $_SESSION['user'] = $user['id'];
                    $_SESSION['user'] = $user['name'];
                    $_SESSION['user'] = $user['email'];

                    // Redireciona o usuário para a página de home.php
                    header("Location: home.php");
                    exit;
                } else {
                    $errorMessage = "Credenciais inválidas!";
                }
            } else {
                $errorMessage = "Usuário não encontrado!";
            }
            $stmt->close();
        }
        $conn->close();
    }
    // Retorna uma mensagem de erro, se necessário
    if (isset($errorMessage)) {
        echo "
        <script>
            var modal = new bootstrap.Modal(document.getElementById('alertModal'));
            document.getElementById('modalMessage').textContent = '".addslashes($errorMessage)."';
            modal.show();
        </script>
        ";
    }
} else {
    // Redireciona caso o acesso ao arquivo não seja via POST
    header("Location: index.php");
    exit;
}
?>
