<?php 

/*$x=shell_exec("apt-get install wvdial");
echo $x;

echo system("apt-get install wvdial");

echo shell_exec ("gammu sendSms TEXT '+94788480501' -text 'test msg");*/

/*echo exec();
echo system("sudo gammu sendsms TEXT +94788480501 -text 'theja'");
shell_exec("sudo gammu sendsms TEXT +94788480501 -text 'uditha'");*/
if (!exec("sudo apt-get install wvdial")) {
	echo "problem with wvdialconf tool.";
}
if (!exec("sudo apt-get install wvdial")) {
	echo "problem with wvdialconf tool.";
}





$code="sudo gammu sendsms TEXT +94788480501 -text 'ceydigital'";
if(exec($code)){
	echo "Message send sucessfully";
 }
 else {
 	echo "Message not send";
 }
?>