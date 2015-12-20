<?php include'header.php';?>
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <h3 class="page-title">
        Player Account Of Transaction
        </h3>
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN ACCORDION PORTLET-->
                <!-- END ACCORDION PORTLET-->
                <div class="portlet box blue">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i>Transaction No : <?php  echo $_GET['transaction_id']; ?>
                        </div>
                        <div class="tools">
                            <a href="javascript:;" class="collapse">
                            </a>
                            <a href="#portlet-config" data-toggle="modal" class="config">
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class=" nav-justified">
                            
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_1_1_1">
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
                                            foreach($data_weekly as $dw){  ?>
                                            <tr class="success">
                                                <td><?php echo $dw['sr_no']; ?></td>
                                                <td><?php echo $dw['transaction_id']; ?></td>
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
                                    <div class="row">
                                        <div class="col-md-12" >
                                        <div class="portlet light bordered">
                                        <div class="portlet-title">
                                        <div class="caption">
                                        <i class="icon-bar-chart font-green-haze"></i>
                                        <span class="caption-subject bold uppercase font-green-haze">Single Digit First </span>
                                        <!-- <span class="caption-subject bold uppercase font-red-haze"  > ( <?php  echo $second_bets;  ?> ) </span> -->
                                        </div>
                                        <div class="caption" style="float:right;">

                                        <!-- <span class="caption-subject bold uppercase font-green-haze"> Bet Amount</span> -->
                                        <!-- <span class="caption-subject bold uppercase font-red-haze"  > ( <?php  echo $bets_and_payout['bet_amount_second'];  ?> ) </span> -->
                                        <!--                                                                            <span class="caption-subject bold uppercase font-green-haze"> Payout</span>
                                        <span class="caption-subject bold uppercase font-red-haze"  > ( <?php  echo $bets_and_payout['payout_second'];  ?> ) </span>-->
                                        </div>


                                        </div>
                                        <table class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                        <th>
                                        Digit
                                        </th>
                                        <?php for($i = 0 ;$i <= 9;$i++){ ?>

                                        <th><?php echo $i ;?></th>
                                        <?php   }?>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="active">
                                        <td>
                                        Total Chips
                                        </td>
                                        <?php for($i = 0 ; $i <= 9 ; $i++){ 
                                        $count = false; 
                                        foreach ($data_weekly as $dw ) { 
                                        if($i == $dw['first_digit'] ){ 
                                        $count = true; ?>
                                        <td><?php echo $dw['bet_amount_first']; ?></td>

                                        <?php } 

                                        }
                                        if($count == false){ ?>

                                        <th></th>

                                        <?php }

                                        }  ?>

                                        </tr>
                                        <tr class="success">
                                        <td>
                                        Total Payouts
                                        </td>
                                        <?php for($i = 0 ; $i <= 9 ; $i++){ 
                                        $count = false; 
                                        foreach ($data_weekly as $dw ) { 
                                        if($i == $dw['first_digit'] ){ 
                                        $count = true; ?>
                                        <td><?php echo $dw['win_amount_first']; ?></td>

                                        <?php } 

                                        }
                                        if($count == false){ ?>

                                        <th></th>

                                        <?php }

                                        }  ?>

                                        </tr>
                                        </tbody>
                                        </table>    

                                        </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12" >
                                        <div class="portlet light bordered">
                                        <div class="portlet-title">
                                        <div class="caption">
                                        <i class="icon-bar-chart font-green-haze"></i>
                                        <span class="caption-subject bold uppercase font-green-haze">Single Digit Second </span>
                                        <!-- <span class="caption-subject bold uppercase font-red-haze"  > ( <?php  echo $second_bets;  ?> ) </span> -->
                                        </div>
                                        <div class="caption" style="float:right;">

                                        <!-- <span class="caption-subject bold uppercase font-green-haze"> Bet Amount</span> -->
                                        <!-- <span class="caption-subject bold uppercase font-red-haze"  > ( <?php  echo $bets_and_payout['bet_amount_second'];  ?> ) </span> -->
                                        <!--                                                                            <span class="caption-subject bold uppercase font-green-haze"> Payout</span>
                                        <span class="caption-subject bold uppercase font-red-haze"  > ( <?php  echo $bets_and_payout['payout_second'];  ?> ) </span>-->
                                        </div>


                                        </div>
                                        <table class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                        <th>
                                        Digit
                                        </th>
                                        <?php for($i = 0 ;$i <= 9;$i++){ ?>

                                        <th><?php echo $i ;?></th>
                                        <?php   }?>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="active">
                                        <td>
                                        Total Chips
                                        </td>
                                        <?php for($i = 0 ; $i <= 9 ; $i++){ 
                                        $count = false; 
                                        foreach ($data_weekly as $dw ) { 
                                        if($i == $dw['second_digit'] ){ 
                                        $count = true; ?>
                                        <td><?php echo $dw['bet_amount_second']; ?></td>

                                        <?php } 

                                        }
                                        if($count == false){ ?>

                                        <th></th>

                                        <?php }

                                        }  ?>

                                        </tr>
                                        <tr class="success">
                                        <td>
                                        Total Payouts
                                        </td>
                                        <?php for($i = 0 ; $i <= 9 ; $i++){ 
                                        $count = false; 
                                        foreach ($data_weekly as $dw ) { 
                                        if($i == $dw['second_digit'] ){ 
                                        $count = true; ?>
                                        <td><?php echo $dw['win_amount_second']; ?></td>

                                        <?php } 

                                        }
                                        if($count == false){ ?>

                                        <th></th>

                                        <?php }

                                        }  ?>

                                        </tr>
                                        </tbody>
                                        </table>    

                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTAINER-->
    </div>
    <!-- BEGIN CONTENT -->
</div>
<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<?php include'footer.php';?>
<!-- END FOOTER -->
<script type="text/javascript" >
$(document).ready(function() {
Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
});
</script>
<style type="text/css">
@media print {
    .print {
        background-color: white;
        height: 100%;
        width: 100%;
        position: fixed;
        top: 0;
        left: 0;
        margin: 0;
        padding: 15px;
        font-size: 14px;
        line-height: 18px;
    }
}
</style>