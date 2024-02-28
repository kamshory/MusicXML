<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * SlashType
 * -
 * SlashType is class of element &lt;slash-type&gt; Open link at &#64;Referece to read full documentation.
 * Parent elements: &lt;beat-repeat&gt;, &lt;slash&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="slash-type")
 * @ParentElement(name="beat-repeat,slash")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/slash-type/
 * @Update(date-time="2023-10-26 11:26:15")
 * @Data
 */
class SlashType extends MusicXMLWriter
{

    /**
	 * Text content
	 *
	 * @TextContent
	 * @var string
	 */
	public $textContent;
}