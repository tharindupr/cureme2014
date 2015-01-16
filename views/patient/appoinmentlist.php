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
                                                </td>
                                                <td>
                                                    <div class='icheckbox_minimal' style='position: relative;' aria-checked='false' aria-disabled='false'>

                                                        <input type='checkbox' disabled='' style='position: absolute; opacity: 0;'></input>
                                                        <ins class='iCheck-helper' style='position: absolute; top: 0%; left: 0%; display: block; width…roll 0% 0% rgb(255, 255, 255); border: 0px none; opacity: 0;'></ins>
                                                    </div>
                                                
                                                </td>
												</tr>";
										

}


 echo "                                    <div  id='appoinmentlist'>
										                                    
                                            
                                            <!--/Apoinment shedule-->


                                        </div>


                                        </tbody>
                                    </table>

                                </div> ";




?>