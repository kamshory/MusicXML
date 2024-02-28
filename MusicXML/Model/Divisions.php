<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * Divisions
 * -
 * Divisions is class of element &lt;divisions&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;attributes&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="divisions")
 * @ParentElement(name="attributes")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/divisions/
 * @Update(date-time="2023-10-26 11:22:15")
 * @Data
 */
class Divisions extends MusicXMLWriter
{

    /**
	 * Text content
	 *
	 * @TextContent
	 * @var integer
	 */
	public $textContent;
}