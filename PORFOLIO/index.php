<?php

include("vue/entete.php") ;
include("vue/menu.php") ;

if(!isset($_REQUEST['uc']))
     $uc = 'accueil';
else
	$uc = $_REQUEST['uc'];
	 
switch($uc)
{
	case 'accueil':
		{include("vue/accueil.php");
		break;
		}
	case 'CV':
		{include("vue/CV.php");
		break;
		}
	case 'entreprise' :
		{include("vue/entreprise.php");
		break;
		}
	case 'stage1_mission1' :
		{ include("vue/stage1_mission1.php");
		break; 
		}
	
}

include("vue/pied.php") ;
?>



