<?php
    //Declaração das variáveis
    $litro = (double) 0;
    $gasolina = (int) 0;
    $alcool = (int) 0;
	$saida = (string) null;
	$resultado = (string) null;
	
    //Verifica se o botao foi clicado
    if(isset($_GET['btncalc']))
    {
        $litro = $_GET['txtlitro'];
		  
        
	
      if ($litro == null)
           echo("<div class='erro'>Erro: Favor preencher todos os valores</div>");
        //Tratamento para entrada de valores numericos
        elseif (is_numeric($litro))
		
			if ($gasoina = 3.30 and $litro <= 20)
			{
		   $saida = ($litro * $gasolina);
		   $resultado = $saida - ($saida *0.04);
			}
		   if ($gasoina = 3.30 and $litro > 20)
		   {
		   $saida = ($litro * $gasolina);
		   $resultado = $saida - ($saida *0.06);
		   }
		   if ($alcool = 2.90 and $litro <= 20)
		   {
		   $saida = ($litro * $alcool);
		   $resultado = $saida - ($saida *0.03);
		   }
		   	if ($alcool = 2.90 and $litro > 20)
			{
		   $saida = ($litro * $alcool);
		   $resultado = $saida - ($saida *0.05);
			}
		
			
	}
		
	
     
?>
<html>
    <head>
        <title>Salario</title>
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
        
        </style>
    </head>
	<body>
        
        <div id="conteudo">
            <div id="titulo">
               Posto
            </div>

            <div id="form">
                <form name="frmvolume" method="get" action="posto.php">
					Litros:<input type="text" name="txtlitro" value="" > <br>
					<select id= combustivel>
					      <option name="txtalcool" value="" >Alcool</option>
                         <option name="txtgasolina" value="" >Gasolina</option>
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