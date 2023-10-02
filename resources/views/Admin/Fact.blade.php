@extends('Admin.master')
@section('title')
Fact||Admin
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
        <h2 class="mt-5 mb-5">FactPage_Settings</h2>
        <div class="row" style="height:100%">

                <div class="container p-4">

                    <form action="{{ route('admin.Fact_data') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-floating mb-3">
                                    <label for="textFacts">TextFacts</label>
                                    <textarea class="form-control" style=" background-color: #e8e8ff;" placeholder="Enter textFacts ..." id="textFacts" name="textFacts">{{ $fact->textFacts }}</textarea>
                                  </div>
                                  <div class="mb-3">
                                    <label for="Happy_Clients" class="form-label">Number_Happy_Clients</label>
                                    <input style=" background-color: #e8e8ff;" type="number" class="form-control" id="Happy_Clients" name="Happy_Clients" value="{{ $fact->Happy_Clients }}">
                                   </div>
                                   <div class="mb-3">
                                    <label for="Projects" class="form-label">Number_Projects</label>
                                    <input style=" background-color: #e8e8ff;" type="number" class="form-control" id="Projects" name="Projects" value="{{ $fact->Projects }}">
                                   </div>
                                   <div class="mb-3">
                                    <label for="Hours_Of_Support" class="form-label">Number_Hours_Of_Support</label>
                                    <input style=" background-color: #e8e8ff;" type="number" class="form-control" id="Hours_Of_Support" name="Hours_Of_Support" value="{{ $fact->Hours_Of_Support }}">
                                   </div>
                                   <div class="mb-3">
                                    <label for="Hard_Worker" class="form-label">Number_Hard_Worker</label>
                                    <input style=" background-color: #e8e8ff;" type="number" class="form-control" id="Hard_Worker" name="Hard_Worker" value="{{ $fact->Hard_Worker }}">
                                   </div>

                                    <div class="form-floating mb-3">
                                        <label for="text_Skils">Text_Skils</label>
                                        <textarea class="form-control " style=" background-color: #e8e8ff;" placeholder="Enter text_Skils name..." id="text_skils" name="text_skils">{{ $fact->text_skils }}</textarea>
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
