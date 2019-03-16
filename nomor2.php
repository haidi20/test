<?php 

function password($parm)
{
	if(strlen($parm) == 8){

		return ctype_lower($parm);
	}else{
		return 'tidak 8 karakter';
	}
}

echo password('haidinat');