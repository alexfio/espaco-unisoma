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
          @if(count($errors))
            <div class = "alert alert-danger alert-dismissable fade in" style = "position: absolute; top: 5%; right: 35%">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <span> 
                  Atenção <i class = "fa fa-exclamation"></i> <i class = "fa fa-exclamation"></i> <br> 
                  Falha ao enviar a mensagem. <a href = "#contato">Reveja</a> o formulário.  
                </span>
            </div>
          @endif
          @if(old('sucesso'))
                <div class = "alert alert-success alert-dismissable fade in" style = "position: absolute; top: 5%; right: 35%">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <span> 
                  Formulário enviado com sucesso !!
                </span>
            </div>
          @endif
          <h2 id = "contato">Entre em contato</h2>

          <div class="range">
            <div class="cell-xs-12">
              <h3>Preencha o formulário</h3>
              <br>
              @if(count($errors))
                <div class = "alert alert-danger" id = "erros">
                  Atenção <i class = "fa fa-exclamation"></i> 
                  O formulário foi enviado com os seguintes erros: <br> <br>
                  @foreach($errors->all() as $error)
                    {{$error}} <br>
                  @endforeach
                </div>
              @endif
              
              <!-- RD Mailform-->
              <form  method="post" action="{{action('AgendamentoController@agendar')}}">
                <input type = 'hidden' name = "_token" value = "{{csrf_token()}}">
                <div class="custom-form">
                  <div class="box-form contact-form">
                    <div class="form-wrap form-wrap-validation">
                      <label class="form-label" for="forms-name">Nome</label>
                      <input class="form-input" id="forms-name" type="text" name="nome" value = "{{old('nome')}}" required>
                    </div>
                    <div class="form-wrap form-wrap-validation">
                      <label class="form-label" for="forms-last-name">Sobrenome</label>
                      <input class="form-input" id="forms-last-name" type="text" name="sobrenome" value = "{{old('sobrenome')}}" required>
                    </div>
                    <div class="form-wrap form-wrap-validation">
                      <label class="form-label" for="forms-email">E-mail</label>
                      <input class="form-input" id="forms-email" type="email" name="email" value = "{{old('email')}}" required>
                    </div>
                    <div class="form-wrap form-wrap-validation">
                      <label class="form-label" for="forms-phone">Telefone</label>
                      <input class="form-input" id="forms-phone" type="text" name="telefone" value = "{{old('telefone')}}">
                    </div>
                  </div>
                  <div class="box-form">
                    <div class="form-wrap offset-top-10 textarea-wrap">
                      <label class="form-label" for="forms-message">Mensagem</label>
                      <textarea class="form-input textarea-small" id="forms-message" name="mensagem" required>{{old('mensagem')}}</textarea>
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
      
      