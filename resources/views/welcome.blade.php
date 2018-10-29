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
                            <div class="col-sm-12">
    
                                <!-- Clean blog layout #1 -->
                                <div class="panel panel-flat">
                                    <div class="panel-heading">
                                        <h5 class="panel-title text-semibold">
                                            <a href="#">Blog post layout #1 with image</a>
                                        </h5>
                                    </div>
    
                                    <div class="panel-body">
                                        <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.</p>
    
                                        <blockquote>
                                            <p>When suspiciously goodness labrador understood rethought yawned grew piously endearingly inarticulate oh goodness jeez trout distinct hence cobra.</p>
                                            <footer>Jason, <cite title="Source Title">10:39 am</cite></footer>
                                        </blockquote>
                                    </div>
    
                                    <div class="panel-footer panel-footer-transparent">
                                        <div class="heading-elements">
                                            <ul class="list-inline list-inline-separate heading-text text-muted">
                                                <li>By <a href="#" class="text-muted">Eugene</a></li>
                                                <li>July 5th, 2016</li>
                                                <li><a href="#" class="text-muted"><i class="icon-heart6 text-size-base text-pink position-left"></i> 281</a></li>
                                            </ul>
    
                                            <a href="#" class="heading-text pull-right">Read more <i class="icon-arrow-right14 position-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /clean blog layout #1 -->
    
                            </div>
    
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