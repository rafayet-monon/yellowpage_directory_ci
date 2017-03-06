<h2>Manage Service List</h2>
                
                <table class="table table-bordered datatable" id="table-1">
	<thead>
		<tr>
			<th>Company Name</th>
                        <th>Company Short Description</th>
			<th>Company Long Description</th>
                        <th>Contact Number</th>
			<th>Publication Status</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
            <?php 
                foreach($all_company as $v_category)
                {
            ?>	
            <tr class="odd gradeX" style="color: black">
			<td><?php echo $v_category->company_name;?></td>
			<td><?php echo $v_category->service;?></td>
                        <td><?php echo $v_category->company_description;?></td>
                        <td><?php echo $v_category->contact_number;?></td>
                        
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
                      
				<a href="<?php echo base_url()?>super_admin/delete_company/<?php echo $v_category->company_id ;?>" class="btn btn-danger btn-sm btn-icon icon-left">
					<i class="entypo-cancel"></i>
					Delete
				</a>
                                <?php
                                if ($v_category->publication_status == 0) {
                                ?>
                                <a href="<?php echo base_url();?>super_admin/publish_company/<?php echo $v_category->company_id?>">Publish</a>
                                    <?php
                                } else {
                                    ?>
                                <a href="<?php echo base_url();?>super_admin/unpublish_company/<?php echo $v_category->company_id?>">Unpublish</a> 
                                <?php } ?>
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
