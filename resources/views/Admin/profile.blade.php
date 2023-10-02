
    @extends('Admin.master')
    @section('title')
    profile Settings||Admin
    @stop
    @section('Bootsrip')
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
    @stop
    @section('styles')

    <style>


                h2{
                    font-weight: bolder;
                    color: #898dbf;
                }

                form{
                    width:550px;
                }

                form *{
                    font-weight: bold;
                }

                form label{
                    font-size: 18px;
                    color:#8f9096;
                }

                form .form-control,form .form-control:focus{
                    border-color:transparent;
                    border-bottom-color: #bebcc1;
                    box-shadow:none;
                }

                form .btn{
                    border-radius: 10px;
                    border-color: transparent;
                }

                .btn.btn-default{
                    background: #d3d1d1;
                    color:#000000;
                }

                .btn.btn-primary{
                    background: #857eff;
                    color:rgb(0, 0, 0);
                }



                    form{
                        width: 100%;
                        margin:auto;
                    }
        /* body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        } */

        .profile-upload {
            text-align: center;
            font: 2em sans-serif;
            padding-left: 6px;
            border: 2px solid #28292b;
            cursor: pointer;


        }

        #profileImageInput {
            display: none;
        }
    </style>

    @stop
    @section('contian')


        <div class="col-md-9" style="padding-left: 150px">

            <div class="container contentv clear-fix">

            <h2 class="mt-5 mb-5">Profile Settings_update</h2>
            <div class="row" style="height:100%">

                <div class="col-md-3">



                </div>

                <div class="col-md-9">


                    <div class="container">

                        <form action="{{ route('admin.profiledata') }}" method="POST">
                                    @csrf
                                    <div class="form-group">

                                        <label for=fullName>Full Name</label>
                                        <input type="text" class="form-control" id="fullName" name="name" value="{{ Auth::user()->name }}" required>

                                    </div>
                                    <div class="form-group">

                                        <label for=email>Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}" required>

                                    </div>

                                    <div class="form-group ">

                                        <label for=phone>phone</label>
                                        <input type="text" class="form-control" id="phone" name="phone" value="{{ Auth::user()->phone }}" required>

                                    </div>

                                    <div class="row mt-5">

                                        <div class="col ">
                                            <button type="submit " class="btn btn-primary btn-block " onclick="return confirm('Are you sure to update')">Save Changes</button>
                                        </div>
                                        <br>
                                        <br>
                                    </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

        </div>

    </div>

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




