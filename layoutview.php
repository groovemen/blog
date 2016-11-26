<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.1.1/normalize.css" type="text/css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo CSS; ?>style.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo CSS; ?>hexagons.css" type="text/css" />
        <meta></meta>
    </head>
    <body>
        <?php include $pageContent; ?>
        
        <!------CONTACT MODAL----->
        
        <div id="contactModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> X </button>
                    <h3 id="myModalLabel">We'd Love to Hear From You</h3>
                  </div>
                  <div class="modal-body">
                    <form id="msg-form" class="form-horizontal col-sm-12" method="POST" action="contact.php"
                          data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                          data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                          data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
                      <div class="form-group"><label class="control-label">Name</label><input class="form-control" name="name" placeholder="Your name" data-bv-notempty data-bv-notempty-message="The full name is required" type="text"></div>
                      <div class="form-group"><label class="control-label">E-Mail</label><input class="form-control" name="email" placeholder="you@email.com" ddata-bv-notempty data-bv-notempty-message="Must be a valid e-mail address (user@gmail.com)" type="email"></div>
                      <div class="form-group"><label class="control-label">Message</label><textarea class="form-control" name="content" placeholder="Your message here.." data-bv-notempty data-bv-notempty-message="You've forgotten to provide your message!"></textarea></div>
                      <button id="send-msg" type="submit" class="btn btn-success pull-right" disabled>Send !</button>
                    </form>
                  </div>
                  <div class="modal-footer">
                  </div>
                </div>
              </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.1.0.js" integrity="sha256-slogkvB1K3VOkzAI8QITxV3VzpOnkeNVsKvtkYLMjfk=" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo JS; ?>app.js"></script>
        
        
    </body>
</html>




