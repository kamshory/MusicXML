<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * MultipleRest
 * -
 * MultipleRest is class of element &lt;multiple-rest&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;measure-style&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="multiple-rest")
 * @ParentElement(name="measure-style")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/multiple-rest/
 * @Update(date-time="2023-10-26 11:24:30")
 * @Data
 */
class MultipleRest extends MusicXMLWriter
{
	/**
	 * Use symbols
	 * -
	 * Specifies whether the multiple rests uses the 1-bar / 2-bar / 4-bar rest symbols, or a single shape. It is no if not specified.
	 *
	 * @Attribute(name="use-symbols")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $useSymbols;

	/**
	 * Text content
	 *
	 * @TextContent
	 * @var integer
	 */
	public $textContent;
}