<?php
require('attachment.php');

class PDF_ZUGFeRD extends PDF_Attachment
{
	protected $profile;
	protected $filename;

	function SetXmlFile($file, $profile='EN 16931')
	{
		if(!in_array($profile, array('MINIMUM', 'BASIC WL', 'BASIC', 'EN 16931', 'EXTENDED', 'XRECHNUNG')))
			$this->Error('Incorrect profile: '.$profile);
		$this->profile = $profile;
		if($profile=='XRECHNUNG')
			$this->filename = 'xrechnung.xml';
		else
			$this->filename = 'factur-x.xml';
		if($profile=='MINIMUM' || $profile=='BASIC WL')
			$relationship = 'Data';
		else
			$relationship = 'Alternative';
		$this->Attach($file, $this->filename, '', 'text/xml', true, $relationship);
	}

	protected function _getxmpextra()
	{
		if(empty($this->filename))
			$this->Error('The XML file has not been set');
		$fx = $this->_getxmpsimple('fx:DocumentType', 'INVOICE');
		$fx .= $this->_getxmpsimple('fx:DocumentFileName', $this->filename);
		$fx .= $this->_getxmpsimple('fx:Version', '1.0');
		$fx .= $this->_getxmpsimple('fx:ConformanceLevel', $this->profile);

		$extra = file_get_contents(__DIR__.'/xmp-extension.txt');
		if(!$extra)
			$this->Error('Could not load the XMP extension');
		$extra .= $this->_getxmpdescription('fx', 'urn:factur-x:pdfa:CrossIndustryDocument:invoice:1p0#', $fx);
		return $extra;
	}
}
?>
