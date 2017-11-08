<?php
	function connect()
	{
        $con = mysqli_connect("localhost","root","Cecilia2002#","PayOnline");
        if($con > 0){
            echo "Connected!!!";
            return $con;
        }else{
            echo "Problem connecting";
        }
	}
	
?>