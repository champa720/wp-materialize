<p>
    <label for="<?php echo $this->get_field_id('select_1'); ?>">Background Color</label>
    <input class="widefat"
           id="<?php echo $this->get_field_id( 'select_1' ); ?>" 
           name="<?php echo $this->get_field_name( 'select_1' ); ?>" 
           type="text" 
           value="<?php echo $select_1 ?>"
           placeholder="materialize-red"
           />
</p>

<p>
    <label for="<?php echo $this->get_field_id('select_2'); ?>">Optional Shade</label>
    <input class="widefat"
           id="<?php echo $this->get_field_id( 'select_2' ); ?>" 
           name="<?php echo $this->get_field_name( 'select_2' ); ?>" 
           type="text" 
           value="<?php echo $select_2 ?>"
           placeholder="lighten-3"
           />
</p>

<p>
    <label for="<?php echo $this->get_field_id('title'); ?>">Title</label>
    <input class="widefat"
           id="<?php echo $this->get_field_id( 'title' ); ?>" 
           name="<?php echo   $this->get_field_name( 'title' ); ?>" 
           type="text" 
           value="<?php echo $title ?>"   
           />
</p>

<p>
    <label for="<?php echo $this->get_field_id('textarea'); ?>">Textarea</label>
    <textarea class="widefat"
              rows="5"
              id="<?php echo $this->get_field_id('textarea'); ?>" 
              name="<?php echo $this->get_field_name('textarea'); ?>"
              type="text" 
              value="<?php echo $textarea ?>"
              ><?php echo $textarea ?>
    </textarea>
</p>

<p>
    <label for="<?php echo $this->get_field_id('link_1'); ?>">Link 1 Text</label>
    <input class="widefat"
           id="<?php echo $this->get_field_id( 'link_1' ); ?>" 
           name="<?php echo  $this->get_field_name( 'link_1' ); ?>" 
           type="text" 
           value="<?php echo $link_1 ?>" 
           />
</p>

<p>
    <label for="<?php echo $this->get_field_id('link_1_url'); ?>">Link 1 URL</label>
    <input class="widefat"
           id="<?php echo $this->get_field_id( 'link_1_url' ); ?>" 
           name="<?php echo  $this->get_field_name( 'link_1_url' ); ?>" 
           type="text" 
           value="<?php echo $link_1_url ?>" 
           />
</p>

<p>
    <label for="<?php echo $this->get_field_id('link_2'); ?>">Link 2 Text</label>
    <input class="widefat"
           id="<?php echo $this->get_field_id( 'link_2' ); ?>" 
           name="<?php echo  $this->get_field_name( 'link_2' ); ?>" 
           type="text" 
           value="<?php echo $link_2 ?>" 
           />
</p>

<p>
    <label for="<?php echo $this->get_field_id('link_2_url'); ?>">Link 2 URL</label>
    <input class="widefat"
           id="<?php echo $this->get_field_id( 'link_2_url' ); ?>" 
           name="<?php echo  $this->get_field_name( 'link_2_url' ); ?>" 
           type="text" 
           value="<?php echo $link_2_url ?>" 
           />
</p>