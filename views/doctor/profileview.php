
<?php
require_once '../../core/init.php';

$con=mysql_connect("localhost","root","");  
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}   
mysql_select_db("cureme",$con);

$query="SELECT * FROM doctor WHERE doctor_Id=1";
$result=mysql_query($query,$con);
$res=mysql_fetch_array($result);


$currentDoctor['doctor_FName']=$res[2];
$currentDoctor['doctor_LName']=$res[3];
$currentDoctor['gender']=$res[8];
$currentDoctor['date_Of_Birth']=$res[7];
$currentDoctor['email']=$res[10];
$currentDoctor['address_No']=$res[4];
$currentDoctor['address_Street']=$res[5];
$currentDoctor['address_City']=$res[6];
$currentDoctor['mobile_Number']=$res[11];
$currentDoctor['rank']=$res[9];

//echo "test";
echo"
<!-- Morris chart - Sales -->
                                    
                                        <div class='row'>
                                            <div class='col-xs-12'>
                                                <div class='box'>

                                                    <div class='box-body table-responsive no-padding'>
                                                        <table class='table table-hover'>

                                                            <tr>
                                                                <td>First Name </td>

                                                                <td>".$currentDoctor['doctor_FName']."</td>

                                                            </tr>
															
															<tr>
                                                                <td>Last Name </td>

                                                                <td>". $currentDoctor['doctor_LName']."</td>

                                                            </tr>

                                                            <tr>
                                                                <td>Gender</td>

                                                                <td>". $currentDoctor['gender']."</td>

                                                            </tr>

                                                            <tr>
                                                                <td>Date of Birth </td>

                                                                <td>".$currentDoctor['date_Of_Birth']."</td>

                                                            </tr>

                                                            <tr>

                                                            <td>Age </td>

                                                            <td>";
				
															 //date in mm/dd/yyyy format; or it can be in other formats as well
															  $originalDate = $currentDoctor['date_Of_Birth'];;
																
															  $birthDate = date('d-m-Y', strtotime($originalDate));
															  //explode the date to get month, day and year
															  $birthDate = explode('-', $birthDate);
															  //get age from date or birthdate
															  $age = (date('md', date('U', mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date('md')
																? ((date('Y') - $birthDate[2]) - 1)
																: (date('Y') - $birthDate[2])); 
																
															  echo $age;
															  
	echo"														</td>

                                                            </tr>
															
															<td>Email </td>

                                                            <td>".$currentDoctor['email']."</td>

                                                            </tr>

                                                            <tr>
                                                                <td>Address</td>
                                                                <td></td>
                                                            </tr>

                                                            <tr>
                                                                <td>&nbsp;&nbsp;Number </td>

                                                                <td>".$currentDoctor['address_No']."</td>

                                                            </tr>

                                                            <tr>
                                                                 <td>&nbsp;&nbsp;Street </td>

                                                                 <td>".$currentDoctor['address_Street']."</td>

                                                            </tr>

                                                            <tr>
                                                                <td>&nbsp;&nbsp;City </td>

                                                                <td>".$currentDoctor['address_City'] ."</td>

                                                            </tr>
                                                            <tr>

                                                            <td>Mobile Number </td>

                                                            <td>".$currentDoctor['mobile_Number'] ."</td>

                                                            </tr>
                                                            <tr>

                                                            <td>Docter Rank </td>

                                                            <td>".$currentDoctor['rank'] ."</td>

                                                            </tr>
                                                          

                                                        </table>
                                                    </div><!-- /.box-body -->
                                                </div><!-- /.box -->
                                            </div>
                                        </div>


                                    ";
									
								

?>								