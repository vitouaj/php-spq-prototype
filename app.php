<?php 
    $array = ["Home" => "home.php", "About" => "about.php", "Sample Post" => "post.php", "Contact" => "contact.php"];
    
    foreach( $array as $nav)
    {
        $doc = "<li class='nav-item'>
                    <a class='nav-link px-lg-3 py-3 py-lg-4' href=$array[$nav]>$nav</a>
                </li>";
        echo $doc;
    }
    
?>
