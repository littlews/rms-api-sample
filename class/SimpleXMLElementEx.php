<?php
class SimpleXMLElementEx extends \SimpleXMLElement {
   
   /**
	* CDATAセクションを自身の内部に生成
	*
	* @param string $data
	* @return SimpleXMElement2 $this
	*/
   public function setCData($data) {
	  $dom = dom_import_simplexml($this);
	  $dom->appendChild($dom->ownerDocument->createCDATASection($data));
	  return $this;
   }
   
}
