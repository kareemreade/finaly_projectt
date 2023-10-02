@extends('Admin.master')
@section('title')
editEducation||Admin
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
        <h2 class="mt-5 mb-5">Create Educations</h2>
        <div class="row" style="height:100%">

                <div class="container p-4">

                    <form action="{{ route('admin.Education.update',$Education->id) }}" method="POST" >
                                  @method('put')

                                @csrf
                                <div class="mb-3">
                                    <label for="Title" class="form-label">Title</label>
                                    <input style=" background-color: #e8e8ff;" type="text" class="form-control  @error('Title') is-invalid @enderror" id="Title" name="Title" placeholder="Enter Title ...." value="{{ $Education->Title }}">
                                    @error('Title')
                                    <strong class=" invalid-feedback">
                                        {{$message}}
                                    </strong>
                                    @enderror
                                </div>
                                  <div class="mb-3">
                                    <label for="start_date" class="form-label">Start_date</label>
                                    <input  style=" background-color: #e8e8ff;" type="number"class="form-control @error('start_date') is-invalid @enderror"id="start_date" name="start_date" placeholder="Enter start_date ...." min="2000" max="2099" step="1"  value="{{ $Education->start_date }}" />
                                    @error('start_date')
                                    <strong class=" invalid-feedback">
                                        {{$message}}
                                    </strong>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="end_date" class="form-label">End_date</label>
                                    <input  style=" background-color: #e8e8ff;" type="number"class="form-control @error('end_date') is-invalid @enderror"id="end_date" name="end_date" placeholder="Enter end_date ...." min="2000" max="2099" step="1"  value="{{ $Education->end_date }}"/>
                                    @error('end_date')
                                    <strong class=" invalid-feedback">
                                        {{$message}}
                                    </strong>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="University_Name" class="form-label">University_Name</label>
                                    <input style=" background-color: #e8e8ff;" type="text" class="form-control  @error('University_Name') is-invalid @enderror" id="University_Name" name="University_Name" placeholder="Enter University_Name ...." value="{{ $Education->University_Name }}">
                                    @error('University_Name')
                                    <strong class=" invalid-feedback">
                                        {{$message}}
                                    </strong>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <label for="details">details</label>
                                    <textarea class="form-control" style=" background-color: #e8e8ff;" placeholder="Enter Experiences name..." id="details" name="details">{{ $Education->details }}</textarea>
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
