<?php
/*
Plugin Name: Ryan's Plugin Suite
Plugin URI: http://www.teklynk.com
Description: Custom Set of Widgets.
Version: 1.0
Author: Ryan Jones
Author URI: http://www.teklynk.com
License: GPL2
*/

class wp_featuredItems_plugin extends WP_Widget {

// constructor
    function wp_featuredItems_plugin() {
        parent::WP_Widget(false, $name = __('Blakeley Street Bakery - Featured Items', 'wp_widget_plugin') );
    }

// widget form creation
	function form($instance) {
	
	// Check values
	if( $instance) {
		 $featured_heading_1 = esc_attr($instance['featured_heading_1']);
		 
		 $img_src_1 = esc_attr($instance['img_src_1']);
		 $img_link_1 = esc_attr($instance['img_link_1']);
		 $img_alt_1 = esc_attr($instance['img_alt_1']);
		 
		 $img_src_2 = esc_attr($instance['img_src_2']);
		 $img_link_2 = esc_attr($instance['img_link_2']);
		 $img_alt_2 = esc_attr($instance['img_alt_2']);
		 
		 $img_src_3 = esc_attr($instance['img_src_3']);
		 $img_link_3 = esc_attr($instance['img_link_3']);
		 $img_alt_3 = esc_attr($instance['img_alt_3']);
		 
		 $img_src_4 = esc_attr($instance['img_src_4']);
		 $img_link_4 = esc_attr($instance['img_link_4']);
		 $img_alt_4 = esc_attr($instance['img_alt_4']);
	} else {
		 $featured_heading_1 = '';
		 
		 $img_src_1 = '';
		 $img_link_1 = '';
		 $img_alt_1 = '';
		 
		 $img_src_2 = '';
		 $img_link_2 = '';
		 $img_alt_2 = '';
		 
		 $img_src_3 = '';
		 $img_link_3 = '';
		 $img_alt_3 = '';
		 
		 $img_src_4 = '';
		 $img_link_4 = '';
		 $img_alt_4 = '';
	}
	?>
	<p>
	<div style="margin-bottom:4px;"><?php _e('Featured Heading:', 'wp_widget_plugin'); ?></div>
	<div style="margin-bottom:4px;"><input placeholder="Heading/Title" class="widefat" id="<?php echo $this->get_field_id('featured_heading_1'); ?>" name="<?php echo $this->get_field_name('featured_heading_1'); ?>" type="text" value="<?php echo $featured_heading_1; ?>" /></div>
    </p>
    
	<p>
	<div style="margin-bottom:4px;"><?php _e('Box (1):', 'wp_widget_plugin'); ?></div>
	<div style="margin-bottom:4px;"><input placeholder="Image Source URL" class="widefat" id="<?php echo $this->get_field_id('img_src_1'); ?>" name="<?php echo $this->get_field_name('img_src_1'); ?>" type="text" value="<?php echo $img_src_1; ?>" /></div>
    <div style="margin-bottom:4px;"><input placeholder="Hyperlink" class="widefat" id="<?php echo $this->get_field_id('img_link_1'); ?>" name="<?php echo $this->get_field_name('img_link_1'); ?>" type="text" value="<?php echo $img_link_1; ?>" /></div>
	<div style="margin-bottom:4px;"><input placeholder="Alt Text" class="widefat" id="<?php echo $this->get_field_id('img_alt_1'); ?>" name="<?php echo $this->get_field_name('img_alt_1'); ?>" type="text" value="<?php echo $img_alt_1; ?>" /></div>
    </p>

	<p>
	<div style="margin-bottom:4px;"><?php _e('Box (2):', 'wp_widget_plugin'); ?></div>
	<div style="margin-bottom:4px;"><input placeholder="Image Source URL" class="widefat" id="<?php echo $this->get_field_id('img_src_2'); ?>" name="<?php echo $this->get_field_name('img_src_2'); ?>" type="text" value="<?php echo $img_src_2; ?>" /></div>
    <div style="margin-bottom:4px;"><input placeholder="Hyperlink" class="widefat" id="<?php echo $this->get_field_id('img_link_2'); ?>" name="<?php echo $this->get_field_name('img_link_2'); ?>" type="text" value="<?php echo $img_link_2; ?>" /></div>
	<div style="margin-bottom:4px;"><input placeholder="Alt Text" class="widefat" id="<?php echo $this->get_field_id('img_alt_2'); ?>" name="<?php echo $this->get_field_name('img_alt_2'); ?>" type="text" value="<?php echo $img_alt_2; ?>" /></div>
    </p>
	
	<p>
	<div style="margin-bottom:4px;"><?php _e('Box (3):', 'wp_widget_plugin'); ?></div>
	<div style="margin-bottom:4px;"><input placeholder="Image Source URL" class="widefat" id="<?php echo $this->get_field_id('img_src_3'); ?>" name="<?php echo $this->get_field_name('img_src_3'); ?>" type="text" value="<?php echo $img_src_3; ?>" /></div>
    <div style="margin-bottom:4px;"><input placeholder="Hyperlink" class="widefat" id="<?php echo $this->get_field_id('img_link_3'); ?>" name="<?php echo $this->get_field_name('img_link_3'); ?>" type="text" value="<?php echo $img_link_3; ?>" /></div>
	<div style="margin-bottom:4px;"><input placeholder="Alt Text" class="widefat" id="<?php echo $this->get_field_id('img_alt_3'); ?>" name="<?php echo $this->get_field_name('img_alt_3'); ?>" type="text" value="<?php echo $img_alt_3; ?>" /></div>
    </p>
    
	<p>
	<div style="margin-bottom:4px;"><?php _e('Box (4):', 'wp_widget_plugin'); ?></div>
	<div style="margin-bottom:4px;"><input placeholder="Image Source URL" class="widefat" id="<?php echo $this->get_field_id('img_src_4'); ?>" name="<?php echo $this->get_field_name('img_src_4'); ?>" type="text" value="<?php echo $img_src_4; ?>" /></div>
    <div style="margin-bottom:4px;"><input placeholder="Hyperlink" class="widefat" id="<?php echo $this->get_field_id('img_link_4'); ?>" name="<?php echo $this->get_field_name('img_link_4'); ?>" type="text" value="<?php echo $img_link_4; ?>" /></div>
	<div style="margin-bottom:4px;"><input placeholder="Alt Text" class="widefat" id="<?php echo $this->get_field_id('img_alt_4'); ?>" name="<?php echo $this->get_field_name('img_alt_4'); ?>" type="text" value="<?php echo $img_alt_4; ?>" /></div>
    </p>

	<?php
	}

// update widget
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		// Fields
		
