<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>P - TODO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat+Alternates' rel='stylesheet' type='text/css'>

    <!-- Le styles -->
    <link href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css" rel="stylesheet">
    <link href="http://twitter.github.com/bootstrap/assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
  </head>
  <body>

    <div class="container">

      <div class="row">

        <div class="span8">
          <?php if(isset($message)): ?>
              <div class="alert alert-error">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  <?php echo $message; ?>
              </div>
          <?php endif; ?>
          <form class="form-horizontal" id="logIn" method='post' action='<?php echo base_url(); ?>user/login'>
            <fieldset>
              <legend>
                Login
              </legend>

              <div class="control-group">
                <label class="control-label" for="input01">Email</label>
                <div class="controls">
                  <input type="text" class="input-xlarge" id="user_email" name="user_email" rel="popover" data-content="The email you entered at registration." data-original-title="Email">

                </div>
              </div>

              <div class="control-group">
                <label class="control-label" for="input01">Password</label>
                <div class="controls">
                  <input type="password" class="input-xlarge" id="pwd" name="pwd" rel="popover" data-content="The password you entered at registration." data-original-title="Password" >

                </div>
              </div>

              <div class="control-group">
                <label class="control-label" for="input01"></label>
                <div class="controls">
                  <button type="submit" class="btn btn-success" rel="tooltip" title="first tooltip">
                    Log in
                  </button>

                </div>

              </div>

            </fieldset>
          </form>
          <a href="<?php echo base_url(); ?>user/register">Registration</a>
        </div>

      </div>

    </div><!--/row-->
    </div><!--/span-->
    </div><!--/row-->

    <hr>

    <footer>
      <div class="container">
        <p>
          &copy; Pontus Alm
        </p>
      </div>
    </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://twitter.github.com/bootstrap/assets/js/jquery.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-transition.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-alert.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-modal.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-dropdown.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-scrollspy.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-tab.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-tooltip.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-popover.js"></script>
    <script type="text/javascript" src="http://jzaefferer.github.com/jquery-validation/jquery.validate.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#logIn input').hover(function() {
          $(this).popover('toggle');
        });
        $("#logIn").validate({
          rules : {
            user_email : {
              required : true,
              email : true
            },
            pwd : {
              required : true,
              minlength : 6
            }
          },
          messages : {
            user_name : "Enter your first and last name",
            user_email : {
              required : "Enter your email address",
              email : "Enter valid email address"
            },
            pwd : {
              required : "Enter your password"
            },

          },
          errorClass : "help-inline",
          errorElement : "span",
          highlight : function(element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
          },
          unhighlight : function(element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
          }
        });
      });
    </script>

  </body>
</html>

