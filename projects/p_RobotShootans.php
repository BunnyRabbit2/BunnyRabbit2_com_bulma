<article class="accordion is-info">
    <div class="accordion-header">
        <p>Robot Shootans</p>
        <button class="toggle" aria-label="toggle"></button>
    </div>
    <div class="accordion-body">
        <div class="accordion-content">

            <div class="level">
                <div class="level-item has-text-centered">
                    <figure class="image is-256x256">
                        <img id="robotshootans-image" class="profile-pic" src="/img/portfolio/robot-shootans.png" title="Robot Shootans Image">
                    </figure>
                </div>
            </div>

            <div class="modal" id="robotshootans-modal">
                <div class="modal-background"></div>
                <div class="modal-content">
                    <p class="image">
                        <img src="/img/portfolio/robot-shootans.png" alt="">
                    </p>
                </div>
                <button id="robotshootans-modal-close" class="modal-close is-large" aria-label="close"></button>
            </div>

            <script>
                document.getElementById('robotshootans-image').onclick = function () {
                    document.getElementById('robotshootans-modal').classList.toggle('is-active');
                }

                document.getElementById('robotshootans-modal-close').onclick = function () {
                    document.getElementById('robotshootans-modal').classList.toggle('is-active');
                }
            </script>

            <div class="columns">
                <div class="column">
                    <h5 class="subtitle is-5">Date built:
                        <strong>February 2014 - August 2014</strong>
                    </h5>

                    <h5 class="subtitle is-5">Languages and skills used:
                        <strong>C#, Monogame</strong>
                    </h5>

                    <h5 class="subtitle is-5">
                        <a href="https://github.com/BunnyRabbit2/Robot_Shootans" title="Github link for Robot Shootans">Github link</a>
                    </h5>

                </div>
            </div>

            <div class="columns">
                <div class="column">
                    <p>I wanted to relearn C# and build a game so I built a basic arena shooter using some public domain media
                        from opengameart.org. It's in a final state on the code basis but eventually I plan to replace all
                        the art and music</p>
                </div>
            </div>
        </div>
    </div>
</article>