<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * NumeralFifths
 * -
 * NumeralFifths is class of element &lt;numeral-fifths&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;numeral-key&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="numeral-fifths")
 * @ParentElement(name="numeral-key")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/numeral-fifths/
 * @Update(date-time="2023-10-26 11:24:44")
 * @Data
 */
class NumeralFifths extends MusicXMLWriter
{

    /**
	 * Text content
	 *
	 * @TextContent
	 * @var string
	 */
	public $textContent;
}