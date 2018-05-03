<?php if(!class_exists('Rain\Tpl')){exit;}?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
   <h1>
      Formas de Entrega
   </h1>
   <ol class="breadcrumb">
      <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><a href="#">Configurações de Entrega</a></li>
   </ol>
</section>
<!-- Main content -->
<section class="content">
   <!-- SELECT2 EXAMPLE -->
   <div class="box box-default">
   <div class="box-header with-border">
      <h3 class="box-title">Correios</h3>
      <div class="box-tools pull-right">
         <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      </div>
   </div>
   <!-- /.box-header -->
   <div class="box-body">
      <div class="row">
         <div class="col-md-6">
            <div class="form-group">
               <label>Habilitar</label>
               <select class="form-control select2" style="width: 50%;">
                  <option selected="selected">Sim</option>
                  <option>Não</option>
               </select>
            </div>
            <div class="form-group">
               <label> Nome do Meio de Entrega</label>
               <input type="text" class="form-control" placeholder="Enter ...">
            </div>
            <!-- Select multiple-->
            <div class="form-group">
               <label>Serviços</label>
               <select multiple class="form-control">
                  <option value="40045">40045 - SEDEX A COBRAR SEM CONTRATO</option>
                  <option value="40215">40215 - SEDEX 10 SEM CONTRATO</option>
                  <option value="40290">40290 - SEDEX HOJE SEM CONTRATO</option>
                  <option value="04510" selected="selected">04510 - PAC SEM CONTRATO</option>
                  <option value="04014" selected="selected">04014 - SEDEX SEM CONTRATO</option>
                  <option value="04669" selected="selected">04669 - PAC CONTRATO AGENCIA</option>
                  <option value="04162" selected="selected">04162 - SEDEX CONTRATO AGENCIA</option>
                  <option value="04693">04693 - PAC CONTRATO GRANDES FORMATOS</option>
                  <option value="10065" selected="selected">10065 - CARTA COMERCIAL A FATURAR</option>
               </select>
               <p class="note">
                  <span>Serviços que estarão disponíveis, lembre-se de usar os serviços correspondentes a fonte configurada.</span>
               </p>
            </div>
            <div class="form-group">
               <label> Altura Padrão (cm)</label>
               <input type="text" class="form-control" placeholder="Enter ...">
               <p class="note">
                  <span>
                  Quando não configurada no produto será usada.<br>Mínimo de 2 cm.
                  </span>
               </p>
            </div>
            <div class="form-group">
               <label> Comprimento Padrão (cm)</label>
               <input type="text" class="form-control" placeholder="Enter ...">
               <p class="note">
                  <span>
                  Quando não configurado no produto será usado.<br>Mínimo de 16 cm.
                  </span>
               </p>
            </div>
            <div class="form-group">
               <label> Largura Padrão (cm)</label>
               <input type="text" class="form-control" placeholder="Enter ...">
               <p class="note">
                  <span>
                  Quando não configurado no produto será usado.<br>Mínimo de 16 cm.
                  </span>
               </p>
            </div>
            <div class="form-group">
               <label> Valor Mínimo de Compra</label>
               <input type="text" class="form-control" placeholder="Enter ...">
            </div>
            <div class="form-group">
               <label> Valor Máximo de Compra</label>
               <input type="text" class="form-control" placeholder="Enter ...">
            </div>
            <div class="form-group">
               <label> Adicionar ao prazo dos Correios (dias)</label>
               <input type="text" class="form-control" placeholder="Enter ...">
               <p class="note"><span>Adicionará mais dias aos prazos fornecidos pelos Correios.</span></p>
            </div>
            <div class="form-group">
               <label>  Largura Padrão (cm)</label>
               <input type="text" class="form-control" placeholder="Enter ...">
            </div>
            <!-- form-group -->
         </div>
         <!-- col-md-6 -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.box-body -->
   <!-- SELECT2 EXAMPLE -->
   <div class="box box-default">
   <div class="box-header with-border">
      <h3 class="box-title">Frete Grátis</h3>
      <div class="box-tools pull-right">
         <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
      </div>
   </div>
   <!-- /.box-header -->
   <div class="box-body">
      <div class="row">
         <div class="col-md-6">
            <div class="form-group">
               <label>Minimal</label>
               <select class="form-control select2" style="width: 50%;">
                  <option selected="selected">Sim</option>
                  <option>Não</option>
               </select>
            </div>
            <div class="form-group">
               <label>Text</label>
               <input type="text" class="form-control" placeholder="Enter ...">
            </div>
            <div class="form-group">
               <label>Text</label>
               <input type="text" class="form-control" placeholder="Enter ...">
            </div>
            <div class="form-group">
               <label>Text</label>
               <input type="text" class="form-control" placeholder="Enter ...">
            </div>
            <!-- form-group -->
         </div>
         <!-- col-md-6 -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.box-body -->
   <!-- SELECT2 EXAMPLE -->
   <div class="box box-default">
      <div class="box-header with-border">
         <h3 class="box-title">Frete Fixo</h3>
         <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
         </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  <label>Minimal</label>
                  <select class="form-control select2" style="width: 50%;">
                     <option selected="selected">Sim</option>
                     <option>Não</option>
                  </select>
               </div>
               <div class="form-group">
                  <label>Text</label>
                  <input type="text" class="form-control" placeholder="Enter ...">
               </div>
               <div class="form-group">
                  <label>Text</label>
                  <input type="text" class="form-control" placeholder="Enter ...">
               </div>
               <div class="form-group">
                  <label>Text</label>
                  <input type="text" class="form-control" placeholder="Enter ...">
               </div>
               <!-- form-group -->
            </div>
            <!-- col-md-6 -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /.box-body -->
</section>
</div>

