<section class="section-1-blog">
    <header>
        <div class="logo"></div>
    </header>
</section>
<?php include "menuview.php"; ?>
<h1 class="comment-title"><?php echo $title;?></h1>
<div class="panel panel-default" style="margin: 0 auto; width:70%;">
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

</div>
<br/>
<div class="comments-list">
    
</div>

<form id="comment-form" method="POST" onsubmit="return false">
            <input type="hidden" name="id" value="<?php echo $article['id'] ?>"> 
            <input type="name" class="inputs" name="name" placeholder="Enter your name"/>
            <input type="email" class="inputs" name="email" placeholder="Enter your email"/>
            <input type="text" class="inputs" name="comment" placeholder="Enter your comment"/>
            <button id="submit-comment">Submit !</button>
</form>
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