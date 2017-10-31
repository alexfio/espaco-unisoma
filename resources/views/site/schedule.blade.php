@extends('site.template')

@section('conteudo')
<section class="page-title page-blog">
        <div class="shell">
          <div class="heading-1 text-gray">Agendamento</div>
          <ul class="breadcrumbs-custom">
            <li><a href="{{url('/')}}">Home</a></li>
            <li class="active">Agende uma consulta</li>
          </ul>
        </div>
      </section>

      <section class="section-lg bg-white">
        <div class="shell">
          <h2>Entre em contato</h2>
          <div class="range">
            <div class="cell-xs-12">
              <h3>Preencha o formulário</h3>
              <!-- RD Mailform-->
              <form class="rd-mailform" data-form-output="form-output-global" data-form-type="forms" method="post" action="bat/rd-mailform.php">
                <div class="custom-form">
                  <div class="box-form contact-form">
                    <div class="form-wrap form-wrap-validation">
                      <label class="form-label" for="forms-name">Nome</label>
                      <input class="form-input" id="forms-name" type="text" name="nome" data-constraints="@Required">
                    </div>
                    <div class="form-wrap form-wrap-validation">
                      <label class="form-label" for="forms-last-name">Sobrenome</label>
                      <input class="form-input" id="forms-last-name" type="text" name="sobrenome" data-constraints="@Required">
                    </div>
                    <div class="form-wrap form-wrap-validation">
                      <label class="form-label" for="forms-email">E-mail</label>
                      <input class="form-input" id="forms-email" type="email" name="email" data-constraints="@Email @Required">
                    </div>
                    <div class="form-wrap form-wrap-validation">
                      <label class="form-label" for="forms-phone">Telefone</label>
                      <input class="form-input" id="forms-phone" type="text" name="telefone" data-constraints="@Numeric @Required">
                    </div>
                  </div>
                  <div class="box-form">
                    <div class="form-wrap offset-top-10 textarea-wrap">
                      <label class="form-label" for="forms-message">Mensagem</label>
                      <textarea class="form-input textarea-small" id="forms-message" name="mensagem" data-constraints="@Required"></textarea>
                    </div>
                  </div>
                </div>
                <div class="form-button text-center text-xs-right">
                  <button class="button button-primary" type="submit">
                    Enviar Mensagem
                    <i class = "fa fa-chevron-right"></i>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
@endsection


     
      <!-- Breadcrumbs & Page title-->
      
      