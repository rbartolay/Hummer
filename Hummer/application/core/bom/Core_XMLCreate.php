<?php
/**
 * XML Create core class used to create xml file and can update existing xml file
 * 
 * Usage:
 * $obj = new stdClass();
 * $obj->id = 1;
 * $obj->title = "title here";
 * 
 * $xml = new XMLCreate("root"); 
 * $xml->create("child",$obj);
 * $xml->saveXMLFile();
 *  
 * @author LLBautista
 *
 */
class XMLCreate implements BusinessObjectModel {
	private $name = null;
	private $domDocument = null;
	private $root = null;
	private $url = null;
	private $filename = null;
	/**
	 * Initialize constructor for XML Create class
	 * @param unknown_type $name
	 * @param unknown_type $filename
	 * @param unknown_type $logurl
	 */
	public function __construct($name,$filename,$logurl) {
		$this->name = $name;
		$this->filename = $filename;
		$this->domDocument = new DOMDocument();
		$this->domDocument->formatOutput = true;
		$this->url = $logurl;
		$this->set();	
	}
	/**
	 * Set xml
	 */
	private function set() {
		if($this->isXMLFileExists()) {
			$this->domDocument->load($this->url.$this->filename.".xml", LIBXML_NOBLANKS);
			$this->root = $this->getRootNode();
		} else {
			$root = $this->setElement(strtolower($this->name));
			
			$this->root = $this->setAppend($root);
		}
	}
	/**
	 * Create child node, attributes and values
	 * @param string $child
	 * @param object $objects
	 */
	public function create($child,$object) {
		if(is_object($object) or die(get_class($this)." XMLCreate.core.create : Object is not a object"));
		
		$subNode = $this->setElement($child);
		foreach ((array)$object as $key=>$val) {
			$attribute = $this->setAttribute($key);
			$value = $this->setValue($val);
			$attribute->appendChild($value);
			$subNode->appendChild($attribute);
		}
		$this->root->appendChild($subNode);
	}
	
	private function getRootNode() {
		return $this->domDocument->documentElement;
	}
	/**
	 * Set element for main and child node
	 * @param string $name
	 */
	private function setElement($name) {
		return $this->domDocument->createElement($name);
	}
	/**
	 * Set attribute for main and child node
	 * @param string $name
	 */
	private function setAttribute($name) {
		return $this->domDocument->createAttribute($name);
	}
	/**
	 * Set value for the attribute
	 * @param string $string
	 */
	private function setValue($string) {
		return $this->domDocument->createTextNode($string);
	}
	/**
	 * Set name for main or child node, also in attribute and value
	 * @param unknown_type $name
	 */
	private function setAppend($name) {
		return $this->domDocument->appendChild($name);
	}
	/**
	 * Check if xml file exists
	 */
	private function isXMLFileExists() {
		return file_exists($this->url.$this->filename.".xml");
	}
	/**
	 * Save xml file or update existing file
	 */
	public function saveXMLFile() { 
		if($this->isXMLFileExists()) {
			$this->domDocument->save($this->url.$this->filename.".xml");
			//change file permission after save
			chmod($this->url.$this->filename.".xml", 0777);
		} else {
			$this->saveNewXMLFile();
		}
	}
	public static function count($xml,$element) {
		if(file_exists($xml)) {
			$dom = new DOMDocument();
			$dom->load($xml);
			return $dom->getElementsByTagName($element)->length;
		}
		return 0;
	}
	/**
	 * Save new xml file
	 */
	private function saveNewXMLFile() {
		$str = $this->domDocument->saveXML();
		$handle = fopen($this->url.$this->filename.".xml","w");
		fwrite($handle, $str);
		fclose($handle);
	}
}