<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * InstrumentName
 * -
 * InstrumentName is class of element &lt;instrument-name&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;score-instrument&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="instrument-name")
 * @ParentElement(name="score-instrument")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/instrument-name/
 * @Update(date-time="2023-10-26 11:23:31")
 * @Data
 */
class InstrumentName extends MusicXMLWriter
{

    /**
	 * Text content
	 *
	 * @TextContent
	 * @var string
	 */
	public $textContent;
}