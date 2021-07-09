<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HEADER -->
    @include('layouts/header')

    <title>Simple CRUD</title>
  </head>
  <body>
  	<div class="container mt-5">

      <!-- ALERT FOR SUCCESS -->
      @include('layouts/alert_success')

	  	<!-- Content -->
	  	@yield('content')
    </div>

    <!-- MODALS -->
    @include('layouts/modal')

    <!-- FOOTER -->
    @include('layouts/footer')
  </body>
</html>