<?php
//for App Vnrar TV Vienamse
$id = $_GET["id"];
switch($id) {
    
case "vtv1":
header("Location: https://livecdn.fptplay.net/hda1/vtv1hd_vhls.smil/chunklist_b2500000.m3u8");

break;

case "vtv2":
header("Location: https://livecdn.fptplay.net/hda1/vtv2_vhls.smil/chunklist_b2500000.m3u8");
	
break;

case "vtv3":
header("Location: https://livecdn.fptplay.net/hda1/vtv3hd_vhls.smil/chunklist_b2500000.m3u8");

break;

case "vtv4":
header("Location: https://livecdn.fptplay.net/hda1/vtv4_vhls.smil/chunklist_b2500000.m3u8");

break;

case "vtv5":
header("Location: https://livecdn.fptplay.net/hda2/vtv5hd_vhls.smil/chunklist_b2500000.m3u8");
	
break;

case "vtv7":
header("Location: https://livecdn.fptplay.net/hda3/vtv7hd_vhls.smil/chunklist_b2500000.m3u8");

break;

case "vtv8":
header("Location: https://livecdn.fptplay.net/hda2/vtv8hd_vhls.smil/chunklist_b2500000.m3u8");

break;

case "vtv9":
header("Location: https://livecdn.fptplay.net/hda2/vtv9_vhls.smil/chunklist_b2500000.m3u8");
	
break;

case "vtv5taynguyen":
header("Location: http://vnrartv.vinaddns.com/vieon/vtv5-tay-nguyen/playlist.m3u8");

break;

case "vtv5taynambo":
header("Location: https://livecdn.fptplay.net/hda3/vtv5tnb_vhls.smil/chunklist_b2500000.m3u8");

break;

case "vtvcantho":
header("Location: https://livecdn.fptplay.net/hda1/vtvcantho_vhls.smil/chunklist_b2500000.m3u8");

}
?>
