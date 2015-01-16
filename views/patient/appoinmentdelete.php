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
                                                    Select 
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
                                                    <div class='checkbox'>

                                                        <input type='checkbox' name='".$vv[7]."' value='".$vv[0]."'></input>
                                                        
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