<form class="form-contact" action="contato_envia.php" method="post" id="form-home" id="form-contact" id="form-prod-int"
  novalidate="novalidate">
  <div class="row">
    <div class="col-sm-6">
      <div class="form-group">
        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''"
          onblur="this.placeholder = 'Nome'" placeholder="Nome">
      </div>
    </div>
    <div class="col-sm-6">
      <div class="form-group">
        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''"
          onblur="this.placeholder = 'Insira o endereço de e-mail'" placeholder="E-mail">
      </div>
    </div>
    <div class="col-12">
      <div class="form-group ">
        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''"
          onblur="this.placeholder = 'Assunto'" placeholder="Assunto">
      </div>
    </div>

    <div class="col-12">
      <div class="form-group">
        <input class="form-control" name="phone" id="phone" type="text" onfocus="this.placeholder = ''"
          onblur="this.placeholder = 'Telefone'" placeholder="Telefone">
      </div>
    </div>

    <div class="col-12">
      <div class="form-group">
        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
          onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mensagem'" placeholder=" Mensagem"></textarea>
      </div>
    </div>
  </div>
  <div class="form-group text-center">
    <div class="btn-prod d-flex justify-content-center">
      <button type="submit" class="btn">
        <span>Enviar por E-mail</span>
      </button>
      <a href='javascript:void(0)' class="btn whats-form" id="meuZap" data-zap="<?=CONF_SITE_WHATSAPP_LINK?>">
        <span>Enviar por Whatsapp</span>
      </a>
    </div>
  </div>
</form>