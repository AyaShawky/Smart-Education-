@extends('layouts.main')
@section('content')


<body class="host_version">


	<div class="all-title-box">
		<div class="container text-center">
			<h1>Course <span class="m_1">A subject is a particular area of study that UC offers courses in eg, Accounting, French, Geology, or Mathematics.</span></h1>
		</div>
	</div>

    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <p class="lead">Learn more about the different subjects offered at UC using this undergraduate subject list or the postgraduate subject list.!</p>
                </div>
            </div><!-- end title -->

            <hr class="invis">

            <div class="row">
                @foreach ($course as $item)


                <div class="col-lg-4 col-md-6 col-12">

                    <div class="course-item">
						<div class="image-blog">
							<img src="images/{{$item->image}}" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">{{$item->name}}</a></h2>
							</div>
							<div class="course-desc">
								<p>{{$item->description}} </p>
							</div>

                            <div class="blog-button">
                                <a class="hover-btn-new orange" href="course/{{$item->id}} "><span>Read More<span></a>
                            </div>
						</div>
						<div class="course-meta-bot">
							<ul>
								<li><i class="fa fa-calendar" aria-hidden="true"></i> 6 Month</li>
								<li><i class="fa fa-users" aria-hidden="true"></i> 56 Student</li>
								<li><i class="fa fa-book" aria-hidden="true"></i> 7 Books</li>
							</ul>
						</div>
					</div>
                    <hr class="hr3">
                </div><!-- end col -->
                @endforeach

                {{-- <div class="col-lg-4 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="images/blog_2.jpg" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Hotel Management</a></h2>
							</div>
							<div class="blog-desc">
								<p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p>
							</div>

                                <div class="blog-button">
                                    <a class="hover-btn-new orange" href="#"><span>Read More<span></a>
                                </div>


						</div>
						<div class="course-meta-bot">
							<ul>
								<li><i class="fa fa-calendar" aria-hidden="true"></i> 6 Month</li>
								<li><i class="fa fa-users" aria-hidden="true"></i> 56 Student</li>
								<li><i class="fa fa-book" aria-hidden="true"></i> 7 Books</li>
							</ul>
						</div>
					</div>
                </div><!-- end col -->

				<div class="col-lg-4 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="images/blog_3.jpg" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Biotechnology</a></h2>
							</div>
							<div class="course-desc">
								<p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p>
							</div>
							<div class="blog-button">
                                <a class="hover-btn-new orange" href="#"><span>Read More<span></a>
                            </div>
						</div>
						<div class="course-meta-bot">
							<ul>
								<li><i class="fa fa-calendar" aria-hidden="true"></i> 6 Month</li>
								<li><i class="fa fa-users" aria-hidden="true"></i> 56 Student</li>
								<li><i class="fa fa-book" aria-hidden="true"></i> 7 Books</li>
							</ul>
						</div>
					</div>
                </div><!-- end col --> --}}
            </div><!-- end row -->

			{{-- <hr class="hr3">

            <div class="row">
				<div class="col-lg-4 col-md-6 col-12">
                   <div class="course-item">
						<div class="image-blog">
							<img src="images/blog_4.jpg" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Medical Sciences</a></h2>
							</div>
							<div class="course-desc">
								<p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p>
							</div>
							<div class="blog-button">
                                <a class="hover-btn-new orange" href="#"><span>Read More<span></a>
                            </div>
						</div>
						<div class="course-meta-bot">
							<ul>
								<li><i class="fa fa-calendar" aria-hidden="true"></i> 6 Month</li>
								<li><i class="fa fa-users" aria-hidden="true"></i> 56 Student</li>
								<li><i class="fa fa-book" aria-hidden="true"></i> 7 Books</li>
							</ul>
						</div>
					</div>
                </div><!-- end col -->

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="images/blog_5.jpg" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Finance</a></h2>
							</div>
							<div class="course-desc">
								<p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p>
							</div>
                            <div class="blog-button">
                                <a class="hover-btn-new orange" href="#"><span>Read More<span></a>
                            </div>
						</div>
						<div class="course-meta-bot">
							<ul>
								<li><i class="fa fa-calendar" aria-hidden="true"></i> 6 Month</li>
								<li><i class="fa fa-users" aria-hidden="true"></i> 56 Student</li>
								<li><i class="fa fa-book" aria-hidden="true"></i> 7 Books</li>
							</ul>
						</div>
					</div>
                </div><!-- end col -->

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="course-item">
						<div class="image-blog">
							<img src="images/blog_6.jpg" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title="">Fashion Designing</a></h2>
							</div>
							<div class="course-desc">
								<p>Lorem ipsum door sit amet, fugiat deicata avise id cum, no quo maiorum intel ogrets geuiat operts elicata libere avisse id cumlegebat, liber regione eu sit.... </p>
							</div>
							<div class="blog-button">
                                <a class="hover-btn-new orange" href="#"><span>Read More<span></a>
                            </div>
						</div>
						<div class="course-meta-bot">
							<ul>
								<li><i class="fa fa-calendar" aria-hidden="true"></i> 6 Month</li>
								<li><i class="fa fa-users" aria-hidden="true"></i> 56 Student</li>
								<li><i class="fa fa-book" aria-hidden="true"></i> 7 Books</li>
							</ul>
						</div>
					</div>
                </div><!-- end col --> --}}
            {{-- </div><!-- end row --> --}}
        </div><!-- end container -->
        <!--pagination -->
<div class="text-center">
    {{$course->render()}}
   </div>
<!-- end pagination -->
    </div><!-- end section -->

    <div class="parallax section dbcolor">
        <div class="container">
            <div class="row logos">
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_01.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_02.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_03.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_04.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_05.png" alt="" class="img-repsonsive"></a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                    <a href="#"><img src="images/logo_06.png" alt="" class="img-repsonsive"></a>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->



    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>
@endsection
