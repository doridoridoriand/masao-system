<?php
class targetURLListHelper {
	# loadTarqgetURLから渡されたURLのArrayをHTMLのListViewに変換する
	public function HTMLconverter() {
		$source = $this->loadTargetURL();

		foreach ($$source as $element) {
			echo '<tr>';
			echo '<td>';
			print($element[0]);
			echo '</td><td>';
			print($element[1]);
			echo '</td><td>';
			echo '<h4><span class="label label-danger">';
			echo 'ENGAGED';
			echo '<span></h4>'
			echo '</td>';
			echo '</tr>';
		}

	}

	# targetList.csvからURLリストを読み込む
	private function loadTargetURL() {
		$source = fopen('targetURL.csv', 'r');
		$targetURLArray = array();

		while($targets = fgetcsv($source)) {
			array_push($targetURLArray, $targets);
		}
		unset($targets);
		return $targetURLArray;
	}
}
