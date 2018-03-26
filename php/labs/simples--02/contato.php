<!DOCTYPE HTML>
<html lang="pt-br">
 
<head>
<link rel="icon" href="favicon.png"/>
<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
<link rel="stylesheet" type="text/css" href="estilo.css"/>
<script language="JavaScript" type="text/javascript" src="contato.js"></script>
<title>Atelier Illuminati</title>
</head>

<body>

<header>
<h2 style="color: #FC7756; font-size:24pt; text-align:left; text-shadow:50% ">
 Harris Marino
 </h2>
</header>
<br><br>


<section id="contato">
<article>
<img src="AI.png" id="advertencia">
Preencha corretamente os campos para se inscrever nos cursos.<br>
Campos marcados com * são obrigatórios.
</article>
</section>

<br class="fix">
<font color="#104478";  style="opacity:0.85; font-family:helvetica; font-weight:bold;" >


<section id="formulario">
<form id="contato" name="contato" method="post" action="inscrever.php">


<center>
<table style="width:650px; height:495px; border: 1px; border-color:#104478; align-content:center; background-color:#ADC5DD; opacity:0.7; border-radius: 5px; 5px; 5px; 5px; border-style: solid; " >
</center>

<br><br>
<tr>
<td><label>Nome*</label></td>
<!-- <td><input type="text" maxlength="15" size="16" name="nome" autofocus required pattern="[A-Za-z]{9}">  -->
<td><input type="text" maxlength="15" size="16" name="nome" autofocus > 
<!-- <label>Sobrenome*<input type="text" maxlength="16" size="16" name="sobrenome" required pattern="[A-Za-z]{16}"></label> -->
<label>Sobrenome*<input type="text" maxlength="16" size="16" name="sobrenome" ></label>
</td>
</tr>

<br><br>
<tr>
<td><label>Endereço</label></td>
<td><input type="text" maxlength="60" size="31" name="endereco">
<label>Número</label>
<input type="text" maxlength="5" size="4" name="numero" >
</td>
</tr>

<br><br>
<tr>
<td><label>Complemento</label></td>
<td><input type="text" maxlength="8" size="7" name="complemento" placeholder="apto, sala, conjunto" >
<label>Bairro</label>
<input type="text" maxlength="60" size="20" name="bairro"></td>
</tr>

<br><br>
<tr>
<td><label>Cidade</label></td>
<!-- <td><input type="text" maxlength="20" size="25" name="cidade" pattern="[A-Za-z]{4}"> -->
<td><input type="text" maxlength="20" size="25" name="cidade" >
 <label> Estado<select name="estado" id="estado" class="select" required="required" >
			<option selected="selected" value="-1">Selecione...</option>
			<option value="AC">Acre</option>
			<option value="AL">Alagoas</option>
			<option value="AP">Amapá</option>
			<option value="AM">Amazonas</option>
			<option value="BA">Bahia</option>
			<option value="CE">Ceará</option>
			<option value="DF">Distrito Federal</option>
			<option value="ES">Espírito Santo</option>
			<option value="GO">Goiás</option>
			<option value="MA">Maranhão</option>
			<option value="MT">Mato Grosso</option>
			<option value="MS">Mato Grosso do Sul</option>
			<option value="MG">Minas Gerais</option>
			<option value="PA">Pará</option>
			<option value="PB">Paraíba</option>
			<option value="PR">Paraná</option>
			<option value="PE">Pernambuco</option>
			<option value="PI">Piauí</option>
			<option value="RJ">Rio de Janeiro</option>
			<option value="RN">Rio Grande do Norte</option>
			<option value="RS">Rio Grande do Sul</option>
			<option value="RO">Rondônia</option>
			<option value="RR">Roraima</option>
			<option value="SC">Santa Catarina</option>
			<option value="SP">São Paulo</option>
			<option value="SE">Sergipe</option>
			<option value="TO">Tocantins</option>
			</select>
			</label>
</td>
</tr>


<br><br>
<tr>
<td><label>CEP</label></td>
<!-- <td><input type="text"  maxlength="10" size="10" name="cep" placeholder="xx.xxx-xxx" pattern="\d{5}-?\d{3}" required pattern="[0-9]+$"></td> -->
<td><input type="text"  maxlength="10" size="10" name="cep" placeholder="xx.xxx-xxx" ></td>
</tr>

<br><br>
<tr>
<td><label>Telefone*</label> </td>
<!-- <td><input type="tel" maxlength="15" size="13" name="telefone" placeholder="(xx)xxxxx-xxxx" required pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" pattern="[0-9]+$"></td> -->
<td><input type="tel" maxlength="15" size="13" name="telefone" placeholder="(xx)xxxxx-xxxx" ></td>
</tr>

<br><br>
<tr>
<td><label>RG*</label></td>
<td><input type="text" maxlength="14" size="14" name="rg" required="required" > <label>CPF*</label>
<!-- <input type="text" maxlength="11" size="14" name="cpf" id="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2})|(\d{11})$" required pattern="[0-9]+$"; required="required" > -->
<input type="text" maxlength="11" size="14" name="cpf" id="cpf" >
</td>
</tr>
<br>


<br><br>
<tr>
<td></td>
<td><label>Curso Desejado</label>
<select name="curso" id="curso" class="select" required="required" >
			<option selected="selected" value="-1">Selecione...</option>
			<option value="OPBV">Operação Básica de Câmera de Vídeo</option>
			<option value="DSLR">Operação Básica de DSLR</option>
			<option value="EDBV">Edição Básica de Vídeo</option>
			<option value="BPAV"> Básico sobre Produção Audiovisual</option>
			</select>
			</td>
			</tr>


<section>
<br><br>
<tr>
<td></td>
<td><label>Clique aqui para aceitar os termos e condições dos cursos.</label>
<input type="checkbox" name="termos-aceito" value="sim" size="8" required="required" ></td>
</tr>
</section>

<br>
<section>
<br><br>
<tr>
<td><label>E-mail*</label></td>
<!-- <td><input type="email" name="email" size="25" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Digite seu e-mail." required="required" /> -->
<td><input type="email" name="email" size="25" title="Digite seu e-mail." />
</td>
</tr>

<br>
<tr>
<td><label>Login*</label></td>
<td><input type="text" name="login" size="10" maxlength="12" >
<label>Senha*</label>
<input type="password" name="senha" size="10" maxlength="12" >
</td>
</tr>
</section>
</table>

</section>

<section id="botao">
<br>
<tr>
<center><td><input type="reset" name="APAGAR" size="50" value="Limpar" class="botao" id="botao" onclick="//apagar()" ></td>
<td><input type="submit"  size="50"  class="botao" id="botao" onclick="//inscrever()" ></td></center>
</tr>
</section>




</form>

<br><br>
<footer> Marca Registrada.</footer>
</body>
</html>
