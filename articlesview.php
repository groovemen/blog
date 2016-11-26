<section class="section-1-blog">
    <header>
        <div class="logo"></div>
    </header>
</section>


<?php include "menuview.php"; ?>
<h1 id="blog-title">Blog Page</h1>
<a href="<?php echo BASE_URL;?>login">Login</a></br>

<section class="section-2-blog">

   <!-- SEARCH modal  
     <!-- Trigger the modal with a button -->
<div class="container">
<button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#modalSearch">Search</button>

<!-- Modal -->
<div id="modalSearch" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Search by titles</h4>
      </div>
      <div class="modal-body">
        <input id="searcharticlee" type="text" name="search" placeholder="Cauta dupa titlu...">
        <div class="search-list">
          
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>

  </div>
</div>


      <nav aria-label="...">
        <ul class="pager">
          <li class="<?php echo $this->ifPageNotExist($params['page'] - 1); ?>"><a  href="<?php echo BASE_URL . "articles?page=" . ($params['page'] - 1); ?>">Previous</a></li>
          <li class="<?php echo $this->ifPageNotExist($params['page'] + 1); ?>"><a href="<?php echo BASE_URL . "articles?page=" . ($params['page'] + 1); ?>">Next</a></li>
        </ul>
      </nav> 
    
<?php    foreach($articles as $article) { ?>
    <div class="panel panel-default">
        <?php if($article['image']){ ?>
             <div >
                <img src= '<?php echo BASE_URL. 'assets/img/uploads/' . $article['image']; ?>'  class="e-mage img-responsive"  />
            </div>
      <?php  }; ?>
   
  <div class="panel-heading">
    <h3 class="panel-title"><?php echo $article["title"];?></h3>
  </div>
  <div class="panel-body">
   <?php echo $article["content"];?>
  </div>
  <button data-id = '<?php echo $article['id']?>' type="button" class="btn btn-success">Read more...</button>
</div>

<?php }; ?>

</section>

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