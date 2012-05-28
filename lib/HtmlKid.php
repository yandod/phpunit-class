<?php
require_once 'Kid.php';

class HtmlKid extends Kid {
	public function getLabel() {
		if ( $this->sex == self::SEX_MALE ) {
			$color = 'blue';
		} else {
			$color = 'pink';
		}
		return "<span style='color:$color'>". parent::getLabel() . "</span>\n";
	}
}
