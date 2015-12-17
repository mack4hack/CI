<?php include'header.php';?>
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <h3 class="page-title">
        Accounts
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
                        <div class="tabbable-custom nav-justified">
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active">
                                    <a href="#tab_1_1_1" data-toggle="tab">
                                    Daily </a>
                                </li>
                                <li>
                                    <a href="#tab_1_1_2" data-toggle="tab">
                                    Weekly </a>
                                </li>
                                <li>
                                    <a href="#tab_1_1_3" data-toggle="tab">
                                    Monthly </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_1_1_1">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Sr No
                                                </th>
                                                <th>
                                                    Dealer Code
                                                </th>
                                                <th>
                                                    Credit
                                                </th>
                                                <th>
                                                    Debit
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
                                            <?php if(!empty($data_daily)  ) {
                                            foreach($data_daily as $dd){  ?>
                                            <tr class="success">
                                                <td><?php echo $dd['sr_no']; ?></td>
                                                <td><?php echo $dd['user_code']; ?></td>
                                                <td><?php echo $dd['credited']; ?></td>
                                                <td><?php //echo $dd['credit']; ?></td>
                                                <td><?php echo $dd['commission']; ?></td>
                                                <td><?php //echo $dd['balance']; ?></td>
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
                                <div class="tab-pane" id="tab_1_1_2">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                        	<tr><th colspan="6">Week : <?php if(!empty($data_weekly)  ) {
                                            foreach($data_weekly as $dw){ echo $dw['week']; break;}} ?></th></tr>
                                            <tr>
                                                <th>
                                                    Sr No
                                                </th>
                                                <th>
                                                    Dealer Code
                                                </th>
                                                <th>
                                                    Credit
                                                </th>
                                                <th>
                                                    Debit
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
                                                <td><?php echo $dw['credited']; ?></td>
                                                <td><?php //echo $dd['credit']; ?></td>
                                                <td><?php echo $dw['commission']; ?></td>
                                                <td><?php //echo $dd['balance']; ?></td>
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
                                <div class="tab-pane" id="tab_1_1_3">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                        	<tr><th colspan="6">Month : <?php if(!empty($data_monthly)  ) {
                                            foreach($data_monthly as $dm){ echo $dm['month']; break;}} ?></th></tr>
                                            <tr>
                                                <th>
                                                    Sr No
                                                </th>
                                                <th>
                                                    Dealer Code
                                                </th>
                                                <th>
                                                    Credit
                                                </th>
                                                <th>
                                                    Debit
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
                                            <?php if(!empty($data_monthly)  ) {
                                            foreach($data_monthly as $dm){  ?>
                                            <tr class="success">
                                                <td><?php echo $dm['sr_no']; ?></td>
                                                <td><?php echo $dm['user_code']; ?></td>
                                                <td><?php echo $dm['credited']; ?></td>
                                                <td><?php //echo $dd['credit']; ?></td>
                                                <td><?php echo $dm['commission']; ?></td>
                                                <td><?php //echo $dd['balance']; ?></td>
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