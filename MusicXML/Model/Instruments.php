<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * Instruments
 * -
 * Instruments is class of element &lt;instruments&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;attributes&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="instruments")
 * @ParentElement(name="attributes")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/instruments/
 * @Update(date-time="2023-10-26 11:23:34")
 * @Data
 */
class Instruments extends MusicXMLWriter
{

    /**
	 * Text content
	 *
	 * @TextContent
	 * @var integer
	 */
	public $textContent;
}