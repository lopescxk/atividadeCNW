<html lang="pt-BR">

<head> <meta charset="UTF-8"> <title>Autentificação</title> 
<style>
    body {background-color: bisque; text-align: center; justify-content: center; align-items: center; display: flex; font-family: Georgia, 'Times New Roman', Times, serif; }
    h2 {color: rgb(215, 136, 40);}
</style>
</head>
<body>
    
<?php

$login = "usbw";
$senha = 123;

if ($login === "usbw" && $senha === 123) {
    echo "<h2>"."Login realizado com sucesso!"."</h2>";
} else {echo "<h2>"."Login e(ou) senha estão incorretos"."</h2>";}

?>
</body>
</html>


