<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>
                Sr No
            </th>
            <th>
                Date
            </th>
            <th>
                Total Chips
            </th>
            <th>
                Total Payout
            </th>
            <th>
                Balance
            </th>
        </tr>
    </thead>
    <tbody>
        <?php if(!empty($data_weekly)  ) {
        $date = $_GET['date']; 
        $player_id = $_GET['player_id'];
        foreach($data_weekly as $dw){ $timeslot_id = $dw['timeslot_id'];   ?>
        <tr class="success">
            <td><?php echo $dw['sr_no']; ?></td>
            <td><a href="<?php echo base_url("/admin/accountsplayerbydrawtime?date=$date&player_id=$player_id&draw_time=$timeslot_id") ?>"><?php echo $dw['draw_time']; ?></a></td>
            <td><?php echo $dw['bet_amount']; ?></td>
            <td><?php echo $dw['payout']; ?></td>
            <td><?php echo $dw['balance']; ?></td>
        <!--<td><?php //echo $draw['profit']; ?></td>-->
        </tr>
        <?php    } ?>
        <tr><td>Total</td><td></td><td><?php echo $dw['total_bet']; ?></td><td><?php echo $dw['total_wins']; ?></td><td><?php echo $dw['total_balance']; ?></td></tr>
    <?php    }else{ ?>
        <tr class='active'><th style='text-align:center'; colspan='5'>No Records Found</th></tr>
        <?php  } ?>
    </tbody>
</table>