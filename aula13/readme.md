# Aula 13 - Trabalhando com a classe `mysqli`

Nesta aula, iremos aprender sobre a classe `mysqli` no PHP, que é utilizada para interagir com bancos de dados MySQL. Vamos abordar como realizar uma conexão com o banco de dados, executar consultas, ler resultados e inserir dados.

## Conexão com o banco de dados

A conexão com o banco de dados é feita utilizando a seguinte linha de código:

```php
$conexao = new mysqli("127.0.0.1", "root", "", "aula");
```

### Explicação:
- `"127.0.0.1"`: Endereço do servidor onde o banco de dados está hospedado. Neste caso, é o localhost.
- `"root"`: Nome de usuário do banco de dados.
- `""`: Senha do banco de dados. Aqui está vazia, pois não foi configurada uma senha.
- `"aula"`: Nome do banco de dados que será utilizado.

Se a conexão falhar, você pode verificar o erro com:

```php
if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}
```

## Executando uma consulta SELECT

Vamos executar a seguinte consulta para buscar dados da tabela `alunos`:

```php
$query = "SELECT ra, nome, data_nasc, curso FROM alunos";
$resultado = $conexao->query($query);

if ($resultado->num_rows > 0) {
    foreach ($resultado as $linha) {
        echo "<p><span>RA: {$linha['ra']}</span> <span>Nome: {$linha['nome']}</span> <span>Data de Nascimento: {$linha['data_nasc']}</span> <span>Curso: {$linha['curso']}</span></p>";
    }
} else {
    echo "Nenhum registro encontrado.";
}
```

### Explicação:
- `$query`: Contém a instrução SQL para buscar os dados.
- `$conexao->query($query)`: Executa a consulta no banco de dados.
- `$resultado->num_rows`: Verifica se há registros retornados.
- `foreach ($resultado as $linha)`: Itera sobre os resultados retornados.
- `echo`: Exibe os dados formatados em elementos HTML `<p>` e `<span>`.

## Inserindo dados com `$_POST`

Para inserir dados na tabela `alunos`, utilizamos o seguinte código:

```php
$ra = $_POST['ra'];
$nome = $_POST['nome'];
$data_nasc = $_POST['data_nasc'];
$curso = $_POST['curso'];

$query = "INSERT INTO alunos (ra, nome, data_nasc, curso) VALUES ('$ra', '$nome', '$data_nasc', '$curso')";
if ($conexao->query($query) === TRUE) {
    echo "Novo registro inserido com sucesso!";
} else {
    echo "Erro ao inserir registro: " . $conexao->error;
}
```

### Explicação:
- `$_POST`: Obtém os dados enviados pelo formulário.
- `INSERT INTO`: Comando SQL para inserir dados na tabela.
- `VALUES`: Define os valores que serão inseridos.
- `$conexao->query($query)`: Executa a instrução SQL.
- `=== TRUE`: Verifica se a operação foi bem-sucedida.

## Conclusão

Com esses exemplos, você aprendeu a:
1. Conectar ao banco de dados usando a classe `mysqli`.
2. Executar consultas SELECT e exibir os resultados.
3. Inserir dados no banco de dados utilizando `$_POST`.

Pratique esses conceitos para consolidar o aprendizado.
