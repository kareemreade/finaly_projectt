@extends('Admin.master')
@section('title')
Home||Admin
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
        <h2 class="mt-5 mb-5">HomePage_Settings</h2>
        <div class="row" style="height:100%">

                <div class="container p-4">

                    <form action="{{ route('admin.Hom_data') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Title HomePage</label>
                                    <input style=" background-color: #e8e8ff;" type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="Enter Title HomePage...." value="{{ $home->title }}">
                                  </div>
                                  <div class="mb-3">
                                    <label for="imge_Home" class="form-label">imge_HomePage</label>
                                    <input style=" background-color: #e8e8ff;" type="file" class="form-control" id="imge_Home" name="imge">
                                    <img src="{{ asset('uplodesHomePage/'.$home->imge) }}" width="100" alt="" srcset="">
                                      </div>
                                <div class="form-floating mb-3">
                                    <label for="floatingTextarea">Experiences</label>
                                    <textarea class="form-control" style=" background-color: #e8e8ff;" placeholder="Enter Experiences name..." id="floatingTextarea" name="experiences">{{ $home->experiences }}</textarea>
                                  </div>
                                  <hr class="sidebar-divider">
                                  <h4>scoial media Update</h4>
                                  <div class="mb-3">
                                    <label for="Facebook" class="form-label">Facebook</label>
                                    <input style=" background-color: #e8e8ff;" type="url" class="form-control" id="Facebook" name="facebook" placeholder="Enter facebook link...." value="{{ $home->facebook }}">
                                  </div>
                                  <div class="mb-3">
                                    <label for="Twiter" class="form-label">Twiter</label>
                                    <input style=" background-color: #e8e8ff;" type="url" class="form-control" id="Twiter" name="twiter" placeholder="Enter Title HomePage...." value="{{ $home->twiter }}">
                                  </div>
                                  <div class="mb-3">
                                    <label for="Skype" class="form-label">Skype</label>
                                    <input style=" background-color: #e8e8ff;" type="url" class="form-control" id="Skype" name="skype" placeholder="Enter Title HomePage...." value="{{ $home->skype }}">
                                  </div>
                                  <div class="mb-3">
                                    <label for="Instagram" class="form-label">Instagram</label>
                                    <input style=" background-color: #e8e8ff;" type="url" class="form-control" id="Instagram" name="instagram" placeholder="Enter Title HomePage...." value="{{ $home->instagram }}">
                                  </div>
                                  <div class="mb-3">
                                    <label for="inkedin" class="form-label">inkedin</label>
                                    <input style=" background-color: #e8e8ff;" type="url" class="form-control" id="inkedin" name="linkedin" placeholder="Enter Title HomePage...." value="{{ $home->linkedin }}">
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
