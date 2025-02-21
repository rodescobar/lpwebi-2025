# Aula 04 - PHP Básico

## Índice
1. [Arquivos PHP](#arquivos-php)
2. [Delimitação de código PHP](#delimitação-de-código-php)
3. [Separador de instruções](#separador-de-instruções)
4. [Nomes de variáveis](#nomes-de-variáveis)
5. [Comentários](#comentários)
6. [Tipos de Variáveis](#tipos-de-variáveis)
7. [Exercícios](#exercícios)

## Arquivos PHP
Os códigos criados em PHP devem possuir um nome e a extensão PHP, por exemplo:
- `index.php`
- `form_cliente.php`
- `novo_produto.php`
- `alteraTelefone.php`

Estes arquivos devem ser salvos dentro da pasta utilizada para a criação de sua aplicação.

## Delimitação de código PHP
Os blocos de comando PHP são delimitados pelas TAGS:
```php
<?php
    //comandos
?>
```
E podem ser adicionados em vários pontos separados de seu código fonte:
```php
<?php
    //Bloco 01
?>
...
<?php
    //Bloco 02
?>
...
<?php
    //Bloco 03
?>
```
Isso ocorre pois, podemos possuir dentro do mesmo código fonte Blocos PHP e Blocos HTML.

## Separador de instruções
Para cada fim de linha de código tem que haver um ponto e vírgula(;), indicando ao sistema fim de instrução.
```php
<?php
echo 'comando';
?>
```
```php 
if ($x == 0) { //aqui não precisa
    echo 'igual';
} //aqui não precisa
else {
    echo 'não igual';
}
?>
```

## Nomes de variáveis
Toda variável em PHP tem seu nome composto pelo caractere `$` e uma string.
PHP é case sensitive, ou seja, as variáveis `$php` e `$PHP` são diferentes. Por isso é preciso ter muito cuidado ao definir os nomes das variáveis. É bom evitar os nomes em maiúsculas, pois como veremos mais adiante, o PHP já possui algumas variáveis pré-definidas cujos nomes são formados por letras maiúsculas.
```php
<?php
$teste = "Escobar";
echo $TESTE; // erro variável $TESTE não existe
?>
```

## Comentários
Há dois tipos de comentários em código PHP:
- **Comentários de uma linha:** Marca como comentário até o final da linha ou até o final do bloco de código PHP - o que vier antes. Pode ser delimitado por duas barras (`//`).
  ```php
  <?php 
  echo "texto"; //comentário
  ?>
  ```
- **Comentários de mais de uma linha:** Tem como delimitadores os caracteres `/*` para o início do bloco e `*/` para o final do comentário.
  ```php
  <?php
  echo "teste";
  /*
  Bloco de comentários
  Bloco de comentários
  Bloco de comentários
  */
  ?>
  ```

## Tipos de Variáveis
### Tipos Suportados
PHP suporta os seguintes tipos de dados:
- Inteiro
- Ponto flutuante
- String
- Array
- Objeto

PHP utiliza checagem de tipos dinâmica, ou seja, uma variável pode conter valores de diferentes tipos em diferentes momentos da execução do script. Por este motivo não é necessário declarar o tipo de uma variável para usá-la. O interpretador PHP decidirá qual o tipo daquela variável, verificando o conteúdo em tempo de execução. Ainda assim, é permitido converter os valores de um tipo para outro desejado, utilizando o typecasting ou a função `settype`.

### Inteiros (integer ou long)
Uma variável pode conter um valor inteiro com atribuições que sigam as seguintes sintaxes:
```php
$php = 1234; // inteiro positivo na base decimal 
$php = -234; // inteiro negativo na base decimal 
$php = 0234; // inteiro na base octal-simbolizado pelo 0 # equivale a 156 decimal 
$php = 0x34; // inteiro na base hexadecimal(simbolizado # pelo 0x) - equivale a 52 decimal. 
```
A diferença entre inteiros simples e long está no número de bytes utilizados para armazenar a variável. Como a escolha é feita pelo interpretador PHP de maneira transparente para o usuário, podemos afirmar que os tipos são iguais.

### Números em Ponto Flutuante (double ou float)
Uma variável pode ter um valor em ponto flutuante com atribuições que sigam as seguintes sintaxes:
```php
$php = 1.234; 
$php = 23e4; // equivale a 230.000
```

### Strings
Strings podem ser atribuídas de duas maneiras:
- Utilizando apóstrofe ( ' )
  ```php
  $variavel = 'Meu texto aqui';
  ```
- Utilizando aspas ( " )
  ```php
  $string = "Meu texto aqui";
  ```

Existe diferença na utilização entre apóstrofe ou aspas, imagine que você possui uma variável `nome`:
```php
$nome = "Rodrigo Escobar";
```
Agora você decide imprimir o texto "Meu nome é Rodrigo Escobar" utilizando a concatenação de variáveis.
```php
echo "Meu nome é $nome";
```
O resultado em tela será "Meu nome é Rodrigo Escobar".

Já utilizando a mesma lógica, porém com o uso de apóstrofe o resultado será diferente:
```php
echo 'Meu nome é $nome';
```
O resultado será "Meu nome é $nome".

Essa diferença se dá pois, quando você usa aspas duplas para delimitar uma string, o PHP interpreta variáveis dentro da string. Isso significa que qualquer variável ou expressão dentro das aspas será avaliada e seu valor será inserido na string. Quando você usa apóstrofe para delimitar uma string, o PHP não interpreta variáveis dentro da string. Ele trata tudo dentro das aspas simples como texto literal. Por isso, quando você tenta usar uma variável dentro de apóstrofes, ela é tratada como parte do texto, e não como uma variável.

### Arrays
Arrays em PHP podem ser observados como mapeamentos ou como vetores indexados. Mais precisamente, um valor do tipo array é um dicionário onde os índices são as chaves de acesso. Vale ressaltar que os índices podem ser valores de qualquer tipo e não somente inteiros. Inclusive, se os índices forem todos inteiros, estes não precisam formar um intervalo contínuo. Como a checagem de tipos em PHP é dinâmica, valores de tipos diferentes podem ser usados como índices de array, assim como os valores mapeados também podem ser de diversos tipos.
```php
<?php
$meu_array = array(
    "indice01" => "Valor 01",
    "indice02" => "Valor 02",
    "03"       => "Valor 03",
    4          => "Valor 04"
);
var_dump($meu_array);
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
