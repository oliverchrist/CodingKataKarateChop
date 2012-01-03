<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of KarateChop
 *
 * @author christ
 */
class KarateChop {
	public function chop($needle, $array){
		foreach ($array as $index => $value){
			if($value == $needle){
				return $index;
			}
		}
		return -1;
	}
}

?>
