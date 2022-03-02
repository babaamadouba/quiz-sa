<?php
function decodejson(string $key):array{
$json1=file_get_contents(path_db);
$tab=json_decode($json1,true);
return $tab[$key];
}


function encodejson(){






}


?>