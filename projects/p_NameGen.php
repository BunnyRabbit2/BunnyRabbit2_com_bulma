<article class="accordion is-info">
    <div class="accordion-header">
        <p>Bunny NameGen Winform</p>
        <button class="toggle" aria-label="toggle"></button>
    </div>
    <div class="accordion-body">
        <div class="accordion-content">

            <div class="level">
                <div class="level-item has-text-centered">
                    <figure class='image is-256x256'>
                        <img id="namegen-image-1" class="profile-pic" src='/img/portfolio/nameGen-Screenshot001.png' title="Bunny Name Generator Image">
                    </figure>
                    <figure class='image is-256x256'>
                        <img id="namegen-image-2" class="profile-pic" src='/img/portfolio/nameGen-Screenshot002.png' title="Bunny Name Generator Image">
                    </figure>
                </div>
            </div>

            <div class="modal" id="namegen-modal-1">
                <div class="modal-background"></div>
                <div class="modal-content">
                    <p class="image">
                        <img src="/img/portfolio/nameGen-Screenshot001.png" alt="">
                    </p>
                </div>
                <button id="namegen-modal-close-1" class="modal-close is-large" aria-label="close"></button>
            </div>

            <script>
                document.getElementById('namegen-image-1').onclick = function () {
                    document.getElementById('namegen-modal-1').classList.toggle('is-active');
                }

                document.getElementById('namegen-modal-close-1').onclick = function () {
                    document.getElementById('namegen-modal-1').classList.toggle('is-active');
                }
            </script>

            <div class="modal" id="namegen-modal-2">
                <div class="modal-background"></div>
                <div class="modal-content">
                    <p class="image">
                        <img src="/img/portfolio/nameGen-Screenshot002.png" alt="">
                    </p>
                </div>
                <button id="namegen-modal-close-2" class="modal-close is-large" aria-label="close"></button>
            </div>

            <script>
                document.getElementById('namegen-image-2').onclick = function () {
                    document.getElementById('namegen-modal-2').classList.toggle('is-active');
                }

                document.getElementById('namegen-modal-close-2').onclick = function () {
                    document.getElementById('namegen-modal-2').classList.toggle('is-active');
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
                        <a href="https://github.com/BunnyRabbit2/namegen_winform" title="Github link for Bunny NameGen Winform">Github link</a>
                    </h5>

                </div>
            </div>
            <div class="columns">
                <div class="column">
                    <p>I design Magic: The Gathering cards occasionally and I found that I was mostly terrible at coming up
                        with names for any legendary things or for organisation/kingdom/clan names. I used to use Chris Pound's
                        site for bits and pieces but I didn't like waiting for the site to update it's list so I ported the
                        scripts over to C# and dropped them into a simple WinForm.</p>

                    <p>By default, it will open any xml in the XMLDatasets folder and any txt files found in the Datasets folder.
                        XML datasets have priority and so a txt dataset with the same name as an XML dataset will NOT be
                        loaded at all. It can also load a dataset through the file menu and that dataset will be tacked onto
                        the end of the list.</p>

                    <p>Most of the datasets are from Chris Pound's site with a few added by myself. The scripts I based my work
                        on
                        <a href="http://generators.christopherpound.com">can be found here</a>
                    </p>

                    <p>I am currently working on porting it to being a webapp.</p>
                </div>
            </div>
            <div class="columns">
                <div class="column">

                    <h5 class="subtitle is-5">Dataset Format</h5>

                    <p>Each dataset is either a simple xml file or a txt file containing all the words separated by spaces and
                        new lines. The program currently accepts no other form of dataset.</p>
                </div>
            </div>
            <div class="columns">
                <div class="column">

                    <h5 class="subtitle is-5">Provided datasets:</h5>

                    <ul>
                        <li>
                            <a href="Datasets/Arabic (female names).txt">Arabic (female names)</a>
                        </li>
                        <li>
                            <a href="Datasets/Arabic (male names).txt">Arabic (male names)</a>
                        </li>
                        <li>
                            <a href="Datasets/Arabic (surnames).txt">Arabic (surnames)</a>
                        </li>
                        <li>
                            <a href="Datasets/Basque (male names).txt">Basque (male names)</a>
                        </li>
                        <li>
                            <a href="Datasets/Basque (female names).txt">Basque (female names)</a>
                        </li>
                        <li>
                            <a href="Datasets/Celtic (female names).txt">Celtic (female names)</a>
                        </li>
                        <li>
                            <a href="Datasets/Celtic (male names).txt">Celtic (male names)</a>
                        </li>
                        <li>
                            <a href="Datasets/Cthulhoid.txt">Cthulhoid</a>
                        </li>
                        <li>
                            <a href="Datasets/Latvian (female names).txt">Latvian (female names)</a>
                        </li>
                        <li>
                            <a href="Datasets/Latvian (male names).txt">Latvian (male names)</a>
                        </li>
                        <li>
                            <a href="Datasets/Viking (female names).txt">Viking (female names)</a>
                        </li>
                        <li>
                            <a href="Datasets/Viking (male names).txt">Viking (male names)</a>
                        </li>
                        <li>
                            <a href="Datasets/Elvish.txt">Elvish</a>
                        </li>
                        <li>
                            <a href="Datasets/TestData.txt">TestData</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</article>