<?php if(!class_exists('Rain\Tpl')){exit;}?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
   <h1>
      Configurações de Entrega
   </h1>
   <ol class="breadcrumb">
      <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><a href="#">Configurações de Entrega</a></li>
   </ol>
</section>
<!-- Main content -->
<section class="content">
   <div class="row">
   <div class="col-md-12">
      <div class="box box-primary">
         <div class="box-body no-padding">
            <!-- SELECT2 EXAMPLE -->
            <div class="box box-default">
               <div class="box-header with-border">
                  <h3 class="box-title">Origem do Envio</h3>
                  <div class="box-tools pull-right">
                     <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                     <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                  </div>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <div class="row">
                     <div class="col-md-6">
                     	 
                        <div class="form-group">
                           <label>País</label>

                           <select class="form-control select2" style="width: 70%;">
                             <?php $counter1=-1;  if( isset($pais) && ( is_array($pais) || $pais instanceof Traversable ) && sizeof($pais) ) foreach( $pais as $key1 => $value1 ){ $counter1++; ?>	 <option selected="selected"><?php echo htmlspecialchars( $value1["SL_NOME"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option><?php } ?>
                              
                           </select>
                        </div>
                        <div class="form-group">
                           <label>Estado</label>
                           <select class="form-control select2" style="width: 70%;">
                              <?php $counter1=-1;  if( isset($delivery) && ( is_array($delivery) || $delivery instanceof Traversable ) && sizeof($delivery) ) foreach( $delivery as $key1 => $value1 ){ $counter1++; ?><option selected="selected"><?php echo htmlspecialchars( $value1["UF_NOME"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option><?php } ?>
                           </select>
                        </div>
                        
                     </div>
                  </div>
                  <!-- /.row -->
                  <form role="form">
                  <!-- text input -->
                  <div class="form-group">
                     <label>CEP</label>
                     <input type="text" class="form-control" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                     <label>Cidade</label>
                     <input type="text" class="form-control" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                     <label>Endereço</label>
                     <input type="text" class="form-control" placeholder="Enter ...">
                  </div>
                  <div class="form-group">
                     <label>Complemento</label>
                     <input type="text" class="form-control" placeholder="Enter ...">
                  </div>
                   <!-- SELECT2 EXAMPLE -->
      
            
            </div>
            <!-- /.col -->
          </div>
          <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Opções de Endereçamento</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label> Permitir Entrega para Vários Endereços</label>
                <select class="form-control select2" style="width: 50%;">
                  <option selected="selected">Sim</option>
                  <option>Não</option>
                </select>
              </div>
              <div class="form-group">
                     <label> Qtd Máxima Permitida para Múltiplos Endereços</label>
                     <input type="text" class="form-control" placeholder="Enter ...">
                  </div>
            </div>
                  
               </div>
                <span class="input-group-btn">
                <button type="submit" class="btn btn-info pull-right">SALVAR</button>
                </button>
              </span>
               <!-- /.box-body -->
            </div>
         </div>
      </div>
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

