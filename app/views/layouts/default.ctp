<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    
<?php //echo $this->Html->charset(); ?>
		<title>
<?php //echo $title_for_layout; ?>
		</title>
<?php //echo $this->Html->meta('icon'); ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="/css/bootstrap.min.css">
		<link rel="stylesheet" href="/css/bootstrap-responsive.min.css">
		<script src="/js/vendor/jquery-1.9.1.min.js"type="text/javascript"></script>
		<script src="/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js" type="text/javascript"></script>
		<script src="/js/vendor/bootstrap.min.js" type="text/javascript"></script>

    </head>
       <body>
    
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

		
		<?php echo $content_for_layout; ?>
		
		
		<!-- scripts_for_layout -->
		<?php echo $scripts_for_layout; ?>
		<!-- Js writeBuffer -->
		<?php echo $this->element('sql_dump'); ?>

    </body>
    
	<?php
	if (class_exists('JsHelper') && method_exists($this->Js, 'writeBuffer')) echo $this->Js->writeBuffer();
	// Writes cached scripts
	?>
</html>