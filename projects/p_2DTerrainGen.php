<?php

$p_2DTerrainGen = new Rbt_Project;

//$nameIn, $aboutIn, $imageIn, $gogsLinkIn, $downloadLinksIn, $dateStartIn, $dateEndIn, $languageAndSkillsIn, $weblink, $caption
$p_2DTerrainGen->create(
    "2D Terrain Generator",
    "<p>I built this while beginning to get into procedural generation. It's pretty simple and I hope to go on to make a 3D version to make terrain meshes.</p>
							
        <h3>Controls</h2>
        
        <ul>
            <li>A - Decrease starting level of generation. Cannot go below 1</li>
            <li>Q - Increase starting level of generation. Cannot go above 3</li>
            <li>S - Decrease level generated to. Cannot go below starting level</li>
            <li>W - Increase level generated to.</li>
            <li>D - Decrease current level of generation. Cannot go below level generated to.</li>
            <li>E - Increase current level of generation</li>
            <li>F - Decrease range of randomness from midpoint in points generated</li>
            <li>R - Increase range of randomness from midpoint in points generated</li>
        </ul>

        <h3>Dependencies</h2>

        <p>Requires SFML to build. Open-sans font is included. Licence for that is in LICENCE.txt in the same folder</p>",
    "img/portfolio/2D-terrain-gen.png",
    "<a href=\"http://gogs.bunnyrabbit2.com/bunnyrabbit2/2D_Terrain_Gen\">Bunny 2D Terrain Gen</a>",
    "<li class=\"btn btn-default btn-lg\"><a href=\"http://gogs.bunnyrabbit2.com/bunnyrabbit2/2D_Terrain_Gen/src/V1.0\">EXE</a></li>
        <li class=\"btn btn-default btn-lg\"><a href=\"http://gogs.bunnyrabbit2.com/bunnyrabbit2/2D_Terrain_Gen/archive/V1.0.zip\">ZIP</a></li>
        <li class=\"btn btn-default btn-lg\"><a href=\"http://gogs.bunnyrabbit2.com/bunnyrabbit2/2D_Terrain_Gen/archive/V1.0.tar.gz\">TAR</a></li>",
    "September 2013",
    "",
    "C++, SFML",
    "",
    "Terrain Generator Image"
);

?>