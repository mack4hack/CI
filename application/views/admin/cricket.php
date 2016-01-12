<?php include'header.php';?>
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
<div class="page-content">

   <div class="btn-group">
            <button data-toggle="dropdown" class="btn yellow dropdown-toggle" type="button" id="btnGroupVerticalDrop5" aria-expanded="false"> Game Menu
                <i class="fa fa-angle-down"></i>
            </button>
            <ul aria-labelledby="btnGroupVerticalDrop5" role="menu" class="dropdown-menu">
                <li><a href="javascript:;"> First Ball </a></li>
                <li><a href="javascript:;"> First Over Runs </a></li>
                <li><a href="javascript:;"> First Over Runs </a></li>
                <li><a href="javascript:;"> First Wicket Method</a></li>
                <li><a href="javascript:;"> Top Batsman</a></li>
                <li><a href="javascript:;"> Top Bowler</a></li>
                <li><a href="javascript:;"> To Make Fifty</a></li>
                <li><a href="javascript:;"> To Make Hundred</a></li>
            </ul>
    </div>

   
    <div class="row"  id="game1">

            <div class="col-md-12">

                    <div class="portlet box blue">
                            <div class="portlet-title">
                                    <div class="caption">
                                            <i class="fa fa-gift"></i>First Ball
                                    </div>
                                    <div class="tools">
                                            <a href="javascript:;" class="collapse">
                                            </a>
                                    </div>
                            </div>
                            <div class="portlet-body">
                                    <div class="tabbable-custom nav-justified">
                                            <ul class="nav nav-tabs nav-justified">
                                                    <li class="active">
                                                            <a href="#tab_1_1_1" data-toggle="tab">
                                                            First Innings</a>
                                                    </li>
                                                    <li>
                                                            <a href="#tab_1_1_2" data-toggle="tab">
                                                            Second Innings</a>
                                                    </li>

                                            </ul>
                                            <div class="tab-content">
                                                    <div class="tab-pane active" id="tab_1_1_1">
                                                     <table class="table table-striped table-bordered table-hover" id="sample_1">
                                                        <thead>
                                                        <tr>

                                                                <th>
                                                                         Particular
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
                                                                        <input type="text"   name="event"  id="event"  value=""   />       

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
                                                                         particular
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
                                                                        <input type="text"   name="event"  id="event"  value=""   />       

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
    
    <div class="row" id="game2">

            <div class="col-md-12">

                    <div class="portlet box blue">
                            <div class="portlet-title">
                                    <div class="caption">
                                            <i class="fa fa-gift"></i>First Over Runs
                                    </div>
                                    <div class="tools">
                                            <a href="javascript:;" class="collapse">
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
                                                                         Runs
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
                                                       <?php for($i=0; $i<12 ; $i++){ ?>
                                                        <tr class="odd gradeX">


                                                                <td>
                                                                        <input type="text"   name="event"  id="event"  value=""   />       

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
                                                                        Runs
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

                                                   <?php for($i=0; $i<12 ; $i++){ ?>
                                                        <tr class="odd gradeX">


                                                                <td>
                                                                        <input type="text"   name="event"  id="event"  value=""   />       

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
    
    <div class="row"   id="game3">

            <div class="col-md-12">

                    <div class="portlet box blue">
                            <div class="portlet-title">
                                    <div class="caption">
                                            <i class="fa fa-gift"></i>First Wicket Method
                                    </div>
                                    <div class="tools">
                                            <a href="javascript:;" class="collapse">
                                            </a>
                                         
                                    </div>
                            </div>
                            <div class="portlet-body">
                                    <div class="tabbable-custom nav-justified">
                                            <ul class="nav nav-tabs nav-justified">
                                                    <li class="active">
                                                            <a href="#tab_1_1_1" data-toggle="tab">
                                                            First Innings</a>
                                                    </li>
                                                    <li>
                                                            <a href="#tab_1_1_2" data-toggle="tab">
                                                            Second Innings</a>
                                                    </li>

                                            </ul>
                                            <div class="tab-content">
                                                    <div class="tab-pane active" id="tab_1_1_1">
                                                     <table class="table table-striped table-bordered table-hover" id="sample_1">
                                                        <thead>
                                                        <tr>

                                                                <th>
                                                                         Particular
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
                                                                        <input type="text"   name="event"  id="event"  value=""   />       

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
                                                                         particular
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
                                                                        <input type="text"   name="event"  id="event"  value=""   />       

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

    <div class="row"  id="game4">

            <div class="col-md-12">

                    <div class="portlet box blue">
                            <div class="portlet-title">
                                    <div class="caption">
                                            <i class="fa fa-gift"></i>Top Batsman
                                    </div>
                                    <div class="tools">
                                            <a href="javascript:;" class="collapse">
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

    <div class="row"  id="game5">

            <div class="col-md-12">

                    <div class="portlet box blue">
                            <div class="portlet-title">
                                    <div class="caption">
                                            <i class="fa fa-gift"></i>Top Bowler
                                    </div>
                                    <div class="tools">
                                            <a href="javascript:;" class="collapse">
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
                                                                         Bowler Name
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
                                                       <?php for($i=0; $i<5 ; $i++){ ?>
                                                        <tr class="odd gradeX">


                                                                <td>
                                                                        <input type="text"   name="bowler"  id="bowler"  value=""   />       

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
                                                                         Bowler Name
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

                                                   <?php for($i=0; $i<5 ; $i++){ ?>
                                                        <tr class="odd gradeX">


                                                                <td>
                                                                        <input type="text"   name="bowler"  id="bowler"  value=""   />       

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
    
    <div class="row" id="game6">

            <div class="col-md-12">

                    <div class="portlet box blue">
                            <div class="portlet-title">
                                    <div class="caption">
                                            <i class="fa fa-gift"></i>To Make Fifty
                                    </div>
                                    <div class="tools">
                                            <a href="javascript:;" class="collapse">
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

    <div class="row" id="game7">

            <div class="col-md-12">

                    <div class="portlet box blue">
                            <div class="portlet-title">
                                    <div class="caption">
                                            <i class="fa fa-gift"></i>To Make Hundred
                                    </div>
                                    <div class="tools">
                                            <a href="javascript:;" class="collapse">
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
    
    
    
</div>
<!-- BEGIN CONTENT -->
</div>
<!-- END CONTENT -->


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