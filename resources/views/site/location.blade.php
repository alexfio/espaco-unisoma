@extends('site.template')

@section('conteudo')
  <!-- Breadcrumbs & Page title-->
      <section class="page-title page-about">
        <div class="shell">
          <div class="heading-1 text-gray-light">Localização</div>
          <ul class="breadcrumbs-custom">
            <li><a href="index.html">Home</a></li>
            <li class="active">Localização</li>
          </ul>
        </div>
      </section>

      <section class="section-md bg-white">
        <div class="shell">
          <h2>Entre em contato</h2>
          <div class="range range-60 range-center range-md-reverse">
            <div class="cell-md-6 cell-sm-10 cell-xs-12">
              <h3 class="text-regular">Preencha o formulário abaixo</h3>
              <!-- RD Mailform-->
              <form class="rd-mailform contact-form" data-form-output="form-output-global" data-form-type="forms" method="post" action="bat/rd-mailform.php">
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
                <div class="form-wrap form-wrap-validation textarea-wrap">
                  <label class="form-label" for="forms-message">Mensagem</label>
                  <textarea class="form-input" id="forms-message" name="message" data-constraints="@Required"></textarea>
                </div>
                <div class="form-button text-center text-xs-right">
                  <button class="button button-primary" type="submit">
                    <i class = "fa fa-envelope"></i>
                    Enviar Mensagem 
                  </button>
                </div>
              </form>
            </div>
            <div class="cell-md-6 cell-sm-10 cell-xs-12 gmail-height-310">
              <section>
                <!-- RD Google Map-->
                <div class="rd-google-map rd-google-map__model" data-zoom="15" data-y="40.643180" data-x="-73.9874068" data-styles="[{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#e9e9e9&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f5f5f5&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:29},{&quot;weight&quot;:0.2}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:18}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:16}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f5f5f5&quot;},{&quot;lightness&quot;:21}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#dedede&quot;},{&quot;lightness&quot;:21}]},{&quot;elementType&quot;:&quot;labels.text.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:16}]},{&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:36},{&quot;color&quot;:&quot;#333333&quot;},{&quot;lightness&quot;:40}]},{&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;},{&quot;lightness&quot;:19}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fefefe&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fefefe&quot;},{&quot;lightness&quot;:17},{&quot;weight&quot;:1.2}]}]">
                  <ul class="map_locations">
                    <li data-y="40.643180" data-x="-73.9874068">
                      <p>9870 St Vincent Place, Glasgow, DC 45 Fr 45.</p>
                    </li>
                  </ul>
                </div>
              </section>
            </div>
          </div>
        </div>
      </section>

@endsection

      
      
      