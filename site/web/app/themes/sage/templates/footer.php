<footer class="content-info">
<hr>
  <div class="container">
  	<div class="row">
    <?php dynamic_sidebar('sidebar-footer'); ?>
    </div>
    <div class="footer-linkz">

        <div class="6onthebeat">
        <hr>
          <footer>
          <div class="row">
          <div class="col-md-6 col-sm-6 btm">
            <ul class="list-inline">
              <li><a href="<?= esc_url(home_url('faqs')); ?>">FAQs</a></li>|
              <li><a href="<?= esc_url(home_url('privacy-policy')); ?>">Privacy Policy</a></li>|
              <li><a href="<?= esc_url(home_url('contact')); ?>">Contact</a></li>|
              
            </ul>
          </div>
            <div class="col-md-6 col-sm-6">
              <p class="pull-right"><img src="<?= get_template_directory_uri(); ?>/dist/images/6-blk.png" height="50px" alt="logo-black">&copy; 2016</p>
            </div>
          </div>
            
          </footer>
        </div>
    </div>

  </div>
</footer>
