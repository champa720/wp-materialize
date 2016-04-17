<div class="col s12">
    <div class="card hoverable <?php echo $select_1; ?> <?php echo $select_2; ?>">
        <div class="card-content white-text">
            <span class="card-title"><?php echo $title; ?></span>

            <p><?php echo $textarea; ?></div>

        <div class="card-action">
            <a href="<?php echo $link_1_url; ?>" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="<?php echo $link_1_url; ?>"
               <?php if( empty( $link_1_url ) ) echo "style='display:none'" ?>><?php echo $link_1; ?></a> 
            <a href="<?php echo $link_2_url; ?>" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="<?php echo $link_2_url; ?>"
               <?php if( empty( $link_2_url ) ) echo "style='display:none'" ?>><?php echo $link_2; ?></a>
        </div>
    </div>
</div>
