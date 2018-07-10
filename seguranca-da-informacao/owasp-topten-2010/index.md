---
title:       Introdução ao OWASP Top Ten 2010
description:
capitulo:    seginfo-topten2010
ordem:       0
---

Atualmente não é mais possível imaginarmos uma organização sem que a
mesma não utilize a Tecnologia da Informação (TI) de forma estratégica e
competitiva. Muitas vezes a TI é utilizada como ferramenta básica e de provento
para a existência da organização. Por exemplo, como seria possível a existência de
uma rede social como o Facebook sem o uso da TI? E uma empresa de vendas por
varejo on-line como a Amazon? A TI não só faz parte da estratégia da empresa
como um diferencial, mas também pode ser o principal combustível por trás de uma
organização. A procura pela TI também se faz por pessoas comuns; o uso de e-mail
está disseminado, muitos possuem uma página em uma rede de relacionamento,
compras e troca de mercadorias são realizadas pela internet, livros são lidos on-line.
A Internet sem dúvida foi a força propulsora para alavancar esse incrível movimento
cultural.

Naturalmente, com a crescente demanda pela TI por parte das empresas e,
também, por parte das pessoas físicas, os problemas não tardaram em surgir . O
prejuízo é contabilizado por pessoas físicas e jurídicas. Páginas na Internet são
fraudadas e falsificadas, imagens de empresas são comprometidas, dados
confidenciais das pessoas são expostos devido a um ataque e etc... A lista é
bastante extensa.

Em 10/11/2010 o jornal eletrônico G1 publicou que nos EUA 7 pessoas,
sendo 6 estonianos, desviaram US$14 milhões em fraude de anúncios on-line. Eles
atuaram livremente durante um período de 5 anos. Os suspeitos criaram seus
próprios servidores falsos para redirecionar o tráfego da internet para sites onde eles
tinham uma fatia da receita de publicidade. O problema apenas foi identificado
quando eles infectaram 130 computadores da NASA.

Em 25/05/2009 o departamento jornalístico do portal Softpedia publicou que
um Gray-hat (hacker de chapéu cinza que está entre um hacker de chapéu branco e
o hacker de chapéu preto, sendo um bem intencionado e outro mal intencionado
respectivamente) Romeno chamado Unu através de um ataque de injeção de
SQL expôs as senhas de 245.000 usuários da empresa de
telecomunicações francesa Orange. O sistema da Orange estava sob os cuidados
do estrategista-chefe de segurança da IBM Internet Security Systems.

Muito tem sido feito para fortalecer e proteger sistemas computacionais no
que se refere à infraestrutura. Firewalls, IDS (Intrusion detecion system),
monitoramento de redes, DMZ (demilitarized zone), Biometria, etc... quando bem
aplicados, fazem seu trabalho de forma eficiente e pontual e garantem uma maior
proteção ao sistema computacional. É possível afirmar que todas as camadas da
rede estão bem desenvolvidas quanto a segurança exceto para a camada de
aplicação. Conforme Albuquerque e Ribeiro (2002, p. 1), "o desenvolvimento de
sistemas é uma das áreas mais afetadas pelos aspectos da segurança. Muitos dos
problemas de segurança existentes hoje, não são, nem físicos e nem de
procedimento, mas sim, devidos a erros de programação ou de arquitetura."


Existem dois motivos básicos que justifica a razão da necessidade de
segurança em sistema computacionais:

1. Existem legislações ou políticas de segurança a que é preciso obedecer
2. Existem ameaças ao objetivo da aplicação que precisam ser eliminadas ou mitigadas.

A segurança da informação (SI) também deve considerar os aspectos do
software, porquê segurança não é um parâmetro único. A SI sobre a óptica do
desenvolvimento de software possui três preocupações: a) Segurança no ambiente
de desenvolvimento, quando é preciso manter os código fontes seguros, b)
Segurança da aplicação desenvolvida, visando como objetivo desenvolver uma
aplicação que seja segura e que não contenha falhas que comprometam a
segurança e c) Garantia da segurança da aplicação desenvolvida, visa garantir ao
cliente a segurança da aplicação desenvolvida através de testes adequados.
(ALBUQUERQUE; RIBEIRO 2002, p. 10).

