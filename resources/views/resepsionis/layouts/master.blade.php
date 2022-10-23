<!DOCTYPE html>
<html lang="en">
<head>
    <title>HotelStar - @yield('title')</title>
    <meta charset="UTF-8">
        <meta name="description" content="Clean and responsive administration panel">
        <meta name="keywords" content="Admin,Panel,HTML,CSS,XML,JavaScript">
        <meta name="author" content="Erik Campobadal">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="{{ asset ('css/uikit.min.css')}}" />
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="{{ asset ('css/style.css')}}" />
        <link rel="stylesheet" href="{{ asset ('css/notyf.min.css')}}" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>        <script src="js/uikit.min.js" ></script>
		<script src="{{ asset ('js/uikit-icons.min.js')}}" ></script>
</head>
<body>
@section('sidebar')

@show

<div class="container">
    @yield('content')
</div>
<!-- Load More Javascript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.min.js" integrity="sha256-UGwvyUFH6Qqn0PSyQVw4q3vIX0wV1miKTracNJzAWPc=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.transit/0.9.12/jquery.transit.min.js" integrity="sha256-rqEXy4JTnKZom8mLVQpvni3QHbynfjPmPxQVsPZgmJY=" crossorigin="anonymous"></script>
		<script src="{{ asset ('js/notyf.min.js')}}"></script>
		<!-- Required Overall Script -->
        <script src="{{ asset ('js/script.js')}}"></script>
		<!-- Status Updater -->
		<script src="{{ asset ('js/status.js')}}"></script>
		<!-- Sample Charts -->
		<script src="{{ asset ('js/charts.js')}}"></script>
		<!-- Sample Notifications -->
		<script src="{{ asset ('js/notification.js')}}"></script>
</body>
</html>