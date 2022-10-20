<?php 
    add_action('wp_enqueue_scripts', function () {
        wp_enqueue_script('production', get_theme_file_uri() . '/dist/production-dist.js', ['jquery'], '', true);

        // Addon scripts that should only be loaded on certain pages...
        // if(is_page(array('page-slug', 'page-slug-2')){
        //   wp_enqueue_script('scripts-uniquename', get_theme_file_uri() . '/dist/production-scriptname.js','', '', true);
        // }

        if( is_page('testimonials') ){
          wp_enqueue_script('scripts-uniquename', get_theme_file_uri() . '/dist/production-testimonial-tabs.js','', '', true);
        }

        if( is_page('faqs') ){
          wp_enqueue_script('faqs', get_theme_file_uri() . '/dist/production-faqs.js','', '', true);
        }

        if(is_home()){
          wp_enqueue_script('livesearch', get_theme_file_uri() . '/dist/production-livesearch.js','', '', true);
          
        }
	    
if(is_home() || is_front_page()) {
	wp_enqueue_script('mailchimp', get_theme_file_uri() . '/dist/production-modal.js','', '', true);
}

        // Localize the themeURL to our production file so we can use it to complete file paths
        wp_localize_script('production', 'themeURL', array(
          'themeURL' => get_stylesheet_directory_uri(),
          'site_url' => get_site_url(),
        )
		);
    });
