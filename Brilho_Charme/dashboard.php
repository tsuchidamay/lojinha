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
 <div class="titulo">
    <h1><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bluesky" viewBox="0 0 16 16">
  <path d="M3.468 1.948C5.303 3.325 7.276 6.118 8 7.616c.725-1.498 2.698-4.29 4.532-5.668C13.855.955 16 .186 16 2.632c0 .489-.28 4.105-.444 4.692-.572 2.04-2.653 2.561-4.504 2.246 3.236.551 4.06 2.375 2.281 4.2-3.376 3.464-4.852-.87-5.23-1.98-.07-.204-.103-.3-.103-.218 0-.081-.033.014-.102.218-.379 1.11-1.855 5.444-5.231 1.98-1.778-1.825-.955-3.65 2.28-4.2-1.85.315-3.932-.205-4.503-2.246C.28 6.737 0 3.12 0 2.632 0 .186 2.145.955 3.468 1.948"/>
</svg> Brilho & Charme</h1>
 
</div>

    <nav>
        <ul>
            <li><a href="#conteudo1">Colares</a></li>
            <li><a href="#conteudo2">Brincos</a></li>
            <li><a href="#conteudo3">Pulseiras</a></li>
            <li><a href="#conteudo4">Anéis</a></li>
        </ul>
    </nav>
    <h2>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h2>

    <div class="box">
     
<p>Bem-vinda à Brilho & Charme, sua loja online de bijuterias finas e acessórios que unem estilo, delicadeza e sofisticação.</p>
<p>Aqui, cada peça é escolhida com carinho para valorizar o seu visual e destacar sua personalidade única – do casual ao elegante, do clássico ao moderno.</p>

<p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bluesky" viewBox="0 0 16 16">
  <path d="M3.468 1.948C5.303 3.325 7.276 6.118 8 7.616c.725-1.498 2.698-4.29 4.532-5.668C13.855.955 16 .186 16 2.632c0 .489-.28 4.105-.444 4.692-.572 2.04-2.653 2.561-4.504 2.246 3.236.551 4.06 2.375 2.281 4.2-3.376 3.464-4.852-.87-5.23-1.98-.07-.204-.103-.3-.103-.218 0-.081-.033.014-.102.218-.379 1.11-1.855 5.444-5.231 1.98-1.778-1.825-.955-3.65 2.28-4.2-1.85.315-3.932-.205-4.503-2.246C.28 6.737 0 3.12 0 2.632 0 .186 2.145.955 3.468 1.948"/>
</svg> Descubra anéis, colares, brincos, pulseiras e muito mais, tudo com qualidade, bom gosto e aquele toque especial que só a Brilho & Charme oferece.</p>
<p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bluesky" viewBox="0 0 16 16">
  <path d="M3.468 1.948C5.303 3.325 7.276 6.118 8 7.616c.725-1.498 2.698-4.29 4.532-5.668C13.855.955 16 .186 16 2.632c0 .489-.28 4.105-.444 4.692-.572 2.04-2.653 2.561-4.504 2.246 3.236.551 4.06 2.375 2.281 4.2-3.376 3.464-4.852-.87-5.23-1.98-.07-.204-.103-.3-.103-.218 0-.081-.033.014-.102.218-.379 1.11-1.855 5.444-5.231 1.98-1.778-1.825-.955-3.65 2.28-4.2-1.85.315-3.932-.205-4.503-2.246C.28 6.737 0 3.12 0 2.632 0 .186 2.145.955 3.468 1.948"/>
</svg> Sinta-se linda todos os dias, com peças acessíveis que transformam qualquer look em uma ocasião especial.</p>

</div>

<h3>Brilhe com charme. Encante com estilo.</h3>
    
    <a href="index.php">Sair</a>

    <footer>
    <p>&copy; 2025 Brilho&Charme</p>
</footer>

</body>
</html>