
@extends('sit1.master')
@section('title')
Aboute||sit1
@stop
@section('contian')
<!-- ======= About Section ======= -->
<section id="about" class="about">

    <div class="container">

      <div class="section-title">
        <h2>About</h2>
        <p>{{ $about->first_textAbout }}</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="{{ asset('uplodesAboutPage/'.$about->imge) }}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>{{ $about->workFields}}</h3>
          <p class="fst-italic">
           {{$about->text_workFields}}
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{ $about->Birthday }}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>{{ $about->Website }}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{ $about->Phone }}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{ $about->City }}</span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{ $about->Age }}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{ $about->Degree }}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span>{{ $about->PhEmailone }}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>{{ $about->Freelance }}</span></li>
              </ul>
            </div>
          </div>
          <p>
            {{ $about->finaly_text }}
          </p>
        </div>
      </div>

    </div>
  </section>
      <!-- ======= Facts Section ======= -->
      <section id="facts" class="facts">
        <div class="container">

          <div class="section-title">
            <h2>Facts</h2>
            <p>{{ $fact->textFacts }}</p>
          </div>

          <div class="row no-gutters">

            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
              <div class="count-box">
                <i class="bi bi-emoji-smile"></i>
                <span data-purecounter-start="0" data-purecounter-end="{{ $fact->Happy_Clients }}" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Happy Clients</strong> consequuntur quae</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="count-box">
                <i class="bi bi-journal-richtext"></i>
                <span data-purecounter-start="0" data-purecounter-end="{{ $fact->Projects }}" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Projects</strong> adipisci atque cum quia aut</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
              <div class="count-box">
                <i class="bi bi-headset"></i>
                <span data-purecounter-start="0" data-purecounter-end="{{ $fact->Hours_Of_Support }}" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
              <div class="count-box">
                <i class="bi bi-people"></i>
                <span data-purecounter-start="0" data-purecounter-end="{{ $fact->Hard_Worker }}" data-purecounter-duration="1" class="purecounter"></span>
                <p><strong>Hard Workers</strong> rerum asperiores dolor</p>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Facts Section -->
      <!-- start sskills Section -->
      <section id="skills" class="skills section-bg">
        <div class="container">

          <div class="section-title">
            <h2>Skills</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div>

          <div class="row skills-content">

            <div class="col-lg-6" data-aos="fade-up">

                @foreach ($skills as $skill )
                <div class="progress">
                    <span class="skill">{{$skill->title_Skils  }} <i class="val">{{$skill->ValueOf_Skils }}%</i></span>
                    <div class="progress-bar-wrap">
                      <div class="progress-bar" role="progressbar" aria-valuenow="{{$skill->ValueOf_Skils }}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>

                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                @endforeach




              </div>

            </div>

          </div>

        </div>
      </section>

@stop
