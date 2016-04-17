
<div class="card hoverable">
    <div class="card-image waves-effect waves-block waves-light">
        <!--?php if ($thumbnail): echo $thumbnail;
            else: ?-->
                <img class="activator grey" src="https://maps.googleapis.com/maps/api/staticmap?&zoom=15&scale=2&size=1024x256&
markers=<?php $field = wpbdp_get_form_field( 10 );
        echo $field->html_value( $listing_id ); ?>+
    <?php $field = wpbdp_get_form_field( 11 );
        echo $field->html_value( $listing_id ); ?>+
    <?php $field = wpbdp_get_form_field( 12 );
        echo $field->html_value( $listing_id ); ?>+
    <?php $field = wpbdp_get_form_field( 13 );
        echo $field->html_value( $listing_id ); ?>"></img>
        <!--?php endif; ?-->
        <span class="card-title activator">
                <?php $field = wpbdp_get_form_field( 1 ); 
                    echo $field->value( $listing_id ); ?></span>
    </div>
    <div class="card-content">
        <button class="activator btn-floating btn-large waves-effect waves-light teal tooltipped" data-position="left" data-delay="50" data-tooltip="More Information"><i class="fa fa-info"></i></button>
        <p><i class="fa fa-desktop fa-fw">&emsp;</i>       
            <?php $field = wpbdp_get_form_field( 5 );
                echo $field->html_value( $listing_id ); ?>
        </p>
    </div>

    <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">
            <?php $field = wpbdp_get_form_field( 1 ); 
                echo $field->html_value( $listing_id ); ?>
            <i class="fa fa-close right"></i>
        </span>
        <p class="col s12 m6">
            <i class="fa fa-map-marker fa-fw">&emsp;</i>
            <?php $field = wpbdp_get_form_field( 10 );
                echo $field->html_value( $listing_id ); ?><br />
            <i class="fa fa-fw">&emsp;</i>
            <?php $field = wpbdp_get_form_field( 11 );
                echo $field->html_value( $listing_id ); ?>&#44;
            <?php $field = wpbdp_get_form_field( 12 );
                echo $field->html_value( $listing_id ); ?>&ensp;
            <?php $field = wpbdp_get_form_field( 13 );
                echo $field->html_value( $listing_id ); ?></p>
        <p class="col s12 m6">
            <i class="fa fa-phone fa-fw">&emsp;</i>
            <?php $field = wpbdp_get_form_field( 6 );
                echo $field->html_value( $listing_id ); ?><br />
            <i class="fa fa-desktop fa-fw">&emsp;</i>       
            <?php $field = wpbdp_get_form_field( 5 );
                echo $field->html_value( $listing_id ); ?></p>
        <p class="col s12">
            <?php $field = wpbdp_get_form_field( 3 );
                echo $field->value( $listing_id ); ?></p>
        
        <a href="<?php $field = wpbdp_get_form_field( 1 ); 
                echo $field->value( $listing_id ); ?>">
            <i class="fa fa-plus fa-fw">&emsp;</i>More</a>
        
        
    </div>
</div>

<!--ul class="collapsible popout" data-collapsible="accordion">
<li>
    <div class="collapsible-header">
        <?php $field = wpbdp_get_form_field( 1 );
            echo $field->value( $listing_id ); ?>
    </div>

    <div class="collapsible-body">
        <p class="col s12 m6">
            <i class="fa fa-map-marker fa-fw">&emsp;</i>
            <?php $field = wpbdp_get_form_field( 10 );
                echo $field->html_value( $listing_id ); ?><br />
            <i class="fa fa-fw">&emsp;</i>
            <?php $field = wpbdp_get_form_field( 11 );
                echo $field->html_value( $listing_id ); ?>&#44;
            <?php $field = wpbdp_get_form_field( 12 );
                echo $field->html_value( $listing_id ); ?>&ensp;
            <?php $field = wpbdp_get_form_field( 13 );
                echo $field->html_value( $listing_id ); ?></p>
        <p class="col s12 m6">
            <i class="fa fa-phone fa-fw">&emsp;</i>
            <?php $field = wpbdp_get_form_field( 6 );
                echo $field->html_value( $listing_id ); ?><br />
            <i class="fa fa-desktop fa-fw">&emsp;</i>       
            <?php $field = wpbdp_get_form_field( 5 );
                echo $field->html_value( $listing_id ); ?></p>
        <p class="col s12">
            <?php $field = wpbdp_get_form_field( 3 );
                echo $field->html_value( $listing_id ); ?></p>
        
        <p class="col s12">
            <a href=""><i class="fa fa-plus fa-fw">&emsp;</i>More</a>
        </p>
    </div>
</li>
</ul-->


<!--ul class="collection">
    <li class="collection-item avatar">
        <?php if ($thumbnail): echo $thumbnail;
            else: ?>
                <img style="height:256px" class="grey"></img>
        <?php endif; ?>
        <span class="title">
            <?php $field = wpbdp_get_form_field( 1 ); 
                echo $field->value( $listing_id ); ?></span>
        <p>
            <?php $field = wpbdp_get_form_field( 6 );
                echo $field->html_value( $listing_id ); ?><br>
            <?php $field = wpbdp_get_form_field( 3 );
                echo $field->html_value( $listing_id ); ?>
      </p>
      <a href="#!" class="            
            <?php $field = wpbdp_get_form_field( 5 );
                echo $field->value( $listing_id ); ?>"><i class="material-icons">grade</i></a>
    </li>
</ul-->