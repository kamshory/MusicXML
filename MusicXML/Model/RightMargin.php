<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * RightMargin
 * -
 * RightMargin is class of element &lt;right-margin&gt; Open link at &#64;Referece to read full documentation.
 * Parent elements: &lt;page-margins&gt;, &lt;system-margins&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="right-margin")
 * @ParentElement(name="page-margins,system-margins")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/right-margin/
 * @Update(date-time="2023-10-26 11:25:49")
 * @Data
 */
class RightMargin extends MusicXMLWriter
{

    /**
	 * Text content
	 *
	 * @TextContent
	 * @var float
	 */
	public $textContent;
}