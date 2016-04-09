<html>
<head>
<title>Insert Data Into Database Using CodeIgniter Form</title>
<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
</head>
<body>

<div id="container">
<?php echo form_open('Home/write_new_review'); ?>
<h1>Review please...</h1><hr/>
<?php if (isset($message)) { ?>
<CENTER><h3 style="color:green;"><?php echo $message;?></h3></CENTER><br>
<?php } ?>
<?php echo form_label('Title :'); ?> <br />
<?php echo form_input(array('id' => 'dheading', 'name' => 'dheading', 'required' => 'true', 'maxlength' => '50')); ?><br />

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

