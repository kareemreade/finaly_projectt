@extends('Admin.master')
@section('title')
Skills||Admin
@endsection
@section('contian')

<div class="container my-5">
   <h1 style="color: #000000;">All Skills</h1>
    <a class="btn btn-success btn-la " style="margin-left:950px" href="{{ route('admin.Skills.create') }}">Create Skills</a>
   <div class="container my-3">
    <table class="table table-bordered table-hover table-striped">
        <tr style="background-color: #000000 ; color: #ffffff">
            <th>id</th>
            <th>Title_Skills</th>
            <th>Value_Skills</th>
            <th>Actions</th>
        </tr>
       @foreach ($skills as $skill )
                <tr style="color: #000000">
                    <td>{{ $skill->id }}</td>
                    <td>{{ $skill->title_Skils }}</td>
                    <td>{{ $skill->ValueOf_Skils }}</td>
                    <td >
                        <a href="{{ route('admin.Skills.edit',$skill->id) }}" class="btn btn-success btn-sm   " > <i class="fas fa-edit"></i></a>
                        <form action="{{ route('admin.Skills.destroy',$skill->id) }}" method="post" class="d-inline servideletebtn">
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
