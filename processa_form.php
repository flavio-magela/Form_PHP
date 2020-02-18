<?php
	session_start();
	//include_once("conexao.php");
	require 'UI_Comp_Formulario.php';

    $validateScript = UI_Comp_Formulario::renderer();

    $validaData = UI_Comp_Formulario::validaScriptData();

    $validaTexto = UI_Comp_Formulario::validaScriptCheckbox();

    $validacheck = UI_Comp_Formulario::validaScriptCheckbox();    

    $validaMsg = UI_Comp_Formulario::validaScriptCheckbox();
    
   // Inserir os dados no BD

  //    $result_form = "INSERT INTO formulario (data, texto, checkbox, mensagem) VALUES ('$data_BR', '$texto ',  '$checkboxAsString', '$mensagem' )";

	// $resultado_formulario = mysqli_query($conn, $result_form);

	// if(mysqli_insert_id($conn)){
	// 	$_SESSION['msg'] = "<p style='color:green;'> Dados cadastrado com sucesso</p>";
	// 	header("Location: index.php");
	// }else{
	// 	$_SESSION['msg'] = "<p style='color:red;'>Dados não foi cadastrado com sucesso</p>";
	// 	header("Location: index.php");
	// }	

  ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Formulário de Teste</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    
</head>
<body>
	<div class="formulario">
      <h1>Formulário de Teste</h1>
      
    </div >
    
    <div class="barra"> </div >

    <div class="formulario_div" >

        <h3 >Dados coletados</h3>   

            <div class="formulario_form">
                
                <div class="dadoscoletados" >

                    <p>Data:
                    	<?= 
                    		$validaData;  
                    	?>
                    </p>               	
                    
                    <p>Texto:
                        <?= $validateScript['texto']?>
                    </p>

                    <p>Chackbox:
                    	<?=                 			
                    		$validacheck;
                    	?>
                    </p>

                    <p>Mensagem:
                    	<?= $validateScript['mensagem']?>
                    </p>                        

                </div>
            </div>
    </div>
    <hr>
    <footer >
        <p >&copy; Criado por Flávio Magela -  Formulário Teste - SA Informática</p>
    </footer>

</body>

</html>