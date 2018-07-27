<?php

class Rbt_Project
{
    private $name = "";
    private $caption = "";
    private $about = "";
    private $image = "";
    private $gitLink = "";
    private $downloadLinks = "";
    private $dateStart = "";
    private $dateEnd = "";
    private $languagesAndSkills = "";
    private $weblink = "";
    
    private $projectNumber = 0;
    
    function create($nameIn, $aboutIn, $imageIn, $gitLinkIn, $downloadLinksIn, 
        $dateStartIn, $dateEndIn, $languagesAndSkillsIn, $weblinkIn, $captionIn)
    {
        $this->name = $nameIn;
        $this->about = $aboutIn;
        $this->image = $imageIn;
        $this->gitLink = $gitLinkIn;
        $this->downloadLinks = $downloadLinksIn;
        $this->dateStart = $dateStartIn;
        $this->dateEnd = $dateEndIn;
        $this->languagesAndSkills = $languagesAndSkillsIn;
        $this->weblink = $weblinkIn;
        $this->caption = $captionIn;
    }
    
    function setProjectNumber($numberIn)
    {
        $this->projectNumber = $numberIn;
    }
    
    function outputImageLink($projectNumber)
    {
        $outString = "";
        
        $outString  = "<div class=\"col-sm-4 portfolio-item\">".PHP_EOL;
        $outString .= "    <a href=\"#portfolioModal" . $projectNumber . "\" class=\"portfolio-link\" data-toggle=\"modal\">".PHP_EOL;
        $outString .= "        <div class=\"caption\">".PHP_EOL;
        $outString .= "            <div class=\"caption-content\">".PHP_EOL;
        $outString .= "                <i class=\"fa fa-search-plus fa-3x\"></i>".PHP_EOL;
        $outString .= "            </div>".PHP_EOL;
        $outString .= "        </div>".PHP_EOL;
        $outString .= "        <img src=\"" . $this->image . "\" class=\"img-responsive\" alt=\"" . $this->caption . "\">".PHP_EOL;
        $outString .= "    </a>".PHP_EOL;
        $outString .= "</div>".PHP_EOL;
        
        return $outString;
    }
    
    function outputPortfolioLink($projectNumber)
    {
        $outString = "";
        
        $outString  = "<div class=\"portfolio-modal modal fade\" id=\"portfolioModal".$projectNumber."\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">".PHP_EOL;
        $outString .= "    <div class=\"modal-content\">".PHP_EOL;
        $outString .= "        <div class=\"close-modal\" data-dismiss=\"modal\">".PHP_EOL;
        $outString .= "            <div class=\"lr\">".PHP_EOL;
        $outString .= "                <div class=\"rl\">".PHP_EOL;
        $outString .= "                </div>".PHP_EOL;
        $outString .= "            </div>".PHP_EOL;
        $outString .= "        </div>".PHP_EOL;
        $outString .= "        <div class=\"container\">".PHP_EOL;
        $outString .= "            <div class=\"row\">".PHP_EOL;
        $outString .= "                <div class=\"col-lg-8 col-lg-offset-2\">".PHP_EOL;
        $outString .= "                    <div class=\"modal-body\">".PHP_EOL;
        $outString .= "                        <h2>".$this->name."</h2>".PHP_EOL;
        $outString .= "                        <hr class=\"star-primary\">".PHP_EOL;
        $outString .= "                        <img src=\"".$this->image."\" class=\"img-responsive img-centered\" alt=\"".$this->caption."\">".PHP_EOL;
        $outString .= "                        <h3>About</h3>".PHP_EOL;
        $outString .= "                        ".$this->about.PHP_EOL;
        $outString .= "                        <ul class=\"list-inline item-details\">".PHP_EOL;
        if ($this->gitLink != "")
        {
            $outString .= "                            <li>git Link:".PHP_EOL;
            $outString .= "                                <strong> ".$this->gitLink." </strong>".PHP_EOL;
            $outString .= "                            </li>".PHP_EOL;
        }
        if ($this->weblink != "")
        {
            $outString .= "                            <li>Website Link:".PHP_EOL;
            $outString .= "                                <strong> ".$this->weblink." </strong>".PHP_EOL;
            $outString .= "                            </li>".PHP_EOL;
        }
        $outString .= "                            <li>Date built:".PHP_EOL;
        $outString .= "                                <strong> ".$this->dateStart." - ".$this->dateEnd." </strong>".PHP_EOL;
        $outString .= "                            </li>".PHP_EOL;
        $outString .= "                            <li>Languages and skills used:".PHP_EOL;
        $outString .= "                                <strong> ".$this->languagesAndSkills." </strong>".PHP_EOL;
        $outString .= "                            </li>".PHP_EOL;
        $outString .= "                        </ul>".PHP_EOL;
        if ($this->downloadLinks != "")
        {
            $outString .= "                        <h3>Downloads</h3>".PHP_EOL;
            $outString .= "                        <div class=\"btn-group\">".PHP_EOL;
            $outString .= $this->downloadLinks.PHP_EOL;
            $outString .= "                        </div>".PHP_EOL;
        }
        $outString .= "                        </br></br>".PHP_EOL;
        $outString .= "                        <div class=\"btn-group\">".PHP_EOL;
        $outString .= "                             <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Close</button>".PHP_EOL;
        $outString .= "                        </div>".PHP_EOL;
        $outString .= "                    </div>".PHP_EOL;
        $outString .= "                </div>".PHP_EOL;
        $outString .= "            </div>".PHP_EOL;
        $outString .= "        </div>".PHP_EOL;
        $outString .= "    </div>".PHP_EOL;
        $outString .= "</div>".PHP_EOL;
        
        return $outString;
    }
}

?>