<?php
    //Declaração das variáveis
    $nota1 = (double) 0;
    $nota2 = (double) 0;
    $nota3 = (double) 0;
	 $media = (double) 0;
	 $saida = (double)null;
	 $aproveitamento = (int) null;
	 
    //Verifica se o botao foi clicado
    if(isset($_GET['btncalc']))
    {
        $nota1 = $_GET['txt1'];
		  $nota2 = $_GET['txt2'];
		  $nota3 = $_GET['txt3'];
		  $media = $_GET['txtmedia'];
        
	
        //tratamento de erro para caixa vazia
   
			if($nota1==null || $nota2==null || $nota3==null || $media == null){
		   echo("Erro ao calcular!");
		   }
		   
		   
		   //Formula para cálculo da media de aproveitamento
		   $saida = (($nota1 + $nota2 * 2 + $nota3 * 3 + $media)/7);
		  
		  
		  if($saida>= 9){
		  
        $aproveitamento = ('A');
		 }
		 elseif($saida>= 7.5 && $saida < 9){
		  
        $aproveitamento = ('B');
		
			}
			elseif($saida>= 6 && $saida < 7.5){
		  
        $aproveitamento = ('C');
		
			}
			 elseif($saida< 6){
		  
        $aproveitamento = ('D');
		
			}
	}
		
	
     
?>
<html>
    <head>
        <title>7</title>
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
                7
            </div>

            <div id="form">
                <form name="frmvolume" method="get" action="7.php">
						Nota 1:<input type="text" name="txt1" value="" > <br>
						Nota 2:<input type="text" name="txt2" value="" > <br>
						Nota 3:<input type="text" name="txt3" value="" > <br>
						Média:<input type="text" name="txtmedia" value="" > <br>
						
						
							
							<input type="submit" name="btncalc" value ="Calcular" >
							
						
						<div id="resultado">
						     <?php
 										                               
                                echo("Aproveitamento = ". $aproveitamento."<br>");
                                
                                
                                
                            ?>
						</div>
						
					</form>
            </div>
           
        </div>
        
		
	</body>

</html>