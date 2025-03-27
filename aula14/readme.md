# Aula 14 - Exercício

- Entrega até 29/03/2025 (sábado)
  - E-mail: rodrigo.noescobar@gmail.com
  - Assunto: LPWEBI - Aula 14

  
- Vimos na Aula 13 a conexão entre PHP e Banco de Dados MySQL.
- Efetuamos uma consulta buscando todos os alunos cadastrados na base e retornamos em uma tabela.
- Hoje você deverá utilizando a mesma lógica, receber o nome do aluno através do método GET, e efetuar a consulta de todos os alunos que contenham o nome informado.

Exemplos de requisição GET 
```
http://127.0.0.1/exercicio.php?nome=Lucas

http://127.0.0.1/exercicio.php?nome=Maria

http://127.0.0.1/exercicio.php?nome=Silva
```

Exemplo de query SQL
```sql
SELECT * FROM alunos WHERE nome like '%SILVA%'
```



