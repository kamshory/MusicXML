<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * Encoder
 * -
 * Encoder is class of element &lt;encoder&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;encoding&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="encoder")
 * @ParentElement(name="encoding")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/encoder/
 * @Update(date-time="2023-10-26 11:22:25")
 * @Data
 */
class Encoder extends MusicXMLWriter
{
	/**
	 * Type
	 * -
	 * Standard values are music, words, and arrangement, but other types may be used. This attribute is only needed when there are multiple &lt;encoder&gt; elements.
	 *
	 * @Attribute(name="type")
	 * @Value(type="token" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $type;

	/**
	 * Text content
	 *
	 * @TextContent
	 * @var string
	 */
	public $textContent;
}