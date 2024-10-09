@extends('_layouts.main')

@section('body')
  <section class="ud-hero" id="home">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
        </div>
      </div>
    </div>
  </section>

  <section class="ud-faq">
    <div class="shape">
      <img src="{{ $page->baseUrl }}assets/images/faq/shape.svg" alt="shape" />
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="ud-section-title text-center mx-auto">
            <span>FAQ</span>
            <h2>{{ $page->t("Any Questions? Answered")}}</h2>
            <p>
              {{ $page->t("LibreSign frequently asked questions")}}
            </p>
          </div>
        </div>
      </div>

      <div class="row">
        @foreach($page->frequentlyQuestions as $item => $frequentlyQuestion)
          <div class="col-lg-6">
            <div class="ud-single-faq wow fadeInUp" data-aos-delay=".1s">
              <div class="accordion">
                <button
                  class="ud-faq-btn collapsed"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseOne{{$item}}"
                >
                  <span class="icon flex-shrink-0">
                    <i class="lni lni-chevron-down"></i>
                  </span>
                  <span>{{ $page->t($frequentlyQuestion->question)}}</span>
                </button>
                <div id="collapseOne{{$item}}" class="accordion-collapse collapse">
                  <div class="ud-faq-body">
                    {{ $page->t($frequentlyQuestion->answer)}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div> 
    </div>
  </section>
@endsection