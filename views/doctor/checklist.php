<?php
$con=mysql_connect("localhost","root","");  
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}   
mysql_select_db("cureme",$con);

$query="SELECT appoinment.createdDate,patient.patient_FName,appoinment.date,appoinment.time,appoinment.title,appoinment.description,appoinment.appoinment_Id FROM appoinment,patient where patient.patient_Id=appoinment.Patient_patient_Id;";
$result=mysql_query($query,$con);

//?id=\"+$( this ).attr(\"id\")

 echo  " 
 
 <script>	$( \".action\" ).click(function() {
			
			$.ajax({    //create an ajax request to load_page.php
			
				type: \"GET\",
				url: \"appoinmentreject.php\",             
				dataType: \"html\",   //expect html to be returned 
				data: { id: $( this ).attr(\"id\")} ,
				success: function(response){                    
					
					
				}
						
				});
		
		});
		
		
		$( \".done\" ).click(function() {
			
			$.ajax({    //create an ajax request to load_page.php
			
				type: \"GET\",
				url: \"appoinmentdone.php\",             
				dataType: \"html\",   //expect html to be returned 
				data: { id: $( this ).attr(\"id\")} ,
				success: function(response){                    
					
					
				}
						
				});
		
		});
 
 
 
				  
				  
	
</script>
 
 
 
 
 
 <div class='box-header'>
             <h3> <i class='fa fa-calendar'> &nbsp &nbsp Appointment List</i></h3>
            

            <table class='table box-solid'>
                <tbody>
                <tr>
					
                    <td>
                        <label>
                            Patient Name
                        </label>
                    </td>
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
                        <label>
                            Description &nbsp&nbsp&nbsp&nbsp
                        </label>
                    </td>
					
                    <td>
                        
                    </td>
                </tr>
                <!--Apoinment shedule-->



			

                <div class='box box-body no-padding '>";
				
while($vv=mysql_fetch_array($result))
{

 echo                  " <tr >
                       
                        
                        <td>
                            <div class='hideextra' style='width:100px'>".$vv[1]."</div>
                        </td>
                        <td>
                            <div class='hideextra' style='width:80px'>".$vv[2]."</div>
                        </td>
						<td>
                            <div class='hideextra' style='width:50px'>".$vv[3]."</div>
                        </td>
						<td>
                            <div class='hideextra' style='width:200px'>".$vv[4]."</div>
                        </td>
						<td>
                           <div >".$vv[5]."</div>
                        </td>
                        <td>
							
                      
							<button class='btn btn-success pull-right done' onClick=\"window.location.reload()\" type='button'  id='".$vv[6]."'>Done</button> &nbsp;&nbsp;&nbsp;
							<button class='btn btn-danger pull-right action' onClick=\"window.location.reload()\" type='button'  id='".$vv[6]."'>Reject</button> 
								
                                                       

                        </td>
                    </tr>";
                    
   }                 


echo "                </div>


                </tbody>
            </table>";



?>