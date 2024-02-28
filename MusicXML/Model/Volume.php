<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * Volume
 * -
 * Volume is class of element &lt;volume&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;midi-instrument&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="volume")
 * @ParentElement(name="midi-instrument")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/volume/
 * @Update(date-time="2023-10-26 11:27:39")
 * @Data
 */
class Volume extends MusicXMLWriter
{

    /**
	 * Text content
	 *
	 * @TextContent
	 * @var float
	 */
	public $textContent;
}