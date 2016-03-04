<?php
/**
 * Created by Cade
 */?>
<div id="mainHeader">
    <div class="logo">
        <a href="<?php echo $this->contentLinkHref("home"); ?>">
            <!--img src="/media/logo-small.png" width="150" height="150" alt="logo" /-->
        </a>
    </div>
    <div class="contact">
        <!-- Contact Info -->
    </div>
    <div class="midHeader">
        <!-- Mid Header Title -->
    </div>

</div>
<div id="title-nav">
    <div class="pageTitle">
        <h1><?php echo $this->getPageName(); ?></h1>
    </div>
    <div id="nav">
        <ul>
            <li><?php echo $this->contentLink("home")?></li>
            <!--List of nav links -->
        </ul>
    </div>
</div>