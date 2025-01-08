<?php
session_start();
if (!isset($_SESSION['user'])) {
    // Se a sessão não estiver ativa, redirecionar para a página de login
    header("Location: home.php");
    exit;
}

$sql = "SELECT * FROM appointments WHERE client_id=" . $_SESSION['user_id'];
$result = $conn->query($sql);


?>
<?php
    include 'includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div cass="container">
        <h2>Meus Agendamentos</h2>
        <a href="new_appointment.php" class="btn btn-success">Novo Agendamento</a>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Hora</th>
                    <th>Serviço</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($appointment = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $appointment['date']; ?></td>
                        <td><?php echo $appointment['time']; ?></td>
                        <td><?php echo $appointment['service_id']; ?></td>
                        <td><?php echo $appointment['status']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    //Atualize appointments.php para usar Ajax na listagem:
    <div class="container">
        <h2>Meus Agendamentos</h2>
        <a href="new_appointment.php" class="btn btn-success">Novo Agendamento</a>
        <table class="table mt-4" id="appointmentsTable">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Hora</th>
                    <th>Serviço</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <!-- Os agendamentos serão carregados aqui via Ajax -->
            </tbody>
        </table>
    </div>
    <script src="assets/js/script.js"></script>

    <?php include 'includes/footer.php'; ?>
</body>
</html>






