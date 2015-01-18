

<?php
require_once '../../core/init.php';
$arr=[];

				$presid=$_GET['id'];
				//echo $presid;
				
		if ($presid == NULL){
			echo "Please enter a valid prescription Id";
		}
		else {	  
				$db=DB::getInstance();
				$db->query('SELECT * FROM Prescriptions WHERE prescription_Id = '.$presid.'');
				$a=$db->results();
				//print_r($a);
				$issue=($a[0]->issued);
				
				if ($issue==1){
					echo  " <center><h3><font color='red'> "."Issued prescription</font></h3></center>";
				}else{
				
				$pid=($a[0]->patient_Id);
				$date=($a[0]->date);
				$drug1_name=($a[0]->drug1_name);
				$drug1_dose=($a[0]->drug1_dose);
				$drug2_name=($a[0]->drug2_name);
				$drug2_dose=($a[0]->drug2_dose);
				$drug3_name=($a[0]->drug3_name);
				$drug3_dose=($a[0]->drug3_dose);
				$drug4_name=($a[0]->drug4_name);
				$drug4_dose=($a[0]->drug4_dose);
				$drug5_name=($a[0]->drug5_name);
				$drug5_dose=($a[0]->drug5_dose);
				//echo $pid;
				//echo $drug1_dose;
				
				$db=DB::getInstance();
				$db->query('SELECT * FROM patient WHERE patient_Id = '.$pid.'');
				$c=$db->results();
				//print_r($c);
				
				$pfname=($c[0]->patient_FName);
				$plname=($c[0]->patient_LName);
				
				
				
				if ($drug1_name!=null){
					$d=DB::getInstance();
					$d->query("SELECT * FROM drug WHERE Generic ='".$drug1_name."' ");
					$e=$d->results();
					$drug1_brand=($e[0]->Brand);
				}else{
					$drug1_brand="";
				}
				
				if ($drug2_name!=null){
					//$drug2_brand=($e[0]->Brand);
					$d->query("SELECT * FROM drug WHERE Generic ='".$drug2_name."' ");
					$p=$d->results();
					$drug2_brand=($p[0]->Brand);
				}else{
					$drug2_brand="";
				}
				
				if ($drug3_name!=null){
					$db->query("SELECT * FROM drug WHERE Generic = '".$drug3_name."'");
					$f=$db->results();
					$drug3_brand=($f[0]->Brand);
				}else{
					$drug3_brand="";
				}
				
				if ($drug4_name!=null){
					$db->query("SELECT * FROM drug WHERE Generic ='".$drug4_name."'");
					$g=$db->results();
					$drug4_brand=($g[0]->Brand);
				}else{
					$drug4_brand="";
				}
				
				
				if ($drug5_name!=null){
					$db->query("SELECT * FROM drug WHERE Generic = '".$drug5_name."'");
					$h=$db->results();
					$drug5_brand=($h[0]->Brand);
				}
				else{
					
	
					$drug5_brand="";
				}

				//echo "test";

				
echo "				
				<div class='wrapper row-offcanvas row-offcanvas-left'>

				
 
				
			

            <section class='col-lg-12 connectedSortable ui-sortable'>

                <div class='box box-solid'>

                    <!--event display-->

                    <div class='box  box-solid'>
                        <div class='box-header'>
                            <i class='fa fa-file-text-o'></i>
                            <h3 class='box-title'> ".$pfname.' '.$plname."</h3>
							
							&nbsp;&nbsp;<h5 class='box-title'>".$date."</h5>

                            <table class='table box-solid'>
                                <tbody>
                                <tr>
                                    <td>
                                        <label>
                                            Drug name 
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            Drug dose
                                        </label>
                                    </td>
                                    <td>
                                        <label>
                                            Drug brands
                                        </label>
                                    </td>
                                    <!--<td>
										<label>
											Tip Title
										</label>	
                                    </td>
                                </tr>-->
                                <!--Apoinment shedule-->

                                <!-- tools box -->
                                <div class='pull-right box-tools'>
                                  
                                    <button class='btn btn-primary btn-sm' data-widget='collapse'><i class='fa fa-minus'></i></button>

									<div class='box box-body no-padding'>
									
												<tr >
													<td>
														<label>"
															.$drug1_name."
														</label>
													</td>
													<td>
														<label>"
															.$drug1_dose."
														</label>
													</td>
													<td>
														<label>"
															.$drug1_brand."
														</label>
													</td>
												</tr>
												<tr >
													<td>
														<label>"
															.$drug2_name."
														</label>
													</td>
													<td>
														<label>
															".$drug2_dose."
														</label>
													</td>
													<td>
														<label>"
															.$drug2_brand."
														</label>
													</td>
												</tr>
												<tr >
													<td>
														<label>
															".$drug3_name."
														</label>
													</td>
													<td>
														<label>
															".$drug3_dose."
														</label>
													</td>
													<td>
														<label>"
															.$drug3_brand."
														</label>
													</td>
												</tr>
												<tr >
													<td>
														<label>
															".$drug4_name."
														</label>
													</td>
													<td>
														<label>
															".$drug4_dose."
														</label>
													</td>
													<td>
														<label>"
															.$drug4_brand."
														</label>
													</td>
												</tr>
												<tr >
													<td>
														<label>
															".$drug5_name."
														</label>
													</td>
													<td>
														<label>
															".$drug5_dose."
														</label>
													</td>
													<td>
														<label>"
															.$drug5_brand."
														</label>
													</td>
												</tr>
                                </div>
                                </div><!-- /. tools -->


                                </tbody>
                            </table>
							
							

                        </div>
						
						
						





                        <!--/Event display-->

                </div>
			<form method='post' action='issued.php?id=".$presid."'>
			<button type='submit' class='btn btn-success pull-right'>Issued</button>
			</form>

            </section>
		

        </div><!-- /.box (chat box) -->






            <!--/Left Col-->



		

    </div>




        <!--/Mainrow-->



    </section>






    <!-- /.content -->
</aside><!-- /.right-side -->

</div><!-- ./wrapper -->";
}
}
				
				
				

?>

