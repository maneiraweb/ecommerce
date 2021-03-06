<?php if(!class_exists('Rain\Tpl')){exit;}?>


<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(res/site/images/heading-pages-01.jpg);">
   <h2 class="l-text2 t-center">
      Cart
   </h2>
</section>
<div class"container">

       <?php if( $error != '' ){ ?>

         <div class="alert alert-danger">
          <?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?>

         </div>
         <?php } ?>

   <div class="row">
      <div class="col-xs-6 col-sm-4">
         <div class="opc">
            <div id="onestepcheckout-address-billing-wrapper">
               <div class="step-title">
                  <span class="number onestepcheckout-number">1</span>
                  <h2>INFORMAÇÕES PESSOAIS</h2>
               </div>
               <div class="control tipopessoa"">
                  <li>
                     <p class="required">Campos obrigatório</p>
                  </li>
                  <label class="radio-inline">
                  <input type="radio" name="survey" id="Radios1" value="Yes">
                  Pessoa Física
                  </label>
                  <label class="radio-inline">
                  <input type="radio" name="survey" id="Radios2" value="No">
                  Pessoa Juridica
                  </label>
               </div>
               <li class="osc-title">Informações de Acesso</li>
               <li class="wide">
                  <label for="billing:email" class="required"><em>*</em>Email</label>
                  <div class="input-box">
                     <input name="billing[email]" id="billing:email" title="Email" class="input-text validate-email validate-email-exist required-entry" value="" type="text">
                  </div>
               </li>
               <li class="control">
                  <input name="billing[create_account]" value="1" title="Criar Conta" id="billing:create_account" class="checkbox" type="checkbox"><label for="billing:create_account">Criar Conta</label>
               </li>
               <li class="osc-title">Informações Pessoais</li>
               <li class="wide">
                  <label for="billing:taxvat" class="required"><em>*</em>CPF</label>
                  <div class="input-box">
                     <input id="billing:taxvat" name="billing[taxvat]" value="" title="Número CPF/CNPJ" class="input-text required-entry validate-taxvat" maxlength="14" type="text">
                  </div>
               </li>
               <li class="wide">
                  <label for="billing:ie" class="required"><em>*</em>RG</label>
                  <div class="input-box">
                     <input id="billing:ie" name="billing[ie]" title="IE (Inscrição Estadual)" class="input-text" value="" maxlength="30" type="text">
                  </div>
               </li>
               <div class="customer-name">
                  <div class="field name-firstname">
                     <label for="billing:firstname" class="required"><em>*</em>Nome</label>
                     <div class="input-box">
                        <input id="billing:firstname" name="billing[firstname]" value="" title="Nome" maxlength="255" class="input-text required-entry" type="text">
                     </div>
                  </div>
                  <div class="field name-lastname">
                     <label for="billing:lastname" class="required"><em>*</em>Sobrenome</label>
                     <div class="input-box">
                        <input id="billing:lastname" name="billing[lastname]" value="" title="Sobrenome" maxlength="255" class="input-text required-entry" type="text">
                     </div>
                  </div>
               </div>
               <li class="fields">
                  <div class="field">
                     <label for="billing:telephone" class="required"><em>*</em>Telefone</label>
                     <div class="input-box">
                        <input name="billing[telephone]" title="Telefone" class="input-text validate-phone-br  required-entry" id="billing:telephone" value="" placeholder="(xx) 4567-8900" type="text">
                     </div>
                  </div>
                  <div class="field">
                     <label for="billing:fax">Celular</label>
                     <div class="input-box">
                        <input name="billing[fax]" title="Celular" class="input-text validate-phone-br " id="billing:fax" value="" placeholder="(xx) x4567-8900" type="text">
                     </div>
                  </div>
               </li>
               <li class="osc-title">Endereço de Cobrança</li>
               <li class="fields">
                  <div class="field">
                     <label for="billing:postcode" class="required"><em>*</em>CEP</label>
                     <div class="input-box">
                        <input title="CEP" name="billing[postcode]" id="billing:postcode" class="input-text validate-number  required-entry validate-zip-br" value="" maxlength="8" onblur="buscaCep('billing');" type="text">
                     </div>
                  </div>
                  <div class="field">
                     <label>&nbsp;</label>        
                     <div class="input-box">
                        <div class="onestepcheckout-postcod-process onestepcheckout-overlay-16">&nbsp;</div>
                        <a class="nao-sei-cep" href="#" onclick="popWin('http://m.correios.com.br/movel/buscaCep.do', 'I forgot my zipcode', 'width=360,height=370,left=200,top=50,location=no,status=yes,scrollbars=yes,resizable=yes'); return false;">Não sei meu cep? </a>
                     </div>
                  </div>
               </li>
               <li class="wide">
                  <label for="billing:street1" class="required"><em>*</em>Endereço</label>
                  <div class="input-box">
                     <input title="Endereço" name="" id="" class="input-text  required-entry" value="<?php echo htmlspecialchars( $address["desaddress"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" autocomplete="off" type="text">
                  </div>
               </li>
               <li class="wide">
                  <label for="billing:street2" class="required"> <em>*</em> Número</label>
                  <div class="input-box">
                     <input title="Número" name="numero" id="" class="input-text required-entry" value="<?php echo htmlspecialchars( $address["desnumber"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" autocomplete="off" type="text">
                  </div>
               </li>
               <li class="wide">
                  <label for="billing:street3">Complemento</label>
                  <div class="input-box">
                     <input title="Complemento" name="" id="" class="input-text " value="<?php echo htmlspecialchars( $address["descomplement"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" autocomplete="off" type="text">
                  </div>
               </li>
               <li class="wide">
                  <label for="billing:street4" class="required"> <em>*</em> Bairro</label>
                  <div class="input-box">
                     <input title="Bairro" name="Bairro" id="bairro" class="input-text required-entry" value="<?php echo htmlspecialchars( $address["desdistrict"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" autocomplete="off" type="text">
                  </div>
               </li>
               <li class="fields">
                  <div class="field">
                     <label for="billing:city" class="required"><em>*</em>Cidade</label>
                     <div class="input-box">
                        <input title="Cidade" name="cidade" class="input-text  required-entry" id="billing:city" value="<?php echo htmlspecialchars( $address["descity"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" type="text">
                     </div>
                  </div>
                  <div class="field">
                     <label for="billing:region_id" class="required"><em>*</em>Estado</label>
                     <div class="input-box">
                        <select id="billing:region_id" name="billing[region_id]" title="Estado" class="validate-select required-entry" style="" defaultvalue="">
                           <option value="">Selecione</option>
                           <option value="485" title="Acre">Acre</option>
                           <option value="486" title="Alagoas">Alagoas</option>
                           <option value="487" title="Amapá">Amapá</option>
                           <option value="488" title="Amazonas">Amazonas</option>
                           <option value="489" title="Bahia">Bahia</option>
                           <option value="490" title="Ceará">Ceará</option>
                           <option value="491" title="Espírito Santo">Espírito Santo</option>
                           <option value="492" title="Goiás">Goiás</option>
                           <option value="493" title="Maranhão">Maranhão</option>
                           <option value="494" title="Mato Grosso">Mato Grosso</option>
                           <option value="495" title="Mato Grosso do Sul">Mato Grosso do Sul</option>
                           <option value="496" title="Minas Gerais">Minas Gerais</option>
                           <option value="497" title="Pará">Pará</option>
                           <option value="498" title="Paraíba">Paraíba</option>
                           <option value="499" title="Paraná">Paraná</option>
                           <option value="500" title="Pernambuco">Pernambuco</option>
                           <option value="501" title="Piauí">Piauí</option>
                           <option value="502" title="Rio de Janeiro">Rio de Janeiro</option>
                           <option value="503" title="Rio Grande do Norte">Rio Grande do Norte</option>
                           <option value="504" title="Rio Grande do Sul">Rio Grande do Sul</option>
                           <option value="505" title="Rondônia">Rondônia</option>
                           <option value="506" title="Roraima">Roraima</option>
                           <option value="507" title="Santa Catarina">Santa Catarina</option>
                           <option value="508" title="São Paulo">São Paulo</option>
                           <option value="509" title="Sergipe">Sergipe</option>
                           <option value="510" title="Tocantins">Tocantins</option>
                           <option value="511" title="Distrito Federal">Distrito Federal</option>
                        </select>
                        <script type="text/javascript">
                           //<![CDATA[
                           $('billing:region_id').setAttribute('defaultValue',  "");
                           //]]>
                        </script>
                        <input id="billing:region" name="billing[region]" value="" title="Estado" class="input-text required-entry" style="display:none;" type="text">
                     </div>
                  </div>
               </li>
               <li class="wide">
                  <label for="billing:country_id" class="required"><em>*</em>País</label>
                  <div class="input-box">
                     <select name="billing[country_id]" id="billing:country_id" class="validate-select" title="País">
                        <option value=""> </option>
                        <option value="BR" selected="selected">Brasil</option>
                     </select>
                  </div>
               </li>
               <li class="osc-title">Endereço de Entrega</li>
               <li class="control">
                  <label for="billing:use_for_shipping"> <input name="billing[use_for_shipping]" value="1" title="Enviar para o mesmo endereço" id="billing:use_for_shipping" checked="checked" class="checkbox" type="checkbox">Enviar para o mesmo endereço</label>
               </li>
            </div>
         </div>
      </div>
      <div class="col-xs-6 col-sm-4">

       <!-- Formas de entregas -->
         <div class="opc">
            <div class="step-title">
               <span class="onestepcheckout-number">2</span>
               <h2>FORMA ENTREGA</h2>
            </div>
            <dt id="correios">Correios</dt>
              <div class="radio">
                <label><input type="radio" name="pac"> PAC - R$ <?php echo formatPrice($cart["vlfreight"]); ?> <?php if( $cart["nrdays"] >= 0 ){ ?>

                 <small> Em média: <?php echo htmlspecialchars( $cart["nrdays"], ENT_COMPAT, 'UTF-8', FALSE ); ?> dia(s)</small> <?php } ?></label>
              </div>
              <div class="radio">
                <label><input type="radio" name="sedex"> SEDEX - R$ <?php echo formatPrice($cart["vlfreight"]); ?> <?php if( $cart["nrdays"] >= 0 ){ ?> <small>Em média <?php echo htmlspecialchars( $cart["nrdays"], ENT_COMPAT, 'UTF-8', FALSE ); ?> dia(s)</small><?php } ?></label>
              </div> 

              <dt id="retira">Retirar Pessoalmente</dt>

              <label id="retira"><input type="radio" name="sedex"> R$ 0,00 </label>
         </div>
         <!-- Formas de Pagamento -->
         <div class="opc">
            <div class="step-title">
               <span class="onestepcheckout-number">3</span>
               <h2>FORMA PAGAMENTO</h2>
            </div>
            <div class="pagamentos">
               <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
               <form>
                  <ul>
                     <li>
                        <input type="radio" id="div1" name="consulta" checked value="1">
                        <label for="f-option">Cartão de Crédito</label>
                        <div class="cartao" id="m1">
                             <div class="field" id="cardBrand">
    <label for="cardNumber">N&uacute;mero</label>
    <input type="text" name="cardNumber" id="cardNumber" class="cardDatainput" />
   </div>
   
   <div class="field">
    <label for="cardExpirationMonth">Data de Vencimento (99/9999)</label>
    <input type="text" name="cardExpirationMonth" id="cardExpirationMonth" class="cardDatainput month" maxlength="2" /> /
    <input type="text" name="cardExpirationYear" id="cardExpirationYear" class="cardDatainput year" maxlength="4" />
   </div>
   
   <div class="field">
    <label for="cardCvv">C&oacute;digo de Seguran&ccedil;a</label>
    <input type="text" name="cardCvv" id="cardCvv" maxlength="5" class="cardDatainput" />
   </div>


                        </div>
                     </li>
                     <li>
                        <input type="radio" id="div2" name="consulta" value="2">
                        <label for="s-option">Boleto</label>
                        <div class="cartao" id="m2" hidden>
                           <img src="https://www.pulsation.com.br/skin/frontend/base/default/images/gerencianet/icon-boleto.png">
                           <p> O Boleto bancário será gerado assim que a compra for finalizada.</p>
                           <label for="pagseguropro_boleto_cpf" class="required"><em>*</em>Seu CPF</label>
                           <input id="pagseguropro_boleto_cpf" name="payment[pagseguropro_boleto_cpf]" title="CPF" class="input-text required-entry validate-digits" value="" type="text">
                        </div>
                     </li>
                     <li>
                        <input type="radio" id="div3" name="consulta" value="3">
                        <label for="t-option">Transferencia </label>
                        <div class="cartao" id="m3" hidden>
                          <p> Favorecido: Maneiraweb Soluções Web</p>

                           <p>Banco Itau S/A.</p>
                           <p> Ag: 6469</p>
                           <p>C/P: 16690-3 </p>
                        </div>
                     </li>
                  </ul>
               </form>
            </div>
         </div>
      </div>
      <div class="col-xs-6 col-sm-4">
         <div class="opc">
            <div class="step-title">
               <span class="onestepcheckout-number">4</span>
               <h2>REVISÃO DO PEDIDO</h2>
            </div>
         </div>
         <div class="pull-right">
            <input type="submit" value="Finalizar Compra" name="proceed" class="btn btn-secondary btn-lg">
         </div>
      </div>
   </div>
</div>
<script type="text/javascript">
   $('input:radio[name="consulta"]').change(function() {
          if ($(this).val() == 1) {
            $("#m1").attr("hidden", false);
            $(this).attr("checked", true);
            
            $("#m2").attr("hidden", true);
            $(this).attr("checked", true);
   
            $("#m3").attr("hidden", true);
            $(this).attr("checked", true);
            
          } else if ($(this).val() == 2) {
            $("#m2").attr("hidden", false);
            $(this).attr("checked", true);
   
            $("#m3").attr("hidden", true);
            $(this).attr("checked", true);
            
            $("#m1").attr("hidden", true);
            $(this).attr("checked", true);
          }
   
          else if ($(this).val() == 3) {
            $("#m3").attr("hidden", false);
            $(this).attr("checked", true);
   
            $("#m2").attr("hidden", true);
            $(this).attr("checked", true);
            
            $("#m1").attr("hidden", true);
            $(this).attr("checked", true);
          }
        });
</script>

