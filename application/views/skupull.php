<html>
<head></head>
<body>
	<p>Sku pull</p>
	<?php
		$attributes = array('class' => 'form_skus', 'id' => 'form_skus', 'name' => 'form_skus');
		echo form_open('pull/validation', $attributes);
		
		//echo form_textarea()
		echo form_textarea(array('name' => 'text_skus', 'autocomplete' => 'off', 'class' => 'text_skus'));
	?>	
</body>
</html>