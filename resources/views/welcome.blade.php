<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title')</title>

	<!-- HEAD -->
    @include("layouts.elements.head")

	<!-- Theme JS files -->
	
	@yield('head-js')
	<script type="text/javascript" src="{{ asset('theme/assets/js/core/app.js') }}"></script>

	<!-- /theme JS files -->

</head>

<body>
    <!-- MAIN-NAV -->
    @include("layouts.elements.main-nav")
	
	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">
                    
                    <div class="container">
                        <div class="row">
                            @foreach($posts as $post)
                            <div class="col-sm-12">
    
                                <!-- Clean blog layout #1 -->
                                <div class="panel panel-flat">
                                    <div class="panel-heading">
                                        <h5 class="panel-title text-semibold">
                                            <a href="#">{{$post->name}}</a>
                                        </h5>
                                    </div>
    
                                    <div class="panel-body">
                                        <p>{{$post->description}}.</p>
    
                                        <blockquote>
                                            <p>{!! $post->content !!}.</p>
                                            <footer>Update:  <cite title="Source Title">{{$post->updated_at}}</cite></footer>
                                        </blockquote>
                                    </div>
    
                                    <div class="panel-footer panel-footer-transparent">
                                        <div class="heading-elements">
                                            <ul class="list-inline list-inline-separate heading-text text-muted">
                                                <li>By <a href="#" class="text-muted">{{$post->username}}</a></li>
                                                <li>{{$post->created_at}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /clean blog layout #1 -->
    
                            </div>
                            @endforeach
                        </div>
    
                    </div>
					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2018. <a href="#">SIMBLOG</a> by <a href="#" target="_blank">Inka</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->
</body>
</html>