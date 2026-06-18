# Jo-Ken-Pô em PHP

## Descrição

Este projeto consiste em um jogo de Jo-Ken-Pô (Pedra, Papel e Tesoura) desenvolvido utilizando PHP, HTML e CSS.

O jogador escolhe uma das opções disponíveis através de um formulário e joga contra o computador, que realiza uma escolha aleatória. Após a jogada, o sistema exibe as escolhas de ambos os participantes e informa o resultado da partida.

---

## Funcionalidades

* Escolha entre Pedra, Papel ou Tesoura.
* Geração automática da jogada do computador.
* Comparação das jogadas.
* Exibição do resultado:

  * Vitória
  * Derrota
  * Empate
* Exibição visual das jogadas através de imagens.
* Botão para jogar novamente.
* Interface estilizada com CSS.

---

## Tecnologias Utilizadas

* PHP
* HTML5
* CSS3

---

## Estrutura do Projeto

```text
Projeto/
│
├── index.php
├── style.css
│
└── img/
    ├── pedra.png
    ├── papel.png
    └── tesoura.png
```

---

## Regras do Jogo

| Jogador | Computador | Resultado        |
| ------- | ---------- | ---------------- |
| Pedra   | Tesoura    | Jogador vence    |
| Pedra   | Papel      | Computador vence |
| Papel   | Pedra      | Jogador vence    |
| Papel   | Tesoura    | Computador vence |
| Tesoura | Papel      | Jogador vence    |
| Tesoura | Pedra      | Computador vence |
| Igual   | Igual      | Empate           |

---

## Funcionamento

1. O usuário seleciona uma jogada.
2. Ao clicar em "Jogar", o formulário envia os dados para o PHP.
3. O computador escolhe aleatoriamente uma opção.
4. Uma função chamada `verificarResultado()` compara as jogadas.
5. O sistema exibe:

   * Jogada do usuário;
   * Jogada do computador;
   * Resultado da partida.

---

## Função Principal

```php
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
    }

    return "Você perdeu";
}
```

---

## Como Executar

### Requisitos

* PHP 8.0 ou superior
* Servidor local (XAMPP, WAMP ou Laragon)

### Passos

1. Clone ou baixe o projeto.
2. Coloque a pasta dentro do diretório do servidor local.
3. Inicie o Apache.
4. Acesse pelo navegador:

```text
http://localhost/nome-da-pasta
```

5. Escolha uma jogada e divirta-se.

---

## Melhorias Futuras

* Adicionar GIFs animados para as jogadas.
* Implementar placar de vitórias e derrotas.
* Adicionar efeitos sonoros.
* Melhorar a responsividade para dispositivos móveis.
* Criar animações entre as jogadas do jogador e do computador.

---

## Autor

Henrique Michel Rodrigues

Projeto desenvolvido para prática de PHP, HTML e CSS.
