@extends('Admin.master')
@section('title')
About||Admin
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
        <h2 class="mt-5 mb-5">AboutPage_Settings</h2>
        <div class="row" style="height:100%">

                <div class="container p-4">

                    <form action="{{ route('admin.About_data') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-floating mb-3">
                                    <label for="floatingTextarea">First_TextAbout</label>
                                    <textarea class="form-control" style=" background-color: #e8e8ff;" placeholder="Enter first_textAbout..." id="floatingTextarea" name="first_textAbout">{{ $about->first_textAbout }}</textarea>
                                  </div>
                                  <div class="mb-3">
                                    <label for="imge_Home" class="form-label">Imge_AboutPage</label>
                                    <input style=" background-color: #e8e8ff;" type="file" class="form-control" id="imge_Home" name="imge" >
                                    <img src="{{ asset('uplodesAboutPage/'.$about->imge) }}" width="150" alt="" srcset="">
                                      </div>
                                      <div class="mb-3">
                                        <label for="WorkFields" class="form-label">WorkFields</label>
                                        <input style=" background-color: #e8e8ff;" type="text" class="form-control" id="WorkFields" name="workFields" placeholder="Enter workFields...." value="{{ $about->workFields }}">
                                      </div>
                                      <div class="form-floating mb-3">
                                        <label for="text_workFields">Text_WorkFields</label>
                                        <textarea class="form-control" style=" background-color: #e8e8ff;" placeholder="Enter text_workFields..." id="text_workFields" name="text_workFields">{{ $about->text_workFields }}</textarea>
                                      </div>
                                  <div class="mb-3">
                                    <label for="Birthday" class="form-label">Birthday</label>
                                    <input style=" background-color: #e8e8ff;" type="date" class="form-control" id="Birthday" name="Birthday" placeholder="Enter Birthday ...." value="{{ $about->Birthday }}">
                                  </div>
                                  <div class="mb-3">
                                    <label for="Website" class="form-label">Website</label>
                                    <input style=" background-color: #e8e8ff;" type="url" class="form-control" id="Website" name="Website" placeholder="Enter Website ...." value="{{ $about->Website }}">
                                  </div>
                                  <div class="mb-3">
                                    <label for="Phone" class="form-label"> Phone </label>
                                    <input style=" background-color: #e8e8ff;" type="text" class="form-control" id="Phone" name="Phone" placeholder="Enter Phone ...." value="{{ $about->Phone }}">
                                  </div>
                                  <div class="mb-3">
                                    <label for="City" class="form-label">City</label>
                                    <input style=" background-color: #e8e8ff;" type="text" class="form-control" id="City" name="City" placeholder="Enter City ...." value="{{ $about->City }}">
                                  </div>
                                  <div class="mb-3">
                                    <label for="Age" class="form-label">Age</label>
                                    <input style=" background-color: #e8e8ff;" type="number" class="form-control" id="Age" name="Age" placeholder="Enter Age...." value="{{ $about->Age}}">
                                  </div>
                                  <div class="mb-3">
                                    <label for="Degree" class="form-label">Degree</label>
                                    <input style=" background-color: #e8e8ff;" type="text" class="form-control" id="Degree" name="Degree" placeholder="Enter Title ...." value="{{ $about->Degree }}">
                                  </div>
                                  <div class="mb-3">
                                    <label for="PhEmailone" class="form-label">PhEmailone</label>
                                    <input style=" background-color: #e8e8ff;" type="text" class="form-control" id="PhEmailone" name="PhEmailone" placeholder="Enter Title ...." value="{{ $about->PhEmailone }}">
                                  </div>
                                  <div class="mb-3">
                                    <label for="Freelance" class="form-label">Freelance</label>
                                    <input style=" background-color: #e8e8ff;" type="text" class="form-control" id="Freelance" name="Freelance" placeholder="Enter Freelance ...." value="{{ $about->Freelance }}">
                                  </div>
                                  <div class="form-floating mb-3">
                                    <label for="finaly_text">finaly_text</label>
                                    <textarea class="form-control" style=" background-color: #e8e8ff;" placeholder="Enter finaly_text..." id="finaly_text" name="finaly_text">{{ $about->finaly_text }}</textarea>
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
