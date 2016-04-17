<!-- This file is used to markup the administration form of the widget. -->
<p><label for="<?php echo $this->get_field_id('select_1'); ?>">Background Color</label>
        <select class="widefat" 
                id="<?php echo $this->get_field_id('select_1'); ?>" 
                name="<?php echo $this->get_field_name('select_1'); ?>"
                >
            <?php $options = array(
                    'materialize-red', 
                    'red', 
                    'pink', 
                    'purple',
                    'deep-purple', 
                    'indigo', 
                    'blue',
                    'light-blue', 
                    'cyan', 
                    'teal',
                    'green', 
                    'light-green', 
                    'lime',
                    'yellow', 
                    'amber', 
                    'orange', 
                    'deep-orange', 
                    'brown', 
                    'grey', 
                    'blue-grey', 
                    'black', 
                    'white', 
                    'transparent'
                    );
                foreach ($options as $option) { echo 
                    '<option value="' . $option . '" id="' . $option . '"', 
                        $select   == $option ? ' selected="selected"' : '',
                        '>',
                        $option,
                    '</option>';
                }
            ?>
        </select></p>

<p><label for="<?php echo $this->get_field_id('select_2'); ?>">Optional Shade</label>
        <select class="widefat" 
                id="<?php echo $this->get_field_id('select_2'); ?>" 
                name="<?php echo $this->get_field_name('select_2'); ?>"
                >
            <?php $options = array(
                    'lighten-5', 
                    'lighten-4', 
                    'lighten-3', 
                    'lighten-2', 
                    'lighten-1',                    
                    '', 
                    'darken-1', 
                    'darken-2', 
                    'darken-3', 
                    'darken-4',
                    'accent-1', 
                    'accent-2',  
                    'accent-3',
                    'accent-4',
                    );
                foreach ($options as $option) { echo 
                    '<option value="' . $option . '" id="' . $option . '"', 
                        $select   == $option ? ' selected="selected"' : '',
                        '>',
                        $option,
                    '</option>';
                }
            ?>
        </select></p>

<div class="accordion">
    <h5 class="toggle">Front</h5>
    <div style="display:none;">
        <p><label for="<?php echo $this->get_field_id('title'); ?>">Title</label>
        <input class="widefat"
               id="<?php echo $this->get_field_id( 'title' ); ?>" 
               name="<?php echo   $this->get_field_name( 'title' ); ?>" 
               type="text" 
               value="<?php echo $title ?>"   
               /></p>

        <p><label for="<?php echo $this->get_field_id('textarea'); ?>">Textarea</label>
        <textarea class="widefat"
                  rows="5"
                  id="<?php echo $this->get_field_id('textarea'); ?>" 
                  name="<?php echo $this->get_field_name('textarea'); ?>"
                  type="text" 
                  value="<?php echo $textarea ?>"><?php echo $textarea ?>
        </textarea></p>

        <p><label for="<?php echo $this->get_field_id('link_1'); ?>">Button Text</label>
        <input class="widefat"
               id="<?php echo $this->get_field_id( 'link_1' ); ?>" 
               name="<?php echo  $this->get_field_name( 'link_1' ); ?>" 
               type="text" 
               value="<?php echo $link_1 ?>" 
               /></p>

        <p><label for="<?php echo $this->get_field_id('link_1_url'); ?>">Modal ID</label>
        <input class="widefat"
               id="<?php echo $this->get_field_id( 'link_1_url' ); ?>" 
               name="<?php echo  $this->get_field_name( 'link_1_url' ); ?>" 
               type="text" 
               value="<?php echo $link_1_url ?>" 
               /></p>
    </div>

    <h5 class="toggle">Back</h5>
    <div style="display:none;">
        <p><label for="<?php echo $this->get_field_id('modal_title'); ?>">Modal Title</label>
            <input class="widefat"
                   id="<?php echo $this->get_field_id( 'modal_title' ); ?>" 
                   name="<?php echo   $this->get_field_name( 'modal_title' ); ?>" 
                   type="text" 
                   value="<?php echo $modal_title ?>"   
                   /></p>

        <p><label for="<?php echo $this->get_field_id('modal_textarea'); ?>">Modal Textarea</label>
            <textarea class="widefat"
                      rows="5"
                      id="<?php echo $this->get_field_id('modal_textarea'); ?>" 
                      name="<?php echo $this->get_field_name('modal_textarea'); ?>"
                      type="text" 
                      value="<?php echo $modal_textarea ?>"><?php echo $modal_textarea ?>
            </textarea></p>

        <p><label for="<?php echo $this->get_field_id('modal_link_2'); ?>">Modal Button Text</label>
            <input class="widefat"
                   id="<?php echo $this->get_field_id( 'modal_link_2' ); ?>" 
                   name="<?php echo  $this->get_field_name( 'modal_link_2' ); ?>" 
                   type="text" 
                   value="<?php echo $modal_link_2 ?>" 
                   /></p>

        <p><label for="<?php echo $this->get_field_id('modal_link_2_url'); ?>">Modal Button URL</label>
            <input class="widefat"
                   id="<?php echo $this->get_field_id( 'modal_link_2_url' ); ?>" 
                   name="<?php echo  $this->get_field_name( 'modal_link_2_url' ); ?>" 
                   type="text" 
                   value="<?php echo $modal_link_2_url ?>" 
                   /></p>
    </div>
</div>
