@extends('Admin.master')
@section('title')
Resume||Admin
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
        <h2 class="mt-5 mb-5">ResumePage_Settings</h2>
        <div class="row" style="height:100%">

                <div class="container p-4">

                    <form action="{{ route('admin.Resume_data') }}" method="POST" >
                                @csrf
                                <div class="form-floating mb-3">
                                    <label for="text_Resume">Text_ResumePage</label>
                                    <textarea class="form-control" style=" background-color: #e8e8ff;" placeholder="Enter Text_ResumePage ..." id="text_Resume" name="text_Resume">{{ $Resume->text_Resume }}</textarea>
                                  </div>
                                  <div class="mb-3">
                                    <label for="name" class="form-label">Name_ResumePage</label>
                                    <input style=" background-color: #e8e8ff;" type="text" class="form-control" id="name" name="name" placeholder="Enter name ...." value="{{ $Resume->name }}">
                                  </div>
                                <div class="form-floating mb-3">
                                    <label for="text_Summary">Text_Summary_ResumePage</label>
                                    <textarea class="form-control" style=" background-color: #e8e8ff;" placeholder="Enter text_Summary ..." id="text_Summary" name="text_Summary">{{$Resume->text_Summary }}</textarea>
                                  </div>
                                  <div class="mb-3">
                                    <label for="Address" class="form-label">Address</label>
                                    <input style=" background-color: #e8e8ff;" type="text" class="form-control" id="Address" name="address" placeholder="Enter address ...." value="{{$Resume->address }}">
                                  </div>
                                  <div class="mb-3">
                                    <label for="Phone" class="form-label">Phone</label>
                                    <input style=" background-color: #e8e8ff;" type="text" class="form-control" id="Phone" name="phone" placeholder="Enter Phone ...." value="{{$Resume->phone }}">
                                  </div>
                                  <div class="mb-3">
                                    <label for="email" class="form-label">email</label>
                                    <input style=" background-color: #e8e8ff;" type="email" class="form-control" id="email" name="email" placeholder="Enter email ...." value="{{$Resume->email }}">
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
