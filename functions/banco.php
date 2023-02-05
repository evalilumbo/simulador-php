<?php
		// CONSTANTES DO SISTEMA
		$padrao = 100;
		$constante_de_dfi = 0.000029;
		$banco = $_POST['banco']; 
		$tac = 0;
		$itbi = 0;
		$mip_cons = 0; 
		$taxa_efetiva = 9.34;
		
		// AMORTIZAÇÃO, DFI e TAXA MENSAL		
		$amortizacao = $credito/$prazo;
		$dfi = $valor_do_imovel*$constante_de_dfi; 		  
        $taxa_mensal = ((8.89/$padrao+1)**(1/12)-1)*$padrao;
		
		// DATAS E MIP
		$mip = $credito*$mip_cons/$padrao;
        $data = date("Y-m-d");         
        $data_registro = DateTime::createFromFormat('Y-m-d', $data)->format('d/m/Y');
		
		// GUARDANDO INFORMAÇÃO
		$dados[] = array(
		    "imovel" => $valor_do_imovel,
		    "credito" => $credito,
		    "prazo" => $prazo,
		    "nasc" => $data_registro,
		    "taxa" => $taxa_efetiva,
		    "itbi" => $itbi,
			"parcela" => 0,
			"data" => $data,
			"amortizacao" => 0,
			"juros" => 0,
			"mip" => 0,
			"dfi" => 0,
			"tac" => 0,
			"prestacao" => 0,
			"saldo" => $credito
        );
		
		// GUARDANDO DADOS DAS PARCELAS RESTANTES
		
		$data = date("Y-m-d", strtotime("+1 month")); 
		$juros = $taxa_mensal/$padrao*$credito;	
		$mip = $credito*$mip_cons/$padrao;
		$prestacao = $amortizacao + $juros + $dfi + $mip + $tac;
		$saldo = $credito - $amortizacao;
		
		$dados[] = array(
			"parcela" => 1,
			"data" => $data,
			"amortizacao" => $amortizacao,
			"juros" => $juros,
			"mip" => $mip,
			"dfi" => $dfi,
			"tac" => $tac,
			"prestacao" => $prestacao,
			"saldo" => $saldo,
		);
		
		$i = 2;
		while ($i <= $prazo) {
			if($saldo > 0){
				$data = date("Y-m-d", strtotime("+$i month")); 
				$juros = $taxa_mensal/$padrao*$saldo;	
				$mip = $saldo*$mip_cons/100;
				$prestacao = $amortizacao + $juros + $dfi + $mip + $tac;
				$saldo = $saldo - $amortizacao;
				
				$dados[] = array(
					"parcela" => $i,
					"data" => $data,
					"amortizacao" => $amortizacao,
					"juros" => $juros,
					"mip" => $mip,
					"dfi" => $dfi,
					"tac" => $tac,
					"prestacao" => $prestacao,
					"saldo" => $saldo,
				);
			} 
			$i++;
		}
		
		$data = date("Y-m-d", strtotime("+$prazo month"));
		$tac = 0; 	
		$juros = $taxa_mensal/$padrao*$saldo;	
		$mip = $saldo*$mip_cons/$padrao;
		$prestacao = $amortizacao + $juros + $dfi + $mip + $tac;
		$saldo = 0;
			
		$dados[] = array(
			"parcela" => $prazo,
			"data" => $data,
			"amortizacao" => $amortizacao,
			"juros" => $juros,
			"mip" => $mip,
			"dfi" => $dfi,
			"tac" => $tac,
			"prestacao" => $prestacao,
			"saldo" => $saldo,
		);
		
		$json = json_encode($dados);		
		$jsons = json_decode($json);		
		
		$investment = $credito;
		$flow = $dados;
		function irt ($investment, $flow) {
          for ($n = 0; $n < 100; $n += 0.0000001) {
            $pv = 0;
            for ($i = 0; $i < count($flow); $i++) {
              $pv = $pv + $flow[$i]['prestacao'] / pow(1 + $n, $flow[$i]['parcela']);
            }
            if ($pv <= $investment) {
              return round($n * 10000000) / 10000000;
            }
          } 
		}

		$runs = json_encode(irt($investment, $flow));
		$regra = $runs;
		$cet = number_format((((1+$regra)**12)-1)*100,2,",",".");
		
