<!-- This file is used to markup the administration form of the widget. -->

<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>
		<ul class="sllw-instructions">
			<li><?php echo __("If an item is left blank it will not be output."); ?></li>
			<li><?php echo __("The Link and Custom Style Class fields are optional and can be left blank."); ?></li>
			<li><?php echo __("Be sure to include http:// before external links."); ?></li>
			<li class="hide-if-no-js"><?php echo __("Reorder the list items by clicking and dragging the item number."); ?></li>
			<li class="hide-if-no-js"><?php echo __("To remove an item, simply click the 'Remove' button."); ?></li>
			<li class="hide-if-js"><?php echo __("Reorder or delete an item by using the 'Position/Action' table below."); ?></li>
			<li class="hide-if-js"><?php echo __("To add a new item, check the 'Add New Item' box and save the widget."); ?></li>
		</ul>
		<div class="simple-link-list">
		<?php foreach ($items as $num => $item) :
			$item = esc_attr($item);
			$item_link = esc_attr($item_links[$num]);
			$item_class = esc_attr($item_classes[$num]);
			$checked = checked($item_targets[$num], 'on', false);
		?>
		
			<div id="<?php echo $this->get_field_id($num); ?>" class="list-item">
				<h5 class="moving-handle"><span class="number"><?php echo $num; ?></span>. <span class="item-title"><?php echo $item; ?></span><a class="sllw-action hide-if-no-js"></a></h5>
				<div class="sllw-edit-item">
					<label for="<?php echo $this->get_field_id('item'.$num); ?>"><?php echo __("Text:"); ?></label>
					<input class="widefat" id="<?php echo $this->get_field_id('item'.$num); ?>" name="<?php echo $this->get_field_name('item'.$num); ?>" type="text" value="<?php echo $item; ?>" />
					<label for="<?php echo $this->get_field_id('item_link'.$num); ?>"><?php echo __("Link:"); ?></label>
					<input class="widefat" id="<?php echo $this->get_field_id('item_link'.$num); ?>" name="<?php echo $this->get_field_name('item_link'.$num); ?>" type="text" value="<?php echo $item_link; ?>" />
					<label for="<?php echo $this->get_field_id('item_class'.$num); ?>"><?php echo __("Custom Style Class:"); ?></label>
					<input class="widefat" id="<?php echo $this->get_field_id('item_class'.$num); ?>" name="<?php echo $this->get_field_name('item_class'.$num); ?>" type="text" value="<?php echo $item_class; ?>" />
					<input type="checkbox" name="<?php echo $this->get_field_name('item_target'.$num); ?>" id="<?php echo $this->get_field_id('item_target'.$num); ?>" <?php echo $checked; ?> /> <label for="<?php echo $this->get_field_id('item_target'.$num); ?>"><?php echo __("Open in new window"); ?></label>
					<a class="sllw-delete hide-if-no-js"><img src="<?php echo plugins_url('images/delete.png', __FILE__ ); ?>" /> <?php echo __("Remove"); ?></a>
				</div>
			</div>
			
		<?php endforeach; 
		
		if ( isset($_GET['editwidget']) && $_GET['editwidget'] ) : ?>
			<table class='widefat'>
				<thead><tr><th><?php echo __("Item"); ?></th><th><?php echo __("Position/Action"); ?></th></tr></thead>
				<tbody>
					<?php foreach ($items as $num => $item) : ?>
					<tr>
						<td><?php echo esc_attr($item); ?></td>
						<td>
							<select id="<?php echo $this->get_field_id('position'.$num); ?>" name="<?php echo $this->get_field_name('position'.$num); ?>">
								<option><?php echo __('&mdash; Select &mdash;'); ?></option>
								<?php for($i=1; $i<=count($items); $i++) {
									if($i==$num){
										echo "<option value='$i' selected>$i</option>";
									}else{
										echo "<option value='$i'>$i</option>";
									}
								} ?>
								<option value="-1"><?php echo __("Delete"); ?></option>
							</select>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
			
			<div class="sllw-row">
				<input type="checkbox" name="<?php echo $this->get_field_name('new_item'); ?>" id="<?php echo $this->get_field_id('new_item'); ?>" /> <label for="<?php echo $this->get_field_id('new_item'); ?>"><?php echo __("Add New Item"); ?></label>
			</div>
		<?php endif; ?>
			
		</div>
		<div class="sllw-row hide-if-no-js">
			<a class="sllw-add button-secondary"><img src="<?php echo plugins_url('images/add.png', __FILE__ )?>" /> <?php echo __("Add Item"); ?></a>
		</div>

		<input type="hidden" id="<?php echo $this->get_field_id('amount'); ?>" class="amount" name="<?php echo $this->get_field_name('amount'); ?>" value="<?php echo $amount ?>" />
		<input type="hidden" id="<?php echo $this->get_field_id('order'); ?>" class="order" name="<?php echo $this->get_field_name('order'); ?>" value="<?php echo implode(',',range(1,$amount)); ?>" />

		<div class="sllw-row">
			<label for="<?php echo $this->get_field_id('ordered'); ?>"><input type="radio" name="<?php echo $this->get_field_name('type'); ?>" value="ordered" id="<?php echo $this->get_field_id('ordered'); ?>" <?php checked($type, "ordered"); ?> />  <?php echo __("Ordered"); ?></label>
			<label for="<?php echo $this->get_field_id('unordered'); ?>"><input type="radio" name="<?php echo $this->get_field_name('type'); ?>" value="unordered" id="<?php echo $this->get_field_id('unordered'); ?>" <?php checked($type, "unordered"); ?> /> <?php echo __("Unordered"); ?></label>
		</div>

		<div class="sllw-row">
			<input type="checkbox" name="<?php echo $this->get_field_name('reverse'); ?>" id="<?php echo $this->get_field_id('reverse'); ?>" <?php checked($reverse, 'on'); ?> /> <label for="<?php echo $this->get_field_id('reverse'); ?>"><?php echo __("Reverse output order"); ?></label>
		</div>