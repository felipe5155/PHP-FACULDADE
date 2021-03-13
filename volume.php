<?php
    //Declaração das variáveis
    $area = (int) 0;
    $volume = (int)  0;
    $raio = (int) 0;
        
    //Verifica se o botao foi clicado
    if(isset($_POST['btncalc']))
    {
        $raio = $_POST['txtvolume'];
        
        
        //tratamento de erro para caixa vazia
        if ($raio == null)
           echo("<div class='erro'>Erro: Favor preencher todos os valores</div>");
        //Tratamento para entrada de valores numericos
        elseif (is_numeric($raio))
			{
				$volume = round (4 / 3 * 3.14 * $raio,2);
				$area =  round (3.14 * $raio * $raio,2);
			}
		} 
            /*EXEMPLO USANDO FOR
            for($cont=0;$cont<=$multiplicador;$cont++)
            {
                    $resultado = $tabuada * $cont;
                    $saida .= $tabuada . " x " . $cont . " = " . $resultado . "<br>";
            }
            */
            
        /*EXEMPLO USANDO WHILE
            $cont = 0;
            while ($cont <= $multiplicador)
            {
                $resultado = $tabuada * $cont;
//                $saida = $saida . $tabuada . " x " . $cont . " = " . $resultado . "<br>";
                
                $saida .= $tabuada . " x " . $cont . " = " . $resultado . "<br>";
                
                //$cont = $cont + 1;
                //$cont++;

                $cont +=1;
            }
            */
     
?>
<html>
    <head>
        <title>Volume</title>
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
                Volume
            </div>

            <div id="form">
                <form name="frmvolume" method="post" action="volume.php">
						Volume:<input type="text" name="txtvolume" value="0" > <br>
						
						
							
							<input type="submit" name="btncalc" value ="Calcular" >
							
						
						<div id="resultado">
						     <?php
                                echo("Area = ". $area."<br>");
                                echo ("Volume = ".$volume);
                                
                            ?>
						</div>
						
					</form>
            </div>
           
        </div>
        
		
	</body>

</html>