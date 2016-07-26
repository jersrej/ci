<html>
<head>
<script src="<?=JS?>jquery-3.1.0.min.js"></script>
<script>
$(document).ready(function(){
	var text_skus = $('.text_skus').val();
	$('.submit_button').click(function(e){
		$.call_skus(text_skus);
	});
	
	$.call_skus = function(skus){
		$.ajax({ 
            url: <?php echo site_url(pull/validation); ?>
            data: { skus: skus },
            success: function($data, textStatus, jqXHR) {
				console.log($data);
			}
		});
	});
})
</script>
</head>
<body>
	<p>Sku pull</p>
	<?php
		//$attributes = array('class' => 'form_skus', 'id' => 'form_skus', 'name' => 'form_skus');
		//echo form_open('pull/validation', $attributes);
		echo form_textarea(array('name' => 'text_skus', 'autocomplete' => 'off', 'class' => 'text_skus'));
		echo form_submit(array('name' => 'submit', 'class' => 'submit_button', 'value' => 'submit'));
	?>	
</body>
</html>