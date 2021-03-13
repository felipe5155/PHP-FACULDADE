<?php
    //Declaração das variáveis
    $salario = (double) 0;
    $resultado = (string) null;
    $venda = (double) 0;
	$saida = (string)null;
    //Verifica se o botao foi clicado
    if(isset($_GET['btncalc']))
    {
        $salario = $_GET['txtsalario'];
		$venda = $_GET['txtvenda'];
        
	
        //tratamento de erro para caixa vazia
   
			if ($venda <= 1500);
			
			{
			$resultado = $venda * 0.03;
		    $saida = $resultado + $salario;
			
			}
			if ($venda > 1500);
			
			{
			$resultado = $venda * 0.05;
			$saida = $resultado + $salario;
			
		
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
                Salario
            </div>

            <div id="form">
                <form name="frmvolume" method="get" action="2.php">
						Salario:<input type="text" name="txtsalario" value="0" > <br>
						Valor Venda:<input type="text" name="txtvenda" value="0" > <br>
						
						
							
							<input type="submit" name="btncalc" value ="Calcular" >
							
						
						<div id="resultado">
						     <?php
                                echo("salario total = ". $saida."<br>");
                                
                                
                            ?>
						</div>
						
					</form>
            </div>
           
        </div>
        
		
	</body>

</html>