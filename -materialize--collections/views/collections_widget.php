<!-- This file is used to markup the public-facing widget. -->
<?php

    if ($type == "ordered") { echo "<ol class='collection with-header'>";} else { echo("<ul class='collection with-header'>"); }
    
    echo "<li class='collection-header'>" . $before_title . $title . $after_title . "</li>";

    foreach ($items as $num => $item) : 
        if (!empty($item)) :
            if (empty($item_links[$num])) :
                echo("<li class='collection-item " . $item_classes[$num] . "'>" . $item . "</li>");
            else :
                if($item_targets[$num]) :
                    echo("<a class='collection-item " . $item_classes[$num] . "' href='" . $item_links[$num] . "' target='_blank'>" . $item . "</a>");
                else :
                    echo("<a class='collection-item " . $item_classes[$num] . "' href='" . $item_links[$num] . "'>" . $item . "</a>");
                endif;
            endif;
        endif;
    endforeach;

    if ($type == "ordered") { echo "</ol>";} else { echo("</ul>"); }

?>