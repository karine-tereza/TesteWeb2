<html>
	<head>
		<title>Atividade Web2</title>
		<meta charset="UTF-8"/>
		<script type="text/javascript"></script>
		<script>
			function verificaIdade(){
				var idadeNoJs =document.getElementById('idadeID').value;
				//alert(idadeNoJs);
				if(idadeNoJs < 18){
					document.getElementById('msgIdade').innerHTML = "Negada a Entrada";
					//alert("maior");
					}
				}
				function saidaNome(){
				var nomeNoJs = document.getElementById('nomeID').value;
				alert(nomeNoJs);
			}
		</script>
		
	</head>
	<body>
		<form action="atividade.php" method="POST">
		<label>Nome:</label><input type="text" onblur="saidaNome();" name="nome" id="nomeID" />
		<label>Idade</label><input type="text" name="idade" id="idadeID" onblur="verificaIdade();" />
		<p  id= "msgIdade"> </p>
		<input type="submit" value="Salvar"/>
		</form>

		<?php
			if(! empty($_POST)){
			echo $_POST['nome'];
		   }
		?>
	</body>
</html> 