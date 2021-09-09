@extends('layouts.layout')
@section('content')


<body class="host_version">


	<div id="teachers" class="section wb">
        <div class="container">

        <h1 style="display: inline-block;">Students</h1>
        <a href="/students/create " class="btn btn-success float-right">
            Add Student
        </a>
        <hr />
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Data of Birth</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Courses</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($student as $item)


                <tr>
                    <td>{{$item->frist_name}}</td>
                    <td>{{$item->last_name}}</td>
                    <td>{{$item->date}}</td>
                    <td>{{$item->mobile}}</td>
                    <td>@foreach ($item->corses as $course)
                        {{$course->name}}
                        @endforeach </td>
                    <td>{{$item->status}}</td>

                    <td>
                        <a href="/students/{{$item->id}}/edit" class="btn btn-primary">Edit</a> |
                        <form method="post" action="students/{{$item->id}}" style="display: initial">
                            @csrf
                            @method('delete')
                        <button type="submit " class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!--pagination -->
  <div class="text-center">
    {{$student->render()}}
   </div>
<!-- end pagination -->

        </div><!-- end container -->
    </div><!-- end section -->


    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>
@endsection
