<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>IT-Talents 2016</title>

	<meta name="description" content="Source code generated using layoutit.com">
	<meta name="author" content="LayoutIt!">

	<link rel="shortcut icon" type="image/x-icon" href="{{url('favicon.ico')}}">
	<link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
	<link rel="stylesheet" href="{{URL::asset('css/bootstrap-slider.css')}}">



</head>
<body>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="well well-sm text-center">
				<h1>
					epay Transactions 2016
				</h1>
				<p>
					by <img src="{{url('logo.png')}}"/>
				</p>
			</div>
			<div class="row text-center">
				<div id="someMeaningfulId"></div>

				<input id="ex1" data-slider-id='ex1Slider' type="text" data-slider-min="1" data-slider-max="50" data-slider-step="1" data-slider-value="1"/>
				<input type="button" value="pause" id="pauseBtn" onclick="togglePause();" />
				<br />

			</div>
			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
				</div>
				<div class="col-md-4">
				</div>

			</div>
		</div>
	</div>
	<style>

	</style>

</div>


</body>
<script>
    var API = {
        Data: {
            base_url: '<?= url( '/' ); ?>',
            action: '<?= isset( $_GET['action'] ) ? $_GET['action'] : 0; ?>',
            token: "{{ csrf_token() }}"
        }
    };
</script>
<!-- Add Google Maps -->
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCEe58dvk-GUD3XDa5BrVn4nBwgDU5_Ays"></script>

<script src="{{URL::asset('js/jquery.min.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/7.0.2/bootstrap-slider.min.js"></script>

<script src="{{URL::asset('js/scripts.js')}}"></script>
</html>