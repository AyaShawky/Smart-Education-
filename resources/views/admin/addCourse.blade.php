@extends('layouts.layout')
@section('content')


<body class="host_version">


	<div id="teachers" class="section wb">
        <div class="container">
	<div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Add Course</h4>
                        <hr />
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-12">

                        <form method="POST" action="/course" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-4 col-form-label">Name</label>
                                <div class="col-8">

                                    <input id="name" name="name" placeholder="name" class="form-control here"
                                        type="text" />
                                        @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror


                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="subTitle" class="col-4 col-form-label">SubTitle</label>
                                <div class="col-8">
                                    <input id="subTitle" name="subTitle" placeholder="subTitle"
                                        class="form-control here" type="text" />

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="price" class="col-4 col-form-label">Price</label>
                                <div class="col-8">
                                    <input id="price" name="price" placeholder="price" class="form-control here"
                                        type="number" />

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Time" class="col-4 col-form-label">Time</label>
                                <div class="col-8">
                                    <input id="Time" name="Time" placeholder="Time" class="form-control here"
                                        type="Time" />
                                    </div>
                            </div>
                            <div class="form-group row">
                                <label for="description" class="col-4 col-form-label">Description</label>
                                <div class="col-8">

                                    <textarea id="description" name="description" placeholder="description"
                                        class="form-control here" >

                    </textarea>
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror


                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="teacher_id" class="col-4 col-form-label">Teacher</label>
                                <div class="col-8">

                                    <select
                                    class="form-control here"
                                    required="required"
                                    id="teacher_id"
                                    name="teacher_id"
                                    >
                                    @foreach ($teacher as $item)
                                    <option value="{{$item->id}}">{{$item->frist_name}}</option>
                                    @endforeach
                                    </select>


                                  @csrf
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image" class="col-4 col-form-label">Images</label>
                                <div class="col-8">

                                    <input
                                    class="form-control here"
                                    required="required"
                                    id="image"
                                    name="image"
                                    type ="file"

                                    >

                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="offset-4 col-8">
                                    <button name="submit" type="submit" class="btn btn-primary">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
</div>
</div>
    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>
@endsection
