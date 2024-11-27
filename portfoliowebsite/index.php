<?php
	
	include "includes/topheader.php";
    include "includes/menu.php";
	
	if (isset($_GET['page'])){
		
		$page = $_GET['page'];
		
		switch ($page){
			case 'Features':
                include "includes/mainoverview.php";
                include "includes/maintitle.php";
                include "includes/maintitle2.php";
				include "includes/maintitle3.php";
				include "includes/maintitle4.php";
				break;
			case 'About':
				include "includes/mainoverview1.php";
                include "includes/abouts1.php";
				break;
				case 'Photos':
					include "includes/photos.php";
					break;
				break;
			case 'Education':
                include "includes/educ1.php";
				break;
			case 'Contact':
				 include "includes/contacts.php";
				 break;
		}
	} 
	else{
        include "includes/mainoverview.php";
        include "includes/maintitle.php";
        include "includes/maintitle2.php";
		include "includes/maintitle3.php";
		include "includes/background.php";
		include "includes/maintitle4.php";
		include "includes/gallery1.php";
	}
	
	include "includes/footer.php";
	
?>