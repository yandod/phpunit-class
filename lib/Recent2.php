<?php
class Recent2 {
	private $getter;
	public function __construct($getter) {
		$this->getter = $getter;
	}
	public function getList() {
		$list = $this->getter->get();
		return $list;
	}
}

class Getter2 {
	public function get() {
		$url = 'https://github.com/api/v2/json/commits/list/yandod/candycane/master';
		$array = json_decode(
			file_get_contents($url),
			true
		);
		return $array['commits'];
	}
}

