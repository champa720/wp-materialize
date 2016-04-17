<!-- This file is used to markup the public-facing widget. -->
<div class="col s12">
    <div class="card hoverable">
        <div class="card-image activator waves-effect waves-block waves-light <?php echo $select_1; ?> <?php echo $select_2; ?>" style="height:256px";>

            <span class="card-title icon"><i class="<?php echo $icon; ?>"></i></span>
        </div>
        <div class="card-content">
            <button class="activator btn-floating btn-large waves-effect waves-light teal tooltipped" data-position="left" data-delay="50" data-tooltip="More Information"><i class="fa fa-info"></i></button>
            <span class="card-title activator grey-text text-darken-4"><?php echo $title; ?></span>
        </div>
        <div class="card-reveal">
            <span class="card-title grey-text text-darken-4"><?php echo $title; ?><i class="fa fa-close right"></i></span>
            <p><?php echo $textarea; ?></p>
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
    </div>
</div>
