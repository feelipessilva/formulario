
<!DOCTYPE html>
<html>
<head>
<body>
<style>
        body {
            background-color:#363636;
        }
    </style>

    <style>
        div {
            text-align: center;
        }
    </style>


    <div>
        <h1 style="font-size: 50px;font-family:consolas;color:#48D1CC">Formulário</h1>
        <form action="cadastro.php" method="POST">
            <h3 style="font-size: 20px;font-family:georgia;color:#48D1CC">Nome</h3>
    <input style="width:200px;height: 30px;background-color:#00FFFF;" type="text" name="nome" placeholder="Nome">

             <h3 style="font-size: 20px;font-family:georgia;color:#48D1CC">Data de Nascimento</h3>
    <input style="width:200px;height: 30px;background-color:#00FFFF;" type="date" name="data" placeholder="Data de Nascimento">

            <h3 style="font-size: 20px;font-family:georgia;color:#48D1CC">Número de Telefone</h3>
    <input style="width:200px;height: 30px;background-color:#00FFFF;" type="tel" name="numero" placeholder="Telefone">

            <h3 style="font-size: 20px;font-family:georgia;color:#48D1CC">Email</h3>
    <input style="width:200px;height: 30px;background-color:#00FFFF;" type="email" name="email" placeholder="Email">
    <br><br>
       <a href="http:\\localhost\conecta.index.php.php">
            <button class="btn1"  type="submit" 
            name="registrar"id="registrar"
            style="width: 200px;height: 60px;background-color:red;color:white;
            font-size: 40px;font-family:georgia;" 
            >Registrar</button>
       </a>
        </form>
       
    </div>
</body>
</head>
</html>

























