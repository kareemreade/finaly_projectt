@extends('Admin.master')
@section('title')
CreateSkils||Admin
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
        <h2 class="mt-5 mb-5">Create Skills</h2>
        <div class="row" style="height:100%">

                <div class="container p-4">

                    <form action="{{ route('admin.Skills.update',$skills->id) }}" method="POST" >
                                    @method('put')
                                     @csrf
                                <div class="mb-3">
                                    <label for="Title_Skils" class="form-label">Title_Skils</label>
                                    <input style=" background-color: #e8e8ff;" type="text" class="form-control  @error('title_Skils') is-invalid @enderror" id="Title_Skils" name="title_Skils" placeholder="Enter Title_Skils ...." value="{{  $skills->title_Skils }}">
                                    @error('title_Skils')
                                    <strong class=" invalid-feedback">
                                        {{$message}}
                                    </strong>
                                    @enderror
                                </div>
                                  <div class="mb-3">
                                    <label for="ValueOf_Skils" class="form-label">ValueOf_Skils</label>
                                    <input style=" background-color: #e8e8ff;" type="number" class="form-control @error('ValueOf_Skils') is-invalid @enderror" id="ValueOf_Skils" name="ValueOf_Skils" placeholder="Enter ValueOf_Skils ...."value="{{  $skills->ValueOf_Skils }}" >
                                    @error('ValueOf_Skils')
                                    <strong class=" invalid-feedback">
                                        {{$message}}
                                    </strong>
                                    @enderror
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
