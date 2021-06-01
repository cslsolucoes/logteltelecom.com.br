<section class="img-contate" id="solicitar-contato">

<div class="container mx-auto d-block">
<h1 class="text-danger text-center cardtitle3 ">Preencha o formulário e um de nosso consultores entrará em contato</h1>
<form class="mt-3 col-md-9 offset-md-1" method="post" action="mail_vendas.php" style="font-weight: 600;">
  <!-- 
  <div class="form-group">
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" id="25" value="25MEGA" name="plano-combo" class="custom-control-input">
      <label class="custom-control-label" for="25">25Mb</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" id="100" value="100MEGA" name="plano-combo" class="custom-control-input">
      <label class="custom-control-label" for="100">100Mb</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" id="240" value="300MEGA" name="plano-combo" class="custom-control-input">
      <label class="custom-control-label" for="240" selected>240Mb</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
      <input type="radio" id="400" value="400MEGA" name="plano-combo" class="custom-control-input">
      <label class="custom-control-label" for="400">400MB</label>
    </div>
  </div>
    -->
  <div class="form-row mt-3">
    <div class="form-group col-md-5">
      <label for="nome" class="label-contate">Nome</label>
      <input type="text" class="form-control form-control-contate" id="nome" name="nome">
    </div>
    <div class="form-group col-md-3">
      <label for="telefone" class="label-contate">Telefone *</label>
      <input type="text" class="form-control form-control-contate" id="telefone" name="telefone" required>
    </div>
  <div class="form-group col-md-3">
    <label for="cep" class="label-contate">CEP</label>
    <input type="text" class="form-control form-control-contate" id="cep" maxlength="8" value="" name="cep">
  </div>
  <div class="form-group col-md-1 mt-4">
    <button class="btn btn-secondary " type="submit">Solicitar contato</button>
  </div>
  </div>
  <div class="form-group ">
    <input type="hidden" class="form-control form-control-contate" id="email" value="site@gmail.com" name="email">
  </div>
  <div class="form-row mt-3">
    <div class="form-group col-md-5">
      <input type="hidden" class="form-control form-control-inline" id="bairro" value="" name="bairro">
    </div>
    <div class="form-group col-md-5">
      <input type="hidden" class="form-control form-control-inline" id="cidade" value="" name="cidade">
    </div>
    <div class="form-group col-md-2">
      <input type="hidden" class="form-control form-control-inline" id="uf" value="" name="uf">
    </div>
  </div>
  <div class="form-row mt-3">
    <div class="form-group col-md-9">
      <input type="hidden" class="form-control form-control-inline" id="rua" value="" name="logradouro" >
    </div>
    <div class="form-group col-md-3">
      <input type="hidden" class="form-control form-control-inline" id="numero" value="" name="numero">
    </div>
  </div>

  
</form>
</div>

</section>