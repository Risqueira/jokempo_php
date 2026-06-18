<?php

$res = "";
$player = "";
$bot = "";

// Função de verificação de resultado
function verificarResultado($player, $bot)
{
    if ($player == $bot) {
        return "Empate";
    }

    if (
        ($player == "pedra" && $bot == "tesoura") ||
        ($player == "papel" && $bot == "pedra") ||
        ($player == "tesoura" && $bot == "papel")
    ) {
        return "Você venceu";
    } else {
        return "Você perdeu";
    }
    
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $opcoes = ["pedra", "tesoura", "papel"];
    $player = $_POST['jogada'] ?? '';
    $bot = $opcoes[rand(0, 2)];
    $res = verificarResultado($player, $bot);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Jo-Ken-Pô</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">

    <div class="container-option">
        <h1>JOKEMPO</h1>

        <form method="post">
            <label for="jogada">Escolha sua jogada:</label><br>
            <select name="jogada" id="jogada" required>
                <option value="">SELECIONE</option>
                <option value="pedra">Pedra</option>
                <option value="tesoura">Tesoura</option>
                <option value="papel">Papel</option>
            </select>
            <br>
            <input type="submit" value="Jogar">
        </form>
</div>
        <br>

        <?php if (!empty($res)): ?>
            <div class="jogadas">
                <h3>Você escolheu:</h3>
                <img src="img/pedra.png" alt="pedra" style="<?= $player == 'pedra' ? '' : 'display:none;' ?>">
                <img src="img/papel.png" alt="papel" style="<?= $player == 'papel' ? '' : 'display:none;' ?>">
                <img src="img/tesoura.png" alt="tesoura" style="<?= $player == 'tesoura' ? '' : 'display:none;' ?>">
            </div>

            <br>

            <div class="jogada">
                <h3>Computador escolheu:</h3>
                <img src="img/pedra.png" alt="pedra" style="<?= $bot == 'pedra' ? '' : 'display:none;' ?>">
                <img src="img/papel.png" alt="papel" style="<?= $bot == 'papel' ? '' : 'display:none;' ?>">
                <img src="img/tesoura.png" alt="tesoura" style="<?= $bot == 'tesoura' ? '' : 'display:none;' ?>">
            </div>

            <br>

            <div class="resultado">
                <?= $res ?>
            </div>

            <br>

            <div id="botao-restart">
            <a href="">Jogar novamente</a>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
