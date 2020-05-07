<!DOCTYPE html>
<html>
<head>
	<title>Gerador de Mensagens de Ausencia</title>
	<meta charset="utf-8">
	<?php include "functions.php" ?> <!-- chamando arquivo com funções e codigos para serem reutilizados -->
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script> <!-- Chamando biblioteca do JQuery -->
	<link rel="stylesheet" type="text/css" href="style.css"><!-- Chamando o arquivo CSS -->
</head>
<!-- Trecho de Jquery foi retirado do video  https://www.youtube.com/watch?v=K7r2-hBydBE -->
<script>
	$(function(){
		$("#texto").click(function(){
			$(this).select();
			document.execCommand('copy');
			alert("A mensagem foi copiada");
		})
	})
</script>

<body>
	
	<div id="corpo-texto">
		<h1>GERADOR DE MENSAGEM DE AUSENCIA</h1>
		<h2>Gerador de mensagem de ausencia de emails para preguiçosos</h2>

		<table>
			<form name="form-opcao" action="" method="post">
				<tr>
					<td>Selecione o motivo da mensagem</td>
					<td>
						<input type="radio" name="msgopcao" value="Padrão" checked=""> Padrão <br>
						<input type="radio" name="msgopcao" value="Ferias"> Ferias <br>
						<input type="radio" name="msgopcao" value="Licença medica"> Licença medica <br>
						<input type="radio" name="msgopcao" value="Final de ano"> Final de ano <br>
						<input type="radio" name="msgopcao" value="Caixa de email desativada">	Caixa de email desativada <br>
					</td>
					<td>
						<button name="bt_opcao-selecionar">Selecionar</button>
					</td>
				</tr>
			</form>
		</table>

		<?php 

			if (isset($_POST['bt_opcao-selecionar'])) {

				$msgOpcao = $_POST['msgopcao'];

				if ($msgOpcao == "Padrão") {
					echo "
						<hr>
						<table>
							<form method='post' name='form-cad-msg-padrao' action=''>
								<tr>
									<td>Escolha uma saudação para o email</td>
									<td>
										<input type='radio' name='msg-saudacao' value='Oi'> Oi
										<input type='radio' name='msg-saudacao' value='Olá'> Olá
									</td>
								</tr>

								<tr>
									<td>Nome da pessoa Ausente</td>
									<td>
										<input type='text' name='msg-nome-ausente'>
									</td>
								</tr>

								<tr>
									<td>Email da pessoa ausente</td>
									<td>
										<input type='text' name='msg-email-ausente'>
									</td>
								</tr>

								<tr>
									<td>Genero da pessoa ausente</td>
									<td>
										<input type='radio' name='msg-genero-ausente' value='Masculino'> Masculino <br>
										<input type='radio' name='msg-genero-ausente' value='Feminino'> Feminino
									</td>
								</tr>

								<tr>
									<td>Data de saida</td>
									<td>
										<input type='date' name='msg-data-saida'>
									</td>
								</tr>
								
								<tr>
									<td>Data de retorno</td>
									<td>
										<input type='date' name='msg-data-retorno'>
									</td>
								</tr>

								<tr>
									<td>Nome do contato</td>
									<td>
										<input type='text' name='msg-nome-contato'>
									</td>
								</tr>

								<tr>
									<td>Email do contato</td>
									<td><input type='text' name='msg-email-contato'></td>
								</tr>

								<tr>
									<td>Despedidas</td>
									<td>
										<input type='radio' name='msg-despedida' value='1'>
										Atenciosamente <br>
										Nome do usuario ausente <br>

										<br>

										<input type='radio' name='msg-despedida' value='2'>
										Espero vê-lo em breve. <br>
										Nome do usuario ausente <br>

										<br>

										<input type='radio' name='msg-despedida' value='3'>
										Um grande abraço. <br>
										Nome do usuario ausente <br>

									</td>
								</tr>

								<tr>
									<td>
										<button name='bt-gerar-msg-padrao'>Gerar</button>
									</td>
								</tr>
							</form>
						</table>
					";

				}elseif ($msgOpcao == "Ferias") {
					echo "
						<hr>
						<table>
							<form method='post' name='form-cad-msg-ferias' action=''>
								<tr>
									<td>Escolha uma saudação para o email</td>
									<td>
										<input type='radio' name='msg-saudacao' value='Oi'> Oi
										<input type='radio' name='msg-saudacao' value='Olá'> Olá
									</td>
								</tr>

								<tr>
									<td>Nome da pessoal Ausente</td>
									<td>
										<input type='text' name='msg-nome-ausente'>
									</td>
								</tr>

								<tr>
									<td>Email da pessoa ausente</td>
									<td>
										<input type='text' name='msg-email-ausente'>
									</td>
								</tr>

								<tr>
									<td>Data de saida para ferias</td>
									<td>
										<input type='date' name='msg-data-saida'>
									</td>
								</tr>

								<tr>
									<td>Data de retorno de ferias</td>
									<td>
										<input type='date' name='msg-data-retorno'>
									</td>
								</tr>

								<tr>
									<td>Nome do contato</td>
									<td>
										<input type='text' name='msg-nome-contato'>
									</td>
								</tr>

								<tr>
									<td>Email do contato</td>
									<td>
										<input type='text' name='msg-email-contato'>
									</td>
								</tr>

								<tr>
									<td>Despedidas</td>
									<td>
										<input type='radio' name='msg-despedida'>Atenciosamente <br>
										Nome do usuario ausente
										<br><br>
										<input type='radio' name='msg-despedida'>Espero vê-lo em breve <br>
										Nome do usuario ausente
										<br><br>
										<input type='radio' name='msg-despedida'>Um grande abraço <br>
										Nome do usuario ausente
									</td>
								</tr>

								<tr>
									<td>
										<button name='bt-gerar-msg-ferias'>Gerar</button>
									</td>
								</tr>
							</form>
						</table>

					";
				}elseif ($msgOpcao == "Licença medica") {
					echo "
						<hr>
						<table>
							<form method='post' name='form-cad-msg-ferias' action=''>
								<tr>
									<td>Escolha uma saudação para o email</td>
									<td>
										<input type='radio' name='msg-saudacao' value='Oi'> Oi
										<input type='radio' name='msg-saudacao' value='Olá'> Olá
									</td>
								</tr>

								<tr>
									<td>Nome da pessoal Ausente</td>
									<td>
										<input type='text' name='msg-nome-ausente'>
									</td>
								</tr>

								<tr>
									<td>Email da pessoa ausente</td>
									<td>
										<input type='text' name='msg-email-ausente'>
									</td>
								</tr>

								<tr>
									<td>Data de saida para ferias</td>
									<td>
										<input type='date' name='msg-data-saida'>
									</td>
								</tr>

								<tr>
									<td>Data de retorno de ferias</td>
									<td>
										<input type='date' name='msg-data-retorno'>
									</td>
								</tr>

								<tr>
									<td>Nome do contato</td>
									<td>
										<input type='text' name='msg-nome-contato'>
									</td>
								</tr>

								<tr>
									<td>Email do contato</td>
									<td>
										<input type='text' name='msg-email-contato'>
									</td>
								</tr>

								<tr>
									<td>Despedidas</td>
									<td>
										<input type='radio' name='msg-despedida'>Atenciosamente <br>
										Nome do usuario ausente
										<br><br>
										<input type='radio' name='msg-despedida'>Espero vê-lo em breve <br>
										Nome do usuario ausente
										<br><br>
										<input type='radio' name='msg-despedida'>Um grande abraço <br>
										Nome do usuario ausente
									</td>
								</tr>

								<tr>
									<td>
										<button name='bt-gerar-msg-licencamedica'>Gerar</button>
									</td>
								</tr>
							</form>
						</table>
					";
				}elseif ($msgOpcao == "Final de ano") {
					echo "
					<hr>
						<table>
							<form method='post' name='form-cad-msg-ferias' action=''>
								<tr>
									<td>Escolha uma saudação para o email</td>
									<td>
										<input type='radio' name='msg-saudacao' value='Oi'> Oi
										<input type='radio' name='msg-saudacao' value='Olá'> Olá
									</td>
								</tr>

								<tr>
									<td>Nome da pessoal Ausente</td>
									<td>
										<input type='text' name='msg-nome-ausente'>
									</td>
								</tr>

								<tr>
									<td>Email da pessoa ausente</td>
									<td>
										<input type='text' name='msg-email-ausente'>
									</td>
								</tr>

								<tr>
									<td>Data de saida para ferias</td>
									<td>
										<input type='date' name='msg-data-saida'>
									</td>
								</tr>

								<tr>
									<td>Data de retorno de ferias</td>
									<td>
										<input type='date' name='msg-data-retorno'>
									</td>
								</tr>

								<tr>
									<td>Despedidas</td>
									<td>
										<input type='radio' name='msg-despedida'>Atenciosamente <br>
										Nome do usuario ausente
										<br><br>
										<input type='radio' name='msg-despedida'>Espero vê-lo em breve <br>
										Nome do usuario ausente
										<br><br>
										<input type='radio' name='msg-despedida'>Um grande abraço <br>
										Nome do usuario ausente
									</td>
								</tr>

								<tr>
									<td>
										<button name='bt-gerar-msg-finaldoano'>Gerar</button>
									</td>
								</tr>
							</form>
						</table>

					";
				}elseif ($msgOpcao == "Caixa de email desativada") {
					echo "
					<hr>
						<table>
							<form method='post' name='form-cad-msg-ferias' action=''>
								<tr>
									<td>Escolha uma saudação para o email</td>
									<td>
										<input type='radio' name='msg-saudacao' value='Oi'> Oi
										<input type='radio' name='msg-saudacao' value='Olá'> Olá
									</td>
								</tr>

								<tr>
									<td>Nome da pessoal Ausente</td>
									<td>
										<input type='text' name='msg-nome-ausente'>
									</td>
								</tr>

								<tr>
									<td>Email da pessoa ausente</td>
									<td>
										<input type='text' name='msg-email-ausente'>
									</td>
								</tr>

								<tr>
									<td>Nome da empresa</td>
									<td>
										<input type='text' name='msg-nome-empresa'>
									</td>
								</tr>

								<tr>
									<td>Nome do contato</td>
									<td>
										<input type='text' name='msg-nome-contato'>
									</td>
								</tr>

								<tr>
									<td>Email do contato</td>
									<td>
										<input type='text' name='msg-email-contato'>
									</td>
								</tr>

								<tr>
									<td>Despedidas</td>
									<td>
										<input type='radio' name='msg-despedida'>Atenciosamente <br>
										Nome do usuario ausente
										<br><br>
										<input type='radio' name='msg-despedida'>Espero vê-lo em breve <br>
										Nome do usuario ausente
										<br><br>
										<input type='radio' name='msg-despedida'>Um grande abraço <br>
										Nome do usuario ausente
									</td>
								</tr>

								<tr>
									<td>
										<button name='bt-gerar-msg-caixadesativado'>Gerar</button>
									</td>
								</tr>
							</form>
						</table>

					";
				}
			}

			if (isset($_POST['bt-gerar-msg-padrao'])) {

				$msgSaudacao = $_POST['msg-saudacao'];
				$msgNomeAusente = $_POST['msg-nome-ausente'];
				$msgEmailAusente = $_POST['msg-email-ausente'];
				$msgGeneroAusente = $_POST['msg-genero-ausente'];
				$msgDataSaida = $_POST['msg-data-saida'];
				$msgDataRetorno = $_POST['msg-data-retorno'];
				$msgNomeContato = $_POST['msg-nome-contato'];
				$msgEmailContato = $_POST['msg-email-contato'];
				$msgDespedida = $_POST['msg-despedida'];

				if ($msgGeneroAusente == "Masculino") {
					$msgGeneroAusente = "Obrigado";
				}else{
					$msgGeneroAusente = "Obrigada";
				}

				if ($msgDespedida == 1) {
					$msgDespedida = "Atenciosamente";
				}if ($msgDespedida == 2) {
					$msgDespedida = "Espero vê-lo em breve.";
				} else {
					$msgDespedida = "Um grande abraço.";
				}
				
				echo "
					<h3>A sua mensagem ficou assim:</h3>
					<fieldset>
					$msgSaudacao,<br>
					<br>
					$msgGeneroAusente pelo seu email! Estarei fora do escritório de <strong> "; echo date('d/m/Y', strtotime($msgDataSaida)); echo " </strong> à <strong>"; echo date('d/m/Y', strtotime($msgDataRetorno)); echo "</strong> e não acessarei meu email durante esse período. <br> 
					<br>
					Se tiver algum assunto urgente, favor contatar a $msgNomeContato em $msgEmailContato.<br>
					<br>
					$msgDespedida <br>
					$msgNomeAusente
										
					</fieldset>
					<h3> Clique no texto abaixo para copiar </h3>
					<textarea id='texto'>
$msgSaudacao,<br>
<br>
$msgGeneroAusente pelo seu email! Estarei fora do escritório de <strong> "; echo date('d/m/Y', strtotime($msgDataSaida)); echo " </strong> à <strong>"; echo date('d/m/Y', strtotime($msgDataRetorno)); echo "</strong> e não acessarei meu email durante esse período. <br> 
<br>
Se tiver algum assunto urgente, favor contatar a $msgNomeContato em $msgEmailContato.<br>
<br>
$msgDespedida <br>
$msgNomeAusente
					</textarea>

					

					";
				}

				if (isset($_POST['bt-gerar-msg-ferias'])) {

					$msgSaudacao = $_POST['msg-saudacao'];
					$msgNomeAusente = $_POST['msg-nome-ausente'];
					$msgEmailAusente = $_POST['msg-email-ausente'];
					$msgDataSaida = $_POST['msg-data-saida'];
					$msgDataRetorno = $_POST['msg-data-retorno'];
					$msgNomeContato = $_POST['msg-nome-contato'];
					$msgEmailContato = $_POST['msg-email-contato'];
					$msgDespedida = $_POST['msg-despedida'];

					if ($msgDespedida == 1) {
						$msgDespedida = "Atenciosamente";
					}if ($msgDespedida == 2) {
						$msgDespedida = "Espero vê-lo em breve.";
					} else {
						$msgDespedida = "Um grande abraço.";
					}

					echo "
					<h3>A sua mensagem ficou assim: </h3>

					<fieldset>
						$msgSaudacao, tudo bem?
						<br><br>
						Não estarei no escritório entre os dias <strong>"; echo date('d/m/Y', strtotime($msgDataSaida)); echo "</strong> a <strong>"; echo date('d/m/Y', strtotime($msgDataRetorno)); echo "</strong>. E por uma ocasião muito especial: Minhas tão desejadas férias.<br>
						Estarei rodeado de praias, natureza e tranquilidade, por isso não conseguirei dedicar 100% para responder ao seu email.<br>
						Se precisar de ajuda entre em contato com a $msgNomeContato no email $msgEmailContato.<br>
						<br>
						$msgDespedida<br>
						$msgNomeAusente
					</fieldset>

					<h3> Clique no texto abaixo para copiar </h3>
						<textarea id='texto'>
$msgSaudacao, tudo bem?
<br><br>
Não estarei no escritório entre os dias <strong>"; echo date('d/m/Y', strtotime($msgDataSaida)); echo "</strong> a <strong>"; echo date('d/m/Y', strtotime($msgDataRetorno)); echo "</strong>. E por uma ocasião muito especial: Minhas tão desejadas férias.<br>
Estarei rodeado de praias, natureza e tranquilidade, por isso não conseguirei dedicar 100% para responder ao seu email.<br>
Se precisar de ajuda entre em contato com a $msgNomeContato no email $msgEmailContato.<br>
<br>
$msgDespedida<br>
$msgNomeAusente
						</textarea>
					";
				}

				if (isset($_POST['bt-gerar-msg-licencamedica'])) {

					$msgSaudacao = $_POST['msg-saudacao'];
					$msgNomeAusente = $_POST['msg-nome-ausente'];
					$msgEmailAusente = $_POST['msg-email-ausente'];
					$msgDataSaida = $_POST['msg-data-saida'];
					$msgDataRetorno = $_POST['msg-data-retorno'];
					$msgNomeContato = $_POST['msg-nome-contato'];
					$msgEmailContato = $_POST['msg-email-contato'];
					$msgDespedida = $_POST['msg-despedida'];

					if ($msgDespedida == 1) {
						$msgDespedida = "Atenciosamente";
					}if ($msgDespedida == 2) {
						$msgDespedida = "Espero vê-lo em breve.";
					} else {
						$msgDespedida = "Um grande abraço.";
					}

					echo "
						<h3>A sua mensagem ficou assim:</h3>
						<fieldset>
							$msgSaudacao, tudo bem?
							<br>
							Por motivos de saúde não estarei no escritório entre os dias <strong> "; echo date('d/m/Y', strtotime($msgDataSaida)); echo "</strong> à <strong>"; echo date('d/m/Y', strtotime($msgDataRetorno)); echo "</strong>.<br>
							Na minha ausência entre em contato com $msgNomeContato através do email $msgEmailContato.
							<br><br>
							$msgDespedida<br>
							$msgNomeAusente
						</fieldset>

						<h3>Clique no texto abaixo para copiar</h3>

						<textarea id='texto'>
$msgSaudacao, tudo bem?
<br>
Por motivos de saúde não estarei no escritório entre os dias <strong> "; echo date('d/m/Y', strtotime($msgDataSaida)); echo "</strong> à <strong>"; echo date('d/m/Y', strtotime($msgDataRetorno)); echo "</strong>.<br>
Na minha ausência entre em contato com $msgNomeContato através do email $msgEmailContato.
<br><br>
$msgDespedida<br>
$msgNomeAusente
						</textarea>
					";
				}

				if (isset($_POST['bt-gerar-msg-finaldoano'])) {

					$msgSaudacao = $_POST['msg-saudacao'];
					$msgNomeAusente = $_POST['msg-nome-ausente'];
					$msgEmailAusente = $_POST['msg-email-ausente'];
					$msgDataSaida = $_POST['msg-data-saida'];
					$msgDataRetorno = $_POST['msg-data-retorno'];
					$msgDespedida = $_POST['msg-despedida'];
					$msgAnoNovo = date('Y') + 1;

					if ($msgDespedida == 1) {
						$msgDespedida = "Atenciosamente";
					}if ($msgDespedida == 2) {
						$msgDespedida = "Espero vê-lo em breve.";
					} else {
						$msgDespedida = "Um grande abraço.";
					}

					echo "
						<h3>A sua mensagem ficou assim:</h3>
						<fieldset>
							$msgSaudacao,<br><br>
							Chegamos a mais um final de ano que alcançamos muitos objetivos, batemos a meta e rompemos barreiras. Agora é hora de recarregar as energias para mais um desafiador ano que está a nossa frente.<br><br>
							Entre os dias <strong>"; echo date('d/m/Y', strtotime($msgDataSaida)); echo "</strong> à <strong>"; echo date('d/m/Y', strtotime($msgDataRetorno)); echo "</strong> estarei ausente do escritório comemorando junto a família e amigos esse ano de sucesso. <br><br>
							Ao retornar as atividades responderei seu email.<br><br>
							Desejo tudo de bom para o próximo ano, muito sucesso, amor e prosperidade.<br><br>

							$msgDespedida<br>
							$msgNomeAusente <br>
							Boas festas um prospero $msgAnoNovo
						</fieldset>

						<h3>Clique no texto abaixo para copiar</h3>

						<textarea id='texto'>
$msgSaudacao,<br><br>
Chegamos a mais um final de ano que alcançamos muitos objetivos, batemos a meta e rompemos barreiras. Agora é hora de recarregar as energias para mais um desafiador ano que está a nossa frente.<br><br>
Entre os dias <strong>"; echo date('d/m/Y', strtotime($msgDataSaida)); echo "</strong> à <strong>"; echo date('d/m/Y', strtotime($msgDataRetorno)); echo "</strong> estarei ausente do escritório comemorando junto a família e amigos esse ano de sucesso. <br><br>
Ao retornar as atividades responderei seu email.<br><br>
Desejo tudo de bom para o próximo ano, muito sucesso, amor e prosperidade.<br><br>

$msgDespedida<br>
$msgNomeAusente <br>
Boas festas um prospero $msgAnoNovo
						</textarea>
					";
				}

				if (isset($_POST['bt-gerar-msg-caixadesativado'])) {

					$msgSaudacao = $_POST['msg-saudacao'];
					$msgNomeAusente = $_POST['msg-nome-ausente'];
					$msgEmailAusente = $_POST['msg-email-ausente'];
					$msgNomeEmpresa = $_POST['msg-nome-empresa'];
					$msgNomeContato = $_POST['msg-nome-contato'];
					$msgEmailContato = $_POST['msg-email-contato'];
					$msgDespedida = $_POST['msg-despedida'];

					if ($msgDespedida == 1) {
						$msgDespedida = "Atenciosamente";
					}if ($msgDespedida == 2) {
						$msgDespedida = "Espero vê-lo em breve.";
					} else {
						$msgDespedida = "Um grande abraço.";
					}

					echo "
						<h3>A sua mensagem ficou assim:</h3>
						<fieldset>
							Informamos que essa caixa de email foi desativada, para mais informações entre em contato com o $msgNomeContato no email $msgEmailContato.
							<br><br>
							Agradecemos o contato<br>
							$msgDespedida<br>
							$msgNomeEmpresa
						</fieldset>

						<h3>Clique no texto abaixo para copiar</h3>

						<textarea id='texto'>
Informamos que essa caixa de email foi desativada, para mais informações entre em contato com o $msgNomeContato no email $msgEmailContato.
<br><br>
Agradecemos o contato<br>
$msgDespedida<br>
$msgNomeEmpresa
						</textarea>
					";
				}

		 ?>
	</div>

</body>
</html>