Receitas básicas
===


### Para não ter que ficar redigitando a senha quando fizer push...

Crie um arquivo texto com o seguite nome:

    .netrc

Insira no arquivo

    machine github.com login seu-login-no-github password sua-senha-no-github

Obs: serve também para os repostiŕios no google code

    machine code.google.com login seu-login-no-github password sua-senha-no-github

Salve o arquivo na pasta /home

Obs: na pasta /home/usuario não funciona ?????


###  Configurar atalho para "push"

    git config --global push.default matching
    git config --global push.default simple

### Configurando seu usuário ao fazer commit's

    git config --global user.email "you@example.com"
    git config --global user.name "Your Name"

### Deletar branch remoto via terminal

    git push origin :nome-do-branch


### Colorir as linhas

    git config --global color.ui auto
    
    
### Um log mais decente

    git log --pretty=format:"%h %ad | %s%d [%an]" --graph --date=short

    // então defina um atalho no teclado, com o comando

    git config --global alias.[atalho] 'log --pretty=format:"%h %ad | %s%d [%an]" --graph --date=short'

    // agora ao digitar git [atalho] você terá o mesmo que se digitasse
    // git log --pretty=format:"%h %ad | %s%d [%an]" --graph --date=short

    
### Referências

http://wiki.nosdigitais.teia.org.br/Comandos_Git
http://wiki.nosdigitais.teia.org.br/Comandos_Git
