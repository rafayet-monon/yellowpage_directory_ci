<h2>Edit Category List</h2>
                
                <table class="table table-bordered datatable" id="table-1">
	<thead>
		<tr>
			<th>Category Id</th>
			<th>Category Name</th>
			<th>Publication Status</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
            <?php 
                foreach($all_category as $v_category)
                {
            ?>	
            <tr class="odd gradeX">
			<td><?php echo $v_category->category_id;?></td>
			<td><?php echo $v_category->category_name;?></td>
			<td>
                            <?php 
                            if($v_category->publication_status=='1')
                            {
                                echo 'Published';
                            }
                            else{
                                echo 'Unpublished';
                            }
                            ?>
                        </td>
			<td>
                            <a href="<?php echo base_url()?>super_admin/edit_category/<?php echo $v_category->category_id ;?>" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="entypo-pencil"></i>
					Edit
				</a>
				
				<a href="<?php echo base_url()?>super_admin/delete_category/<?php echo $v_category->category_id ;?>" onclick="return checkDelete();" class="btn btn-danger btn-sm btn-icon icon-left">
					<i class="entypo-cancel"></i>
					Delete
				</a>
                                <?php 
                                if($v_category->publication_status=='1')
                                { 
                                ?>
                            <a href="<?php echo base_url();?>super_admin/unpublished_category/<?php echo $v_category->category_id; ?>">Unpublished</a>
                              <?php  }
                                else{
                                   ?>
                                    <a href="<?php echo base_url();?>super_admin/published_category/<?php echo $v_category->category_id; ?>">Published</a>
                                <?php 
                                
                                }
                            ?>
                        </td>
		</tr>
                <?php } ?>
	</tbody>
	<tfoot>
		<tr>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
                        <th></th>
		</tr>
	</tfoot>
</table>