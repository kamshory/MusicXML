<?php

namespace MusicXML\MusicXML\Model;

use MusicXML\MusicXML\MusicXMLWriter;

/**
 * Backup
 * -
 * Backup is class of element &lt;backup&gt; Open link at &#64;Referece to read full documentation.
 * Parent elements: &lt;measure&gt; (partwise), &lt;part&gt; (timewise)
 * 
 * @Xml
 * @MusicXML
 * @Element(name="backup")
 * @ParentElement(name="measure (partwise),part (timewise)")
 * @Reference https://www.w3.org/2021/06/musicxml40/musicxml-reference/elements/backup/
 * @Update(date-time="2023-10-26 11:21:19")
 * @Data
 */
class Backup extends MusicXMLWriter
{

    /**
     * Duration
     * @Attribute
     * @var integer
     */
    public $duration;
}