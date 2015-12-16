<?php include'header.php';?>
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
<div class="page-content">

    <!-- BEGIN PAGE HEADER-->
    <h3 class="page-title">
    Top Batsman
    </h3>

    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->
    <div class="row">

            <div class="col-md-12">

                    <div class="portlet box blue">
                            <div class="portlet-title">
                                    <div class="caption">
                                            <i class="fa fa-gift"></i>Top Batsman
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
                                                            Team A</a>
                                                    </li>
                                                    <li>
                                                            <a href="#tab_1_1_2" data-toggle="tab">
                                                            Team B</a>
                                                    </li>

                                            </ul>
                                            <div class="tab-content">
                                                    <div class="tab-pane active" id="tab_1_1_1">
                                                     <table class="table table-striped table-bordered table-hover" id="sample_1">
                                                        <thead>
                                                        <tr>

                                                                <th>
                                                                         Batsmans Name
                                                                </th>
                                                                <th>
                                                                         Odds
                                                                </th>
                                                                <th>
                                                                         Total Bets
                                                                </th>
                                                                <th>
                                                                         Payout
                                                                </th>
                                                                <th>
                                                                         Action
                                                                </th>
                                                                <th>
                                                                         Action
                                                                </th>

                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                       <?php for($i=0; $i<8 ; $i++){ ?>
                                                        <tr class="odd gradeX">


                                                                <td>
                                                                        <input type="text"   name="batsman"  id="batsman"  value=""   />       

                                                                </td>
                                                                <td>
                                                                         <input type="text"   name="odds"  id="odds"     value=""   />	
                                                                </td>
                                                                <td>
                                                                        40
                                                                </td>
                                                                <td class="center">
                                                                         320
                                                                </td>
                                                                <td class="center ">

                                                                         <input type="button"   name="execute"  id="execute" class="execute btn"  value="Execute"   />
                                                                </td>
                                                                <td class="center ">

                                                                         <input type="button"   name="cancel"  id="cancel" class="cancel btn"  value="Cancel All Bets"   />
                                                                </td>
                                                        </tr>
                                                       <?php } ?>

                                                        </tbody>
                                                        </table>	
                                                    </div>
                                                    <div class="tab-pane" id="tab_1_1_2">
                                                           <table class="table table-striped table-bordered table-hover" id="sample_1">
                                                        <thead>
                                                        <tr>

                                                                <th>
                                                                         Batsman Name
                                                                </th>
                                                                <th>
                                                                         Odds
                                                                </th>
                                                                <th>
                                                                         Total Bets
                                                                </th>
                                                                <th>
                                                                         Payout
                                                                </th>
                                                                <th>
                                                                         Action
                                                                </th>
                                                                <th>
                                                                         Action
                                                                </th>

                                                        </tr>
                                                        </thead>
                                                        <tbody>

                                                   <?php for($i=0; $i<8 ; $i++){ ?>
                                                        <tr class="odd gradeX">


                                                                <td>
                                                                        <input type="text"   name="batsman"  id="batsman"  value=""   />       

                                                                </td>
                                                                <td>
                                                                         <input type="text"   name="odds"  id="odds"     value=""   />	
                                                                </td>
                                                                <td>
                                                                        40
                                                                </td>
                                                                <td class="center">
                                                                         320
                                                                </td>
                                                                <td class="center ">

                                                                         <input type="button"   name="execute"  id="execute" class="execute btn"  value="Execute"   />
                                                                </td>
                                                                <td class="center ">

                                                                         <input type="button"   name="cancel"  id="cancel" class="cancel btn"  value="Cancel All Bets"   />
                                                                </td>
                                                        </tr>
                                                       <?php } ?>


                                                        </tbody>
                                                        </table>
                                                    </div>
                                            
                                             
                                            
                                            </div>
                                                      <div class="row pull-right col-sm-6" >
                                                                           <div class="col-sm-4">
                                                                             <a href="javascript:;" class="btn red">
                                                                                Grand Total       
                                                                              </a>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                             <a href="javascript:;" class="btn green">
                                                                               Winning Amount
                                                                              </a>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                             <a href="javascript:;" class="btn blue">
                                                                                Profit/Loss
                                                                              </a>
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

thead {
background-color: #95a5a6;
}

</style>