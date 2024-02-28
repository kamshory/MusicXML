<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * TimeRelation
 * -
 * TimeRelation is class of element &lt;time-relation&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;interchangeable&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="time-relation")
 * @ParentElement(name="interchangeable")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/time-relation/
 * @Update(date-time="2023-10-26 11:27:11")
 * @Data
 */
class TimeRelation extends MusicXMLWriter
{

    /**
	 * Text content
	 *
	 * @TextContent
	 * @var string
	 */
	public $textContent;
}