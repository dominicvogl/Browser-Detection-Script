<?php

	function brDec_Outp_TableData($head, $content, $lvl3 = null) {
		$retval = "";
		$retval .= "<tr><td>".$head."</td>";
		$retval .= "<td>".$content."</td>";
		if($lvl3)
			$retval .= "<td>".$lvl3."</td>";
			
		$retval .= "</tr>";
		return $retval;
	}

	function brDec_Outp_Container() {
		
		$browser = get_browser(null, true);
		
		$retval = "";	
		$retval .= '<div class="container"><table><tbody>';
		$retval .= brDec_Outp_TableData('browsertype', $browser['browser']);
		$retval .= brDec_Outp_TableData('Browserversion', $browser['version']);
		$retval .= brDec_Outp_TableData("Engine", $browser['renderingengine_name'], $browser['renderingengine_description']);
	
	
		$retval .= '</tbody></table></div>'; // Container
	
		echo ("<pre>");
			var_dump ($browser);
		echo("</pre>");
	
		return $retval;
	}
?>
