<?php
	$inicial = "-";
	$final = "-";
	$numPares = 0;
	$numImpares = 0;
	
	if(isset($_GET['btncalc']))
	{
	$inicial = $_GET['inicial'];
	$final = $_GET['final'];

    
	
	
	
	
	
	
	
	
	
	
	
	}	
 /* if($numPares=$inicial % 2 == 0;$inicial++){
     echo ($numPares++);
} else {
     echo ($numImpares++);
}*/
?>
<html>
    <head>
        <title>9</title>
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
               9
            </div>

            <div id="form">
                <form name="frmvolume" method="get" action="9.php">
						<select name="inicial"  id= 9>
						<?php 
						for ($cont=0;$cont<=500;$cont++)
						{
					   ?>
					   Número Inicial
					   <option  value="<?php echo ($cont);?>"><?php echo ($cont);?></option>
						<?php                   
                  }
                  ?> 
					</select> <br><br>
					<select name="final"  id= 9>
						<?php 
						for ($cont=100;$cont<=1000;$cont++)
						{
					   ?>
					   Número Final
					   <option value="<?php echo ($cont);?>"><?php echo ($cont);?></option>
						<?php                   
                  }
                  ?> 
					</select> <br><br>
																		
							<input type="submit" name="btncalc" value ="Calcular" >
							
						
						<br><br><div id="resultado">
						     <?php
                            echo("Pares = ". $numPares);
							
                                
                                
                            ?>
						</div><br>
						<div id="resultado">
						
						     <?php
                            echo("impares = ". $numImpares);
							
                                
                                
                            ?>
						</div>
						
					</form>
            </div>
           
        </div>
        
		
	</body>

</html>