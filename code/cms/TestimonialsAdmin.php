<?php
class TestimonialsAdmin extends ModelAdmin{
	
	public static $managed_models = array(
		'Testimonial'
	);
	
	static $url_segment = 'testimonials';
}
?>