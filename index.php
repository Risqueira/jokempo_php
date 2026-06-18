<?php

$res = "";
$player = "";
$bot = "";

//Função de verificação de resultado
function verificarResultado($player, $bot){
    if ($player == $bot) {
        return "Empate";
    }

    if(
        ($player == "pedra" && $bot == "tesoura") ||
        ($player == "papel" && $bot == "pedra") ||
        ($player == "tesoura" && $bot == "papel")
    ){
        return "Voce venceu";
    }else{
        return "Voce perdeu";
    }
}

if($_SERVER("REQUEST_METHOD") == "POST"){
        $opcoes = ["pedra", "tesoura", "papel"];
        $jogador = $_POST['jogada'] ?? '';
        $bot = $opcoes[rand(0,2)];
        $res = verificarResultado($player, $bot);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container">
    <h1>JOKEMPO</h1>
    
    <form method="post">
        <label for="escolha">Escolha sua jogada:</label><br>
        <select name="jogada" id="jogada" required>
            <option value="">SELECIONE</option>
            <option value="pedra">Pedra</option>
            <option value="tesoura">Tesoura</option>
            <option value="papel">Papel</option>
        </select>
        <br>
        <input type="submit" value="jogar">
    </form>

    <?php if(!empty($res)): ?>
        <div class="jogadas">
            <h3>Você escolheu:</h3>x1
        </div>
</div>
    
</body>
</html>