Neste cenário onde a demanda por sistemas computacionais encontra-se em
franco crescimento e a oferta é relativamente escassa, softwares dos mais variados
fins são desenvolvidos sem a devida preocupação com a segurança. São vários os
setores afetados pelo desenvolvimento inseguro de software, é preciso aumentar a
sensibilização sobre a segurança das aplicações web, esse é o objetivo do projeto
Top 10. As vulnerabilidades e riscos estudados no projeto Top 10 não são
vulnerabilidades obscuras e de difícil entendimento, na verdade são erros crassos
cometido por empresas e profissionais da TI. Segundo o OWASP Top 10(2010):

> O software inseguro está a minar a nossa saúde financeira, a
> área da defesa, da energia e outras infraestruturas críticas. À
> medida que nossa infraestrutura digital fica cada vez mais
> complexa e interligada, a dificuldade na construção de
> aplicações seguras aumenta exponencialmente. Não é
> possível tolerar mais os problemas de segurança
> apresentados no Top Ten. (OWASP Top 10, 2010)

Os problemas podem ser resumidos em apenas uma questão: como proteger
os sistemas computacionais? A resposta é abrangente e tema de discussão
calorosa. O desenvolvimento de software carece de se preocupar com a SI. Essa
carência se deve em partes pela cultura competitiva na qual o profissional é inserido.
Comumente, o profissional de TI escolhe uma carreira voltada para infraestrutura ou
para desenvolvimento de software e dessa forma ele cria seus grupos de afinidades
e estes, por sua vez, funcionam como pequenos exércitos competindo entre si. O
problema não é o exercício da competição e sim os efeitos colaterais dessa atitude:
dificilmente encontra-se equipes de TI integradas e com um único objetivo. Em
outras palavras, a SI vem sendo praticada de forma isolada tanto pela equipe da
infraestrutura quanto pela equipe de desenvolvimento, quando um ambiente mais
produtivo seria a unificação de ambos os grupos.

O presente trabalho foca seus esforços na segurança da aplicação
desenvolvida, tendo como objetivo contribuir para o desenvolvimento seguro de
aplicações web escritas em PHP e que usam como banco de dados o MySql. De
forma mais específica, os objetivos são: identificar e estudar as principais
vulnerabilidades e riscos que podem comprometer um aplicação web e além de
propor meios para mitigá-los. As vulnerabilidades são apontadas pelo projeto
OWASP Top 10 (2010), cada vulnerabilidade
terá seu próprio capítulo no qual serão discutidos conceitos básicos a respeito da
vulnerabilidade, código fonte de exemplo será construído e, por fim, como aplicar a
devida prevenção. Apesar do presente estudo fechar o escopo em torno da
arquitetura LAMP (Linux, Apache, MySql e PHP) ele pode servir como base de
compreensão dos fundamentos expostos pelo projeto Top 10 sendo facilmente
traduzido para outra arquitetura.

Para atingir tais objetivos, utilizou-se uma abordagem qualitativa no
desenvolvimento desta pesquisa, uma vez que nesta o intuito é compreender mais
profundamente os fenômenos estudados e interpretá-los de acordo com uma
determinada perspectiva sem a preocupação com representatividade numérica ou
mesmo relações de causa e efeito. (TERENCE; ESCRIVÃO FILHO, 2006).

No que se refere ao método de abordagem utilizado, buscou-se adotar o
raciocínio hipotético-dedutivo pois buscou-se construir e testar possíveis respostas
ou soluções para problemas decorrentes de fatos ou conhecimentos teóricos, algo
diretamente relacionado com a experimentação, como mostra Marques et al (2006,
p. 43-44).

Quanto aos objetivos da pesquisa, a mesma pode ser classificada como
analítica pois, como mostram Marques et al (2006, p. 52), trata-se de um "tipo de
estudo que visa (...) analisar uma dada situação (objeto de estudo), mediante
procedimentos de decomposição do todo estudado, visando não apenas conhecer
seus elementos constituintes, mas sobretudo como eles se articulam entre si.". No
caso, o objeto de estudo são as aplicações Web.

Em relação à participação do pesquisador, esta pode ser classificada como
pesquisa-ação, já que nela o pesquisador desenvolve ações para resolver os
problemas fundamentais identificados, desempenhando "papel ativo no
equacionamento dos problemas encontrados, não só faz a investigação, mas
procura desencadear ações e avaliá-las" (Marques et al. 2006, p. 54)

