<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Sistem Informasi Klinik</title>
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Health Appointment Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- css files -->
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/assets/home/css/jquery-ui.css" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/home/css/style.css" type="text/css" rel="stylesheet" media="all">
    <link href="http://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;subset=devanagari,latin-ext" rel="stylesheet">
    <!-- //css files -->
</head>
<!-- body starts -->

<body>
    <?php echo $content; ?>

    <!-- Default-JavaScript -->
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/home/js/jquery-2.1.4.min.js"></script>

    <!-- Calendar -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/assets/home/js/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#datepicker,#datepicker1").datepicker();
        });
    </script>
    <!-- //Calendar -->

</body>

</html>