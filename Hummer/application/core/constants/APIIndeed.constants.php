<?php
class APIIndeed extends APIParser {
	// publisher	Publisher ID. Your publisher ID is "3181266314692699". This is assigned when you register as a publisher.
	private $publisher = "3181266314692699";
	// v	Version. Which version of the API you wish to use. All publishers should be using version 2. Currently available versions are 1 and 2. This parameter is required.
	private $v = "2";
	// format	Format. Which output format of the API you wish to use. The options are "xml" and "json." If omitted or invalid, the XML format is used.
	private $format = null;
	// callback	Callback. The name of a javascript function to use as a callback to which the results of the search are passed. This only applies when format=json. For security reasons, the callback name is restricted letters, numbers, and the underscore character.
	private $callback = null;
	// q	Query. By default terms are ANDed. To see what is possible, use our advanced search page to perform a search and then check the url for the q value.
	private $q = "java";
	// l	Location. Use a postal code or a "city, state/province/region" combination.
	private $l = "";
	// sort	Sort by relevance or date. Default is relevance.
	private $sort = null;
	// radius	Distance from search location ($"as the crow flies"). Default is 25.
	private $radius = null;
	// st	Site type. To show only jobs from job boards use 'jobsite'. For jobs from direct employer websites use 'employer'.
	private $st = null;
	// jt	Job type. Allowed values: "fulltime", "parttime", "contract", "internship", "temporary".
	private $jt = null;
	// start	Start results at this result number, beginning with 0. Default is 0.
	private $start = null;
	// limit	Maximum number of results returned per query. Default is 10
	private $limit = null;
	// fromage	Number of days back to search.
	private $frompage = null;
	// highlight	Setting this value to 1 will bold terms in the snippet that are also present in q. Default is 0.
	private $highlight = null;
	// filter	Filter duplicate results. 0 turns off duplicate job filtering. Default is 1.
	private $filter = true;
	// latlong	If latlong=1, returns latitude and longitude information for each job result. Default is 0.
	private $latlong = true;
	// co	 Search within country specified. Default is us. See below for a complete list of supported countries.
	private $co = null;
	// chnl	Channel Name: Group API requests to a specific channel
	private $chnl = null;
	// userip	The IP number of the end-user to whom the job results will be displayed. This field is required.
	private $userip = null;
	// useragent	The User-Agent ($browser) of the end-user to whom the job results will be displayed. This can be obtained from the "User-Agent" HTTP request header from the end-user. This field is required.
	private $useragent = null;
	
	public function __construct() {
		$this->setDomain("http://api.indeed.com/ads/apisearch");
	}
	
	public function getURL() {		
		return $this->getDomain() . $this->getClassQueryString();
	}
	
	public function getClassQueryString() {		
		
		$class_vars = get_class_vars(get_class($this));
		$queryString = "?";
		
		foreach ($class_vars as $name => $value) {
			if(!is_null($value)) {
				reset($class_vars);
				if($name !== key($class_vars)) {
					$queryString.= "&";
				}
				$queryString.= $name."=".$value;
			}
		}
		
		return $queryString;
	}
	
	public function getResults() {
		$results = array();
		
		$data = $this->parseContents();
		
		foreach($data->tagChildren as $child) {
			
			if($child->tagName == "results") {
				foreach ($child->tagChildren as $c) {
					$results[] = $this->buildChild($c);
				}
			}
		}
		return $results;
	}
	
	
	public function getPublisher() {
		return publisher;
	}
	public function setPublisher($publisher) {
		$this->publisher = publisher;
	}
	public function getVersion() {
		return version;
	}
	public function setVersion($version) {
		$this->version = version;
	}
	public function getFormat() {
		return format;
	}
	public function setFormat($format) {
		$this->format = format;
	}
	public function getCallback() {
		return callback;
	}
	public function setCallback($callback) {
		$this->callback = callback;
	}
	public function getQuery() {
		return query;
	}
	public function setQuery($query) {
		$this->query = query;
	}
	public function getLocation() {
		return location;
	}
	public function setLocation($location) {
		$this->location = location;
	}
	public function getSort() {
		return sort;
	}
	public function setSort($sort) {
		$this->sort = sort;
	}
	public function getRadius() {
		return radius;
	}
	public function setRadius($radius) {
		$this->radius = radius;
	}
	public function getSite_type() {
		return site_type;
	}
	public function setSite_type($site_type) {
		$this->site_type = site_type;
	}
	public function getJob_type() {
		return job_type;
	}
	public function setJob_type($job_type) {
		$this->job_type = job_type;
	}
	public function getStart() {
		return start;
	}
	public function setStart($start) {
		$this->start = start;
	}
	public function getLimit() {
		return limit;
	}
	public function setLimit($limit) {
		$this->limit = limit;
	}
	public function getFrompage() {
		return frompage;
	}
	public function setFrompage($frompage) {
		$this->frompage = frompage;
	}
	public function getHighlight() {
		return highlight;
	}
	public function setHighlight($highlight) {
		$this->highlight = highlight;
	}
	public function getFilter() {
		return filter;
	}
	public function setFilter($filter) {
		$this->filter = filter;
	}
	public function getLatlong() {
		return latlong;
	}
	public function setLatlong($latlong) {
		$this->latlong = latlong;
	}
	public function getCountry() {
		return country;
	}
	public function setCountry($country) {
		$this->country = country;
	}
	public function getChannel() {
		return channel;
	}
	public function setChannel($channel) {
		$this->channel = channel;
	}
	public function getUserid() {
		return userid;
	}
	public function setUserid($userid) {
		$this->userid = userid;
	}
	public function getUseragent() {
		return useragent;
	}
	public function setUseragent($useragent) {
		$this->useragent = useragent;
	}
}