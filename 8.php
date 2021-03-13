<?php
    //Declaração das variáveis
    $valor1 = (int) 0;
    $cont = (int) 0;
	 $saida = (string)null;
	 $resultado = (string)null;
    //Verifica se o botao foi clicado
    if(isset($_GET['btncalc']))
    {
        $valor1 = $_GET['txt1'];
		  $cont = $_GET['txt2'];
        
	
        //tratamento de erro para caixa vazia
  
       if($valor1 > $cont){
		$saida = ('Erro ao calcular!');
	    }
	    
		for($valor1=$valor1;$valor1 <= $cont;$valor1++)
	
		{
			$resultado = $valor1 + $cont;
			$saida .= $valor1 . " + " . $cont . " = " . $resultado . "<br>";
	}
}
		
	
     
?>
<html>
    <head>
        <title>Exercício 8</title>
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
                Exercício 8
            </div>

            <div id="form">
                <form name="frmvolume" method="get" action="8.php">
						valor 1:<input type="text" name="txt1" value="" > <br>
						Valor 2:<input type="text" name="txt2" value="" > <br>
						
						
							
							<input type="submit" name="btncalc" value ="Calcular" >
							
						
						<div id="resultado">
						     <?php
                                echo($saida."<br>");
                                
                                
                            ?>
						</div>
						
					</form>
            </div>
           
        </div>
        
		
	</body>

</html>