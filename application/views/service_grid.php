<div class="container">
    <?php $message = $this->session->userdata('message');
if ($message) {
    ?>
    <h4 class="alert_success"><?php echo $message; ?></h4>
    <?php
    $this->session->unset_userdata('message');
}
?>
        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title">
                    Manage Your Service
                </div>

                <div class="panel-options">
                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                    <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                    <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                </div>
            </div>

            <div class="panel-body">
                
<table class="table table-bordered datatable" id="table-1" ">
   
	<thead>
		<tr>
			<th>Company Name</th>
                        <th>Company Short Description</th>
			<th>Company Long Description</th>
                        <th>Contact Number</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
            <?php 
                foreach($all_service_by_user_id as $v_category)
                {
            ?>	
            <tr class="odd gradeX" style="color: black">
			<td><?php echo $v_category->company_name;?></td>
			<td><?php echo $v_category->service;?></td>
                        <td><?php echo $v_category->service_description;?></td>
                        <td><?php echo $v_category->mobile;?></td>
                        
			
			<td>
                            <a href="<?php echo base_url()?>welcome/edit_service/<?php echo $v_category->service_id ;?>" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="entypo-pencil"></i>
					Edit
				</a>
				
				<a href="<?php echo base_url()?>welcome/delete_service/<?php echo $v_category->service_id ;?>" class="btn btn-danger btn-sm btn-icon icon-left">
					<i class="entypo-cancel"></i>
					Delete
				</a>
                                
                               
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
</div>
            </div>
    </div>
            