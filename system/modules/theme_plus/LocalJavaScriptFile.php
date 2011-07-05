<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

#copyright


/**
 * Class LocalJavaScriptFile
 */
class LocalJavaScriptFile extends LocalThemePlusFile {
	
	
	/**
	 * The processed temporary file path.
	 */
	protected $strProcessedFile;
	
	
	/**
	 * Create a new javascript file object.
	 */
	public function __construct($strOriginFile, $strCc = '', $objTheme = false)
	{
		parent::__construct($strOriginFile, $strCc, $objTheme);
		$this->strProcessedFile = null;
		
		// import the Theme+ master class
		$this->import('ThemePlus');
	}


	/**
	 * Get the file path relative to TL_ROOT
	 */
	public function getFile()
	{
		if ($this->strProcessedFile == null)
		{
			$this->import('Compression');
			
			$strJsMinimizer = $this->ThemePlus->getBELoginStatus() ? false : $this->Compression->getDefaultJsMinimizer();
			if (!$strJsMinimizer)
			{
				$strJsMinimizer = 'none';
			}
			
			$objFile = new File($this->strOriginFile);
			$strTemp = $objFile->basename
					. '-' . $objFile->mtime
					. '-' . $strJsMinimizer
					. '-' . $this->ThemePlus->getVariablesHashByTheme($this->objTheme);
			$strTemp = sprintf('system/scripts/%s-%s.js', $objFile->filename, substr(md5($strTemp), 0, 8));
			
			if (!file_exists(TL_ROOT . '/' . $strTemp))
			{
				$this->import('Compression');
				
				// import the Theme+ master class
				$this->import('ThemePlus');
				
				// import the javascript minimizer
				$strJsMinimizerClass = $this->Compression->getJsMinimizerClass($strJsMinimizer);
				if (!$strJsMinimizerClass)
				{
					$strJsMinimizerClass = $this->Compression->getJsMinimizerClass('none');
				}
				$this->import($strJsMinimizerClass, 'Minimizer');
				
				// import the gzip compressor
				$strGzipCompressorClass = $this->Compression->getCompressorClass('gzip');
				$this->import($strGzipCompressorClass, 'Compressor');
				
				$strContent = $objFile->getContent();
				
				// detect and decompress gziped content
				$strContent = $this->ThemePlus->decompressGzip($strContent);
				
				// replace variables
				$strContent = $this->ThemePlus->replaceVariablesByTheme($strContent, $this->objTheme, $strTemp);
				
				// minify
				if (!$this->Minimizer->minimizeToFile($strTemp, $strContent))
				{
					// write unminified code, if minify failed
					$objTemp = new File($strTemp);
					$objTemp->write($strContent);
					$objTemp->close();
				}
				
				// create the gzip compressed version
				if (!$GLOBALS['TL_CONFIG']['theme_plus_gz_compression_disabled'])
				{
					$this->Compressor->compress($strTemp, $strTemp . '.gz');
				}
			}
			
			$this->strProcessedFile = $strTemp;
		}
		
		return $this->strProcessedFile;
	}
	
	
	/**
	 * Get embeded html code
	 */
	public function getEmbededHtml()
	{
		// get the file
		$strFile = $this->getFile();
		$objFile = new File($strFile);
		
		// get the css code
		$strContent = $objFile->getContent();
		
		// return html code
		return $this->wrapCc('<script type="text/javascript">' . $strContent . '</script>');
	}
	
	
	/**
	 * Get included html code
	 */
	public function getIncludeHtml()
	{
		// get the file
		$strFile = $this->getFile();
		
		// return html code
		return $this->wrapCc('<script type="text/javascript" src="' . specialchars($strFile) . '"></script>');
	}
	
}

?>