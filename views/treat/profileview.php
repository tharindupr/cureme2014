
<?php

$con=mysql_connect("localhost","root","");  
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}   
mysql_select_db("cureme",$con);

$query="SELECT * FROM patient WHERE patient_Id=".$_GET['id'];
$result=mysql_query($query,$con);
$res=mysql_fetch_array($result);


$currentPatient['patient_FName']=$res[2];
$currentPatient['patient_LName']=$res[3];
$currentPatient['gender']=$res[10];
$currentPatient['date_Of_Birth']=$res[8];
$currentPatient['email']=$res[4];
$currentPatient['address_No']=$res[5];
$currentPatient['address_Street']=$res[6];
$currentPatient['address_City']=$res[7];
$currentPatient['mobile_Number']=$res[9];


echo"
<body>
<!-- Morris chart - Sales -->
                                    
                                        <div class='row'>
                                            <div class='col-xs-12'>
                                                <div class='box'>

                                                    <div class='box-body table-responsive no-padding'>
                                                        <table class='table table-hover'>

                                                            <tr>
                                                                <td>First Name </td>

                                                                <td>".$currentPatient['patient_FName']."</td>

                                                            </tr>
															
															<tr>
                                                                <td>Last Name </td>

                                                                <td>". $currentPatient['patient_LName']."</td>

                                                            </tr>

                                                            <tr>
                                                                <td>Gender</td>

                                                                <td>". $currentPatient['gender']."</td>

                                                            </tr>

                                                            <tr>
                                                                <td>Date of Birth </td>

                                                                <td>".$currentPatient['date_Of_Birth']."</td>

                                                            </tr>

                                                            <tr>

                                                            <td>Age </td>

                                                            <td>";
				
															 //date in mm/dd/yyyy format; or it can be in other formats as well
															  $originalDate = $currentPatient['date_Of_Birth'];;
																
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

                                                            <td>".$currentPatient['email']."</td>

                                                            </tr>

                                                            <tr>
                                                                <td>Address</td>
                                                                <td></td>
                                                            </tr>

                                                            <tr>
                                                                <td>&nbsp;&nbsp;Number </td>

                                                                <td>".$currentPatient['address_No']."</td>

                                                            </tr>

                                                            <tr>
                                                                 <td>&nbsp;&nbsp;Street </td>

                                                                 <td>".$currentPatient['address_Street']."</td>

                                                            </tr>

                                                            <tr>
                                                                <td>&nbsp;&nbsp;City </td>

                                                                <td>".$currentPatient['address_City'] ."</td>

                                                            </tr>
                                                            <tr>

                                                            <td>Mobile Number </td>

                                                            <td>".$currentPatient['mobile_Number'] ."</td>

                                                            </tr>
                                                          

                                                        </table>
                                                    </div><!-- /.box-body -->
                                                </div><!-- /.box -->
                                            </div>
                                        </div>


                                    ";
									
								

?>								