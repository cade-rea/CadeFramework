<?php
/**
 * Created by Cade
  */
$page = isset($_GET['p']) ? new Page($_GET['p']) : new Page("home");

class Page{

    function Page($p){
        $this->page = $p;
    }

    function getHead(){
        ob_start();
        include("page/head.php");

        $r = ob_get_contents();
        ob_end_clean();
        return $r;
    }

    function getBody(){
        ob_start();
        include("page/body.php");

        $r = ob_get_contents();
        ob_end_clean();
        return $r;
    }

    function getPageName(){
        return $this->page;
    }

    function contentLink($p){
        return "<a href='index.php?p=".$p."'>".ucfirst($p)."</a>";
    }

    function contentLinkHref($p){
        return "index.php?p=".$p;
    }
}
?>
<html>
    <head>
        <?php echo $page->getHead(); ?>
    </head>
    <body>
        <?php echo $page->getBody(); ?>
    </body>
</html>
