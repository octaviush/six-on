<header class="banner navbar navbar-inverse navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><img src="<?= get_template_directory_uri(); ?>/dist/images/6-wht.png" height="25px" alt="logo-white"></a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav navbar-right']);
      endif;
      ?>
    </nav>
  </div>
</header>

<!-- SLIDER HOME -->

<div id="carousel-home-generic" class="carousel slide top-space-home" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-home-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-home-generic" data-slide-to="1"></li>
    <li data-target="#carousel-home-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?= get_template_directory_uri(); ?>/dist/images/slide-1.png" width="100%" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="<?= get_template_directory_uri(); ?>/dist/images/slide-2-home.png" width="100%" alt="mixing">
      <div class="carousel-caption pull-left">
        
        <p><a class="btn btn-primary btn-default" href="http://localhost:8888/wordpress/mixing/" role="button">Learn more &raquo;</a></p>
      </div>
    </div>
    <div class="item">
      <img src="<?= get_template_directory_uri(); ?>/dist/images/slide-3.png" width="100%" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-home-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-home-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- JUMBOTRON -->
<div class="jumbotron">
      <div class="container">
        <div class="row">
            <div class="col-md-12">
              <iframe src="https://soundgine.com/@octaviush/m7/" frameborder="0" width="100%" height="700px"></iframe>
            </div>
        
        </div>
      </div>
    </div>

<div class="container">
    <h2><i class="fa fa-file-text-o" aria-hidden="true"></i> Licenses</h2>
    <hr>
      <!-- Example row of columns -->

      <div class="row">
      <div class="col-md-4">
              <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-trophy" aria-hidden="true"></i> Standard</h3>
                  </div>

                    <div class="panel-body">
                              <ul class="list-unstyled">
                                    <p><li><i class="fa fa-check-circle-o" aria-hidden="true"></i> 1 Commercial Use (Album, Mixtape, EP, Demo, Etc)</li></p>
                  <p><li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Distribution Limit 5,000 Copies</li></p>
                  <p><li><i class="fa fa-check-circle-o" aria-hidden="true"></i> O. Horn Still Owns Full Rights</li></p>
                  <p><li><i class="fa fa-check-circle-o" aria-hidden="true"></i> .WAV File - A Download Link To The Untagged Beat Will Be Sent To Your Email Instantly!</li></p>
                              </ul>
                            <p><a class="btn btn-default pull-right" role="button" data-toggle="modal" data-target=".bs-standard-modal-lg">View details &raquo;</a></p>
                    </div>
              </div>
          
        </div>

        
       <div class="col-md-4">
              <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-trophy" aria-hidden="true"></i> Premium</h3>
                  </div>

                    <div class="panel-body">
                              <ul class="list-unstyled">
                                    <p><li><i class="fa fa-check-circle-o" aria-hidden="true"></i> 2 Commercial Uses (Album, Mixtape, EP, Demo, Etc)</li></p>
                                    <p><li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Distribution Limit 10,000 Copies</li></p>
                                    <p><li><i class="fa fa-check-circle-o" aria-hidden="true"></i> O. Horn Still Owns Full Rights</li></p>
                                    <p><li><i class="fa fa-check-circle-o" aria-hidden="true"></i> .WAV File - A Download Link To The Untagged Beat Will Be Sent To Your Email Instantly!</li></p>
                              </ul>
                            <p><a class="btn btn-default pull-right" data-toggle="modal" data-target=".bs-premium-modal-lg" role="button">View details &raquo;</a></p>
                    </div>
              </div>
          
        </div>

        <div class="col-md-4">
              <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-trophy" aria-hidden="true"></i> Exclusive</h3>
                  </div>

                    <div class="panel-body">
                              <ul class="list-unstyled">
                                    <p><li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Unlimited Commercial Use</li></p>
                                    <p><li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Unlimited Distribution</li></p>
                                    <p><li><i class="fa fa-check-circle-o" aria-hidden="true"></i> O. Horn Still Owns Full Rights</li></p>
                                    <p><li><i class="fa fa-check-circle-o" aria-hidden="true"></i> Untagged Beat And Tracks Will Be Sent To Your Email Instantly!</li></p>
                                    <p><li><i class="fa fa-check-circle-o" aria-hidden="true"></i> The Signed Contract Will Be Sent Within 48 Hours Of Payment.</li></p>
                              </ul>
                            <p><a class="btn btn-default pull-right" href="#" role="button">View details &raquo;</a></p>
                    </div>
              </div>
          
        </div>
      </div>
      </div>
      <hr>

