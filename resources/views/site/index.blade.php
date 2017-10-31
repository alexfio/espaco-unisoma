@extends('site.template')

@section('conteudo')
  <section class="swiper-container swiper-slider text-left" data-slide-effect="fade" data-loop="true" data-autoplay="4000" data-simulate-touch="false">
        <div class="swiper-wrapper">
          <div class="swiper-slide" data-slide-bg="images/bg-slider-01-1920x594.jpg">
            <div class="swiper-slide-caption">
              <div class="shell">
                <h1 data-caption-animate="fadeInUp" data-caption-delay="100">Conhece-te a ti mesmo</h1>
                <h3 data-caption-animate="fadeInUp" data-caption-delay="100">e conhecerás o universo.</h3>
                <p class="text-bold" data-caption-animate="fadeInUp" data-caption-delay="250">– Sócrates</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide" data-slide-bg="images/bg-slider-02-1915x594.jpg">
            <div class="swiper-slide-caption">
              <div class="shell">
                <h1 class="text-gray" data-caption-animate="fadeInUp" data-caption-delay="100"> A reflexão</h1>
                <h3 class="text-gray" data-caption-animate="fadeInUp" data-caption-delay="100">é a melhor ferramenta <br> para o autoconhecimento.</h3>
                <p class="text-gray text-bold" data-caption-animate="fadeInUp" data-caption-delay="250">– Autor Desconhecido</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide" data-slide-bg="images/bg-slider-03-1920x594.jpg">
            <div class="swiper-slide-caption">
              <div class="shell">
                <h2 class="text-white" data-caption-animate="fadeInUp" data-caption-delay="100">Nunca seremos os mesmo para sempre</h2>
                <h3 class="text-white" data-caption-animate="fadeInUp" data-caption-delay="100">Por isso é tão importante o autoconhecimento sem preconceitos.</h3>
                <p class="text-white text-bold" data-caption-animate="fadeInUp" data-caption-delay="250">– Mary Senne</p>
              </div>
            </div>
          </div>
        </div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination"></div>
        <!-- Swiper Navigation-->
        <div class="swiper-button-prev fa-arrow-left"></div>
        <div class="swiper-button-next fa-arrow-right"></div>
</section>
<section class="section-lg inset-bottom-60 bg-gray-lighter box-relative">
        <div class="shell">
          <div class="range range-30 range-center">
            <div class="cell-md-6 cell-sm-6 cell-xs-8">
              <div class="wrap-img offset-img-02"><img src="images/home_v1-01-571x579.jpg" alt="" width="571" height="579"/>
              </div>
            </div>
            <div class="cell-lg-5 cell-lg-preffix-1 cell-md-6 cell-sm-6 cell-xs-12">
              <p class="text-uppercase text-family-sec text-bold">Flávia Rebouças - Psicanalista / Psicopedagoga / Instrutora de Mindfullness</p>
              <h3>Seja bem-vindo(a) ao Espaço Unisoma</h3>
              <p class="text-gray-light">Como psicanalista e psicopedagoga, trabalho com muitos pacientes e entendo as mais diversas questões psíquicas que as pessoas enfretam.</p>
              <div class="group-sm">
                <a class="button button-gray-light" href="overview.html">Mais Informações</a>
                <a class="button button-primary-sec" href="{{url('servicos')}}">Serviços</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-lg bg-white bg-home-07 bg-image">
        <div class="shell">
          <div class="range range-30">
            <div class="cell-lg-5 cell-md-5 cell-xs-12">
              <h2>Como Podemos ajudar você:</h2>
              <div class="range range-20">
                <div class="cell-md-12 cell-sm-4 cell-xs-12">
                  <div class="unit unit-sm unit-xs-vertical unit-md-horizontal unit-spacing-xs text-sm-center text-md-left icon-wrap icon-default">
                    <div class="unit__left"><span class="icon icon-sm fa-eercast"></span></div>
                    <div class="unit__body">
                      <div class="box-content">
                        <h4>Psicanálise</h4>
                        <p>When it comes to treating anxiety disorders, research shows that therapy is usually the most effective option.</p><a class="button" href="#">read more</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="cell-md-12 cell-sm-4 cell-xs-12">
                  <div class="unit unit-sm unit-xs-vertical unit-md-horizontal unit-spacing-xs text-sm-center text-md-left icon-wrap icon-default">
                    <div class="unit__left"><span class="icon icon-sm fa-users"></span></div>
                    <div class="unit__body">
                      <div class="box-content">
                        <h4>Psicopedagogia</h4>
                        <p>Group therapy involves one or more psychologists who lead a group of roughly five to 15 patients.</p><a class="button" href="#">read more</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="cell-md-12 cell-sm-4 cell-xs-12">
                  <div class="unit unit-sm unit-xs-vertical unit-md-horizontal unit-spacing-xs text-sm-center text-md-left icon-wrap icon-default">
                    <div class="unit__left"><span class="icon icon-sm fa-align-center"></span></div>
                    <div class="unit__body">
                      <div class="box-content">
                        <h4>Mindfullness</h4>
                        <p>Couples therapy is oriented towards solving the problems the couple is facing with each other.</p><a class="button" href="#">read more</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="cell-lg-6 cell-lg-preffix-1 cell-md-7">
              
            </div>
          </div>
        </div>
      </section>
@endsection