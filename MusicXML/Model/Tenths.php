<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * Tenths
 * -
 * Tenths is class of element &lt;tenths&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;scaling&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="tenths")
 * @ParentElement(name="scaling")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/tenths/
 * @Update(date-time="2023-10-26 11:27:04")
 * @Data
 */
class Tenths extends MusicXMLWriter
{

    /**
	 * Text content
	 *
	 * @TextContent
	 * @var float
	 */
	public $textContent;
}