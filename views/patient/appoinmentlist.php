<?php 
$con=mysql_connect("localhost","root","");  
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}   
mysql_select_db("cureme",$con);

$query="select * from appoinment where Patient_patient_Id=".$_GET['id']." order by createdDate DESC limit 5";
$result=mysql_query($query,$con);



echo "<div class='box-header'>
                                    <i class='fa fa-eye'></i>
                                    <h3 class='box-title'> Appointment List</h3>

                                    <table class='table box-solid'>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <label>
                                                    Date
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    Time
                                                </label>
                                            </td>
                                            <td>
                                                <label>
                                                    Title
                                                </label>
                                            </td>
                                            <td>
                                                    Check <!-- if docter check it and give comment and do click chech box -->
                                            </td>
                                        </tr>";
while($vv=mysql_fetch_row($result))
{
	//echo($vv[0]);
									
		echo"								<tr >
                                                <td>
                                                    <label>".
                                                        $vv[5]
                                                    ."</label>
                                                </td>
                                                <td>
                                                    <label>".
                                                        $vv[6]
                                                    ."</label>
                                                </td>
                                                <td>
                                                    <label>".
                                                        $vv[1]
                                                    ."</label>
                                                </td>";
				
//Already done appointments are ticked				
					if($vv[2]){
                                         echo"       <td>
                                                   
														<input type='checkbox' disabled='' width='20%' name='vehicle' value='Car' checked>
                                                       
                                                    </div>
                                                
                                                </td>
												</tr>";
								}		
					else{
					 echo"       <td>
                                                   
														<input type='checkbox' disabled='' width='20%' name='vehicle' value='Car'>
                                                       
                                                    </div>
                                                
                                                </td>
												</tr>";
					
					
					
					
					}
}


 echo "                                    <div  id='appoinmentlist'>
										                                    
                                            
                                            <!--/Apoinment shedule-->


                                        </div>


                                        </tbody>
                                    </table>

                                </div> ";




?>