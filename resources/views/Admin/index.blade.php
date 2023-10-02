@extends('Admin.master')
@section('title')
Dashboard||Admin
@stop

@section('contian')


<div class=" mb-3" style="text-align: center;">

    <a href="{{ route('sit1.Home') }}" target="_blank"class="btn btn-dark" style="padding: 40px">HomePage websit</a>

</div>
<div class=" mb-3" style="text-align: center;">

    <a href="{{ route('sit1.About') }}" target="_blank"class="btn btn-dark" style="padding: 40px">AboutPage websit</a>

</div>
<div class=" mb-3" style="text-align: center;">

    <a href="{{ route('sit1.Resume') }}" target="_blank"class="btn btn-dark" style="padding: 40px">ResumePage websit</a>

</div>
<div class=" mb-3" style="text-align: center;">

    <a href="{{ route('sit1.Portfolio') }}" target="_blank"class="btn btn-dark" style="padding: 40px">PortfolioPage websit</a>

</div>
<div class=" mb-3" style="text-align: center;">

    <a href="{{ route('sit1.Contact') }}" target="_blank"class="btn btn-dark" style="padding: 40px">ContactPage websit</a>

</div>
@stop
@section('script')
    <script>
        @if( session('masg'))
        Swal.fire(
        'Good job!',
        '{{ session("masg") }} ',
        'success'
        )
        @endif
    </script>


@stop
