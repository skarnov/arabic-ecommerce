<!DOCTYPE html>

<html>
    <head>
        <title>Invoice</title>
    </head>
    <body style="margin:0px 25px;">
        <table style="width:100%">
            <tr>
                <td width="58%" style="color:black; font-size:18px">Invoice ID: <?php echo '#INV' . '' . $invoice_info->order_id; ?></td>
                <td width="42%" style="color: #6B1FB5; font-size: 9px;"></td>
            </tr>
        </table>
        <table style="width:100%">
            <tr>
                <td colspan="2" style="font-size:14px" >Customer Info</td>
            </tr>
            <tr>
                <td width="8%" style="color:black; font-size:9px">Name:</td>
                <td width="50%" style="color:black; font-size:9px"><?php echo $invoice_info->first_name.' '.$invoice_info->last_name; ?></td>
            </tr>
            <tr>
                <td style="color:black; font-size:9px">Phone: </td>
                <td style="color:black; font-size:9px"><?php echo $invoice_info->phone; ?></td>
            </tr>
            <tr>
                <td style="color:black; font-size:9px">Full Address:</td>
                <td style="color:black; font-size:9px"><?php echo $invoice_info->address_1; ?></td>
            </tr>	
        </table>
        <table style="width:100%">
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
        </table>
        <table style="border-collapse: collapse; border: 1px solid black; width:100%">
            <tr>
                <td style="border: 1px solid black;">Product Name</td>
                <td style="border: 1px solid black;">Quantity</td>
                <td style="border: 1px solid black;">Price</td>
                <td style="border: 1px solid black;">Subtotal</td>
            </tr>
            <?php
            $contents = $this->cart->contents();
            foreach ($contents as $cart_value) {
                ?>
                <tr>
                    <td style="border: 1px solid black;"><?php echo $cart_value['name'].' - '.$cart_value['options']['colour']; ?></td>	
                    <td style="border: 1px solid black;"><?php echo $cart_value['qty']; ?></td>
                    <td style="border: 1px solid black;"><?php echo $cart_value['price']; ?></td>
                    <td style="border: 1px solid black;"><strong> <?php echo $cart_value['subtotal']; ?></strong></td>
                </tr>
                <?php
            }
            ?>
        </table>
        <div>
            <h2>Total: <?php echo $this->cart->total(); ?></h2>
        </div>
    </body>
</html>