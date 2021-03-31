<?php 

    $__ =" Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum ";
    
    
    
    var_dump(strlen($__));
    echo "<pre>";
    var_dump(trim($__));
    echo "<pre>";
    var_dump(ltrim($__));
    echo "<pre>";
    var_dump(rtrim($__));
    echo "<pre>";
    var_dump(str_replace("Ipsum","ipsumsss",$__));
    echo "<pre>";
    var_dump(substr("Lorem",0));
    echo "<pre>";
    var_dump(substr_count($__,"Lorem",0));
    echo "<pre>";
    var_dump(strpos($__,"Ipsum",11));
    echo "<pre>";
    var_dump(ucfirst($__));
?>