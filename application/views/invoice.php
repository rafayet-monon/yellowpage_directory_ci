
<script type="text/css" >

body,td,input,select {
    font-family: Tahoma;
    font-size: 11px;
    color: #000000;
}

form {
    margin: 0px;
}

a {
    color: #000000;
}

#wrapper {
    width: 600px;
}

#invoicetoptables {
    width: 100%;
    background-color: #cccccc;
    border-collapse: seperate;
}

td#invoicecontent {
    background-color: #ffffff;
    color: #000000;
}

.unpaid {
    font-size: 16px;
    color: #cc0000;
    font-weight: bold;
}

.paid {
    font-size: 16px;
    color: #779500;
    font-weight: bold;
}

.refunded {
    font-size: 16px;
    color: #224488;
    font-weight: bold;
}

.cancelled {
    font-size: 16px;
    color: #cccccc;
    font-weight: bold;
}

.collections {
    font-size: 16px;
    color: #ffcc00;
    font-weight: bold;
}

#invoiceitemstable {
    width: 100%;
    background-color: #cccccc;
    border-collapse: seperate;
}

td#invoiceitemsheading {
    background-color: #efefef;
    color: #000000;
    font-weight: bold;
    text-align: center;
}

td#invoiceitemsrow {
    background-color: #ffffff;
    color: #000000;
}

.creditbox {
    border: 1px dashed #cc0000;
    font-weight: bold;
    background-color: #FBEEEB;
    text-align: center;
    width: 100%;
    padding: 10px;
    color: #cc0000;
    margin-left: auto;
    margin-right: auto;
}
</script>



<table width="100%" id="wrapper" cellspacing="1" cellpadding="10" bgcolor="#cccccc" align="center"><tbody><tr><td bgcolor="#ffffff">

<table width="100%"><tbody><tr><td width="50%">



<strong> Cash On Delivery </strong>

</td></tr></tbody></table>

<br>


<table width="100%" id="invoicetoptables" cellspacing="0"><tbody><tr>
<td colspan="2" id="invoicecontent" style="border:1px solid #cccccc">

<table width="100%" height="100" cellspacing="0" cellpadding="10" id="invoicetoptables"><tbody><tr>
  <td width="50%" valign="top" id="invoicecontent" style="border:1px solid #cccccc">

<strong>Invoice To</strong><br>
<strong>Name:</strong><?php echo $billing_info->f_name.' '.$billing_info->l_name;?><br>
<strong>Email:</strong><?php echo $billing_info->email_id;?> <br>
<strong>Contact Number:</strong><?php echo $billing_info->mobile_number;?>

</td>
      <td width="50%" valign="top" id="invoicecontent" style="border:1px solid #cccccc">

<strong>Ship To</strong><br>
<?php echo $shipping_info->company_name;?><br><?php echo $shipping_info->full_name;?><br>
<?php echo $shipping_info->address;?> <br>
<?php echo $shipping_info->city;?>, <?php echo $shipping_info->zip_code;?><br>


</td>
</tr>
</tbody></table>

</td>
<!--
<td width="50%" id="invoicecontent" style="border:1px solid #cccccc;border-left:0px;">
<table width="100%" height="100" cellspacing="0" cellpadding="10" id="invoicetoptables">
<tr>
<td id="invoicecontent" valign="top" style="border:1px solid #cccccc">
<strong>Pay To</strong><br />

</td></tr></table>
</td>
-->
</tr></tbody></table>

<p><strong>Invoice #<?php echo $order_info->order_id?></strong><br>
Invoice Date: <?php echo $order_info->order_date_time?><br>
Due Date: <?php echo date('Y-m-d', strtotime($order_info->order_date_time. ' + 7 day'))?></p>
<br><br><br>

</td></tr></tbody></table>
 <table border="1" width="80%">
            <thead>
              <tr>
                <td class="name">Product Name</td>
                
                <td class="quantity">Quantity</td>
                <td class="price">Unit Price</td>
                <td class="total">Total</td>
              </tr>
            </thead>
            <tbody>
                <?php
//                echo '<pre>';
//                print_r($cart_contents);
//                exit();
                $total=0;
                foreach($cart_contents as $v_contents )
                {
                ?>
              <tr>
                  
                <td class="name"><a href="product.html"><?php echo $v_contents->product_name?></a> 
                  <div> </div></td>
                
                <td class="quantity">
                    <?php echo $v_contents->product_sales_quantity?>
                </td>
                <td class="price">BDT <?php echo $v_contents->product_price?></td>
                <td class="total">BDT <?php 
                $u_total=$v_contents->product_price * $v_contents->product_sales_quantity;
                echo $u_total?></td>
              </tr>
                <?php 
                $total=$total+$u_total;
                
                } ?>
              
            </tbody>
          </table>
 <table width="80%" cellpadding="10px" border="1">
            <tbody>
              <tr>
                <td ></td>
                <td ></td>
                <td align="right"><b>Sub-Total:</b></td>
                <td class="right numbers">BDT <?php echo $total;?></td>
              </tr>
              <tr>
                <td ></td>
                <td ></td>
                <td align="right"><b>VAT 15%:</b></td>
                <td class="right numbers">
                    <?php
                    $vat=15*$total/100;
                    echo 'BDT '.$vat;
                    
                    ?>
                </td>
              </tr>
              <tr>
               <td ></td>
                <td ></td>
                <td align="right"><b>Grand Total:</b></td>
                <td class="right numbers_total">BDT <?php 

               echo $total+$vat?></td>
              </tr>
            </tbody>
          </table>
