<?php require_once("../private/initialize.php");?>
<?php 
require_student_login();
$id=$session->student_id;
$student=Student::find_by_id($id);

$matnumber=$session->matnumber;
$student_result=GpObject::find_by_matnumber($matnumber);
?>
<?php include(SHARED_PATH . '/include_header.php');?>
<body>

   
    <div class="container">
    <div class="row "> 
        <div class="col-md-6 col-lg-6 col-sm-6">
            <?php  //echo display_errors($errors);?>
        </div>
</div>
</div>
        <div class="container-fluid">
    <div class="row "> 
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="card">
            <div class="card-header">
            <div class="card-subtitle">
            <h4 class="text-success text-center"><?php echo  h($student->name); ?></h4>
            <h5><a class="text-info"  href="">Powered by Rexsteroxy</a></h5>
                <div id="attributes">
                <table class="table table-striped table-bordered table-hover table-condensed text-center">
                    <tr>
                        <th>Institution</th>
                        <th>Department</th>
                    </tr>
                    <tr>
                        <td><?php  echo h($student->institution); ?></td>
                        <td><?php echo h($student->department); ?></td>
                    </tr>
                    <tr>
                        <th>Matnumber</th>
                        <th>Email</th> 
                    </tr>
                    <tr>
                        <td><?php echo h($student->matnumber); ?></td>
                        <td><?php echo h($student->email);?></td>
                        
                    </tr>
                </table>
                <table class="table table-striped table-bordered table-hover table-condensed">
                    <tr>
                        <th>Firstsemester(YEAR 1)</th>
                        <th>SECOND SEMESTER (YEAR 1)</th>
                        <th>CGP(YEAR 1)</th>
                        
                    </tr>
                    <tr class="text-info">
                        <td><?php  if(!empty($student_result->firstone)){
                            echo h($student_result->firstone)."<a href=\"view/index.php\">(Click To View Details)</a>";
                        }else{echo "No Result";}  ?></td>
                        <td><?php   if(!empty($student_result->secondone)){
                            echo h($student_result->secondone)."<a href=\"view/view2.php\">(Click To View Details)</a>";
                        }else{echo "No Result" ;} ?></td>
                        <td><?php if(!empty($student_result->firstone AND $student_result->secondone)){
                        $cgp_1=($student_result->firstone +$student_result->secondone )/2;
                        echo number_format($cgp_1,2);$h=1;
                        }else{$cgp_1=0;echo "No Result" ;$h=0;} 
                        ?></td> 
                        
                    </tr>
                </table>
                <table class="table table-striped table-bordered table-hover table-condensed">
                    <tr>
                        <th>Firstsemester(YEAR 2)</th>
                        <th>SECOND SEMESTER (YEAR 2)</th>
                        <th>CGP(YEAR 2)</th>
                        
                        <tr class="text-info">
                        <td><?php  if(!empty($student_result->firsttwo)){
                           echo h($student_result->firsttwo)."<a href=\"view/view3.php\">(Click To View Details)</a>";
                        }else{echo "No Result" ;}  ?></td>
                        <td><?php   if(!empty($student_result->secondtwo)){
                            echo h($student_result->secondtwo)."<a href=\"view/view4.php\">(Click To View Details)</a>";
                        }else{echo "No Result" ;} ?></td>
                        <td><?php if(!empty($student_result->firsttwo AND $student_result->secondtwo)){
                        $cgp_2=($student_result->firsttwo +$student_result->secondtwo)/2 ;
                        echo number_format($cgp_2,2);$h2=1;
                        }else{$cgp_2=0;echo "No Result" ;$h2=0;}
                        ?></td>
                        
                    </tr>
                </table>
                <table class="table table-striped table-bordered table-hover table-condensed">
                    <tr>
                        <th>Firstsemester(YEAR 3)</th>
                        <th>SECOND SEMESTER (YEAR 3)</th>
                        <th>CGP(YEAR 3)</th>
                        
                        
                    </tr>
                    <tr class="text-info">
                        <td><?php  if(!empty($student_result->firstthree)){
                            echo h($student_result->firstthree)."<a href=\"view/view5.php\">(Click To View Details)</a>";
                        }else{echo "No Result" ;}  ?></td>
                        <td><?php   if(!empty($student_result->secondthree)){
                            echo h($student_result->secondthree)."<a href=\"view/view6.php\">(Click To View Details)</a>";
                        }else{echo "No Result" ;} ?></td>
                        <td><?php if(!empty($student_result->firstthree AND $student_result->secondthree)){
                        $cgp_3=($student_result->firstthree + $student_result->secondthree )/2;
                        echo number_format($cgp_3,2);$h3=1;
                        }else{$cgp_3=0;echo "No Result" ;$h3=0;}
                        ?></td>
                        
                    </tr>
                </table>
                <table class="table table-striped table-bordered table-hover table-condensed">
                    <tr>
                        <th>Firstsemester(YEAR 4)</th>
                        <th>SECOND SEMESTER (YEAR 4)</th>
                        <th>CGP(YEAR 4)</th>
                        
                    </tr>
                    <tr class="text-info">
                        <td><?php  if(!empty($student_result->firstfour)){
                            echo h($student_result->firstfour)."<a href=\"view/view7.php\">(Click To View Details)</a>";
                        }else{echo "No Result" ;}  ?></td>
                        <td><?php   if(!empty($student_result->secondfour)){
                         echo h($student_result->secondfour)."<a href=\"view/view8.php\">(Click To View Details)</a>";
                         }else{echo "No Result" ;} ?></td>
                         <td><?php if(!empty($student_result->firstfour AND $student_result->secondfour)){
                         $cgp_4=($student_result->firstfour +$student_result->secondfour)/2 ;
                         echo number_format($cgp_4,2);$h4=1;
                             }else{$cgp_4=0;echo "No Result" ;$h4=0;}
                        ?></td>
                        
                        
                    </tr>
                </table>
                
                <table class="table table-striped table-bordered table-hover table-condensed">
                    <tr>
                        <th class="text-center text-uppercase">Cumulative Grade Point</th>
                        
                    </tr>
                    <tr class="text-info">
                    <?php 
                     $th=$h+$h2+$h3+$h4;
                            $total_gp=$cgp_1 + $cgp_2 + $cgp_3 + $cgp_4;
                            $cgp_result=$total_gp/$th;
                            global $cgp_result;
                         ?>
                        <td class="text-center text-uppercase"><?php if(isset($cgp_result)){
                           echo number_format($cgp_result,2);
                        }else{echo "No result" ;}  ?></td>
                        
                    </tr>
                </table>
                </div>

  </div>
                <h5><a class="text-info" >Powered By Rexsteroxy</a></h5>
</div>

            </div>
            
            </div>
            
            </div>
                
        </div>
    
    </div>
    </div>
    <hr>
<?php include(SHARED_PATH . '/include_footer.php');?>