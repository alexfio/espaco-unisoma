@extends('site.template')

@section('conteudo')
   <!-- Breadcrumbs & Page title-->
      <section class="page-title page-services">
        <div class="shell">
          <div class="heading-1 text-white">Serviços</div>
          <ul class="breadcrumbs-custom">
            <li><a href="index.html">Home</a></li>
            <li class="active">Serviços</li>
          </ul>
        </div>
      </section>

      <section class="section-md bg-white">
        <div class="shell">
          <h2>Services</h2>
          <div class="range range-30">
            <div class="cell-md-6">
              <p class="big">Coaching and therapy services can take many forms. In fact, many different services can be utilized to treat the same issue. And for some problems there is scientific support for different services. For example, depression can be treated with both individual and couples therapy.</p>
            </div>
            <div class="cell-md-6">
              <p class="big">While many are unaware of the role couples therapy can play in the emotional life of an individual, there is scientific support for couples therapy to treat depression. Similarly, anxiety can be treated by both individual therapy and group therapy.</p>
            </div>
          </div>
        </div>
      </section>
      <section class="post-counter">
        <div class="bg-white">
          <div class="shell inset-bottom-120">
            <div class="range range-40 range-center range-sm-left">
              <div class="cell-md-4 cell-sm-6 cell-xs-10">
                <div class="post-info counter-left"><span class="list-index-counter"></span>
                  <h3 class="text-regular title-inset">Individual Therapy</h3>
                  <div class="wrap-img"><img src="images/services-01-370x265.jpg" alt="" width="370" height="265"/>
                  </div>
                  <p>Individual psychotherapy provides clients with customized strategies to quickly address time- urgent problems. Longer term issues are also addressed with cognitive behavioral therapy (CBT) and other appropriate techniques. This approach aims to create long-lasting improvement by teaching clients techniques to manage existing issues as well as to navigate future challenges on their own.</p><a class="button button-primary" href="group-therapy.html">Read more</a>
                </div>
              </div>
              <div class="cell-md-4 cell-sm-6 cell-xs-10">
                <div class="post-info counter-left"><span class="list-index-counter"></span>
                  <h3 class="text-regular title-inset">Couples Therapy</h3>
                  <div class="wrap-img"><img src="images/services-02-370x265.jpg" alt="" width="370" height="265"/>
                  </div>
                  <p>Couples meet with a psychotherapist to identify the strengths and weaknesses of each individual and how this interaction contributes to relationship problems, as well as the positive aspects of the relationship. A collaborative approach is used to overcome barriers and enhance overall satisfaction with the relationship as well as each individual’s approach to life.</p><a class="button button-primary" href="group-therapy.html">Read more</a>
                </div>
              </div>
              <div class="cell-md-4 cell-sm-6 cell-xs-10">
                <div class="post-info counter-left"><span class="list-index-counter"></span>
                  <h3 class="text-regular title-inset">Group Therapy</h3>
                  <div class="wrap-img"><img src="images/services-03-370x265.jpg" alt="" width="370" height="265"/>
                  </div>
                  <p>A safe group environment allows for numerous dynamics to be used for individual growth. The group context allows natural patterns to emerge that members and the leader can use to better understand and address intrapersonal and interpersonal issues.  Clients learn Cognitive Behavior Therapy (CBT) tools, which enable clients to reduce anxiety, anger, shame, depression, guilt, and embarrassment.</p><a class="button button-primary" href="group-therapy.html">Read more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section-custom-01 bg-services section-inverse">
          <div class="shell">
            <div class="range range-40 range-sm-60 range-center range-sm-left">
              <div class="cell-md-6 cell-md-preffix-0 cell-sm-7 cell-sm-preffix-5 cell-xs-10">
                <div class="inset-custom-01">
                  <div class="post-info counter-top"><span class="list-index-counter"></span>
                    <h3>Family Therapy</h3>
                    <div class="wrap-img veil-sm"><img src="images/services-05-370x265.jpg" alt="" width="370" height="265"/>
                    </div>
                    <p class="inset-right-15">Many problems take place in the home environment or even across households. When family members are willing to use therapy together, this can be a highly effective treatment. Many issues are patterned across generations, have developed from early childhood experiences, and are currently still wreaking havoc in both the family relationships.</p><a class="button button-primary" href="group-therapy.html">Read more</a>
                  </div>
                </div>
              </div>
              <div class="cell-md-6 cell-sm-7 cell-xs-10">
                <div class="inset-custom-02">
                  <div class="post-info counter-top"><span class="list-index-counter text-white"></span>
                    <h3 class="text-white">Executive Coaching</h3>
                    <div class="wrap-img veil-sm"><img src="images/services-04-370x265.jpg" alt="" width="370" height="265"/>
                    </div>
                    <p class="text-white">Coaching can help individuals, teams, and organizations enhance existing skills, develop new skills, and overcome current or potential problems. Executive coaching provides feedback and guidance to help take top performers to even higher levels, or help those who are currently in a slump.</p><a class="button button-primary-sec" href="group-therapy.html">Read more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection
