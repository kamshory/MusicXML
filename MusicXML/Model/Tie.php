<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * Tie
 * -
 * Tie is class of element &lt;tie&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;note&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="tie")
 * @ParentElement(name="note")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/tie/
 * @Update(date-time="2023-10-26 11:27:08")
 * @Data
 */
class Tie extends MusicXMLWriter
{
	/**
	 * Type
	 * -
	 * Indicates if this is the start or stop of the tie.
	 *
	 * @Attribute(name="type")
	 * @Value(type="start-stop" required="true", allowed="start,stop")
	 * @var string
	 */
	public $type;

	/**
	 * Time only
	 * -
	 * Indicates which particular times to apply a &lt;tie&gt; element through a repeated section.
	 *
	 * @Attribute(name="time-only")
	 * @Value(type="time-only" required="false", allowed="ANY_VALUE")
	 * @var string
	 */
	public $timeOnly;

}