Sobre os métodos utilizados para coleta de dados, foram utilizadas a
pesquisa bibliográfica e a análise documental no sentido de buscar fontes de
informação a respeito da arquitetura de aplicações Web, bem como das

vulnerabilidades mais presentes nessas aplicações, base deste trabalho. E pode-se
dizer que esta pesquisa constitui um estudo de caso pois, ainda apropriando-se das
palavras de Marques et al (2006, p. 55), este método "consiste no estudo de
determinados indivíduos, profissões, condições, instituições, grupos ou
comunidades, com a finalidade de obter generalizações". No caso desta pesquisa,
são estudadas as condições de vulnerabilidade de aplicações Web.

O presente trabalho está organizado em 10 capítulos, um para cada vulnerabilidade do projeto TOP TEN da Owasp (2010).

O capítulo sobre [A1-Injection](a01-injection/) tratará da Injeção de instruções SQL, método com o qual um usuário mal intencionado
pode executar códigos em linguagem SQL danificando banco de dados e comprometendo, dessa forma, a aplicação web.

O capítulo sobre [A2-Cross-Site Scripting (XSS)](a02-cross-site-scripting/) tratará das 3 formas de XSS: refletido, armazenado e baseado no
modelo DOM. Ambas permitem ao atacante a execução de scripts no navegador da vítima com o intuito de "roubar" a sessão
de navegação, alterar sites da internet (pichar) ou, até mesmo, redirecionar os usuários para sites maliciosos.

O capítulo sobre [A3-Broken Authentication and Session Management](a03-broken-authentication/) tratará da quebra de autenticação que explora as
funções de autenticação e gestão de sessões. Quando essas funções são implementadas de forma incorreta e exploradas,
permite ao atacante assumir a identidade de outro utilizador devido a descoberta de senhas, chaves e identificadores de
sessão.

O capítulo sobre [A4-Insecure Direct Object References](a04-insecure-direct-object/) tratará de referências inseguras diretas a objetos, a
exploração dessa vulnerabilidade permite ao atacante acessar informações não-autorizadas ferindo, dessa forma, a
confidencialidade da informação.

O capítulo sobre [A5-Cross-Site Request Forgery (CSRF)](a05-csrf/) tratará de CSRF , tal falha permite ao atacante forçar o
navegador da vítima a criar requisições HTTP forjados, no qual a aplicação web aceita como requisições legítimas
oriundas da vítima.

O capítulo sobre [A6-Security Misconfiguration](a06-security-misconfiguration/) abordará a vulnerabilidade de Configuração Incorreta de Segurança. A
segurança da aplicação depende, também, da existência de configurações adequadas e boas práticas na manutenção do
ambiente no qual a aplicação web estará alojada.

O capítulo sobre [A7-Insecure Cryptographic Storage](a07-insecure-cryptographic-storage/) tratará do assunto criptografia . O ponto chave dessa
vulnerabilidade (armazenamento criptográfico inseguro) está, não somente nos dados criptografados, mas nas chaves de
criptografia, pois comumente elas são mal protegidas.

O capítulo sobre [A8-Failure to Restrict URL Access](a08-failure-to-restrict-url/) tratará de falhas nas restrições de acesso. Esconder uma URL e
validar apenas do lado do cliente são erros comuns encontrados nas aplicações web, não obstante, a exploração dessa
vulnerabilidade seja considerada de nível fácil. A aplicação não pode permitir que páginas sejam acessadas sem a
devida autenticação.


O capítulo sobre [A9-Insufficient Transport Layer Protection](a09-transport-layer/) tratará da insuficiente proteção da camada de transporte
e sensibiliza quanto a correta utilização do protocolo SSL, em outras palavras, auxilia na correta implementação de um
certificado digital. A exploração dessa vulnerabilidade, normalmente, é realizada através de monitoramento da rede.


O capítulo sobre [A10-Unvalidated Redirects and Forwards](a10-unvalidated-redirects-forwards/) tratará de redirecionamento inválidos(A10). Aproveitando-se de
validações inadequadas, os atacantes redirecionam a vítima para sites de maliciosos
(caracterizando ataque de phishing ou de malware) ou aproveitam-se do
encaminhamento para acessar páginas não autorizadas e, finalmente, o capítulo 12
trará considerações finais e reflexões sobre o trabalho.
