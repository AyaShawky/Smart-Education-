@extends('layouts.layout')
@section('content')


<body class="host_version">


	<div id="teachers" class="section wb">
        <div class="container">
         <h1 style="display: inline-block;">Teachers</h1>
        <a href="/teachers/create"  class="btn btn-success float-right">
            Add Teacher
        </a>
        <hr />
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>

                </tr>
            </thead>
            <tbody>
            @foreach ($teacher as $item)

                <tr>
                    <td>{{$item->frist_name}}</td>
                    <td>{{$item->last_name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->mobile}}</td>
                    <td>{{$item->status}}</td>
                   
                    <td>
                        <a href="teachers/{{$item->id}}/edit" class="btn btn-primary">Edit</a> |
                        <form action="/teachers/{{$item->id}}" method="POST" style="display: initial">
                            @method('delete')
                            @csrf
                        <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                   @endforeach

            </tbody>
        </table>

             <!--pagination -->
  <div class="text-center">
    {{$teacher->render()}}
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
