<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="../../../public/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../public/css/bootstrap-slider.css" rel="stylesheet">

    <style>
        #ex1Slider .slider-selection {
            background: #BABABA;
        }
    </style>

</head>
<body>

<input id="ex1" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14"/>

<script src="../../../public/js/jquery.min.js"></script>
<script src="../../../public/js/bootstrap.min.js"></script>
<script src="../../../public/js/bootstrap-slider.js"></script>

<script>

    /*
    $(document).ready(function () {


});

    $('#ex1').slider({

        formatter: function(value) {
            console.log('Hallo!!!');
            return 'Current value: ' + value;
        }
    });*/

    var slider = new Slider('#ex1', {
        formatter: function(value) {
            return 'Current value: ' + value;
        }
    });
</script>

</body>
</html>