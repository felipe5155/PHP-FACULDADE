<?php
    //Declaração das variáveis
    $conta = (int) "";
    $debito = (double) null;
    $credito = (double) null;
	$saldo = (double)null;
	$saida = (string) null;
	$atual = (double) "";
	
	
    //Verifica se o botao foi clicado
    if(isset($_GET['btncalc']))
    {
        $conta = $_GET['txtconta'];
		$debito = $_GET['txtdebito'];
		$credito = $_GET['txtcredito'];
		$saldo = $_GET['txtsaldo'];
        
	
      if ($conta == null)
           echo("<div class='erro'>Erro: Favor preencher todos os valores</div>");
        //Tratamento para entrada de valores numericos
        elseif (is_numeric($saldo))
			{
				$atual = $saldo - $debito + $credito;
					
			}
			if ($atual >= 0){
				
			$saida = ('saldo positivo');
			}
			elseif ($atual < 0){
				
			$saida = ('saldo negativo');
	}
		
			
		
			
	}
		
	
     
?>
<html>
    <head>
        <title>3</title>
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
               3
            </div>

            <div id="form">
                <form name="frmvolume" method="get" action="3.php">
					Nª da Conta:<input type="text" name="txtconta" value="0" > <br>
						Débito:<input type="text" name="txtdebito" value="0" > <br>
						Saldo:<input type="text" name="txtsaldo" value="0" > <br>
						Crédito:<input type="text" name="txtcredito" value="0" > <br>
						
						
							
							<input type="submit" name="btncalc" value ="Calcular" >
							
						
						<div id="resultado">
						     <?php
                                echo("salario total = ". $atual."<br>". $saida);
							
                                
                                
                            ?>
						</div>
						
					</form>
            </div>
           
        </div>
        
		
	</body>

</html>