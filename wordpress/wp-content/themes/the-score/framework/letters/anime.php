<?php if( ! defined( 'ABSPATH' ) ) exit;

/*******************************
* Enqueue scripts and styles.
********************************/
 
function the_score_anima_scripts() {
	if(get_theme_mod('header_letter', true)) {
		wp_enqueue_style( 'score-anima-css', get_template_directory_uri() . '/framework/letters/anime.css');
		wp_enqueue_script( 'super-anima-js', get_template_directory_uri() . '/framework/letters/anime.min.js', array( 'jquery' ), true);
	}
		
}

add_action( 'wp_enqueue_scripts', 'the_score_anima_scripts' );



function the_score_letter_anime () { ?>
<script>
	jQuery('.ml2').each(function(){
	  jQuery(this).html(jQuery(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
	});
	anime.timeline({loop: false})
	.add({
		targets: '.ml2 .letter',
		scale: [4,1],
		opacity: [0,1],
		translateZ: 0,
		easing: "easeOutExpo",
		duration: 550,
		delay: function(el, i) {
		  return <?php if(get_theme_mod('header_letter_speed')): echo get_theme_mod('header_letter_speed'); else: echo "70"; endif; ?>*i;
    }
	})
</script>
<?php }

add_action('wp_footer','the_score_letter_anime');