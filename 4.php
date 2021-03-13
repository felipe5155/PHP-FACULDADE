<?php
    //Declaração das variáveis
    $estoque = (int) 0;
    $maxima = (int) 0;
    $minima = (int) 0;
	$media = (double)null;
	$saida = (string) null;
	
	
    //Verifica se o botao foi clicado
    if(isset($_GET['btncalc']))
    {
        $estoque = $_GET['txtestoque'];
		$maxima = $_GET['txtmaxima'];
		$minima = $_GET['txtminima'];
		
        
	
      if ($estoque == null)
           echo("<div class='erro'>Erro: Favor preencher todos os valores</div>");
        //Tratamento para entrada de valores numericos
        elseif (is_numeric($estoque))
			{
				$media = $maxima + $minima / 2;
					
			}
			if ($estoque >= $media){
				
			$saida = ('Não Efetuar compra');
			}
			elseif ($estoque < $media){
				
			$saida = ('Efetuar compra');
	}
		
			
		
			
	}
		
	
     
?>
<html>
    <head>
        <title>4</title>
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
               4
            </div>

            <div id="form">
                <form name="frmvolume" method="get" action="4.php">
					Estoque Atual:<input type="text" name="txtestoque" value="" > <br>
					Quantidade Máxima:<input type="text" name="txtmaxima" value="" > <br>
					Quantidade Mínima:<input type="text" name="txtminima" value="" > <br>
						
						
						
							
							<input type="submit" name="btncalc" value ="Calcular" >
							
						
						<div id="resultado">
						     <?php
                                echo("Média = ". $media."<br>". $saida);
							
                                
                                
                            ?>
						</div>
						
					</form>
            </div>
           
        </div>
        
		
	</body>

</html>