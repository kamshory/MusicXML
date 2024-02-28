<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * BeatType
 * -
 * BeatType is class of element &lt;beat-type&gt; Open link at &#64;Referece to read full documentation.
 * Parent elements: &lt;interchangeable&gt;, &lt;time&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="beat-type")
 * @ParentElement(name="interchangeable,time")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/beat-type/
 * @Update(date-time="2023-10-26 11:21:29")
 * @Data
 */
class BeatType extends MusicXMLWriter
{

    /**
	 * Text content
	 *
	 * @TextContent
	 * @var string
	 */
	public $textContent;
}