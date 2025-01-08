document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    form.addEventListener("submit", function (e) {
        alert("Agendamento criado com sucesso!");
    });
});



//Validação em Tempo Real com JavaScript (Client-side)
/*
document.addEventListener("DOMContentLoaded", function () {
    // Validação do formulário de cadastro
    const registerForm = document.querySelector("#registerForm");
    const emailInput = document.querySelector("#email");
    const passwordInput = document.querySelector("#password");
    const nameInput = document.querySelector("#name");

    registerForm.addEventListener("submit", function (e) {
        let valid = true;

        // Validação do e-mail
        if (!emailInput.value.includes('@')) {
            alert("Por favor, insira um e-mail válido.");
            valid = false;
        }

        // Validação da senha
        if (passwordInput.value.length < 6) {
            alert("A senha deve ter pelo menos 6 caracteres.");
            valid = false;
        }

        // Validação do nome
        if (nameInput.value.trim() === "") {
            alert("O nome é obrigatório.");
            valid = false;
        }

        if (!valid) {
            e.preventDefault(); // Impede o envio do formulário se a validação falhar
        }
    });
});
*/


//Atualização para Ajax
document.addEventListener("DOMContentLoaded", function () {
    const loginForm = document.querySelector("#loginForm");
    const errorMessage = document.querySelector("#errorMessage");

    loginForm.addEventListener("submit", function (e) {
        e.preventDefault();

        const formData = new FormData(loginForm);
        
        fetch('login_ajax.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                window.location.href = "appointments.php"; // Redireciona para a página de agendamentos
            } else {
                errorMessage.style.display = 'block';
                errorMessage.textContent = data.message; // Exibe a mensagem de erro
            }
        })
        .catch(error => {
            console.error('Erro:', error);
            alert('Erro inesperado. Tente novamente mais tarde.');
        });
    });
});



//Requisição Ajax e popular a tabela de agendamentos:
document.addEventListener("DOMContentLoaded", function () {
    // Carregar agendamentos com Ajax
    fetch('appointments_ajax.php')
        .then(response => response.json())
        .then(data => {
            const tableBody = document.querySelector("#appointmentsTable tbody");
            tableBody.innerHTML = "";
            
            data.forEach(appointment => {
                const row = document.createElement("tr");
                row.innerHTML = `
                    <td>${appointment.date}</td>
                    <td>${appointment.time}</td>
                    <td>${appointment.service_id}</td>
                    <td>${appointment.status}</td>
                `;
                tableBody.appendChild(row);
            });
        });
});

