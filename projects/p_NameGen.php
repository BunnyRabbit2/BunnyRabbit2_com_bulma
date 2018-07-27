<?php

$p_NameGen = new Rbt_Project;

//$nameIn, $aboutIn, $imageIn, $gogsLinkIn, $downloadLinksIn, $dateStartIn, $dateEndIn, $languageAndSkillsIn, $weblink, $caption
$p_NameGen->create(
    "Bunny NameGen",
    "<p>I design Magic: The Gathering cards occasionally and I found that I was mostly terrible at coming up with names for any legendary things 
    or for organisation/kingdom/clan names. I used to use Chris Pound's site for bits and pieces but I didn't like waiting for the site to update 
    it's list so I ported the scripts over to C# and dropped them into a simple WinForm.</p>

    <p>By default, it will open any xml in the XMLDatasets folder and any txt files found in the Datasets folder. XML datasets have priority and 
    so a txt dataset with the same name as an XML dataset will NOT be loaded at all. It can also load a dataset through the file menu and that 
    dataset will be tacked onto the end of the list.</p>

    <p>Most of the datasets are from Chris Pound's site with a few added by myself. The scripts I based my work on  
    <a href=\"http://generators.christopherpound.com\">can be found here</a></p>
    
    <p>I am currently working on porting it to being a webapp.</p>

    <h3>Dataset Format</h3>

    <p>Each dataset is either a simple xml file or a txt file containing all the words separated by spaces and new lines. The program currently 
    accepts no other form of dataset.</p>

    <h4>Provided datasets:</h4>

    <ul>
        <li><a href=\"Datasets/Arabic (female names).txt\">Arabic (female names)</a></li>
        <li><a href=\"Datasets/Arabic (male names).txt\">Arabic (male names)</a></li>
        <li><a href=\"Datasets/Arabic (surnames).txt\">Arabic (surnames)</a></li>
        <li><a href=\"Datasets/Basque (male names).txt\">Basque (male names)</a></li>
        <li><a href=\"Datasets/Basque (female names).txt\">Basque (female names)</a></li>
        <li><a href=\"Datasets/Celtic (female names).txt\">Celtic (female names)</a></li>
        <li><a href=\"Datasets/Celtic (male names).txt\">Celtic (male names)</a></li>
        <li><a href=\"Datasets/Cthulhoid.txt\">Cthulhoid</a></li>
        <li><a href=\"Datasets/Latvian (female names).txt\">Latvian (female names)</a></li>
        <li><a href=\"Datasets/Latvian (male names).txt\">Latvian (male names)</a></li>
        <li><a href=\"Datasets/Viking (female names).txt\">Viking (female names)</a></li>
        <li><a href=\"Datasets/Viking (male names).txt\">Viking (male names)</a></li>
        <li><a href=\"Datasets/Elvish.txt\">Elvish</a></li>
        <li><a href=\"Datasets/TestData.txt\">TestData</a></li>
    </ul>",
    "img/portfolio/nameGen-Screenshot001.png",
    "<a href=\"http://gogs.bunnyrabbit2.com/bunnyrabbit2/NameGen_WinForm\">BunnyNameGen</a>",
    "<li class=\"btn btn-default btn-lg\"><a href=\"http://gogs.bunnyrabbit2.com/bunnyrabbit2/NameGen_WinForm/src/v1.3\">EXE</a></li>
        <li class=\"btn btn-default btn-lg\"><a href=\"http://gogs.bunnyrabbit2.com/bunnyrabbit2/NameGen_WinForm/archive/v1.3.zip\">ZIP</a></li>
        <li class=\"btn btn-default btn-lg\"><a href=\"http://gogs.bunnyrabbit2.com/bunnyrabbit2/NameGen_WinForm/archive/v1.3.tar.gz\">TAR</a></li>",
    "September 2013",
    "February 2014",
    "C#, Winforms",
    "",
    "Bunny Name Generator Image"
);

?>