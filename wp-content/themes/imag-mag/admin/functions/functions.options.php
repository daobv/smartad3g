<?php

add_action('init','of_options');

if (!function_exists('of_options'))
{
	function of_options()
	{ 
	  	$framework = 'tpcrn_';

 		//Access the WordPress Categories via an Array
		$of_categories = array();  
		$of_categories_obj = get_categories('hide_empty=0');
		foreach ($of_categories_obj as $of_cat) {
		$of_categories[$of_cat->cat_name] = $of_cat->cat_name;}
		$categories_tmp = array_unshift($of_categories, "Select a category:");    
 	       
		//Access the WordPress Pages via an Array
		$of_pages = array();
		$of_pages_obj = get_pages('sort_column=post_parent,menu_order');    
		foreach ($of_pages_obj as $of_page) {
		    $of_pages[$of_page->ID] = $of_page->post_name; }
		$of_pages_tmp = array_unshift($of_pages, "Select a page:");       
	
		//Testing 
		$of_options_select = array("one","two","three","four","five"); 
		$of_options_radio = array("one" => "One","two" => "Two","three" => "Three","four" => "Four","five" => "Five");
		
	 
 

 		//Stylesheets Reader
		$alt_stylesheet_path = LAYOUT_PATH;
		$alt_stylesheets = array();
		
		if ( is_dir($alt_stylesheet_path) ) 
		{
		    if ($alt_stylesheet_dir = opendir($alt_stylesheet_path) ) 
		    { 
		        while ( ($alt_stylesheet_file = readdir($alt_stylesheet_dir)) !== false ) 
		        {
		            if(stristr($alt_stylesheet_file, ".css") !== false)
		            {
		                $alt_stylesheets[] = $alt_stylesheet_file;
		            }
		        }    
		    }
		}


		/*Background Images Reader*/
		$bg_images_path = get_stylesheet_directory(). '/images/bg/';  
		$bg_images_url = get_template_directory_uri().'/images/bg/';  
		$bg_images = array();
		
		if ( is_dir($bg_images_path) ) {
		    if ($bg_images_dir = opendir($bg_images_path) ) { 
		        while ( ($bg_images_file = readdir($bg_images_dir)) !== false ) {
		            if(stristr($bg_images_file, ".png") !== false || stristr($bg_images_file, ".jpg") !== false) {
		                $bg_images[] = $bg_images_url . $bg_images_file;
		            }
		        }    
		    }
		}
		

		/*-----------------------------------------------------------------------------------*/
		/* TO DO: Add options/functions that use these */
		/*-----------------------------------------------------------------------------------*/
		
		//More Options
		$uploads_arr = wp_upload_dir();
		$all_uploads_path = $uploads_arr['path'];
		$all_uploads = get_option('of_uploads');
		$other_entries = array("Select a number:","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19");
		$body_repeat = array("no-repeat","repeat-x","repeat-y","repeat");
		$body_pos = array("top left","top center","top right","center left","center center","center right","bottom left","bottom center","bottom right");
		
		// Image Alignment radio box
		$of_options_thumb_align = array("alignleft" => "Left","alignright" => "Right","aligncenter" => "Center"); 
		
		// Image Links to Options
		$of_options_image_link_to = array("image" => "The Image","post" => "The Post"); 


/*-----------------------------------------------------------------------------------*/
/* The Options Array */
/*-----------------------------------------------------------------------------------*/

// Set the Options Array
global $of_options;
$of_options = array();
$of_options[] = array( "name" => __('General Settings','imagmag'),
                    "type" => "heading");
$of_options[] = array( "name" => "General",
					"desc" => "",
					"id" => "introduction",
					"std" => __('<h3>General Settings</h3>','imagmag'),
					"icon" => true,
					"type" => "info");
					
					
$of_options[] = array( "name" => __('Custom Favicon','imagmag'),
					"desc" =>  __('Upload a 16px x 16px Png/Gif image that will represent your website favicon','imagmag'),
					"id" => "custom_favicon",
					"std" => "",
					"type" => "media"); 
$logo = get_template_directory_uri() . '/images/logo.png';					
$of_options[] = array( "name" => __('Custom Logo','imagmag'),
					"desc" => __('Upload a Png/Gif image that will represent your website Logo.','imagmag'),
					"id" => "custom_logo",
					"std" => $logo,
					"type" => "media"); 
 						
$of_options[] = array( "name" => __('Custom Logo Margin Top','imagmag'),
					"desc" => __('Enter the margin-top value. EX: margin-top:2px;','imagmag'),
					"id" => "custom_logo_margin_top",
					"std" => "4px",
					"type" => "text");		
 

 				
$of_options[] = array( "name" => __('Custom Feed URL','imagmag'),
					"desc" => __('Enter Feedburner URL or Other','imagmag'),
					"id" => "custom_feedburner",
					"std" => "",
					"type" => "text"); 					
                                               
$of_options[] = array( "name" => __('Tracking Code','imagmag'),
					"desc" => __('Paste your Google Analytics (or other) tracking code here. Dont forget to add script tags,if not in the code</br><small> &lt;script&gt; ...,.. &lt;/script&gt; </small>','imagmag'),
					"id" => "google_analytics",
					"std" => "",
					"type" => "textarea");        
$of_options[] = array( "name" => __('Show Footer Widgets', 'imagmag'),
					"desc" => __('Select to show the Footer Widgets.', 'imagmag'),
					"id" => "shw_footer_widg",
					"std" => "yes",
					"type" => "select",
					"options" => array('yes'=>'Yes','no'=>'No'));

 
 
 

 
					
$of_options[] = array( "name" => __('Home Settings','imagmag'),
					"type" => "heading");
 
 					
$of_options[] = array( "name" => "Hello there!",
					"desc" => "",
					"id" => "introduction",
					"std" => __('<h3>Home Page Content Organizer</h3>','imagmag'),
					"icon" => true,
					"type" => "info");
 


$of_options[] = array( "name" => __('HomePage Slider','themeapacific'),
					"desc" => __('Show HomePage slider Options','imagmag'),
					"id" => "offline_feat_slide",
					"std" => 0,
          			"folds" => 1,
					"type" => "checkbox");  
$of_options[] = array( "name" => __('Select a Category or use Theme Slider options','imagmag'),
					"desc" => __('Select category for slider. If you want to use theme slider options,then leave it to default option.','imagmag'),
					"id" => "feat_slide_category",
					"std" => "0",
					"fold" => "offline_feat_slide",  
					"type" => "select",
					"options" => $of_categories);
 
 
  					
$of_options[] = array( "name" =>__('Single Posts','imagmag'),
					"type" => "heading");
$of_options[] = array( "name" => "General",
					"desc" => "",
					"id" => "introduction",
					"std" => __('<h3>Single Posts Settings</h3>','imagmag'),
					"icon" => true,
					"type" => "info");
 
$of_options[] = array( "name" => __('Show Single Post Next/Prev navigation','imagmag'),
					"desc" => '',
					"id" => "posts_navigation",
					"std" => "On",
					"type" => "radio",
					"options" => array(
						'On' => 'On',
						'Off' => 'Off'
						)); 
$of_options[] = array( "name" => __('Show Breadcrumbs','imagmag'),
					"desc" => '',
					"id" => "posts_bread",
					"std" => "Off",
					"type" => "radio",
					"options" => array(
						'On' => 'On',
						'Off' => 'Off'
						));						
  						
$of_options[] = array( "name" => __('Show Tags on posts','imagmag'),
					"desc" =>'',
					"id" => "posts_tags",
					"std" => "On",
					"type" => "radio",
					"options" => array(
						'On' => 'On',
						'Off' => 'Off'
						)); 						
  
 
					
					
$of_options[] = array( "name" => __('Backup Options','imagmag'),
					"type" => "heading");
$of_options[] = array( "name" => "General",
					"desc" => "",
					"id" => "introduction",
					"std" => __('<h3>Backup and Restore</h3>','imagmag'),
					"icon" => true,
					"type" => "info");
										
$of_options[] = array( "name" => __('Backup and Restore Options','imagmag'),
                    "id" => "of_backup",
                    "std" => "",
                    "type" => "backup",
					"desc" => __('You can use the two buttons below to backup your current options, and then restore it back at a later time. This is useful if you want to experiment on the options but would like to keep the old settings in case you need it back.','imagmag'),
					);
					
$of_options[] = array( "name" => __('Transfer Theme Options Data','imagmag'),
                    "id" => "of_transfer",
                    "std" => "",
                    "type" => "transfer",
					"desc" => __('You can tranfer the saved options data between different installs by copying the text inside the text box. To import data from another install, replace the data in the text box with the one from another install and click "Import Options".
						','imagmag'),
					);
					
	}
}
?>