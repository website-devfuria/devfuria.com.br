---
layout:      basico3
title:       Tabelas
description: Continuando com o Foo
capitulo:    "html-elementos-basicos"
ordem:       5
---

Uma tabela é composta por __linhas__ e __células__.

As tabelas começam com a tag `<table>`, as linhas da tabela são definidas pela tag `tr` (__table row__). Dentro das
linhas temos as células, elas são definidas pela tag `td`(__table data__).

Vamos ao nosso primeiro exemplo de tabela:

__código:__

```html
<table>
    <tr>
        <td>campo1</td><td>campo2</td><td>campo3</td>
    </tr>
    <tr>
        <td>campo1</td><td>campo2</td><td>campo3</td>
    </tr>
    <tr>
        <td>campo1</td><td>campo2</td><td>campo3</td>
    </tr>
</table>
```

__resultado:__

<table>
    <tr>
        <td>campo1</td><td>campo2</td><td>campo3</td>
    </tr>
    <tr>
        <td>campo1</td><td>campo2</td><td>campo3</td>
    </tr>
    <tr>
        <td>campo1</td><td>campo2</td><td>campo3</td>
    </tr>
</table>

<style>
td {
    border: 1px solid #999;
    padding: 5px;
}
table {
    border-collapse: collapse;
}
</style>

Eu tive que abrir mão de um pouco de CSS para mostrarmos as bordas de cada célula e dar um "respiro" com o padding.

    td {
        border: 1px solid #999;
        padding: 5px;
    }
    table {
        border-collapse: collapse;
    }

## Exercício

1. Ative o console de seu navegador (tecla F12) e altere as propriedades de borda e preenchimento (padding) das células (td).
2. Desative a propriedade `border-collapse` da tabela e observe o resultado.


<!--
Além de linhas e células temos 3 agrupamentos possíveis: o cabeçalho, o corpo e o rodapé.


    <thead> para os cabeçalhos da tabela,
    <tfoot> para o rodapé da tabela,
    <tbody> para o corpo da tabela.


## Exemplo completo

    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Username</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Username</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
-->