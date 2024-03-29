<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * MetronomeTied
 * -
 * MetronomeTied is class of element &lt;metronome-tied&gt; Open link at &#64;Referece to read full documentation.
 * Parent element: &lt;metronome-note&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="metronome-tied")
 * @ParentElement(name="metronome-note")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/metronome-tied/
 * @Update(date-time="2023-10-26 11:24:10")
 * @Data
 */
class MetronomeTied extends MusicXMLWriter
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

}