<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * MovementNumber
 * -
 * MovementNumber is class of element &lt;movement-number&gt; Open link at &#64;Referece to read full documentation.
 * Parent elements: &lt;score-partwise&gt;, &lt;score-timewise&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="movement-number")
 * @ParentElement(name="score-partwise,score-timewise")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/movement-number/
 * @Update(date-time="2023-10-26 11:24:27")
 * @Data
 */
class MovementNumber extends MusicXMLWriter
{

    /**
	 * Text content
	 *
	 * @TextContent
	 * @var string
	 */
	public $textContent;
}