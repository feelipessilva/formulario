
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formulario";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Verifica se os dados do formulário foram enviados
if (isset($_POST['registrar'])) {
    $nome = $_POST['nome'];
    $data = $_POST['data'];
    $numero = $_POST['numero'];
    $email = $_POST['email'];

    // Insere os dados no banco de dados
    $sql = "INSERT INTO integrantes(nome, data, numero, email) VALUES ('$nome', '$data', '$numero', '$email')";

    if ($conn->query($sql) === TRUE) {

        
       
         echo "Dados inseridos com sucesso";
       


    } else {
       
        echo "Erro ao inserir dados: " . $conn->error;
    }
}

// Fecha a conexão
$conn->close();

?>













































   
