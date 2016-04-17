<!-- This file is used to markup the public-facing widget. -->
<div class="col s12 m6">
    <div class="card medium hoverable">
        <div class="card-image valign-wrapper <?php echo $select_1; ?> <?php echo $select_2; ?>">
            <i class="white-text aligncenter <?php echo $icon; ?>"></i>
            <span class="card-title"><?php echo $title; ?></span>
        </div>
        <div class="card-content">
            <p><?php echo $textarea; ?></p>
        </div>
        <div class="card-action">
            <a href="<?php echo $link_1_url; ?>"
               <?php if( empty( $link_1_url ) ) echo "style='display:none'" ?>><?php echo $link_1; ?></a> 
            <a href="<?php echo $link_2_url; ?>"
               <?php if( empty( $link_2_url ) ) echo "style='display:none'" ?>><?php echo $link_2; ?></a>
        </div>
    </div>
</div>
