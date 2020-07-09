<?php
	if(isset($_POST['submit'])){
	    sleep(2);
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['contactNumber'];
        $message=$_POST['message'];
        $budget=$_POST['budget'];
        $service=$_POST['service'];
        $year=$_POST['year'];
        $branch=$_POST['branch'];
        
        

		$to='anuragtoastmasters@gmail.com'; 
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$message."\n"."Student or Existing: ".$service."\n"."Submitted for: ".$budget."\n"."Branch ".$branch."\n"."Year: ".$year;
		$headers="From: ".$email;
		
			if(mail($to, $subject, $message, $headers)){
			header('Location: index.html');
			exit;
		}
		else{
			echo "Something went wrong!";
		}
		
	
	}
?>