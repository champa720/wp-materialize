<!-- This file is used to markup the public-facing widget. -->
<div class="parallax-container">
	<div class="parallax"><img src="http://materializecss.com/images/sample-1.jpg"></div>
</div>

<div class="section white">
	<div class="row container">
		<h2 class="header">Parallax</h2>
		<p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
	</div>
</div>

<div class="parallax-container">
	<div class="parallax"><img src="http://materializecss.com/images/office.jpg"></div>
</div>




<!-- break------------------------------------------------------------------------------------>
<div class="col s12 no-padding">
    <div class="parallax-container valign-wrapper <?php echo $select_1; ?> <?php echo $select_2; ?>">
        <div class="container">
            <h2><?php echo $title; ?></h2>
            <p class="flow-text"><?php echo $textarea; ?></p>
            <a class="btn waves-effect waves-light modal-trigger" href="#<?php echo $link_1_url; ?>"><?php echo $link_1; ?></a><!-- Modal Trigger -->
        </div>
    </div><!-- Parallax-Container -->
</div>



<div class="modal bottom-sheet modal-fixed-footer" id="<?php echo $link_1_url; ?>">
	<div class="modal-content container">
		<h4><?php echo $modal_title; ?></h4>

		<p class="flow-text"><?php echo $modal_textarea; ?></p>
	</div>

	<div class="modal-footer">
		<a class="modal-action modal-close waves-effect btn" href="#<?php echo $modal_link_2_url; ?>"><?php echo $modal_link_2; ?></i></a>
        <a class="modal-action modal-close waves-effect waves-red btn-flat"><i class="fa fa-close">&emsp;</i>Close</a>
    </div>
</div><!-- Modal Structure -->
