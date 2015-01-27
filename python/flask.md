---
layout:      grid93-article
title:       Python Flask - Introdução
description: 
---

Flask é um micro-framework para Python, segundo a documentação...

“Micro” não significa que a sua aplicação web inteira tenha que se encaixar em um único arquivo Python, embora isso seja 
totalmente possível. Também não quer dizer que falte funcionalidade ao Flask. “Micro” em microframework significa que o 
Flask procura manter o núcleo simples, mas extensível. O Flask não toma muitas decisões por você, tipo, que banco de dados
usar. Por outro lado, é fácil mudar as coisas que já decidiu, tipo, o mecanismo de templates. Todo o resto fica por sua 
conta decidir, de modo que você pode obter do Flask tudo o que precisa e dispensar tudo o que não quer.

Ele é baseado no [Werkzeug](http://werkzeug.pocoo.org/ "link-externo"), [Jinja 2](http://jinja.pocoo.org/ "link-externo")
e em boas intenções ("good intentions").

Por padrão, o Flask não inclui uma camada de abstração de banco de dados, validação de formulário, ou qualquer outra 
coisa para a qual já existam diferentes bibliotecas. Em vez disso, suporta extensões para adicionar uma determinada 
funcionalidade à sua aplicação como se ela tivesse sido implementada no Flask em si. Muitas extensões fornecem integração 
de banco de dados, validação de formulários, manipulação de upload, diversas tecnologias de autenticação abertas, entre 
outras coisas. O Flask pode ser “micro”, mas está pronto para uso em produção, preenchendo uma gama variada de necessidades



### Instalação

O Flask depende de duas bibliotecas externas, Werkzeug e Jinja2. Werkzeug é um toolkit para WSGI, a interface padrão 
entre aplicações web Python e servidores HTTP para desenvolvimento e implantação. Jinja2 renderiza templates.

Se você executar o comando `pip install Flask` estará partindo para uma instalação "global" no seu desktop, imaginando 
que você está no Linux e possui o [pip](/linux/cookbook/pip/) instalado além do próprio [Python](linux/cookbook/python/),
é claro. Com esse tipo de instalação, a instrução `from flask import Flask` poderá ser executada de qualquer "lugar", 
esse é o ideal ? Não! O politicamente correto seria partir para um instalação que faz uso do 
[Virtualenv](/linux/cookbook/virtualenv/). Imaginado que você esteja começando com universo Python, minha
sugestão é dividir para conquistar:

1) Faça um instalação global e comece rapidamente

    pip install Flask

2) Como segundo passo, considere instalar o Flask com o Virtualenv.


### Começo rápido

Após ter conlcuído a instalação do Flask, crie um arquivo denominado `hello.py` e insira o seguinte conteúdo.

```python
from flask import Flask
app = Flask(__name__)

@app.route("/")
def hello():
    return "Hello World!"

if __name__ == "__main__":
    app.run()
```

Agora, execute o arquivo a partir do terminal e acesse o resultado através do endereço `http://127.0.0.1:5000/, você
deve estar vendo a mensagem "Hello World!".

    python hello.py
    * Running on http://127.0.0.1:5000/

Dica: Se você não quiser abandonar o terminal e abrir o navegador para testar a URL, experimente o utilitário __curl__
do Linux. Você poderá, no terminal, acessar a URL, veja:

    curl http://127.0.0.1:5000/
    Hello World!



