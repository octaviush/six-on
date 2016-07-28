<?php
if ( is_page('mixing') ) :  
  dynamic_sidebar('sidebar-secondary'); 
elseif ( is_page('contact') ) :
  dynamic_sidebar('sidebar-contact');
elseif ( is_page('new-page') ) : 
  dynamic_sidebar('sidebar-new');
else: 
  dynamic_sidebar('sidebar-primary');
endif;
?>
