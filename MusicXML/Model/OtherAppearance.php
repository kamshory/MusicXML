<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * OtherAppearance
 * -
 * OtherAppearance is class of element &lt;other-appearance&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;appearance&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="other-appearance")
 * @ParentElement(name="appearance")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/other-appearance/
 * @Update(date-time="2023-10-26 11:24:55")
 * @Data
 */
class OtherAppearance extends MusicXMLWriter
{
	/**
	 * Type
	 * -
	 * The appearance type being specified.
	 *
	 * @Attribute(name="type")
	 * @Value(type="token" required="true", allowed="ANY_VALUE")
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