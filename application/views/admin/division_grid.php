<h2>Edit Division List</h2>
                
                <table class="table table-bordered datatable" id="table-1">
	<thead>
		<tr>
			<th>division Id</th>
			<th>division Name</th>
			<th>Publication Status</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
            <?php 
                foreach($all_division as $v_division)
                {
            ?>	
            <tr class="odd gradeX">
			<td><?php echo $v_division->division_id;?></td>
			<td><?php echo $v_division->division_name;?></td>
			<td>
                            <?php 
                            if($v_division->publication_status=='1')
                            {
                                echo 'Published';
                            }
                            else{
                                echo 'Unpublished';
                            }
                            ?>
                        </td>
			<td>
                            <a href="<?php echo base_url()?>super_admin/edit_division/<?php echo $v_division->division_id ;?>" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="entypo-pencil"></i>
					Edit
				</a>
				
				<a href="<?php echo base_url()?>super_admin/delete_division/<?php echo $v_division->division_id ;?>" onclick="return checkDelete();" class="btn btn-danger btn-sm btn-icon icon-left">
					<i class="entypo-cancel"></i>
					Delete
				</a>
                                <?php 
                                if($v_division->publication_status=='1')
                                { 
                                ?>
                            <a href="<?php echo base_url();?>super_admin/unpublished_division/<?php echo $v_division->division_id; ?>">Unpublished</a>
                              <?php  }
                                else{
                                   ?>
                                    <a href="<?php echo base_url();?>super_admin/published_division/<?php echo $v_division->division_id; ?>">Published</a>
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