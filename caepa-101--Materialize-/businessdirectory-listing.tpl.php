<div class="listing-title">
    <h2 itemprop="name"><?php echo $title; ?></h2>
</div>

<?php echo $is_sticky ? $sticky_tag : ''; ?>

<?php if ($actions): ?>
    <?php echo $actions; ?>
<?php endif; ?>

<?php if ($main_image): ?>
    <div class="main-image"><?php echo $main_image; ?></div>
<?php endif; ?>

<div class="listing-details cf <?php if ($main_image): ?>with-image<?php endif; ?>">
    <?php echo $listing_fields; ?>
</div>

<?php if ($extra_images): ?>
<div class="extra-images">
    <ul>
    <?php foreach ($extra_images as $image): ?>
        <li><?php echo $image; ?></li>
    <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>

<!--div class="parallax-container">
  <div class="parallax">
      <img src="https://maps.googleapis.com/maps/api/staticmap?&zoom=15&scale=2&size=512x1024&
markers=<?php $field = wpbdp_get_form_field( 10 );
        echo $field->html_value( $listing_id ); ?>+
    <?php $field = wpbdp_get_form_field( 11 );
        echo $field->html_value( $listing_id ); ?>+
    <?php $field = wpbdp_get_form_field( 12 );
        echo $field->html_value( $listing_id ); ?>+
    <?php $field = wpbdp_get_form_field( 13 );
        echo $field->html_value( $listing_id ); ?>">
    </div>
</div-->

<div class="parallax-container no-padding">
    <iframe width="100%" height="512" frameborder="0" style="border:0" scrollwheel="false" src="https://www.google.com/maps/embed/v1/place?q=<?php $field = wpbdp_get_form_field( 1 ); echo $field->value( $listing_id ); ?>&key=AIzaSyC-NfU2uTbcK1Feq4-S6R8XsjJce6Rh7uc" allowfullscreen></iframe>
</div>