<?php
session_start();

	try 
	{
		if (!isset($_GET['action']))
		{
			include('./controlleur/sign_in.php');
		}
		else 
		{
			switch ($_GET["action"]) {
				case  'LOGIN':
					include("/controlleur/login.php");
					break;
				case 'ACCUEIL':
					include("/controlleur/principale.php");
					break;
					case 'VERIF':
						include("/controlleur/verification.php");
						break;
                case 'LOGOUT':
                    include("/controlleur/sign_out.php");
                    break;
				case 'profil':
					include("/controlleur/info_profil.php");
					break;

			}
		}
	}
	catch(Exception $e)
	{
		echo 'Erreur : '. $e->getMessage();
	}
?>
