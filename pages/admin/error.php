<?php  if (count($error) > 0) : ?>
  <div class="error">
  	<?php foreach ($error as $errors) : ?>
  	  <p class = "emsg"><?php echo $errors ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>