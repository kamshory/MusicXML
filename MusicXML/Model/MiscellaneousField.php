<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * MiscellaneousField
 * -
 * MiscellaneousField is class of element &lt;miscellaneous-field&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;miscellaneous&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="miscellaneous-field")
 * @ParentElement(name="miscellaneous")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/miscellaneous-field/
 * @Update(date-time="2023-10-26 11:24:22")
 * @Data
 */
class MiscellaneousField extends MusicXMLWriter
{
	/**
	 * Name
	 * -
	 * Indicates the type of metadata the element content represents.
	 *
	 * @Attribute(name="name")
	 * @Value(type="token" required="true", allowed="ANY_VALUE")
	 * @var string
	 */
	public $name;

	/**
	 * Text content
	 *
	 * @TextContent
	 * @var string
	 */
	public $textContent;
}