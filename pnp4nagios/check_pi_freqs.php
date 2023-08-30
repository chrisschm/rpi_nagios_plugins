<?php
$opt[1] = "--vertical-label \"Frequences Mhz\"  --title \"$hostname / $servicedesc\" ";

$def[1] = "DEF:var1=$RRDFILE[1]:$DS[1]:AVERAGE ";
$def[1] .= "AREA:var1#006622:\"CPU   \"  ";
$def[1] .= "LINE1:var1#000000:\"\" ";
$def[1] .= "GPRINT:var1:LAST:\"%3.4lg %s$UNIT[1] LAST \" ";
$def[1] .= "GPRINT:var1:MAX:\"%3.4lg %s$UNIT[1] MAX \" ";
$def[1] .= "GPRINT:var1:AVERAGE:\"%3.4lg %s$UNIT[1] AVERAGE \\n\" ";

$def[1] .= "DEF:var2=$RRDFILE[1]:$DS[5]:AVERAGE ";
$def[1] .= "AREA:var2#FFFF00:\"V3D   \" ";
$def[1] .= "LINE1:var2#000000:\"\" ";
$def[1] .= "GPRINT:var2:LAST:\"%3.4lg %s$UNIT[1] LAST \\n\" ";

$def[1] .= "DEF:var3=$RRDFILE[1]:$DS[2]:AVERAGE ";
$def[1] .= "AREA:var3#33cc33:\"GPU   \" ";
$def[1] .= "LINE1:var3#000000:\"\" ";
$def[1] .= "GPRINT:var3:LAST:\"%3.4lg %s$UNIT[1] LAST \" ";
$def[1] .= "GPRINT:var3:MAX:\"%3.4lg %s$UNIT[1] MAX \" ";
$def[1] .= "GPRINT:var3:AVERAGE:\"%3.4lg %s$UNIT[1] AVERAGE \\n\" ";

$def[1] .= "DEF:var4=$RRDFILE[1]:$DS[3]:AVERAGE ";
$def[1] .= "AREA:var4#00FF00:\"H.264 \" ";
$def[1] .= "LINE1:var4#000000:\"\" ";
$def[1] .= "GPRINT:var4:LAST:\"%3.4lg %s$UNIT[1] LAST \\n\" ";

$def[1] .= "DEF:var5=$RRDFILE[1]:$DS[4]:AVERAGE ";
$def[1] .= "AREA:var5#cccc00:\"ISP   \" ";
$def[1] .= "LINE1:var5#000000:\"\" ";
$def[1] .= "GPRINT:var5:LAST:\"%3.4lg %s$UNIT[1] LAST \\n\" ";

$def[1] .= "DEF:var6=$RRDFILE[1]:$DS[8]:AVERAGE ";
$def[1] .= "AREA:var6#CC0000:\"eMMC  \" ";
$def[1] .= "LINE1:var6#000000:\"\" ";
$def[1] .= "GPRINT:var6:LAST:\"%3.4lg %s$UNIT[1] LAST \\n\" ";

$def[1] .= "DEF:var7=$RRDFILE[1]:$DS[11]:AVERAGE ";
$def[1] .= "AREA:var7#FFFF00:\"HDMI  \" ";
$def[1] .= "LINE1:var7#000000:\"\" ";
$def[1] .= "GPRINT:var7:LAST:\"%3.4lg %s$UNIT[1] LAST \\n\" ";

$def[1] .= "DEF:var8=$RRDFILE[1]:$DS[9]:AVERAGE ";
$def[1] .= "AREA:var8#FFCC00:\"Pixel \" ";
$def[1] .= "LINE1:var8#000000:\"\" ";
$def[1] .= "GPRINT:var8:LAST:\"%3.4lg %s$UNIT[1] LAST \\n\" ";

$def[1] .= "DEF:var9=$RRDFILE[1]:$DS[6]:AVERAGE ";
$def[1] .= "AREA:var9#FF0000:\"UART  \" ";
$def[1] .= "LINE1:var9#000000:\"\" ";
$def[1] .= "GPRINT:var9:LAST:\"%3.4lg %s$UNIT[1] LAST \\n\" ";

$def[1] .= "DEF:var10=$RRDFILE[1]:$DS[7]:AVERAGE ";
$def[1] .= "AREA:var10#0000CC:\"PWM   \" ";
$def[1] .= "LINE1:var10#000000:\"\" ";
$def[1] .= "GPRINT:var10:LAST:\"%3.4lg %s$UNIT[1] LAST \\n\" ";

$def[1] .= "DEF:var11=$RRDFILE[1]:$DS[10]:AVERAGE ";
$def[1] .= "AREA:var11#3399FF:\"VEC   \" ";
$def[1] .= "LINE1:var11#000000:\"\" ";
$def[1] .= "GPRINT:var11:LAST:\"%3.4lg %s$UNIT[1] LAST \\n\" ";

$def[1] .= "DEF:var12=$RRDFILE[1]:$DS[12]:AVERAGE ";
$def[1] .= "AREA:var12#00FFFF:\"DPI   \" ";
$def[1] .= "LINE1:var12#000000:\"\" ";
$def[1] .= "GPRINT:var12:LAST:\"%3.4lg %s$UNIT[1] LAST \\n\" ";
?>
