<?php
date_default_timezone_set('America/Asuncion');

$script_tz = date_default_timezone_get();

if (strcmp($script_tz, ini_get('date.timezone'))){
   echo  $currentTimeSlice = floor(time());
} else {
    echo 'La zona horaria del script y la zona horaria de la configuración ini coinciden.';
}
?>