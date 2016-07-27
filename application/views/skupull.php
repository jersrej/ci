<html>
<head>
<script src="<?=JS?>jquery-3.1.0.min.js"></script>
<script>
$(document).ready(function(){
	$('.submit_button').click(function(e){
		var text_skus = $('.text_skus').val();
		//console.log(text_skus);
		$.call_skus(text_skus);
	});
	
	$.call_skus = function(skus){
		$.ajax({ 
            url: '<?php echo site_url(); ?>/pull/validation',
			type: 'GET',
			dataType: 'jsonp',
            data: { skus: skus },
            success: function($data, textStatus, jqXHR) {
				var length = $data.length;
				console.log(length);
				for (a = 0; a <= length - 1; a++){
					$('ul#unbeat-prod').append($data[a].output);
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(textStatus, errorThrown);
			}
		});
	}
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
	<ul id="unbeat-prod"></ul>
	
</body>
</html>