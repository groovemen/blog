<!--<form method="POST" class="login">-->
<!--    <input type="email" name="email" placeholder="Enter your email"/>-->
<!--    <input type="password" name="password" placeholder="Enter your password"/>-->
<!--    <input type="submit" name="submit"/>-->
<!--</form>-->
<!-- Trigger the modal with a button -->

<section class="section-1-blog">
    <header>
        <div class="logo"></div>
    </header>
</section>
<?php include "menuview.php"; ?>

<!------- LOGIN MODAL ------->
<div class="container-login">
  <!-- Trigger the modal with a button -->
  <span class="login-page-btn"><br/><br/><br/>click on this button to  
    <button type="button" class="btn btn-default btn-xs" id="myBtn">Login</button>
  </span>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form method="POST">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> email</label>
              <input type="text" name="email" class="form-control"  placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Parola</label>
              <input type="password" name="password" class="form-control"  placeholder="Enter password">
            </div>
              <button type="submit" name="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
        </div>
      </div>
      
    </div>
  </div>
</div>

<section class="section-6">
    <div>
        <div class="col-4 ">
            <ul class="menu-footer">
                <li><a href="<?php echo BASE_URL;?>index.php">Home</a></li>
                <li><a href="<?php echo BASE_URL;?>aboutus">Despre noi</a></li>
                <li><a href="<?php echo BASE_URL;?>articles">Blog</a></li>
                <li><a href="<?php echo BASE_URL;?>shop">Produse</a></li>
                <li><a href="#" id="contactt">Contact</a></li>
            </ul>
        </div>
        <div class="col-4 news">
            <span>NEWS</span> 
            <br/>
            <span>Integer ultrices urna eros, in egestas leo consectetur vitae. Aliquam blandit mi a enim aliquam, sit amet cursus massa porttitor.</span>
        </div>
        <div class="col-4 icons"> 
            <i class="fa fa-facebook fa-3x" aria-hidden="true"> . </i>
            <i class="fa fa-pinterest-p fa-3x" aria-hidden="true"> . </i>
            <i class="fa fa-google-plus fa-3x" aria-hidden="true"> . </i>
            <i class="fa fa-twitter fa-3x" aria-hidden="true"></i>
        </div>
    </div>
</section>

<section class="section-7">
    <div class="copyright">
        <span class="copytext">Copywright @ Moldovan 2016</span>
    </div>
</section>