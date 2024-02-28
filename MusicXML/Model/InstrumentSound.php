<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * InstrumentSound
 * -
 * InstrumentSound is class of element &lt;instrument-sound&gt; Open link at &#64;Referece to read full documentation.
 * Parent elements: &lt;instrument-change&gt;, &lt;score-instrument&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="instrument-sound")
 * @ParentElement(name="instrument-change,score-instrument")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/instrument-sound/
 * @Update(date-time="2023-10-26 11:23:32")
 * @Data
 */
class InstrumentSound extends MusicXMLWriter
{

    /**
	 * Text content
	 *
	 * @TextContent
	 * @var string
	 */
	public $textContent;
}