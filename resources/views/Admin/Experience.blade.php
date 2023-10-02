@extends('Admin.master')
@section('title')
Experience||Admin
@endsection
@section('contian')

<div class="container my-5">
   <h1 style="color: #000000;">All Experiences</h1>
    <a class="btn btn-success btn-la " style="margin-left:950px" href="{{ route('admin.Experience.create') }}">Create Experiences</a>
   <div class="container my-3">
    <table class="table table-bordered table-hover table-striped">
        <tr style="background-color: #000000 ; color: #ffffff">
            <th>id</th>
            <th>Title_Experience</th>
            <th>start_date_Experience</th>
            <th>end_date_Experience</th>
            <th>University_Name_Experience</th>
            <th>Details_Experience</th>
            <th>Action</th>
        </tr>
       @foreach ($Experiences as $experience )
                <tr style="color: #000000">
                    <td>{{ $experience->id }}</td>
                    <td>{{ $experience->title_experiences }}</td>
                    <td>{{ $experience->start_date }}</td>
                    <td>{{ $experience->end_date }}</td>
                    <td>{{ $experience->University_Name }}</td>
                    <td>{{ $experience->details_experiences }}</td>
                    <td >
                        <a href="{{ route('admin.Experience.edit',$experience->id) }}" class="btn btn-success btn-sm mb-2  " > <i class="fas fa-edit"></i></a>
                        <form action="{{ route('admin.Experience.destroy',$experience->id) }}" method="post" class="d-inline servideletebtn">
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
