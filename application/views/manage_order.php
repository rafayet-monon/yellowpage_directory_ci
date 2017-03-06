<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Manage Order</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Manage Order</h2>
            
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
     

<div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
        <thead>
            <tr>
                <th>Order Id</th>
                <th>Customer Name</th>
                <th>Order Total</th>
               
               
                <th> Actions</th>
                
            </tr>
        </thead>   
        <tbody>
            <?php
                foreach($all_order as $v_order)
                {
            ?>
            <tr>
                <td><?php echo $v_order->order_id?></td>
                <td class="center"><?php echo $v_order->f_name.' '.$v_order->l_name?></td>
                <td class="center"><?php echo $v_order->order_total?> BDT</td>
                
              
             
                
                
                
            
                <td class="center">
                
                    
                    <a class="btn btn-info" href="<?php echo base_url();?>welcome/view_invoice/<?php echo $v_order->order_id?>" title="view">View
                        <i class="icon-zoom-in icon-white"></i>  
                                                              
                    </a>
                        
                    
                        
                        <a class="btn btn-success" href="<?php echo base_url();?>welcome/download/<?php echo $v_order->order_id?>" title="download">Download
                        <i class="icon-download-alt icon-white"></i>  
                                                              
                    </a>
                        
                    
                     
                </td>
            </tr>
                <?php } ?>
        </tbody>
    </table>            
</div>
