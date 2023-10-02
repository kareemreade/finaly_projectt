
@extends('sit1.master')
@section('title')
contact||sit1
@stop
@section('style')
<style>
    .emaill{
        width: 100%;
            padding: 30px;
            background: #fff;
            box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);}


                .ss{
                    margin-top: 10px;
                background: #149ddd;
                border: 0;
                padding: 10px 24px;
                color: #fff;
                transition: 0.4s;
                border-radius: 6px;
            }


</style>

@stop
@section('contian')
<section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>{{$contact->text  }}</p>
      </div>

      <div class="row" data-aos="fade-in">

        <div class="col-lg-5 d-flex align-items-stretch">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>{{ $contact->Location }}</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>{{ $contact->Email }}</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>{{ $contact->Call }}</p>
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
          </div>

        </div>

        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form action="{{ route('sit1.sendEmail') }}" method="post" role="form" class="emaill">
                    @csrf
                    <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="name">Your Name</label>
                        <input type="text" name="name_email" class="form-control @error('name_email') is-invalid @enderror" id="name" >
                        @error('name_email')
                        <strong class=" invalid-feedback">
                            {{$message}}
                        </strong>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="name">Your Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" >
                        @error('email')
                        <strong class=" invalid-feedback">
                            {{$message}}
                        </strong>
                        @enderror
                    </div>
                    </div>
                    <div class="form-group mb-3">
                    <label for="name">Subject</label>
                    <input type="text" class="form-control @error('subject__email') is-invalid @enderror" name="subject__email" id="subject" >
                    @error('subject__email')
                    <strong class=" invalid-feedback">
                        {{$message}}
                    </strong>
                    @enderror
                    </div>
                    <div class="form-group mb-3">
                    <label for="name">Message</label>
                    <textarea class="form-control @error('message__email') is-invalid @enderror" name="message__email" rows="10" ></textarea>
                    @error('message__email')
                    <strong class=" invalid-feedback">
                        {{$message}}
                    </strong>
                    @enderror
                    </div>
                    <div class="text-center "><button class="ss" type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section>

@stop
@section('script')
    <script>
        @if( session('masg'))
        Swal.fire(
        'Message has been sent',
        '  ',
        'success'
        )
        @endif
    </script>

@stop
