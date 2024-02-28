<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * ClefOctaveChange
 * -
 * ClefOctaveChange is class of element &lt;clef-octave-change&gt; Open link at &#64;Referece to read full documentation.
 * Parent elements: &lt;clef&gt;, &lt;part-clef&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="clef-octave-change")
 * @ParentElement(name="clef,part-clef")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/clef-octave-change/
 * @Update(date-time="2023-10-26 11:21:47")
 * @Data
 */
class ClefOctaveChange extends MusicXMLWriter
{

    /**
	 * Text content
	 *
	 * @TextContent
	 * @var integer
	 */
	public $textContent;
}