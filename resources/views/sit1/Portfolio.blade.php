
@extends('sit1.master')
@section('title')
Portfolio||sit1
@stop
@section('contian')
<section id="portfolio" class="portfolio section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter=".filter-web">MY Projects</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">



        @foreach ($Portfolios as $portfolio)
        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
            <img src="{{ asset('uplodesPortfolio/'.$portfolio->imge) }}"  class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{ asset('uplodesPortfolio/'.$portfolio->imge) }}"   data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="{{ $portfolio->link }}" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
        @endforeach



    </div>
  </section>


@stop
