<?php
/**
 * Abstract class for the concrete classes of parsing xml,
 * uses the XML Parser Core class for
 * @author Ryan Bartolay
 */
abstract class XML {
	
	protected $xml = null;
	private $xml_file = null;
	private $parser;
	
	protected function setXMLfile($xml_file) {
		$this->xml_file = $xml_file;
	}
	
	protected function getParsedXML() {
		$this->xml = file_get_contents($this->xml_file);
		$this->parser = new Core_XMLParser($this->xml);
		$this->parser->Parse();
		return $this->parser->document;
	}
	
	abstract function retrieveAll();
	abstract function retrieveValueById($arg);
}