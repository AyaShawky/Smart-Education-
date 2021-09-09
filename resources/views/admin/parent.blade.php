@extends('layouts.layout')
@section('content')


<body class="host_version">


	<div id="teachers" class="section wb">
        <div class="container">

        <h1 style="display: inline-block;">Parents</h1>
        <a href="/parant/create"  class="btn btn-success float-right">
            Add Parent
        </a>
        <hr />
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">status</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Parant as $item)

                <tr>
                    <td>{{$item->frist_name}}</td>
                    <td>{{$item->last_name}}</td>
                     <td>{{$item->mobile}}</td>
                    <td>{{$item->status}}</td>
                  
                    <td>
                        <a href="/parant/{{$item->id}}/edit" class="btn btn-primary">Edit</a> |
                        <form action="/parant/{{$item->id}}" method="POST" style="display: initial">
                                                        @csrf
                                                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

<!--pagination -->
  <div class="text-center">
    {{$Parant->render()}}
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
