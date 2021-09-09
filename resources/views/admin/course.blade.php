
@extends('layouts.layout')
@section('content')


<body class="host_version">


	<div id="teachers" class="section wb">
        <div class="container">
        <h1 style="display: inline-block;">Courses</h1>
        <a href="course/create" class="btn btn-success float-right">
            Add Course
        </a>
        <hr />
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Subtitle</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">time</th>
                    <th scope="col">Teacher</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($course as $item)


                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->subTitle}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->Time}}</td>
                    <td>{{$item->teacher->frist_name}}</td>

                    <td  style="display: inline-flex;" >
                        <a href="/course/{{$item->id}}/edit" class="btn btn-primary">Edit</a> |
                        <form method="POST" action=" /course/{{$item->id}}  " style="display: initial">
                            @method('delete')
                            @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

             <!--pagination -->
  <div class="text-center">
    {{$course->render()}}
   </div>
<!-- end pagination -->

         </div>

    </div>
    </body>
    @endsection
