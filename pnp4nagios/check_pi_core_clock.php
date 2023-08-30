<?php
if ($WARN[1] == "") {
        $WARN[1] = 0;
}
if ($CRIT[1] == "") {
        $CRIT[1] = 0;
}

$opt[1] = "--vertical-label \"GPU Clock Mhz\"  --title \"$hostname / $servicedesc\" ";

$def[1] = "DEF:var1=$RRDFILE[1]:$DS[1]:AVERAGE ";
$def[1] .= "AREA:var1#00FF00:\"Mhz \" ";
$def[1] .= "LINE1:var1#000000:\"\" ";
$def[1] .= "GPRINT:var1:LAST:\"%3.4lg %s$UNIT[1] LAST \" ";
$def[1] .= "GPRINT:var1:MAX:\"%3.4lg %s$UNIT[1] MAX \" ";
$def[1] .= "GPRINT:var1:AVERAGE:\"%3.4lg %s$UNIT[1] AVERAGE \\n\" ";
$def[1] .= "HRULE:$MIN[1]#FFFF00:\"Minimum on $MIN[1]C\" ";
$def[1] .= "HRULE:$MAX[1]#FF0000:\"Maximum on $MAX[1]C\" ";
?>
