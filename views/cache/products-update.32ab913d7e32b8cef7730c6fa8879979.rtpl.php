<?php if(!class_exists('Rain\Tpl')){exit;}?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
   <h1>
      Lista de Produtos
   </h1>
</section>
<!-- Main content -->
<section class="content">
<div class="row">
   <div class="col-md-12">
      <div class="box box-primary">
         <div class="box-header with-border">
            <h3 class="box-title">Editar Produto</h3>
         </div>
         <!-- /.box-header -->
         <!-- form start -->
         <form role="form" action="/admin/products/<?php echo htmlspecialchars( $product["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post" enctype="multipart/form-data">
            <div class="box-body">
               <div class="form-group">
                  <label for="desproduct">Nome da produto</label>
                  <input type="text" class="form-control" id="desproduct" name="desproduct" placeholder="Digite o nome do produto" value="<?php echo htmlspecialchars( $product["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
               </div>
               <div class="form-group">
                  <label for="sku">Código do produto</label>
                  <input type="text" class="form-control" id="sku" name="sku" placeholder="Digite o código do produto" value="<?php echo htmlspecialchars( $product["sku"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
               </div>
               <div class="form-group">
                  <label for="desproduct">Descrição</label>
                  <!-- Main content -->
                  <section class="content">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="box box-info">
                              <div class="box-body pad">
                                 <textarea id="descriproduct" name="descriproduct" rows="10" cols="80"> <?php echo htmlspecialchars( $product["descriproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>

                                 </textarea>
         </form>
         </div>
         </div>
         <!-- /.box -->
         <div class="box">
         <div class="box-header">
         <label for="desproduct">Descrição Resumida</label>
         </div>
         <!-- /.box-header -->
         <div class="box-body pad">
         <textarea class="textarea" name="descriresproduct" id="descriresproduct" placeholder="Place some text here"
            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo htmlspecialchars( $product["descriresproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?></textarea>
         </div>
         </div>
         </div>
         <div class="form-group">
         <label for="vlprice">Preço</label>
         <input type="number" class="form-control" id="vlprice" name="vlprice" step="0.01" placeholder="0.00" value="<?php echo htmlspecialchars( $product["vlprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
         </div>
         <div class="form-group">
         <label for="vlwidth">Largura</label>
         <input type="number" class="form-control" id="vlwidth" name="vlwidth" step="0.01" placeholder="0.00" value="<?php echo htmlspecialchars( $product["vlwidth"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
         </div>
         <div class="form-group">
         <label for="vlheight">Altura</label>
         <input type="number" class="form-control" id="vlheight" name="vlheight" step="0.01" placeholder="0.00" value="<?php echo htmlspecialchars( $product["vlheight"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
         </div>
         <div class="form-group">
         <label for="vllength">Comprimento</label>
         <input type="number" class="form-control" id="vllength" name="vllength" step="0.01" placeholder="0.00" value="<?php echo htmlspecialchars( $product["vllength"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
         </div>
         <div class="form-group">
         <label for="vlweight">Peso</label>
         <input type="number" class="form-control" id="vlweight" name="vlweight" step="0.01" placeholder="0.00" value="<?php echo htmlspecialchars( $product["vlweight"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
         </div>
         <div class="form-group">
         <label for="file">Foto</label>
         <input type="file" class="form-control" id="file" name="file" value="<?php echo htmlspecialchars( $product["vlweight"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
         <div class="box box-widget">
         <div class="box-body">
         <img class="img-responsive" id="image-preview" src="<?php echo htmlspecialchars( $product["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="Photo">
         </div>
         </div>
         </div>
         </div>
         </div>
         <!-- /.box-body -->
         <div class="box-footer">
         <button type="submit" class="btn btn-primary">Salvar</button>
         </div>
         </form>
         </div>
      </div>
   </div>
   </section>
   <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
   document.querySelector('#file').addEventListener('change', function(){
     
     var file = new FileReader();
   
     file.onload = function() {
       
       document.querySelector('#image-preview').src = file.result;
   
     }
   
     file.readAsDataURL(this.files[0]);
   
   });
</script>

