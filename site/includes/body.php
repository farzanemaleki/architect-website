<?php  
    if(isset($_GET['page']) && !empty($_GET['page']) )
    {
        $page = $_GET['page'];
    }
    else{
        $page = 'home';
    }
    $page = 'site/pages/'. $page .'.php'; 

    include($page);
?>