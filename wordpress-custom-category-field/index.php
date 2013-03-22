<?php
add_action('category_edit_form_fields','category_edit_form_fields');
//add_action('category_edit_form', 'category_edit_form');
add_action('category_add_form_fields','category_add_form_fields');
//add_action('category_add_form','category_add_form');




function category_add_form_fields () {
?>
   <div class="form-field form-required">
	<label for="tag-name">Name ADD</label>
	<input name="cat_meta_np" id="cat_meta_np" type="text" value="" size="40" aria-required="true">
	<p>The name is how it appears on your site.</p>
 </div>
        <?php 
    }

function category_edit_form_fields ($id) {
	print_r($id);
	
?>
   <tr class="form-field form-required">
		<tr class="form-field form-required">
			<th scope="row" valign="top"><label for="name">Name EDIT</label>
			</th>
			<td><input name="cat_meta_np" id="cat_meta_np" type="text" value="" size="40" aria-required="true">
			<p class="description">The name is how it appears on your site.</p></td>
		</tr>
        <?php 
    }

?>