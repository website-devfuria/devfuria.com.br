Analisano o site
===

O objetivo é cirar uma lista com dados sobre as matérias.
Como os dados estão digitados em cada html, o script
precisa ler todas as matérias e carregar os dados a partir do html.

O script percorrerá o array com os links e url das matérias. Este array
está dentro do arquivo `core/boot.php`. Como é um array para cada seção
sou obrigado a fazer um merge.

Para ler cada arquivo da matéria eu utilizei a biblio "simple_html_dom".
Criei a função `parsearArquivo()` dentro do arquivo `parese.php`. Ela
faz a chamada para a biblio e devolve um objeto da classe `Materia`.

A função `retArrayMateriasPorSecao()`, por sua vez, percorre o array da seção,
chama a função `parsearArquivo()` e devolve um array com os objetos `Materia`.

Aí é só percorre todo o array e inserir no db.


Banco de dados
---

Ao executar o script (`index.hp`) podemos escolher entre criar ou limpar a tabela.
Veja mais detalhes no próprio arquivo.