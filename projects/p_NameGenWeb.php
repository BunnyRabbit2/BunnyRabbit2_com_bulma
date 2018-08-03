<article class="accordion is-info">
    <div class="accordion-header">
        <p>Web Based Name Generator</p>
        <button class="toggle" aria-label="toggle"></button>
    </div>
    <div class="accordion-body">
        <div class="accordion-content">

            <div class="level">
                <div class="level-item has-text-centered">
                    <figure class="image is-256x256">
                        <img id="namegenweb-image" class="profile-pic" src="/img/portfolio/name-gen-web.png" title="Web Based Name Generator">
                    </figure>
                </div>
            </div>

            <div class="modal" id="namegenweb-modal">
                <div class="modal-background"></div>
                <div class="modal-content">
                    <p class="image">
                        <img src="/img/portfolio/name-gen-web.png" alt="Web Based Name Generator">
                    </p>
                </div>
                <button id="namegenweb-modal-close" class="modal-close is-large" aria-label="close"></button>
            </div>

            <script>
                document.getElementById('namegenweb-image').onclick = function () {
                    document.getElementById('namegenweb-modal').classList.toggle('is-active');
                }

                document.getElementById('namegenweb-modal-close').onclick = function () {
                    document.getElementById('namegenweb-modal').classList.toggle('is-active');
                }
            </script>

            <div class="columns">
                <div class="column">
                    <h5 class="subtitle is-5">Date built:
                        <strong>March 2015 - April 2015</strong>
                    </h5>

                    <h5 class="subtitle is-5">Languages and skills used:
                        <strong>HTML, JS with JQuery</strong>
                    </h5>

                    <h5 class="subtitle is-5">
                        <a href="https://github.com/BunnyRabbit2/NameGen_Web" title="Github link for Web Based Name Generator">Github link</a>
                    </h5>

                    <h5 class="subtitle is-5">
                        <a href="http://bunnyrabbit2.com/namegenweb" title="Website link for Web Based Name Generator">Website link</a>
                    </h5>
                </div>
            </div>

            <div class="columns">
                <div class="column">
                    <p>An online version of my name generator made entirely using JS and text files.</p>
                </div>
            </div>
        </div>
    </div>
</article>