<?php
session_start();

if(!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Brilho & Charme</title>
</head>
<body>
 

    <nav>
        <ul>
            <li><a href="#conteudo1">Colares</a></li>
            <li><a href="#conteudo2">Brincos</a></li>
            <li><a href="#conteudo3">Pulseiras</a></li>
            <li><a href="#conteudo4">Anéis</a></li>
        </ul>
    </nav>
    <h1>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h1>

    <h2>✨ Brilho & Charme – Realce sua Beleza com Elegância!</h2>
<p>Bem-vinda à Brilho & Charme, sua loja online de bijuterias finas e acessórios que unem estilo, delicadeza e sofisticação.</p>
<p>Aqui, cada peça é escolhida com carinho para valorizar o seu visual e destacar sua personalidade única – do casual ao elegante, do clássico ao moderno.</p>

<p>💍 Descubra anéis, colares, brincos, pulseiras e muito mais, tudo com qualidade, bom gosto e aquele toque especial que só a Brilho & Charme oferece.</p>
<p>🌟 Sinta-se linda todos os dias, com peças acessíveis que transformam qualquer look em uma ocasião especial.</p>

<h3>Brilhe com charme. Encante com estilo.</h3>
    
    <a href="index.php">Sair</a>

    <footer>
    <p>&copy; 2025 Brilho&Charme</p>
</footer>

</body>
</html>