<!-- This file is used to markup the public-facing widget. -->
<div class="col s12 no-padding">
    <div class="parallax-container valign-wrapper <?php echo $select_1; ?> <?php echo $select_2; ?>">
        <div class="center-align container">
            <h2><?php echo $title; ?></h2>
            <p class="flow-text"><?php echo $textarea; ?></p>
            
            <a class="btn waves-effect waves-light
              <?php if( empty( $link_1_url ) ) echo "disabled" ?> tooltipped" data-position="bottom" data-delay="50" data-tooltip="<?php echo $link_1_url; ?>" 
               href="<?php echo $link_1_url; ?>" 
               <?php if( empty( $link_1 ) ) echo "style='display:none'" ?>>
                <?php echo $link_1; ?></a>
            
            <a class="btn waves-effect waves-light 
              <?php if( empty( $link_2_url ) ) echo "disabled" ?> tooltipped" data-position="bottom" data-delay="50" data-tooltip="<?php echo $link_2_url; ?>" 
               href="<?php echo $link_2_url; ?>" 
               <?php if( empty( $link_2 ) ) echo "style='display:none'" ?>>
                <?php echo $link_2; ?></a>
        </div>
    </div><!-- call_to_action parallax-container -->
</div>