<?php
file_put_contents(
	"handler.log", 
	date("Y-m-d H:i:s")."\t".var_export($_REQUEST, 1)."\n", 
	FILE_APPEND
);
echo "searched:string";
?>
