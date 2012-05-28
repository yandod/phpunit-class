<?php
class Recent {
	public function getList() {
		$getter = new Getter();
		$list = $getter->get();
		return $list;
	}
}

class Getter {
	public function get() {
		$url = 'https://github.com/api/v2/json/commits/list/yandod/candycane/master';
		$array = json_decode(
			file_get_contents($url),
			true
		);
		return $array['commits'];
	}
}

