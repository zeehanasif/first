<?php
/*
Plugin Name: coustm post type
Plugin URI: http://wordpress.org/plugins/subscribe/
Description: :Project is about auto mail submission:when we add a new post then who subscribe this then the mail sent to him.
Author: zeeshan
Version: 1.0
Author URI:
*/
class JW_Movies_Post_type{
  public function __construct()
  {
	$this -> register_post_type();
  }
  public function register_post_type()
{
  $args= array(
  'labels' => array(
  'name'=>'movies',
  'singular_name'=>'movie',
  'add_new'=>'add new movie',
  'add_new_item'=>'add new movie',
  'edit_item'=>'edit item',
  'new_item'=>'add new item',
  'view_item'=>'view movie',
  'search_items'=>'search item',
  'not_found'=>'no movie found',
  'not_found_in_trash'=>'no movies found in trash',    
  ),
   'query_var' => 'movies',
   'rewrite' => array(
   'slug'=>'movies/',
   ),
   'public'=> true
   );
   register_Post_Type('JW_Movie',$args);
   }
   }
   add_action('init',function(){
   new JW_MOvies_Post_Type();
   });
