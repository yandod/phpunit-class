<?php
class Kid {
	const SEX_MALE = '1';
	const SEX_FEMALE = '2';
	const AGE_YOUNG = 12;
	public $name;
	public $sex;
	public $age;
	
	public function __construct($name, $sex,$age=0) {
		$this->name = $name;
		$this->sex = $sex;
		$this->age = $age;
	}
	public function getLabel() {
		if ( $this->sex == self::SEX_MALE ) {
			$suffix = 'くん';
		} else {
			$suffix = 'ちゃん';
		}
		if ( $this->age >= self::AGE_YOUNG ) {
			$suffix = $this->getYoungLabel();
		}
		return $this->name . $suffix;
	}
	public function getYoungLabel() {
		if ( $this->sex == self::SEX_MALE ) {
			$suffix = '君';
		} else {
			$suffix = 'さん';
		}
		return $suffix;	
	}
}
