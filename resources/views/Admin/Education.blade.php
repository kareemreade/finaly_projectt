@extends('Admin.master')
@section('title')
Educations||Admin
@endsection
@section('contian')

<div class="container my-5">
   <h1 style="color: #000000;">All Educations</h1>
    <a class="btn btn-success btn-la " style="margin-left:950px" href="{{ route('admin.Education.create') }}">Create Educations</a>
   <div class="container my-3">
    <table class="table table-bordered table-hover table-striped">
        <tr style="background-color: #000000 ; color: #ffffff">
            <th>id</th>
            <th>Title</th>
            <th>start_date</th>
            <th>end_date</th>
            <th>University_Name</th>
            <th>Details</th>
            <th>Action</th>
        </tr>
       @foreach ($Educations as $educations )
                <tr style="color: #000000">
                    <td>{{ $educations->id }}</td>
                    <td>{{ $educations->Title }}</td>
                    <td>{{ $educations->start_date }}</td>
                    <td>{{ $educations->end_date }}</td>
                    <td>{{ $educations->University_Name }}</td>
                    <td>{{ $educations->details }}</td>
                    <td >
                        <a href="{{ route('admin.Education.edit',$educations->id) }}" class="btn btn-success btn-sm mb-2  " > <i class="fas fa-edit"></i></a>
                        <form action="{{ route('admin.Education.destroy',$educations->id) }}" method="post" class="d-inline servideletebtn">
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
