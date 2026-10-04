<?php

function analisarProdutos($produtos, $pesquisa) {

    $maisCaro = "";
    $maisBarato = "";
    $maiorPreco = 0;
    $menorPreco = 999999;
    $soma = 0;

    foreach ($produtos as $produto) {

        $soma += $produto["preco"];

        if ($produto["preco"] > $maiorPreco) {
            $maiorPreco = $produto["preco"];
            $maisCaro = $produto["nome"];
        }

        if ($produto["preco"] < $menorPreco) {
            $menorPreco = $produto["preco"];
            $maisBarato = $produto["nome"];
        }
    }

    $media = $soma / count($produtos);

    echo "Produto mais caro: $maisCaro - R$ $maiorPreco<br>";
    echo "Produto mais barato: $maisBarato - R$ $menorPreco<br>";
    echo "Média dos preços: R$ $media<br>";

    // Pesquisa do produto
    foreach ($produtos as $produto) {
        if ($produto["nome"] == $pesquisa) {
            echo "Produto encontrado: " . $produto["nome"] . " - R$ " . $produto["preco"];
            return;
        }
    }

    echo "Produto não encontrado";
}


$produtos = [
    ["nome" => "Arroz", "preco" => 25],
    ["nome" => "Feijão", "preco" => 10],
    ["nome" => "Café", "preco" => 18],
    ["nome" => "Açúcar", "preco" => 5]
];

analisarProdutos($produtos, "Café");

?>