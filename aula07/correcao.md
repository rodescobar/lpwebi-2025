# Aula 07 - Correção dos Exercícios da Aula 06

1. ```php
   $num = 10;
   echo $num;
   ```

2. ```php
   $num = 10;
   $num *= 10;
   echo $num;
   ```

3. ```php
   $texto = "Olá, mundo!";
   echo $texto;
   ```

4. ```php
   $texto1 = 'Olá, ';
   $texto2 = 'mundo!';
   echo $texto1 . $texto2;
   ```

5. ```php
   $texto1 = "Olá, ";
   $texto2 = "mundo!";
   echo $texto1 . $texto2;
   ```

6. A diferença entre concatenar com `'` e `"` é que `'` é usado para strings literais e `"` permite a interpolação de variáveis.

7. ```php
   $booleano = true;
   echo $booleano;
   ```

8. ```php
   $pontoFlutuante = 10.5;
   echo $pontoFlutuante;
   ```

9. ```php
   $array = [1, 2, 3];
   print_r($array);
   ```

10. ```php
    $nulo = null;
    echo $nulo;
    ```

11. ```php
    $texto = "olá, mundo!";
    echo strtoupper($texto); // strtoupper converte o texto para maiúsculas
    ```

12. ```php
    $texto = "OLÁ, MUNDO!";
    echo strtolower($texto); // strtolower converte o texto para minúsculas
    ```

13. ```php
    $texto = "Olá, mundo!";
    echo strlen($texto); // strlen retorna o comprimento do texto
    ```

14. ```php
    $num = 10;
    echo ($num % 2 == 0) ? 'Par' : 'Ímpar'; // % verifica o resto da divisão
    ```

15. ```php
    $texto = " Olá, mundo! ";
    echo trim($texto); // trim remove espaços em branco no início e no fim
    ```

16. ```php
    $texto = "Olá, mundo!";
    echo str_repeat($texto, 3); // str_repeat repete o texto 3 vezes
    ```

17. ```php
    $array = [1, 2, 3, 4, 5];
    foreach ($array as $elemento) {
        echo $elemento . " ";
    }
    ```

18. ```php
    $arrayAssociativo = ["nome" => "João", "idade" => 20, "curso" => "PHP"];
    foreach ($arrayAssociativo as $chave => $valor) {
        echo "$chave: $valor\n";
    }
    ```

19. ```php
    $array = [1, 2, 3, 4, 5];
    $array[] = 6;
    print_r($array);
    ```

20. ```php
    $array = [1, 2, 3, 4, 5];
    unset($array[1]);
    print_r($array);
    ```

21. ```php
    $aluno = ["nome" => "João", "idade" => 20, "curso" => "PHP"];
    foreach ($aluno as $chave => $valor) {
        echo "$chave: $valor\n";
    }
    ```

22. ```php
    $alunos = [
        ["nome" => "João", "idade" => 20, "curso" => "PHP"],
        ["nome" => "Maria", "idade" => 22, "curso" => "JavaScript"],
        ["nome" => "Pedro", "idade" => 21, "curso" => "HTML"]
    ];
    foreach ($alunos as $aluno) {
        foreach ($aluno as $chave => $valor) {
            echo "$chave: $valor\n";
        }
        echo "\n";
    }
    ```

23. ```php
    $livro = ["título" => "PHP para Iniciantes", "autor" => "Fulano", "ano" => 2020];
    foreach ($livro as $chave => $valor) {
        echo "$chave: $valor\n";
    }
    ```
