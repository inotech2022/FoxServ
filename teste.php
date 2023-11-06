<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select com PHP e Mysql</title>
</head>
<body>

<form method="post" action="post.php
                        <div class="linha">
                        <div class="textfield">
                            <label for="idTipoServico">Categoria</label>
                            <select name="idTipoServico" id="idTipoServico">
                                <option value="" selected disabled>Escolha a Categoria</option>
                                <?php
					$result_cat_post = "SELECT * FROM tipoServico ORDER BY nomeTipoServico";
					$resultado_cat_post = mysqli_query($conexao, $result_cat_post);
					while($row_cat_post = mysqli_fetch_assoc($resultado_cat_post) ) {
						echo '<option value="'.$row_cat_post['idTipoServico'].'">'.$row_cat_post['nomeTipoServico'].'</option>';
					}
				?>
                            </select>
                        </div>
                        <style type="text/css">
			.carregando{
				color:#ff0000;
				display:none;
			}
		</style>
                        <div class="textfield">
				<label for="idServico">Subcategoria:</label>
			<span class="carregando">Aguarde, carregando...</span>
			<select class= "idServico" name="idServico" id="idServico"  >
				<option value="" disabled >Escolha a Subcategoria</option>
			</select>
			</div>
                        
                    </div>

    <button type="submit">Enviar</button>
</form>

</body>
</html>