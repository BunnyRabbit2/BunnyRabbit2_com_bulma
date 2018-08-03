<article class="accordion is-info">
    <div class="accordion-header">
        <p>Bunny Magic Mirror</p>
        <button class="toggle" aria-label="toggle"></button>
    </div>
    <div class="accordion-body">
        <div class="accordion-content">

            <div class="level">
                <div class="level-item has-text-centered">
                    <figure class="image is-256x256">
                        <img id="magicmirror-image" class="profile-pic" src="/img/portfolio/magic-mirror.png" title="Magic Mirror Website Image">
                    </figure>
                </div>
            </div>

            <div class="modal" id="magicmirror-modal">
                <div class="modal-background"></div>
                <div class="modal-content">
                    <p class="image">
                        <img src="/img/portfolio/magic-mirror.png" alt="Magic Mirror Website Image">
                    </p>
                </div>
                <button id="magicmirror-modal-close" class="modal-close is-large" aria-label="close"></button>
            </div>

            <script>
                document.getElementById('magicmirror-image').onclick = function () {
                    document.getElementById('magicmirror-modal').classList.toggle('is-active');
                }

                document.getElementById('magicmirror-modal-close').onclick = function () {
                    document.getElementById('magicmirror-modal').classList.toggle('is-active');
                }
            </script>

            <div class="columns">
                <div class="column">
                    <h5 class="subtitle is-5">Date built:
                        <strong>April 2016 - July 2016</strong>
                    </h5>

                    <h5 class="subtitle is-5">Languages and skills used:
                        <strong>HTML, JS with JQuery</strong>
                    </h5>

                    <h5 class="subtitle is-5">
                        <a href="https://github.com/BunnyRabbit2/Bunny-Magic-Mirror" title="Github link for Bunny Magic Mirror">Github link</a>
                    </h5>

                    <h5 class="subtitle is-5">
                        <a href="http://magicmirror.bunnyrabbit2.com/" title="Website link for Bunny Magic Mirror">Website link</a>
                    </h5>

                </div>
            </div>

            <div class="columns">
                <div class="column">
                    <p>At home I have a Magic Mirror (essentially a screen displaying a web site powered by a Raspberry Pi with
                        a two way glass mirror in front of it) and this is the website I display on it.</p>
                    <p> It shows the current date and time, weather for my home town, the scores of the NHL teams I follow and
                        the next five items on my google calender.</p>
                    <p>I have also built a compliment/insult module that I tend to leave not activated to reduce clutter on
                        the mirror.</p>
                </div>
            </div>
        </div>
    </div>
</article>