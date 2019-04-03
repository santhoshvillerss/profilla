<?php  if (count($errors) > 0) : ?>
	<div class="error">
    <style media="screen">
    .error {
      width: 92%;
      margin: 0px auto;
      padding: 10px;
      border: 1px solid grey;
      color: grey;
      background: white;
      border-radius: 5px;
      text-align: left;
    }
    </style>
		<?php foreach ($errors as $error) : ?>
			<p><?php echo $error ?></p>
		<?php endforeach ?>
	</div>
  <br>
<?php  endif ?>
