<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * PartNameDisplay
 * -
 * PartNameDisplay is class of element &lt;part-name-display&gt; Open link at &#64;Referece to read full documentation.
 * Parent elements: &lt;print&gt;, &lt;score-part&gt;
 * 
 * @Xml
 * @MusicXML
 * @Element(name="part-name-display")
 * @ParentElement(name="print,score-part")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/part-name-display/
 * @Update(date-time="2023-10-26 11:25:16")
 * @Data
 */
class PartNameDisplay extends MusicXMLWriter
{
	/**
	 * Print object
	 * -
	 * Specifies whether or not to print an object. It is yes if not specified.
	 *
	 * @Attribute(name="print-object")
	 * @Value(type="yes-no" required="false", allowed="yes,no")
	 * @var string
	 */
	public $printObject;

	/**
     * Display text
     *
     * @Element(name="display-text")
     * @var DisplayText
     */
    public $displayText;

    /**
     * Accidental text
     *
     * @Element(name="accidental-text")
     * @var AccidentalText
     */
    public $accidentalText;

}