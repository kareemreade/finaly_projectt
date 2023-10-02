@extends('Admin.master')
@section('title')
Contact||Admin
@endsection

@section('styles')

<style>


            h2{
                font-weight: bolder;
                color: #8085ce;
                margin-left: -40px
            }

            form{
                width:50px;
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

</style>

@stop
@section('contian')

    <div class="col-md-9" style="padding-left: 150px">
        <div class="container contentv clear-fix">
        <h2 class="mt-5 mb-5">Contact_Settings</h2>
        <div class="row" style="height:100%">

                <div class="container p-4">

                    <form action="{{ route('admin.Contact_data') }}" method="POST" >
                                @csrf
                                <div class="form-floating mb-3">
                                    <label for="text_Resume">Text_ContactPage</label>
                                    <textarea class="form-control" style=" background-color: #e8e8ff;" placeholder="Enter Text_ResumePage ..." id="text_Resume" name="text">{{ $Contact->text }}</textarea>
                                  </div>
                                  <div class="mb-3">
                                    <label for="name" class="form-label">Location</label>
                                    <input style=" background-color: #e8e8ff;" type="text" class="form-control" id="name" name="Location" placeholder="Enter Location ...." value="{{ $Contact->Location }}">
                                  </div>
                                  <div class="mb-3">
                                    <label for="Email" class="form-label">Email</label>
                                    <input style=" background-color: #e8e8ff;" type="text" class="form-control" id="Email" name="Email" placeholder="Enter Email ...." value="{{$Contact->Email }}">
                                  </div>

                                  <div class="mb-3">
                                    <label for="Call" class="form-label">Call</label>
                                    <input style=" background-color: #e8e8ff;" type="text" class="form-control" id="Call" name="Call" placeholder="Enter Call ...." value="{{$Contact->Call }}">
                                  </div>
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
