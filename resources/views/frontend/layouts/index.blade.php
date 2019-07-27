<!DOCTYPE html>
<html lang="en" ng-app="sunshineApp">

<head>
	<title>@yield('title')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('theme/cozastore/images/icons/favicon.png') }}" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/cozastore/vendor/bootstrap/css/bootstrap.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/cozastore/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/cozastore/fonts/iconic/css/material-design-iconic-font.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/cozastore/fonts/linearicons-v1.0.0/icon-font.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/cozastore/vendor/animate/animate.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/cozastore/vendor/css-hamburgers/hamburgers.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/cozastore/vendor/animsition/css/animsition.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/cozastore/vendor/select2/select2.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/cozastore/vendor/daterangepicker/daterangepicker.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/cozastore/vendor/slick/slick.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/cozastore/vendor/MagnificPopup/magnific-popup.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/cozastore/vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/cozastore/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('theme/cozastore/css/main.css') }}">
	<!--===============================================================================================-->
	
	<!-- Các custom style của backend -->
	<link rel="stylesheet" href="{{ asset('theme/cozastore/css/custom-styles.css') }}">
	<!--
	<link rel="stylesheet" href="{{asset('css/tablecssdep.css')}}">
-->
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.im.css">
	<!--
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
-->
	<!-- Các custom style dành riêng cho từng view -->
	@yield('custom-css')
</head>

<body class="animsition">

<div class="wrapper">

<!-- Main Header -->
@include('frontend.layouts.partials.header')
<!--
<style>
		.hightlight
		{
			background: yellow;
			font-weight: bold;
		}
	</style>
	<script src="https://code.jquery.com/jquery-2.2.3.js"
  integrity="sha256-laXWtGydpwqJ8JA+X9x2miwmaiKhn8tVmOVEigRNtP4="
  crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#search").keyup(function(){
				searchHightlight($(this).val());
		    });
        });
		function searchHightlight(searchText)
		{
		if(searchText)
		{
			var content=$("table").text();
			var searchExp =new RegExp(searchText, "ig");
			var matches = content.match(searchExp);
			if(matches)
			{
				$("table").html(content.replace(searchExp, function(match){
					return "<span class='hightlight'>"  + match + "</span>";
				}));
			}
		}
        else{
            $(".hightlight").removeClass("hightlight");
        }
		
	}
	</script>
	<div class="form-group">
		<ul>
			<input id="search" type="text" class="form-control">
		</ul>
	<div>
-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mark.js/6.1.0/jquery.mark.min.js"></script>
<link rel="https://cdn.dataTables.net/1.10.12/css/jquery.dataTables.min.css">
<script src="https://cdn.dataTables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        var $('#datainfo').DataTable();
        table.on=$("draw", function(){
            var keyword=$('#datainfo>label:eq(0)>input').val();

            $('#datainfo').unmark();
            $('#datainfo').mark(keyword,{});
        });
    });
</script>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  

  <!-- Main content -->
  <section class="content container-fluid">

	<!--------------------------
	  | Your Page Content Here |
	  -------------------------->
	  @yield('main-content')
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Main Footer -->
@include('frontend.layouts.partials.footer')
	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

	<!--===============================================================================================-->
	<script src="{{ asset('theme/cozastore/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
	<!--===============================================================================================-->
	<script src="{{ asset('theme/cozastore/vendor/animsition/js/animsition.min.js') }}"></script>
	<!--===============================================================================================-->
	<script src="{{ asset('theme/cozastore/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('theme/cozastore/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
	<!--===============================================================================================-->
	<script src="{{ asset('theme/cozastore/vendor/select2/select2.min.js') }}"></script>
	<script>
		$(".js-select2").each(function () {
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
	<!--===============================================================================================-->
	<script src="{{ asset('theme/cozastore/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('theme/cozastore/vendor/daterangepicker/daterangepicker.js') }}"></script>
	<!--===============================================================================================-->
	<script src="{{ asset('theme/cozastore/vendor/slick/slick.min.js') }}"></script>
	<script src="{{ asset('theme/cozastore/js/slick-custom.js') }}"></script>
	<!--===============================================================================================-->
	<script src="{{ asset('theme/cozastore/vendor/parallax100/parallax100.js') }}"></script>
	<script>
		$('.parallax100').parallax100();
	</script>
	<!--===============================================================================================-->
	<script src="{{ asset('theme/cozastore/vendor/MagnificPopup/jquery.magnific-popup.min.js') }}"></script>
	<script>
		$('.gallery-lb').each(function () { // the containers for all your galleries
			$(this).magnificPopup({
				delegate: 'a', // the selector for gallery item
				type: 'image',
				gallery: {
					enabled: true
				},
				mainClass: 'mfp-fade'
			});
		});
	</script>
	<!--===============================================================================================-->
	<script src="{{ asset('theme/cozastore/vendor/isotope/isotope.pkgd.min.js') }}"></script>
	<!--===============================================================================================-->
	<script src="{{ asset('theme/cozastore/vendor/sweetalert/sweetalert.min.js') }}"></script>
	<!--===============================================================================================-->
	<script src="{{ asset('theme/cozastore/js/main.js') }}"></script>

	<!-- Include AngularJS -->
	<script src="{{ asset('vendor/angularjs/angular.min.js') }}"></script>
	

	@yield('custom-scripts')
</body>

</html>