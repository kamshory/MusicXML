<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * Line
 * -
 * Line is class of element &lt;line&gt; Open link at &#64;Referece to read full documentation.
 * Parent elements: &lt;clef&gt;, &lt;part-clef&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="line")
 * @ParentElement(name="clef,part-clef")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/line/
 * @Update(date-time="2023-10-26 11:23:51")
 * @Data
 */
class Line extends MusicXMLWriter
{

    /**
	 * Text content
	 *
	 * @TextContent
	 * @var integer
	 */
	public $textContent;
}