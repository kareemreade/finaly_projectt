@extends('Admin.master')
@section('title')
updateUser||Admin
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
        <h2 class="mt-5 mb-5">UpdateUser</h2>
        <div class="row" style="height:100%">

                <div class="container p-4">

                    <form action="{{ route('admin.users.update',$users->id) }}" method="POST" >
                                  @method('put')
                                @csrf
                                <div class="mb-3">
                                    <label for="Title" class="form-label">Name_User</label>
                                    <input style=" background-color: #e8e8ff;" type="text" class="form-control  @error('name') is-invalid @enderror" id="Title" name="name" placeholder="Enter Title ...." value="{{ $users->name}}">
                                    @error('name')
                                    <strong class=" invalid-feedback">
                                        {{$message}}
                                    </strong>
                                    @enderror
                                </div>
                                  <div class="mb-3">
                                    <label for="start_date" class="form-label">Email</label>
                                    <input  style=" background-color: #e8e8ff;" type="email"class="form-control @error('email') is-invalid @enderror"id="email" name="email" placeholder="Enter email ...." value="{{ $users->email }}" />
                                    @error('email')
                                    <strong class=" invalid-feedback">
                                        {{$message}}
                                    </strong>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="end_date" class="form-label">type</label>
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="inputGroupSelect01">Choose Type</label>
                                        <select class="form-select  @error('type')is-invalid @enderror" id="inputGroupSelect01" name="type">
                                          <option selected>Choose...</option>
                                          <option value="1">user</option>
                                          <option value="2">admin</option>
                                        </select>
                                      </div>
                                    @error('type')
                                    <strong class=" invalid-feedback">
                                        {{$message}}
                                    </strong>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="University_Name" class="form-label">phone</label>
                                    <input style=" background-color: #e8e8ff;" type="text" class="form-control  @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Enter phone ...." value="{{$users->phone  }}">
                                    @error('phone')
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
