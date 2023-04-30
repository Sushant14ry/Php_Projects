<?php
	session_start();
	include('database.inc.php');
	$uid=$_SESSION['UID'];
	$time=time();

	$sql="SELECT * FROM user";
	$res=mysqli_query($con,$sql);

	 $i=1;
	 $html="";
	while($rows=mysqli_fetch_assoc($res)){
	   		$Status="Offline";
	 		$class="btn-danger";
		 	if($rows['last_login']>$time){
			  	$Status="Online";
			   	$class="btn-success";
		}
	$html.='<tr>
                <th>'.$i.'</th>
                <td>'.$rows['name'].'</td>
                <td><button type="button" class="btn '.$class.'">'.$Status.'</button></td>
            </tr>';
	$i++;
}
echo $html ;
?>