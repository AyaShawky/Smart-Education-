@extends('layouts.layout')
@section('content')


<body class="host_version">

	<div id="teachers" class="section wb">
        <div class="container">
      <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Add Student</h4>
                        <hr />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form method="POST" action="/students">

                            @csrf
                            <div class="form-group row">
                                <label for="frist_name" class="col-4 col-form-label">First Name</label>
                                <div class="col-8">
                                    <input id="frist_name" name="frist_name" placeholder="First Name" class="form-control here"
                                        type="text" />
                                    <div class="valid-feedback">Looks good!</div>

                                    <div class="invalid-feedback">Please First Name is required.</div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="last_name" class="col-4 col-form-label">Last Name</label>
                                <div class="col-8">
                                    <input id="last_name" name="last_name" placeholder="Last Name" class="form-control here"
                                        type="text" />
                                    <div class="valid-feedback">Looks good!</div>

                                    <div class="invalid-feedback">Please Last Name is required.</div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="date" class="col-4 col-form-label">Data of Birth</label>
                                <div class="col-8">
                                    <input id="date" name="date" placeholder="Data of Birth" class="form-control here"
                                        type="date" />
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">
                                        Please Data of Birth is required.
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="mobile" class="col-4 col-form-label">Mobile</label>
                                <div class="col-8">
                                    <input id="mobile" name="mobile" placeholder="Mobile" class="form-control here"
                                        type="number" />
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">
                                        Please Mobile is required.
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="course_id" class="col-4 col-form-label">Course</label>
                                <div class="col-8">

                                    <select
                                    class="form-control here"
                                    required="required"
                                    id="course_id"
                                    name="course_id[]"
                                    multiple
                                    >
                                    @foreach ($course as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                    </select>


                                  @csrf
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="mobile" class="col-4 col-form-label">Status</label>
                                <div class="col-8">
                                <select name="status"  id="mobile" class="form-control here">
                                  <option>Active</option>
                                  <option>Adjective</option>

                                </select>
                                </div>
                              </div>


                            <div class="form-group row">
                                <div class="offset-4 col-8">
                                    <button  type="submit" class="btn btn-primary">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        </div><!-- end container -->
    </div><!-- end section -->


    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>


</body>
@endsection
