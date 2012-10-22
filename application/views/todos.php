<!DOCTYPE html>
<html>
  <head>
    <link href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css" rel="stylesheet">
    <link href="http://twitter.github.com/bootstrap/assets/css/bootstrap-responsive.css" rel="stylesheet">
  </head>
  <body>
    <div id="container">
      <div class="span8">
        <div class="navbar navbar-fixed-top">
          <div class="navbar-inner">
            <div class="container">
              <a class="brand">Todos</a>
              <ul class="nav">
                <li class="divider-vertical"></li>
                <li><a href="<?php echo base_url(); ?>todos/newTodo">New todo</a></li>
                <li><a href="<?php echo base_url(); ?>todos/myTodos">My Todos</a></li>
                <li class="divider-vertical"></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    Projects
                    <b class="caret"></b>
                  </a>
                <ul class="dropdown-menu">
                  <li><a>Test</a></li>
                </ul>
                <li class="divider-vertical"></li>
                <li><span class="navbar-text">Logged in as: <?php echo $this->session->userdata('name') ?></span></li>
                <li class="divider-vertical"></li>
              <?php
                echo form_open('/user/logout', array('id' => 'logoutbutton', 'class' => 'pull-right navbar-search'));
                  echo form_submit(array('name' => 'logout', 'value' => 'Log out', 'class' => 'btn btn-info'));
                echo form_close();
              ?>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    <script src="http://twitter.github.com/bootstrap/assets/js/jquery.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-transition.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-alert.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-modal.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-dropdown.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-scrollspy.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-tab.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-tooltip.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-popover.js"></script>
  </body>
</html>