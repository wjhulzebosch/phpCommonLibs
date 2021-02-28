<?php

/**
 * vA
 * This method creates a visual representation of an (indexed or associative) array
 *
 * @param  mixed $array; the array to display
 * @param  mixed $counter; used for visual representation of the 'depth' within the array; default is zero; only changes when method is called recursively.
 * @return void
 */
function vA($array, $counter=0, $newCell=false, $s_title="Geen titel")
{
	if ($counter == 0) {
		print '<h1>'.$s_title.'</h1>';
	}
	$counter++;
	if(!is_array($array))
		print 'Geen array: "'.$array.'".<br />';
	elseif( empty($array) )
		print 'Lege array.<br />';
	elseif( $array=="" )
		print 'Vreemde fout: "'.$array.'".<br />';
	else
	{
		if($newCell)
            print '<td>';
            
		print '<table border="'.$counter.'" >';
		foreach($array as $key => $value)
		{
			print '<tr><td><b>&nbsp;'.$key.'&nbsp;</b></td>';
			if (is_array($value) && count($value)>0)
				vA($value, $counter, true); 
			else 
			{
				if(is_array($value)) // Must be empty, otherwise wouldn't have passed previous if
					print '<td><b>&nbsp;Lege array&nbsp;</b></td>'; 
				else
					print '<td><b>&nbsp;'.$value.'&nbsp;</b></td>'; 
			}
			
			print '</tr>';
		}
        print '</table>';
		if($newCell)
			print '</td>';

	}
}