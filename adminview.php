<section class="section-1-shop">
    <header>
        <div class="logo"></div>
    </header>
</section>
<?php include "menuview.php"; ?>

    
<div class="article-form">
    <form id="article-form" method="POST" onsubmit="return false;" enctype="multipart/form-data">
        <input type="hidden" name="id"/>
        <div>
            <input class="inputs" type="text" name="title" placeholder="enter your title.." />
        </div>
        <div>
            <input class="inputs" type="text" name="content" placeholder="enter your content.."/>
        </div>
        <div>
            <input class="chooose" type="file" name="file"/><span class="error-upload"></span><br/>
           <br>
        </div>
        <input class="btn btn-default btn-md" id="article-submit" type="submit" value="Insert" />
    </form>
</div>
<br/>
    <button id="add-btn" class="btn btn-success">Add Article</button> </br>
    <input id="searchinput" class="inputs" type="text" name="adminsearch" placeholder="Search by title"/>
    
<hr>

<div class="articles-list">
    
</div>
<br/>
    <a class="btn-danger btn-sm" href="<?php echo BASE_URL ;?>logout">Logout</a><br/><br/>
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
