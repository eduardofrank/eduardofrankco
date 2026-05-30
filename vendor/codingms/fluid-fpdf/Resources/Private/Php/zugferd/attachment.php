<?php
require('fpdfa.php');

class PDF_Attachment extends FPDFA
{
	protected $files = array();
	protected $n_files;
	protected $open_attachment_pane = false;

	function Attach($file, $name='', $description='', $type='application/octet-stream', $compress=false, $relationship='Unspecified')
	{
		if($name=='')
		{
			$p = strrpos($file,'/');
			if($p===false)
				$p = strrpos($file,'\\');
			if($p!==false)
				$name = substr($file,$p+1);
			else
				$name = $file;
		}
		if($this->_isascii($name))
			$nameF = $name;
		else
			$nameF = 'file'.strrchr($name,'.');
		$this->files[] = array('file'=>$file, 'nameF'=>$nameF, 'nameUF'=>$name, 'desc'=>$description, 'type'=>$type, 'compress'=>$compress, 'rel'=>$relationship);
	}

	function OpenAttachmentPane()
	{
		$this->open_attachment_pane = true;
	}

	protected function _putfiles()
	{
		foreach($this->files as &$info)
		{
			$file = $info['file'];
			$desc = $info['desc'];
			$compress = $info['compress'] && $this->compress;

			$fc = file_get_contents($file);
			if($fc===false)
				$this->Error('Cannot open file: '.$file);
			$data = $compress ? gzcompress($fc) : $fc;
			$date = @date('YmdHisO', filemtime($file));
			$md = 'D:'.substr($date,0,-2)."'".substr($date,-2)."'";;

			$this->_newobj();
			$info['n'] = $this->n;
			$this->_put('<<');
			$this->_put('/Type /Filespec');
			$this->_put('/F '.$this->_textstring($info['nameF']));
			$this->_put('/UF '.$this->_textstring($info['nameUF']));
			$this->_put('/EF <</F '.($this->n+1).' 0 R /UF '.($this->n+1).' 0 R>>');
			if($desc)
				$this->_put('/Desc '.$this->_textstring($desc));
			$this->_put('/AFRelationship /'.$info['rel']);
			$this->_put('>>');
			$this->_put('endobj');

			$this->_newobj();
			$this->_put('<<');
			$this->_put('/Type /EmbeddedFile');
			$this->_put('/Subtype /'.str_replace('/', '#2F', $info['type']));
			if($compress)
				$this->_put('/Filter /FlateDecode');
			$this->_put('/Length '.strlen($data));
			$this->_put('/Params <</Size '.strlen($fc).' /ModDate '.$this->_textstring($md).'>>');
			$this->_put('>>');
			$this->_putstream($data);
			$this->_put('endobj');
		}
		unset($info);

		$this->_newobj();
		$this->n_files = $this->n;
		$a = array();
		foreach($this->files as $info)
			$a[] = $this->_textstring($info['nameF']).' '.$info['n'].' 0 R';
		$this->_put('<<');
		$this->_put('/Names ['.implode(' ',$a).']');
		$this->_put('>>');
		$this->_put('endobj');
	}

	protected function _putresources()
	{
		parent::_putresources();
		if(!empty($this->files))
			$this->_putfiles();
	}

	protected function _putcatalog()
	{
		parent::_putcatalog();
		if(!empty($this->files))
		{
			$this->_put('/Names <</EmbeddedFiles '.$this->n_files.' 0 R>>');
			$a = array();
			foreach($this->files as $info)
				$a[] = $info['n'].' 0 R';
			$this->_put('/AF ['.implode(' ',$a).']');
			if($this->open_attachment_pane)
				$this->_put('/PageMode /UseAttachments');
		}
	}
}
?>
