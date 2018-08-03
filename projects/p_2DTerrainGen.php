<article class="accordion is-info">
    <div class="accordion-header">
        <p>2D Terrain Generator</p>
        <button class="toggle" aria-label="toggle"></button>
    </div>
    <div class="accordion-body">
        <div class="accordion-content">

            <div class="level">
                <div class="level-item has-text-centered">
                    <figure class='image is-256x256'>
                        <img id="terrain-gen-image" class="profile-pic" src='/img/portfolio/2D-terrain-gen.png'>
                    </figure>
                </div>
            </div>

            <div class="modal" id="terrain-gen-modal">
                <div class="modal-background"></div>
                <div class="modal-content">
                    <p class="image">
                        <img src="/img/portfolio/2D-terrain-gen.png" alt="">
                    </p>
                </div>
                <button id="terrain-gen-modal-close" class="modal-close is-large" aria-label="close"></button>
            </div>

            <script>
                document.getElementById('terrain-gen-image').onclick = function () {
                    document.getElementById('terrain-gen-modal').classList.toggle('is-active');
                }

                document.getElementById('terrain-gen-modal-close').onclick = function () {
                    document.getElementById('terrain-gen-modal').classList.toggle('is-active');
                }
            </script>

            <div class="columns">
                <div class="column">
                    <h5 class="subtitle is-5">Date built:
                        <strong>September 2013</strong>
                        </h4>

                        <h5 class="subtitle is-5">Languages and skills used:
                            <strong>C++, SFML</strong>
                            </h4>

                            <h5 class="subtitle is-5">
                                <a href="https://github.com/BunnyRabbit2/2DTerrainGen" title="Github link for Bunny 2D Terrain Gen">Github link</a>
                                </h4>
                </div>
            </div>
            <div class="columns">
                <div class="column">

                    <p>I built this while beginning to get into procedural generation. It's pretty simple and I hope to go on
                        to make a 3D version to make terrain meshes.</p>
                </div>
            </div>
            <div class="columns">
                <div class="column">

                    <h5 class="subtitle is-5">Controls</h5>

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
                </div>
            </div>
            <div class="columns">
                <div class="column">

                    <h5 class="subtitle is-5">Dependencies</h5>

                    <p>Requires SFML to build. Open-sans font is included. Licence for that is in LICENCE.txt in the same folder
                    </p>
                </div>
            </div>
        </div>
    </div>
</article>