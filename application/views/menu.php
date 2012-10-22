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