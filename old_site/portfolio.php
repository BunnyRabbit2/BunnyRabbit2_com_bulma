	<?php 
    
    include("classes/project.php");

    include("projects/p_NameGenWeb.php");
    include("projects/p_NameGen.php");
    include("projects/p_2DTerrainGen.php");
    include("projects/p_RobotShootans.php");
    include("projects/p_SnipingComputer.php");
    
    ?>
    
    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Portfolio</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <?php echo $p_NameGenWeb->outputImageLink(1); ?>
                <?php echo $p_NameGen->outputImageLink(2); ?>
                <?php echo $p_2DTerrainGen->outputImageLink(3); ?>
			</div>
			<div class="row">
                <?php echo $p_RobotShootans->outputImageLink(4); ?>
                <?php echo $p_SnipingComputer->outputImageLink(5); ?>
            </div>
        </div>
    </section>
	
	<!-- Portfolio Modals -->
    <?php echo $p_NameGenWeb->outputPortfolioLink(1); ?>
    <?php echo $p_NameGen->outputPortfolioLink(2); ?>
    <?php echo $p_2DTerrainGen->outputPortfolioLink(3); ?>
    <?php echo $p_RobotShootans->outputPortfolioLink(4); ?>
    <?php echo $p_SnipingComputer->outputPortfolioLink(5); ?>