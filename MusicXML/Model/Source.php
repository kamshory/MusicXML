<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * Source
 * -
 * Source is class of element &lt;source&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;identification&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="source")
 * @ParentElement(name="identification")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/source/
 * @Update(date-time="2023-10-26 11:26:25")
 * @Data
 */
class Source extends MusicXMLWriter
{

    /**
	 * Text content
	 *
	 * @TextContent
	 * @var string
	 */
	public $textContent;
}