# Aula 05 - Continuação sobre Arrays em PHP

## Índice
1. [Tipos de Arrays](#tipos-de-arrays)
2. [Manipulação de Arrays](#manipulação-de-arrays)
3. [Funções Úteis para Arrays](#funções-úteis-para-arrays)
4. [Exercícios](#exercícios)

## Tipos de Arrays
### Arrays Numéricos
Arrays numéricos são aqueles cujos índices são números inteiros.
```php
<?php
$numeros = array(1, 2, 3, 4, 5);
?>
```

### Arrays Associativos
Arrays associativos são aqueles cujos índices são strings.
```php
<?php
$idades = array("Rodrigo" => 30, "Ana" => 25, "Carlos" => 35);
?>
```

### Arrays Multidimensionais
Arrays multidimensionais são arrays que contêm outros arrays.
```php
<?php
$dados = array(
    "pessoa1" => array("nome" => "Rodrigo", "idade" => 30),
    "pessoa2" => array("nome" => "Ana", "idade" => 25)
);
?>
```

## Manipulação de Arrays
### Adicionando Elementos
Para adicionar elementos a um array, você pode usar a sintaxe de colchetes.
```php
<?php
$numeros[] = 6;
$idades["Pedro"] = 28;
?>
```

### Removendo Elementos
Para remover elementos de um array, você pode usar a função `unset`.
```php
<?php
unset($numeros[0]);
unset($idades["Rodrigo"]);
?>
```

## Funções Úteis para Arrays
### `count`
A função `count` retorna o número de elementos em um array.
```php
<?php
echo count($numeros);
?>
```

### `array_merge`
A função `array_merge` combina dois ou mais arrays.
```php
<?php
$merged = array_merge($numeros, $idades);
?>
```

### `array_keys`
A função `array_keys` retorna todas as chaves de um array.
```php
<?php
$keys = array_keys($idades);
?>
```

## Exercícios
1. Os arquivos PHP devem possuir qual extensão?
2. Onde os arquivos PHP devem ser salvos?
3. Qual é o delimitador de blocos PHP?
4. Ao final de cada comando devo utilizar o `;`?
5. A condição `IF` deve possuir `;`?
6. As variáveis `$teste` e `$TESTE` são iguais?
7. Qual comando representa o comentário de apenas uma linha?
8. Como faço o comentário de várias linhas ao mesmo tempo?
9. É necessário “tipar” as variáveis em PHP (informar no momento da criação se ela é string ou inteira)?
10. Crie uma variável, adicione qualquer valor a ela e imprima seu resultado na tela.
11. Crie um array com 10 nomes.
12. Crie um array associativo com pelo menos 3 elementos.
13. Adicione um elemento a um array existente.
14. Remova um elemento de um array existente.
15. Utilize a função `count` para contar o número de elementos em um array.
16. Utilize a função `array_merge` para combinar dois arrays.
17. Utilize a função `array_keys` para obter todas as chaves de um array.
