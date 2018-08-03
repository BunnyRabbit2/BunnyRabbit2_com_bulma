<article class="accordion is-info">
    <div class="accordion-header">
        <p></p>
        <button class="toggle" aria-label="toggle"></button>
    </div>
    <div class="accordion-body">
        <div class="accordion-content">

            <div class="level">
                <div class="level-item has-text-centered">
                    <figure class="image is-256x256">
                        <img id="x-image" class="profile-pic" src="/img/portfolio/" title="">
                    </figure>
                </div>
            </div>

            <div class="modal" id="x-modal">
                <div class="modal-background"></div>
                <div class="modal-content">
                    <p class="image">
                        <img src="/img/portfolio/" alt="">
                    </p>
                </div>
                <button id="x-modal-close" class="modal-close is-large" aria-label="close"></button>
            </div>

            <script>
                document.getElementById('x-image').onclick = function () {
                    document.getElementById('x-modal').classList.toggle('is-active');
                }

                document.getElementById('x-modal-close').onclick = function () {
                    document.getElementById('x-modal').classList.toggle('is-active');
                }
            </script>

            <div class="columns">
                <div class="column">
                    <h5 class="subtitle is-5">Date built:
                        <strong></strong>
                    </h5>

                    <h5 class="subtitle is-5">Languages and skills used:
                        <strong></strong>
                    </h5>

                    <h5 class="subtitle is-5">
                        <a href="https://github.com/BunnyRabbit2/" title="Github link for ">Github link</a>
                    </h5>

                </div>
            </div>

            <div class="columns">
                <div class="column">

                </div>
            </div>
        </div>
    </div>
</article>