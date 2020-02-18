<?php
    session_start();
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Formulário de Teste</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <script type="text/javascript">

        //Validação dos campos do Form
            function validate(){
                var data = form.data.value;
                var textoformat = form.texto.value;
                var checkbox = form.checkbox.value;
                var mensagemformat = form.mensagem.value;


                //tratar campo data                
                if(/(\d{4})[-.\/](\d{2})[-.\/](\d{2})/gm.test(data))
                {
                    
                     function dataAtualFormatada()
                     {
                        // formata a data dd/mm/yyyy  
                        var data = new Date(),
                            dia  = data.getDate().toString(),
                            diaF = (dia.length == 1) ? '0'+dia : dia,
                            mes  = (data.getMonth()+1).toString(), //+1 pois no getMonth Janeiro começa com zero.
                            mesF = (mes.length == 1) ? '0'+mes : mes,
                            anoF = data.getFullYear();
      
                                var dataHj = diaF+mesF+anoF; 

                        //Browser.msgBox( "data atual é "  + dataHj );
                        return dataHj; 
                     }  
                     var dataformt = dataAtualFormatada(data);


                }else{
                        alert('Preencha o campo Data no formato  brasileiro : dd/mm/YYYY.');
                    form.data.focus();
                    return false;

                }

                //tratar campo texto do formulário

                if(/^[a-z\sçãõêíáéú]{0,144}$/gm.test(textoformat) == false)
                {
                    alert('Preencha o campo Texto apenas com letra minúscula e espaço até 144 caracteres.');
                    form.texto.focus();
                    return false;
                }




                //tratar campo texto grande do formulário

                if(/^[A-Z0-9\sÇÃÕÁÉÍÓÚ]{0,255}$/gm.test(mensagemformat) == false)
                {
                    alert('Preencha o campo Texto Grande apenas com letras maiúsculas, números e espaço até 255 caracteres.');
                    form.texto.focus();
                    return false;
                }
                
               
            }

        </script>
</head>
<body>
    <div class="formulario">
      <h1>Formulário de Teste</h1>
      
    </div >
    <!-- <div class="barra"></div> -->
    <div class="barra">    
      
    </div >
    <div class="formulario_div">

      <!--  <?php
            
        if(isset($_SESSION['msg'])){

            echo $_SESSION['msg'];
            unset ($_SESSION['msg']);

        }            

       ?>  -->
       <form name="form" class="formulario_form" aling="center"  method="post" action="processa_form.php">        
        <!-- <form name="form" class="formulario_form" aling="center"  method="post"> -->
        
            <div >
                <label for="data">Data:</label>
                <input type="date" id="data" name="data" >
                
            </div></br>
            
            <div >
                <label for="texto">Texto:</label>
                <input type="text" id="texto" name="texto" placeholder="Digite o Texto com apenas letras minusculas e espaços" >
            </div></br>
     
            <div >
                <label for="checkbox">Checkbox?</label>
                <input type="checkbox" id="checkbox" name="checkbox[]?" ></br>            
            </div></br>        
            
            <div >
                <label for="mensagem">Texto Grande:</label>
                <textarea name="mensagem" id="mensagem" placeholder="Digite a Mensagem*" ></textarea></br>
            </div></br>
     
            <input type="submit" value = "Envia" onclick="return validate()">

        </form> 
        <p >Teste de Formulário.</p>

    </div>
    <hr>
    <footer >
        <p >&copy; Criado por Flávio Magela -  Formulário Teste - SA Informática</p>
    </footer>
    
</body>
</html>