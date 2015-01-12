<!DOCTYPE html>
<html>
	<head>
		<meta charset='UTF-8'>
		<title>WTF</title>
	</head>
	<body>

		<?php if ($erros) : ?>
			<p>Seu formulário possui erros!</p>
		<?php endif; ?>

		
		<form method="POST">
			
			<p>
				<label>
					Quantidade de vezes que quer mandar
					<input type='number' name='quantidade' value="<?php echo $spam['quantidade']; ?>" min="2" max="60">	
				</label>
			</p>

			<p>
				<label>
					Para:
					<input type='text' name="para" value="<?php echo $spam['para']; ?>">	
				</label>
			</p>

			<p>
				<label>
					Assunto:
					<input type='text' name='assunto' value="<?php echo $spam['assunto']; ?>">
				</label>
			</p>

			<p>
				<label>
					Mensagem:
					<textarea name="mensagem" value="<?php echo $spam['mensagem']; ?>"></textarea>
				</label>
			</p>

			<p>
				<label>
					<button type="submit">Spam!</button>
				</label>
			</p>

		</form>

	</body>
</html>