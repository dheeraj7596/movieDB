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
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 40px;
}
</style>
<body>

<div id="container">
<?php echo form_open('Home/add_new_movie'); ?>
<h1>Add Movie Mr.admin...</h1><hr/>
<?php if (isset($message)) { ?>
<CENTER><h3 style="color:green;"><?php echo $message;?></h3></CENTER><br>
<?php } ?>
<?php echo form_label('Title :'); ?> <br />
<?php echo form_input(array('id' => 'dtitle', 'name' => 'dtitle', 'required' => 'true', 'maxlength' => '50')); ?><br />

<?php echo form_label('Genre :'); ?> <br />
<select id="selectype" name="genre" class="col-sm-2">
    <option value="Romance">Romance</option>
    <option value="Thriller">Thriller</option>
    <option value="Drama">Drama</option>
    <option value="Horror">Horror</option>
    <option value="Comedy">Comedy</option>
</select> <br />                      
<br/>
<br/><?php echo form_label('Language :'); ?> <br />
<select id="selectype" name="language" class="col-sm-2">
    <option value="English">English</option>
    <option value="Hindi">Hindi</option>
    <option value="Telugu">Telugu</option>
</select> <br />
</br>
<br/><?php echo form_label('Country :'); ?> <br />
<select id="selectype" name="country" class="col-sm-2">
    <option value="USA">USA</option>
    <option value="India">India</option>
    <option value="UK">UK</option>
</select> <br />
</br>
<br/><?php echo form_label('Year :'); ?> <br />
<?php echo form_input(array('id' => 'dyear', 'name' => 'dyear', 'required' => 'true', 'maxlength' => '4')); ?><br />

<br/><?php echo form_label('Image name :'); ?> <br />
<?php echo form_input(array('id' => 'dimgname', 'name' => 'dimgname', 'required' => 'true', 'maxlength' => '50')); ?><br />

<br/><?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
<?php echo form_close(); ?><br/>
<div id="fugo">

</div>
</div>
</body>
</html>

