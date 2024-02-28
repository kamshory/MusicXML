<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * FirstFret
 * -
 * FirstFret is class of element &lt;first-fret&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;frame&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="first-fret")
 * @ParentElement(name="frame")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/first-fret/
 * @Update(date-time="2023-10-26 11:22:48")
 * @Data
 */
class FirstFret extends MusicXMLWriter
{
	/**
	 * Location
	 * -
	 * Indicates whether the text appears to the left or right of the frame.
	 *
	 * @Attribute(name="location")
	 * @Value(type="left-right" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $location;

	/**
	 * Text
	 * -
	 * Indicates how the first fret is represented in the fret diagram.
	 *
	 * @Attribute(name="text")
	 * @Value(type="token" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $text;

	/**
	 * Text content
	 *
	 * @TextContent
	 * @var integer
	 */
	public $textContent;
}