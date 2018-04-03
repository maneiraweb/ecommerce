<?php if(!class_exists('Rain\Tpl')){exit;}?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Lista de Produtos
      </h1>
      <ol class="breadcrumb">
         <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="/admin/categories">Categorias</a></li>
         <li class="active"><a href="/admin/categories/create">Cadastrar</a></li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <div class="col-md-12">
            <div class="box box-success">
               <div class="box-header with-border">
                  <h3 class="box-title">Novo Produto</h3>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <form role="form" action="/admin/products/create" method="post">
                  <div class="box-body">
                     <div class="form-group">
                        <label for="desproduct">Nome da produto</label>
                        <input type="text" class="form-control" id="desproduct" name="desproduct" placeholder="Digite o nome do produto">
                     </div>

                     <div class="form-group">
                        <label for="sku">Código do produto</label>
                        <input type="text" class="form-control" id="sku" name="sku" placeholder="Digite o código do produto">
                     </div>

                     <div class="form-group">
                        <label for="desproduct">Descrição</label>
                        <!-- Main content -->
                        <section class="content">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="box box-info">
                                    <div class="box-body pad">
              
               <textarea id="descriproduct" name="descriproduct" rows="10" cols="80">
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
                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
               
               </div>
               </div>
               </div>
              
               </div>
               <div class="form-group">
               <label for="vlprice">Preço</label>
               <input type="number" class="form-control" id="vlprice" name="vlprice" step="0.01" placeholder="0.00">
               </div>
               <div class="form-group">
               <label for="vlwidth">Largura</label>
               <input type="number" class="form-control" id="vlwidth" name="vlwidth" step="0.01" placeholder="0.00">
               </div>
               <div class="form-group">
               <label for="vlheight">Altura</label>
               <input type="number" class="form-control" id="vlheight" name="vlheight" step="0.01" placeholder="0.00">
               </div>
               <div class="form-group">
               <label for="vllength">Comprimento</label>
               <input type="number" class="form-control" id="vllength" name="vllength" step="0.01" placeholder="0.00">
               </div>
               <div class="form-group">
               <label for="vlweight">Peso</label>
               <input type="number" class="form-control" id="vlweight" name="vlweight" step="0.01" placeholder="0.00">
               </div>
               <div class="form-group">
               <label for="desurl">URL</label>
               <input type="url" class="form-control" id="desurl" name="desurl">
               </div>
               </div>
               <!-- /.box-body -->
               <div class="box-footer">
                  <button type="submit" class="btn btn-success">Cadastrar</button>
               </div>
               </form>
            </div>
         </div>
      </div>
   </section>
   <!-- /.content -->
</div>
<!-- /.content-wrapper -->

