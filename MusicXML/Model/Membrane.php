<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * Membrane
 * -
 * Membrane is class of element &lt;membrane&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;percussion&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="membrane")
 * @ParentElement(name="percussion")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/membrane/
 * @Update(date-time="2023-10-26 11:24:04")
 * @Data
 */
class Membrane extends MusicXMLWriter
{
	/**
	 * Smufl
	 * -
	 * Distinguishes different SMuFL stylistic alternates.
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