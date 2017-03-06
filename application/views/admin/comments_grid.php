<?php
$message = $this->session->userdata('message');
if ($message) {
    ?>
    <h4 class="alert_success"><?php echo $message; ?></h4>
    <?php
    $this->session->unset_userdata('message');
}
?>
<h2>Manage Comments</h2>
                
                <table class="table table-bordered datatable" id="table-1">
	<thead>
		<tr>
			<th>Comments</th>
			<th>Status</th>
                        
			<th>Action</th>
			<th>Publication Status</th>
		</tr>
	</thead>
                <tbody>
                    <?php
                    foreach ($all_comments as $v_comments) {
                        ?>
                        <tr>
                            <td><?php echo $v_comments->comments; ?></td>
                            <td>
                        <?php
                        if ($v_comments->publication_status != 0) {
                            echo 'Published';
                        } else {
                            echo 'Unpublished';
                        }
                        ?>
                            </td> 
                            <td>
                                <a href="<?php echo base_url(); ?>super_admin/delete_comment/<?php echo $v_comments->comments_id; ?>" onclick="return checkdelete();" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
					           Delete
								</a>
                                
                            </td> 
                            <td>
                                <?php
                                if ($v_comments->publication_status == 0) {
                                ?>
                                <a href="<?php echo base_url();?>super_admin/publish_comment/<?php echo $v_comments->comments_id?>">Publish</a>
                                    <?php
                                } else {
                                    ?>
                                <a href="<?php echo base_url();?>super_admin/unpublish_comment/<?php echo $v_comments->comments_id?>">UnPublish</a> 
                                <?php } ?>
                            </td>
                        </tr>
                            <?php } ?>
                </tbody> 
            </table>
        </div><!-- end of #tab1 -->

    </div><!-- end of .tab_container -->

</article><!-- end of content manager article -->