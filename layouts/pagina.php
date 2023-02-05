<div class="accordion mb-2 headers">
   <div class="row">
      <div class="col">
         <div class="bbb">Banco Santander</div>
      </div>
      <div class="col">
         R$ <?= number_format($jsons[0]->saldo,2,",","."); ?>
      </div>
      <div class="col">
         R$ <?= number_format($jsons[1]->prestacao*100/40,2,",","."); ?>
      </div>
      <div class="col">
         R$ <?= number_format($jsons[1]->prestacao,2,",","."); ?>
      </div>
      <div class="col">
         <?= $jsons[0]->taxa; ?>% a.a.
      </div>
      <div class="col"> 
         <?= $jsons[0]->prazo; ?> meses
      </div>
      <div class="col"> 
         <?= $cet; ?>% a.a.
      </div>
   </div>
</div>
<table id="tabela1" class="display" style="width:100%">
   <thead>
      <tr>
         <th>Parcela</th>
         <th>Amortização</th>
         <th>Juros</th>
         <th>Seguros + TAC</th>
         <th>Prestação</th>
         <th>Saldo</th>
      </tr>
   </thead>
   <tbody>
      <?php foreach($dados as $v){ ?>
      <tr>
         <td><?= $v['parcela']; ?></td>
         <td>R$ <?= number_format($v['amortizacao'],2,",","."); ?></td>
         <td>R$ <?= number_format($v['juros'],2,",","."); ?></td>
         <td>R$ <?= number_format($v['mip'] + $v['dfi'] + $v['tac'],2,",","."); ?></td>
         <td>R$ <?= number_format($v['prestacao'],2,",","."); ?></td>
         <td>R$ <?= number_format($v['saldo'],2,",","."); ?></td>
      </tr>
      <?php } ?>
   <tbody>	
</table>
