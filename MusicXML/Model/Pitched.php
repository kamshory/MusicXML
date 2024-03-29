<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * Pitched
 * -
 * Pitched is class of element &lt;pitched&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;percussion&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="pitched")
 * @ParentElement(name="percussion")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/pitched/
 * @Update(date-time="2023-10-26 11:25:28")
 * @Data
 */
class Pitched extends MusicXMLWriter
{
	/**
	 * Smufl
	 * -
	 * Distinguishes different SMuFL glyphs for a particular pictogram within the 
	 *
	 * @Attribute(name="smufl")
	 * @Value(type="smufl-pictogram-glyph-name" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $smufl;

	/**
	 * Text content
	 *
	 * @TextContent
	 * @var string
	 */
	public $textContent;
}