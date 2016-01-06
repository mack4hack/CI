<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>
                Sr No
            </th>
            <th>
                Transaction No.
            </th>
            <th>
                Total Chips
            </th>
            <th>
                Total Payout
            </th>
            <!-- <th>
                Balance
            </th> -->
        </tr>
    </thead>
    <tbody>
        <?php if(!empty($data_weekly)  ) {
            $draw_time = $_GET['draw_time']; 
            $date = $_GET['date']; 
        foreach($data_weekly as $dw){ $transaction_id = $dw['transaction_id']; ?>
        <tr class="success">
            <td><?php echo $dw['sr_no']; ?></td>
            <td><a href="<?php echo base_url("/admin/accountsplayerbytransactionid?transaction_id=$transaction_id&date=$date&draw_time=$draw_time") ?>"> <?php echo $dw['transaction_id']; ?></a></td>
            <td><?php echo $dw['bet_amount']; ?></td>
            <td><?php echo $dw['payout']; ?></td>
            <!-- <td><?php echo $dw['balance']; ?></td> -->
        <!--<td><?php //echo $draw['profit']; ?></td>-->
        </tr>
        <?php    } ?>
        <tr><td>Total</td><td></td><td><?php echo $dw['total_bet']; ?></td><td><?php echo $dw['total_wins']; ?></td></tr>
    <?php    }else{ ?>
        <tr class='active'><th style='text-align:center'; colspan='4'>No Records Found</th></tr>
        <?php  } ?>
    </tbody>
</table>