<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * DisplayStep
 * -
 * DisplayStep is class of element &lt;display-step&gt; Open link at &#64;Referece to read full documentation.
 * Parent elements: &lt;rest&gt;, &lt;unpitched&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="display-step")
 * @ParentElement(name="rest,unpitched")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/display-step/
 * @Update(date-time="2023-10-26 11:22:12")
 * @Data
 */
class DisplayStep extends MusicXMLWriter
{

    /**
	 * Text content
	 *
	 * @TextContent
	 * @var string
	 */
	public $textContent;
}