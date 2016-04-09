<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/price-range.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/main.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="<?php echo base_url();?>assets/js/html5shiv.js"></script>
    <script src="<?php echo base_url();?>assets/js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>assets/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>

<div id="container">
<?php echo form_open('Home/write_new_review'); ?>
<h1>Review please...</h1><hr/>
<?php if (isset($message)) { ?>
<CENTER><h3 style="color:green;"><?php echo $message;?></h3></CENTER><br>
<?php } ?>
<?php echo form_label('Heading :'); ?> <br />
<?php echo form_input(array('id' => 'dheading', 'name' => 'dheading', 'required' => 'true', 'maxlength' => '50')); ?><br />

<?php echo form_label('Movie id :'); ?> <br />
<?php echo form_input(array('id' => 'dmovieid', 'name' => 'dmovieid', 'value' => $movieid, 'readonly' => 'readonly')); ?><br />

<?php echo form_label('Body :'); ?> <?php echo form_error('demail'); ?><br />
<?php echo form_textarea(array('id' => 'dbody', 'name' => 'dbody', 'required' => 'true')); ?><br />

<?php echo form_label('Rating :'); ?> <?php echo form_error('demail'); ?><br />
<?php echo form_input(array('id' => 'drating', 'name' => 'drating', 'type' => 'number', 'required' => 'true', 'min' => '1', 'max' =>'10')); ?><br />

<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
<?php echo form_close(); ?><br/>
<div id="fugo">

</div>
</div>
</body>
</html>

