<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * Type
 * -
 * Type is class of element &lt;type&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;note&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="type")
 * @ParentElement(name="note")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/type/
 * @Update(date-time="2023-10-26 11:27:30")
 * @Data
 */
class Type extends MusicXMLWriter
{
	/**
	 * Size
	 * -
	 * Indicates full, cue, grace-cue, or large size. If not specified, the value is full for regular notes, grace-cue for notes that contain both &lt;grace&gt; and &lt;cue&gt; elements, and cue for notes that contain either a &lt;cue&gt; or a &lt;grace&gt; element, but not both.
	 *
	 * @Attribute(name="size")
	 * @Value(type="symbol-size" required="false", allowed="cue,full,grace-cue,large")
	 * @var string
	 */
	public $size;

	/**
	 * Text content
	 *
	 * @TextContent
	 * @var string
	 */
	public $textContent;
}