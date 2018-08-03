<article class="accordion is-info">
    <div class="accordion-header">
        <p>BF3 Sniping Computer</p>
        <button class="toggle" aria-label="toggle"></button>
    </div>
    <div class="accordion-body">
        <div class="accordion-content">

            <div class="level">
                <div class="level-item has-text-centered">
                    <figure class="image is-256x256">
                        <img id="snipingcomputer-image-1" class="profile-pic" src="/img/portfolio/sniping-computer001.png" title="BF3 Sniping Computer Image">
                    </figure>
                    <figure class="image is-256x256">
                        <img id="snipingcomputer-image-2" class="profile-pic" src="/img/portfolio/sniping-computer002.png" title="BF3 Sniping Computer Image">
                    </figure>
                </div>
            </div>

            <div class="modal" id="snipingcomputer-modal-1">
                <div class="modal-background"></div>
                <div class="modal-content">
                    <p class="image">
                        <img src="/img/portfolio/sniping-computer001.png" alt="">
                    </p>
                </div>
                <button id="snipingcomputer-modal-close-1" class="modal-close is-large" aria-label="close"></button>
            </div>

            <script>
                document.getElementById('snipingcomputer-image-1').onclick = function () {
                    document.getElementById('snipingcomputer-modal-1').classList.toggle('is-active');
                }

                document.getElementById('snipingcomputer-modal-close-1').onclick = function () {
                    document.getElementById('snipingcomputer-modal-1').classList.toggle('is-active');
                }
            </script>

            <div class="modal" id="snipingcomputer-modal-2">
                <div class="modal-background"></div>
                <div class="modal-content">
                    <p class="image">
                        <img src="/img/portfolio/sniping-computer002.png" alt="">
                    </p>
                </div>
                <button id="snipingcomputer-modal-close-2" class="modal-close is-large" aria-label="close"></button>
            </div>

            <script>
                document.getElementById('snipingcomputer-image-2').onclick = function () {
                    document.getElementById('snipingcomputer-modal-2').classList.toggle('is-active');
                }

                document.getElementById('snipingcomputer-modal-close-2').onclick = function () {
                    document.getElementById('snipingcomputer-modal-2').classList.toggle('is-active');
                }
            </script>

            <div class="columns">
                <div class="column">
                    <h5 class="subtitle is-5">Date built:
                        <strong>September 2013 - February 2014</strong>
                    </h5>

                    <h5 class="subtitle is-5">Languages and skills used:
                        <strong>C#, Winforms</strong>
                    </h5>

                    <h5 class="subtitle is-5">
                        <a href="https://github.com/BunnyRabbit2/BF3-Sniping-Computer" title="Github link for BF3 Sniping Computer">Github link</a>
                    </h5>

                </div>
            </div>

            <div class="columns">
                <div class="column">
                    <p>Sniping in Battlefield 3 was normally a trial and error system of tracking shots visually and correcting
                        as I went. I got sick of that and thought there would be an easier way so I put this together using
                        some data collected by the guys at Symthic with a bit of added research by myself.</p>

                    <p>I used this to make guesstimating the bullet drop at distance a thing of the past which made sniping
                        douchebags at extreme range much easier. It was quite useful for the most part and interesting to
                        research on mil dots and other such things.</p>
                </div>
            </div>
        </div>
    </div>
</article>