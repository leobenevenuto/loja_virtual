<h1>Checkout transparente PagSeguro</h1>

<h3>Dados Pessoais:</h3>

<strong>Nome:</strong><br/>
<input type="text" name="name" value="Leonardo Benevenuto" /><br/><br/>

<strong>CPF:</strong><br/>
<input type="text" name="cpf" value="11761365690" /><br/><br/>

<strong>E-mail:</strong><br/>
<input type="text" name="email" value="c47940418476343975841@sandbox.pagseguro.com.br" /><br/><br/>

<strong>Senha:</strong><br/>
<input type="password" name="password" /><br/><br/>


<h3>Informações de Endereço: </h3>

<strong>CEP:</strong><br/>
<input type="text" name="cep" value="30662270" /><br/><br/>

<strong>Rua:</strong><br/>
<input type="text" name="rua" value="Rua Aida Fernandes Alvares" /><br/><br/>

<strong>Numero:</strong><br/>
<input type="text" name="numero" value="210" /><br/><br/>

<strong>Complemento:</strong><br/>
<input type="text" name="complemento" value="qualquer um" /><br/><br/>

<strong>Bairro:</strong><br/>
<input type="text" name="bairro" value="Tirol" /><br/><br/>

<strong>Cidade:</strong><br/>
<input type="text" name="cidade" value="Belo Horizonte" /><br/><br/>

<strong>Estado:</strong><br/>
<input type="text" name="estado" value="Minas Gerais" /><br/><br/>



<h3>Informações de Pagamento:</h3>

<strong>Número do cartão:</strong><br/>
<input type="text" name="name" value="4111111111111111" /><br/><br/>

<strong>Código de Segurança:</strong><br/>
<input type="text" name="name" value="123" /><br/><br/>

<strong>Validade</strong><br/>
<select name="cartao_mes">
	<!--<//?php $ano = intval(date("Y")); ?> -->
	<?php for($q=1;$q<=12;$q++): ?>
	<option><?php echo ($q<10)?'0'.$q:$q; ?></option>
 	<?php endfor; ?>
</select>
<select name="cartao_ano">
	<?php $ano = intval(date("Y")); ?>
	<?php for($q=$ano;$q<=($ano+20);$q++): ?>
		<option><?php echo $q; ?></option>
	<?php endfor; ?>
</select><br/><br/>

<button class="button" type="submit">Efetuar Compra</button>




<script type="text/javascript" src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/psckttransparente.js"
<script type="text/javascript">
	PagSeguroDirectPayment.setSessionId("<?php echo $sessionCode; ?>");
</script>