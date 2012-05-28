<?php

class Tankiyo {
	public function getDates($date = null) {
		$return_dates = array();
		if (is_null($date)) {
			$date = date('Y-m-d',time());
		}

		$date_object = new DateTime();
		$date_object->setTimestamp(strtotime($date));

		$steps = array(1,3,5,8);
		while ( count($return_dates) < 4) {
			if ($date_object->format('N') == 7) {
				$date_object->add(DateInterval::createFromDateString('2 day'));
			} else if ($date_object->format('N') == 1) {
				$date_object->add(DateInterval::createFromDateString('1 day'));
			}
			$return_dates[] = $date_object->format('Y-m-d');
			$step = array_shift($steps);
			$date_object->add(DateInterval::createFromDateString($step.' day'));
		}

		return $return_dates;
	}

	public function format_date($date) {
		$date_object = new DateTime();
		$date_object->setTimestamp(strtotime($date));
		$week = array('日','月','火','水','木','金','土');
		return $date_object->format('Y年m月d日').' '.$week[$date_object->format('w')].'曜日';
	}
}