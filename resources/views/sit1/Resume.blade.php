
@extends('sit1.master')
@section('title')
Resume||sit1
@stop
@section('contian')
<section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Resume</h2>
        <p>{{$Resume->text_Resume }}</p>
      </div>

      <div class="row">
        <div class="col-lg-6" data-aos="fade-up">
          <h3 class="resume-title">Summary</h3>
          <div class="resume-item pb-0">
            <h4>{{$Resume->name }}</h4>
            <p><em>{{ $Resume->text_Summary }}</em></p>
            <ul>
              <li>{{ $Resume->address }}</li>
              <li>{{ $Resume->phone }}</li>
              <li>{{ $Resume->email }}</li>
            </ul>
          </div>


          <h3 class="resume-title">Education</h3>
          @foreach ($Educations as $education)
          <div class="resume-item">
            <h4>{{$education->Title }}</h4>
            <h5>{{$education->start_date  }}-{{$education->end_date  }}</h5>
            <p><em>{{ $education->University_Name }}</em></p>
            <p>{{ $education->details }}</p>
          </div>
          @endforeach
        </div>

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <h3 class="resume-title">Professional Experience</h3>
          @foreach ($Experiences as $experience )
          <div class="resume-item">
            <h4>{{$experience->title_experiences  }}</h4>
            <h5>{{ $experience->start_date }} - {{ $experience->end_date }}</h5>
            <p><em>{{ $experience->University_Name }}</em></p>
            <ul>

                <li>
                <p>{{ $experience->details_experiences }}</p>
                </li>
            </ul>
          </div>

          @endforeach

        </div>
      </div>

    </div>
  </section>


@stop
