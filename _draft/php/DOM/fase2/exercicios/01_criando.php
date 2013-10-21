<?php
# Objetivo: criar o ml abaixo....
/*
<?xml version="1.0" encoding="ISO-8859-1"?>
<mynotes>
    <note>
        <tasks>Validate data</tasks>
        <details>Validate data in SQL2005 Database with SQL manager</details>
    </note>
    <note>
        <tasks>Download Music</tasks>
        <details>Download latest music from site abc</details>
    </note>
</mynotes>
*/



/**
 * Forma 1
 */
$dom = new DOMDocument("1.0", "ISO-8859-1");
$dom->formatOutput = true;
$mynotes = $dom->createElement("mynotes");


# Node 'note' 1
$note = $dom->createElement("note");
    $tasks = $dom->createElement("tasks", "Validate data");
    $details = $dom->createElement("details", "Validate data in SQL2005 Database with SQL manager");
    $note->appendChild($tasks);
    $note->appendChild($details);
$mynotes->appendChild($note);



# Node 'note' 2
$note = $dom->createElement("note");
    $tasks = $dom->createElement("tasks", "Download Music");
    $details = $dom->createElement("details", "Download latest music from site abc");
    $note->appendChild($tasks);
    $note->appendChild($details);
$mynotes->appendChild($note);


$dom->appendChild($mynotes);
$dom->save("01_criado_forma1.xml");
// *************************************************************************************** //




/**
 * Forma 2
 */
$dom = new DOMDocument("1.0", "ISO-8859-1");
$dom->formatOutput = true;
$mynotes = $dom->createElement("mynotes");


# Node 'note' 1
$note1 = $dom->createElement("note");
    $tasks = $dom->createElement("tasks", "Validate data");
    $details = $dom->createElement("details", "Validate data in SQL2005 Database with SQL manager");
    $note1->appendChild($tasks);
    $note1->appendChild($details);



# Node 'note' 2
$note2 = $dom->createElement("note");
    $tasks = $dom->createElement("tasks", "Download Music");
    $details = $dom->createElement("details", "Download latest music from site abc");
    $note2->appendChild($tasks);
    $note2->appendChild($details);


$mynotes->appendChild($note1);
$mynotes->appendChild($note2);


$dom->appendChild($mynotes);
$dom->save("01_criado_forma2.xml");
// *************************************************************************************** //
?>




