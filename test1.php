<?php

if(isset($_COOKIE['currency'])){
	echo "Your currency is ".$_COOKIE['currency'];
}
else{
	echo "Your currency is not set. We are setting it to INR";
	setcookie("currency","INR",time()+3600);

}