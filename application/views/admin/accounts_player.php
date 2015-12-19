<?php include'header.php';?>
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <h3 class="page-title">
        Player Account Of Week
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
                            <i class="fa fa-gift"></i>Summary
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
                                                    Date
                                                </th>
                                                <th>
                                                    Total Chips
                                                </th>
                                                <th>
                                                    Total Payout
                                                </th>
                                                <th>
                                                    Commission
                                                </th>
                                                <th>
                                                    Balance
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(!empty($data_weekly)  ) {
                                            foreach($data_weekly as $dw){  ?>
                                            <tr class="success">
                                                <td><?php echo $dw['sr_no']; ?></td>
                                                <td><?php echo $dw['user_code']; ?></td>
                                                <td><?php echo $dw['bet_amount']; ?></td>
                                                <td><?php echo $dw['payout']; ?></td>
                                                <td><?php echo $dw['commission']; ?></td>
                                                <td><?php echo $dw['balance']; ?></td>
                                            <!--<td><?php //echo $draw['profit']; ?></td>-->
                                            </tr>
                                            <?php    } ?>
                                            <tr><td colspan="6">Total</td></tr>
                                        <?php    }else{ ?>
                                            <tr class='active'><th style='text-align:center'; colspan='6'>No Records Found</th></tr>
                                            <?php  } ?>
                                        </tbody>
                                    </table>
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