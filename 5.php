<?php
    //Declaração das variáveis
   	$saida = (float) null;
	$resultado = (float) null;
	$gas = (float) null;
	$alc = (float) null;
	
    //Verifica se o botao foi clicado
    if(isset($_GET['btncalc']))
    {
        $litro = $_GET['txtlitro'];
		$tipo = $_GET['comb'];
	}   
	if ($litro == null)
           echo("<div class='erro'>Erro: Favor preencher todos os valores</div>");
     
	//Tratamento para entrada de valores numericos
    elseif (is_numeric($litro))
		
		
		
		if ($tipo == $gas and $litro <= 20)
		{
		   $saida = ($litro * 3.90);
		   $resultado = ($saida - ($saida *0.04));
		}   
		else if ($tipo == $gas and $litro > 20)
		{
		   $saida = ($litro * 3.90);
		   $resultado = $saida - (($saida *0.06));
		}
		else if ($tipo = $alc and $litro <= 20)
		{
		   $saida == ($litro * 2.90);
		   $resultado = $saida - (($saida *0.03));
		}
		else if ($tipo == $alc and $litro > 20)
		{
		   $saida = ($litro * 2.90);
		   $resultado = $saida - (($saida *0.05));
		}
	
	    
?>
<html>
    <head>
        <title>5</title>
        <style>
            
            .erro{
                font-family: sans-serif;
                color: red;
                font-weight: bold;
                font-size: 18px;
                width: 400px;
                height: 40px;
                border: solid 1px #000000;
                margin-left: auto;
                margin-right: auto;
            }
            
            #conteudo{
                width: 400px;
                min-height: 300px;
                height: auto;
                overflow: hidden;
                margin-left: auto;
                margin-right: auto;
                border: solid 1px #000000;
                text-align: center;
               
            }
            
            #titulo{
                width: inherit;
                height: 80px;
                background-color: #000000;
                color: #ffffff;
                box-sizing: border-box;
                padding-top: 25px;
                font-size: 26px;
                font-family: verdana;
                word-spacing: 5px;
                letter-spacing: 3px;
            }
            
            #form{
                width: inherit;
                height: 185px;
                padding-top: 20px;
                box-sizing: border-box;
            }
            
            input{
                margin-bottom: 10px;
                margin-left: 10px;
            }
            
            #resultado{
                width: 200px;
                min-height: 137px;
                height: auto;
                overflow: hidden;
                background-color: cornflowerblue;
                box-sizing: border-box;
                padding-top: 30px;
                font-family: cursive;
                font-size: 20px;
                font-weight: bold;
				float:right;
							
            }
			
			#container_opcoes{
				float:left;
				text-align:left;
			}
			
			label.align{
				display: inline-block;
				width: 150px;
            }
        
        </style>
    </head>
	<body>
        
        <div id="conteudo">
            <div id="titulo">
              5
            </div>

            <div id="form">
                <form name="frmvolume" method="get" action="5.php">
					
					<label for="input" class="align">Litros:</label>
					<input type="text" name="txtlitro" value="" > <br>
					
					<select name=comb> 
						
						<option name="txtalcool" value="$alc">Alcool</option>
					    <option name="txtgasolina" value="$gas">Gasolina</option>
                    			
					</select>	
												
							<input type="submit" name="btncalc" value ="Calcular" >
							
						
						<div id="resultado">
						    <?php
								
								echo("Valor com Desconto = ". $resultado);
						    ?>
						</div>
						
					</form>
            </div>
           
        </div>
        
		
	</body>

</html>