		$instance['featured_heading_1'] = strip_tags($new_instance['featured_heading_1']);
		
		$instance['img_src_1'] = strip_tags($new_instance['img_src_1']);
		$instance['img_link_1'] = strip_tags($new_instance['img_link_1']);
		$instance['img_alt_1'] = strip_tags($new_instance['img_alt_1']);
		
		$instance['img_src_2'] = strip_tags($new_instance['img_src_2']);
		$instance['img_link_2'] = strip_tags($new_instance['img_link_2']);
		$instance['img_alt_2'] = strip_tags($new_instance['img_alt_2']);
		
		$instance['img_src_3'] = strip_tags($new_instance['img_src_3']);
		$instance['img_link_3'] = strip_tags($new_instance['img_link_3']);
		$instance['img_alt_3'] = strip_tags($new_instance['img_alt_3']);
		
		$instance['img_src_4'] = strip_tags($new_instance['img_src_4']);
		$instance['img_link_4'] = strip_tags($new_instance['img_link_4']);
		$instance['img_alt_4'] = strip_tags($new_instance['img_alt_4']);
		
		return $instance;
	}

// display widget
	function widget($args, $instance) {
	   extract( $args );
	   // these are the widget options
	   $featured_heading_1 = $instance['featured_heading_1'];
	   
	   $img_src_1 = apply_filters('widget_img_src_1', $instance['img_src_1']);
	   $img_link_1 = $instance['img_link_1'];
	   $img_alt_1 = $instance['img_alt_1'];
	   
	   $img_src_2 = apply_filters('widget_img_src_2', $instance['img_src_2']);
	   $img_link_2 = $instance['img_link_2'];
	   $img_alt_2 = $instance['img_alt_2'];
	   
	   $img_src_3 = apply_filters('widget_img_src_3', $instance['img_src_3']);
	   $img_link_3 = $instance['img_link_3'];
	   $img_alt_3 = $instance['img_alt_3'];
	   
	   $img_src_4 = apply_filters('widget_img_src_4', $instance['img_src_4']);
	   $img_link_4 = $instance['img_link_4'];
	   $img_alt_4 = $instance['img_alt_4'];
	   
	   if( $featured_heading_1 ) {
		  echo '<div class="wp_featureditems_title archive-title"><header class="archive-header"><h1 class="page-title">'.$featured_heading_1.'</h1></header></div>';
	   }
	   
	   $featWidth='style="width:50%;"';
	   if($img_src_3 && $img_src_4){
	   	$featWidth='style="width:25%;"';
	   }

	   echo $before_widget;
	   // Display the widget

	   echo '<div class="widget-text wp_featureditems_plugin_box">';

	   // Check if link and image are set
	   if( $img_link_1 || $img_src_1) {
		  echo '<div '.$featWidth.' class="wp_featureditems_box_1">';
		  echo '<a href="'.$img_link_1.'">';
			if($img_alt_1){
			  echo '<span class="wp_descript">'.$img_alt_1.'</span>';
			}
		  echo '<img src="'.$img_src_1.'"/>';
		  echo '</a>';
		  echo '</div>';
	   }else{
		  echo '<div class="wp_featureditems_box_1" style="display:none;"></div>';
	   }
	   if( $img_link_2 || $img_src_2) {
		  echo '<div '.$featWidth.' class="wp_featureditems_box_2">';
		  echo '<a href="'.$img_link_2.'">';
			if($img_alt_2){
			  echo '<span class="wp_descript">'.$img_alt_2.'</span>';
			}
		  echo '<img src="'.$img_src_2.'"/>';
		  echo '</a>';
		  echo '</div>';
	   }else{
		  echo '<div class="wp_featureditems_box_2" style="display:none;"></div>';
	   }
	   if( $img_link_3 || $img_src_3 ) {
		  echo '<div '.$featWidth.' class="wp_featureditems_box_3">';
		  echo '<a href="'.$img_link_3.'">';
			if($img_alt_3){
			  echo '<span class="wp_descript">'.$img_alt_3.'</span>';
			}
		  echo '<img src="'.$img_src_3.'"/>';
		  echo '</a>';
		  echo '</div>';
	   }else{
		  echo '<div class="wp_featureditems_box_3" style="display:none;"></div>';
	   }
	   if( $img_link_4 || $img_src_4 ) {
		  echo '<div '.$featWidth.' class="wp_featureditems_box_4">';
		  echo '<a href="'.$img_link_4.'">';
			if($img_alt_4){
			  echo '<span class="wp_descript">'.$img_alt_4.'</span>';
			}
		  echo '<img src="'.$img_src_4.'"/>';
		  echo '</a>';
		  echo '</div>';
	   }else{
		  echo '<div class="wp_featureditems_box_4" style="display:none;"></div>';
	   }

	   echo '</div>';
	   echo '<div style="clear:both;"></div>';
	   echo $after_widget;
	}
}

// register widget
	add_action('widgets_init', create_function('', 'return register_widget("wp_featuredItems_plugin");'));
?>