<?php

//Declaração das variáveis de entrada
$nome_produto = (string) null;
$quantidade_adquirida = (double) 0;
$valor_unitario = (double) 0;

//Declaração das variáveis de saída
$sub_total = (double) 0;
$total_a_pagar = (double) 0;
$desconto = (double) 0;
	
	//verificação para saber se o botão calcular foi clicado
	if(isset ($_POST ["btncalc"])) {
		
		
		$nome_produto = $_POST ["txtdescricao"];
		$quantidade_adquirida = $_POST ["txtquantidade"];
		$valor_unitario = $_POST ["txtvalor"];
		
	
	 if (is_numeric($quantidade_adquirida) && is_numeric($valor_unitario))
	 {
	
	$sub_total = ($quantidade_adquirida * $valor_unitario);

	
	$total_a_pagar = ($sub_total - $desconto);
	}
	
	
	if($quantidade_adquirida==null || $valor_unitario==null)
		echo("<div class='erro'>Erro ao calcular!</div>");
	else {
	
	
	if($quantidade_adquirida>0 && $quantidade_adquirida<= 5) { 
	$desconto = ($sub_total * 0.02);
	$total_a_pagar = ($sub_total - $desconto);
	echo ("2% de desconto");
	}
	
	elseif($quantidade_adquirida> 5 && $quantidade_adquirida<= 10) {
	$desconto = ($sub_total * 0.03);
	$total_a_pagar = ($sub_total - $desconto);
	echo ("3% de desconto");	
	}
	
	elseif($quantidade_adquirida> 10) {
	$desconto = ($sub_total * 0.05);
	$total_a_pagar = ($sub_total - $desconto);
	echo ("5% de desconto");	
	}
	}
}
?>

<html>
  <meta charset="UTF-8">
    <head>
        <title>6</title>
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
                6
            </div>

            <div id="form">
                <form name="frmvenda" method="post" action="6.php">
						Descrição produto:<input type="text" name="txtdescricao" size="15" maxlength="20" value= > <br>
						Quantidade:<input type="text" name="txtquantidade" size="5" maxlength="4" value="0"> <br>
						Valor unitário:<input type="text" name="txtvalor" size="5" maxlength="4" value="0"> <br>
							
							<input type="submit" name="btncalc" value ="Calcular" >
							
						
						<div id="resultado">
						     <?php
                                echo("total a pagar="."<br>". $total_a_pagar."<br>");
                                
                                echo("desconto=". $desconto);
                                
                                
                            ?>
						</div>
						
					</form>
            </div>
           
        </div>
        
		
	</body>

</html>