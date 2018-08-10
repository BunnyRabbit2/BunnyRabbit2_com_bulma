<!-- Contact -->
<section id="contact" class="hero is-bold hero-extra-padding">
    <div class="hero-body">
        <div class=" columns">
            <div class="column has-text-centered">
                <h1 class="title is-1 is-uppercase">Contact Me</h1>
                <hr class="page-divider">
            </div>
        </div>
        <div class="columns is-centered">
            <div class="column is-half">
                <form class="form-horizontal">
                    <div class="field">
                        <label id="name-input-label" class="label rb-form" for="name-input">Name</label>
                        <div class="control has-icons-left">
                            <input id="name-input" name="name-input" class="input is-large" type="text" placeholder="Name" onkeyup="inputChange(this.value, this.id)">
                            <span class="icon is-medium is-left">
                                <i class="fas fa-user fa-lg"></i>
                            </span>
                        </div>
                    </div>
                    <div class="field">
                        <label id="email-input-label" class="label rb-form" for="email-input">Email Address</label>
                        <div class="control has-icons-left">
                            <input id="email-input" name="email-input" class="input is-large" type="email" placeholder="Email Address" onkeyup="inputChange(this.value, this.id)">
                            <span class="icon is-medium is-left">
                                <i class="fas fa-at fa-lg"></i>
                            </span>
                        </div>
                    </div>
                    <div class="field">
                        <label id="phone-input-label" class="label rb-form" for="phone-input">Phone Number</label>
                        <div class="control has-icons-left">
                            <input id="phone-input" name="phone-input" class="input is-large" type="text" placeholder="Phone Number" onkeyup="inputChange(this.value, this.id)">
                            <span class="icon is-medium is-left">
                                <i class="fas fa-phone fa-lg"></i>
                            </span>
                        </div>
                    </div>
                    <div class="field">
                        <label id="message-input-label" class="label rb-form" for="message-input">Message</label>
                        <div class="control">
                            <textarea id="message-input" name="message-input" class="textarea is-large" type="text" placeholder="Enter your message here"
                                onkeyup="inputChange(this.value, this.id)"></textarea>
                        </div>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <button id="submit-button" name="submit-button" class="button is-info">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</section>