@extends('Admin.master')
@section('title')
createPortfolio||Admin
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
        <h2 class="mt-5 mb-5">Create Portfolio_web</h2>
        <div class="row" style="height:100%">

                <div class="container p-4">

                    <form action="{{ route('admin.Portfolio.store') }}" method="POST" enctype="multipart/form-data" >
                                @csrf
                                <div class="mb-3">
                                    <label for="Title" class="form-label">Name</label>
                                    <input style=" background-color: #e8e8ff;" type="text" class="form-control  @error('name') is-invalid @enderror" id="Title" name="name" placeholder="Enter name ....">
                                    @error('name')
                                    <strong class=" invalid-feedback">
                                        {{$message}}
                                    </strong>
                                    @enderror
                                </div>
                                  <div class="mb-3">
                                    <label for="start_date" class="form-label">Imge</label>
                                    <input style=" background-color: #e8e8ff;" type="file" class="form-control @error('imge') is-invalid @enderror" id="imge_Home" name="imge">
                                    @error('imge')
                                    <strong class=" invalid-feedback">
                                        {{$message}}
                                    </strong>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="end_date" class="form-label">Link</label>
                                    <input  style=" background-color: #e8e8ff;" type="url"class="form-control @error('link') is-invalid @enderror"id="end_date" name="link" placeholder="kareem@gmil.com">
                                    @error('link')
                                    <strong class=" invalid-feedback">
                                        {{$message}}
                                    </strong>
                                    @enderror
                                </div>
                                    <div class="col ">
                                        <button type="submit " class="btn btn-primary btn-block " onclick="return confirm('Are you sure to update')">Submit</button>
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
