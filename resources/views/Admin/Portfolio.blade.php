@extends('Admin.master')
@section('title')
Portfolio||Admin
@endsection
@section('contian')

<div class="container my-5">
   <h1 style="color: #000000;">All Portfolios_web</h1>
    <a class="btn btn-success btn-la " style="margin-left:950px" href="{{ route('admin.Portfolio.create') }}">Create Portfolios_web</a>
   <div class="container my-3">
    <table class="table table-bordered table-hover table-striped">
        <tr style="background-color: #000000 ; color: #ffffff">
            <th>id</th>
            <th>Name</th>
            <th>imge</th>
            <th>link</th>
            <th>Actions</th>
        </tr>
       @foreach ($Portfolios as $portfolio )
                <tr style="color: #000000">
                    <td>{{ $portfolio->id }}</td>
                    <td>{{ $portfolio->name }}</td>
                    <td><img src="{{ asset('uplodesPortfolio/'.$portfolio->imge) }}" width="150px" alt="" srcset=""></td>
                    <td>{{ $portfolio->link }}</td>
                    <td >
                        <a href="{{ route('admin.Portfolio.edit',$portfolio->id) }}" class="btn btn-success btn-sm   " > <i class="fas fa-edit"></i></a>
                        <form action="{{ route('admin.Portfolio.destroy',$portfolio->id) }}" method="post" class="d-inline servideletebtn">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm " ><i class="fas fa-trash "></i></a>
                            </button>
                        </form>
                    </td>
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
