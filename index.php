<?php 
   ini_set('display_errors', 0 );
   error_reporting(0);
   
	if(isset($_POST['simular'])){
   	
		// INPUTS	
		$prazo = intval($_POST['prazo']);
		$valor_do_imovel = intval(str_replace('.', '', $_POST['vImovel']));
		$credito = intval(str_replace('.', '', $_POST['vCredito']));
		$datas = $_POST['dNasc'];   
		 
		include("functions/banco.php");
    
   } 
   ?>
<!doctype html>
<html lang="pt">
   <head>
      <meta charset="UTF-8">
      <meta name="description" content="Simulador de crédito em php por Evaristo Lilumbo">
      <meta name="keywords" content="PHP, SIMULADOR, CREDITO, EVARISTO, LILUMBO">
      <meta name="author" content="Evaristo Lilumbo">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  
      <title>Simulador de Crédito</title>
	  
      <link rel="stylesheet" href="assert/css/bootstrap.min.css">
      <link rel="stylesheet" href="assert/css/jquery.dataTables.min.css">
      <link rel="stylesheet" href="assert/principal.css">
	  
      <script type="text/javascript" language="javascript" src="assert/js/jquery-3.5.1.js"></script>
      <script type="text/javascript" language="javascript" src="assert/js/jquery.dataTables.min.js"></script> 
      <script type="text/javascript" language="javascript" src="assert/js/jquery.mask.min.js"></script> 			
   </head>
   <body>
      <div class="header h3">  
         SIMULADOR DE CRÉDITO 		
      </div>
      <div class="container-fluid">
         <div class="row mt-3 px-3">
            <div class="col-md-3 col-12">
               <div class="card p-4 shadow vhs">
                  <form action="" method="POST">
                     <div class="mb-2">
                        <label class="font-weight-bold">Valor do Imóvel </label>
                        <input class="form-control mb-2" id="x" name="vImovel" placeholder="400.000,00" required="" onkeypress="$(this).mask('#.###.###.##0,00', {reverse: true});"/>
                     </div>
                     <div class="mb-2">
                        <label class="font-weight-bold">Valor do Financiamento</label>
                        <input class="form-control mb-2" id="y" name="vCredito" placeholder="200.000,00" required="" onkeypress="$(this).mask('#.###.###.##0,00', {reverse: true});"/>
                     </div>
                     <div class="mb-2">
                        <label class="font-weight-bold">Data de Nascimento</label>
                        <input class="form-control mb-2" type="date" id="data" name="dNasc" placeholder="dd/mm/aaaa" required="" >
                     </div>
                     <div class="mb-2">
                        <label class="font-weight-bold">Prazo</label>
                        <input type="range" name="vol" value="210" min="30" max="420"  oninput="display.value=value" style="width:100%" onchange="display.value=value"> 
                        <center>
                           <input type="text" id="display" value="210" id="prazo"  name="prazo" style="border:none; font-weight:bold; font-size:17px; color:#3897ff; width:40px; text-align:center;" readonly>
                        </center>
                     </div> 
                     <div class="mb-2"> 
                        <input type="submit" class="btn bg-primary font-weight-bold text-white rounded" name="simular" value="SIMULAR AGORA" style="width:100%"/>
                     </div>
					
                  </form>
               </div>
            </div>
            <div class="col-md-9 col-12">
               <?php if(isset($_POST['simular'])){ ?>
               <div class="card p-4 shadow" style="font-size:12px">
                  <div class="menu">
                     <div class="row">
                        <div class="col">
                           Banco
                        </div>
                        <div class="col">
                           Total do Empréstimo
                        </div>
                        <div class="col">
                           Renda Mínima
                        </div>
                        <div class="col">
                           Primeira Parcela
                        </div>
                        <div class="col">
                           Taxa Efetiva
                        </div>
                        <div class="col">
                           Prazo
                        </div>
                        <div class="col">
                           CET
                        </div>
                     </div>
                  </div>
                  <?php include("layouts/pagina.php"); ?>	 
				  
				  <br><br>
				  OBS.: Possíveis taxas desactualizadas. Por favor, contacte o desenvolvedor para receber a API com dados actualizados: evalilumbo@gmail.com
               </div>
               <?php } else { ?>
               <div class="card p-4 shadow vhs">
                  <h4 class="text-primary text-center align-middle">SUA SIMULAÇÃO SERÁ MOSTRADA AQUI</h4>
               </div>
               <?php } ?>
            </div>
         </div>
      </div>
      <script src="assert/principal.js"></script> 
   </body>
</html>
