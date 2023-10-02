@extends('Admin.master')
@section('title')
All User||Admin
@endsection
@section('contian')

<div class="container my-5">
   <h1 style="color: #000000;">All User</h1>
   <a class="btn btn-success btn-la " style="margin-left:900px" target="_blank" href="{{ route('admin.registerr') }}">Create_Admin</a>
   <div class="container my-3">
    <table class="table table-bordered table-hover table-striped">
        <tr style="background-color: #000000 ; color: #ffffff">
            <th>id</th>
            <th>name</th>
            <th>Email</th>
            <th>phone</th>
            <th>Admin||users </th>
            <th>Action</th>

        </tr>
       @foreach ($users as $user )
                <tr style="color: #000000">
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    @if ($user->type == 'admin')
                        <td>
                            <h4 style="color: green"> Admin is active</h4>
                        </td>
                        <td >
                            <a href="{{ route('admin.users.edit',$user->id) }}" class="btn btn-success btn-sm " > <i class="fas fa-edit"></i></a>
                            <form action="{{ route('admin.users.destroy',$user->id) }}" method="post" class="d-inline servideletebtn">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm " ><i class="fas fa-trash "></i></a>
                                </button>
                            </form>
                        </td>
                     @else


                    <td >
                        <h4 style="color: rgb(0, 0, 0)"> user is active</h4>
                        <td >
                            <a href="{{ route('admin.users.edit',$user->id) }}" class="btn btn-success btn-sm " > <i class="fas fa-edit"></i></a>
                            <form action="{{ route('admin.users.destroy',$user->id) }}" method="post" class="d-inline servideletebtn">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm " ><i class="fas fa-trash "></i></a>
                                </button>
                            </form>
                        </td>
                    @endif()
                </tr>

       @endforeach
    </table>
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
@section('script2')

<script>
    $(document).ready(function () {

            $('.servideletebtn').click(function(e){
                e.preventDefault();
                Swal.fire({
                    title: 'Are you sure?',
                    text: "   You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                            })
                    .then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                        )
                        this.submit();

                    }
                    })


            });

        });

        </script>

@stop
