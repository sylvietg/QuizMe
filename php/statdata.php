
	<?php
		$file = 'members.txt';
		$members = unserialize(file_get_contents($file));
		$k = $_SESSION['key'];
				
		$addA = $members[$k]['addA'];	// Cumultive stats
		$subA = $members[$k]['subA'];
		$multA = $members[$k]['multA'];
		$mixA = $members[$k]['mixA'];
		$totA = $members[$k]['totA'];
		$addS = $members[$k]['addS'];	
		$subS = $members[$k]['subS'];
		$multS = $members[$k]['multS'];
		$mixS = $members[$k]['mixS'];
		$totS = $members[$k]['totS'];
	?>