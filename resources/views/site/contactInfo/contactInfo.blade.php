<section class="section section-last text-md-left" id="contacts" data-type="anchor">
    <div class="container custom-container">
        <div class="row">
            <div class="col-sm-12 col-md-5 col-xxl-4 section-newsletter">
                <h3 class="text-center text-md-left">Join Our<br> Weekly Newsletter</h3>
                <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="subscribe"
                      method="post" action="bat/rd-mailform.php">
                    <div class="form-wrap">
                        <input class="form-input" id="subscribe-form-5-email" type="email" name="email"
                               data-constraints="@Email @Required">
                        <label class="form-label" for="subscribe-form-5-email">Email Address</label>
                    </div>
                    <button class="button button-newsletter button-default" type="submit">Subscribe<p
                            class="material-icons"></p></button>
                </form>
            </div>
            <div class="col-md-7 contact-form-wrap">
                <h2 class="font-weight-bold text-spacing--1">Get in Touch</h2>
                <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact"
                      method="post" action="bat/rd-mailform.php">
                    <div class="row row-30 row-md-80">
                        <div class="col-xl-6">
                            <h3 class="font-weight-bold text-spacing--1">Name</h3>
                            <div class="form-wrap">
                                <input class="form-input" id="contact-first-name" type="text" name="name"
                                       data-constraints="@Required">
                                <label class="form-label" for="contact-first-name">Type your name here</label>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <h3 class="font-weight-bold text-spacing--1">Email</h3>
                            <div class="form-wrap">
                                <input class="form-input" id="contact-email" type="email" name="email"
                                       data-constraints="@Email @Required">
                                <label class="form-label" for="contact-email">Type your mail here</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <h3 class="font-weight-bold text-spacing--1">Message</h3>
                            <div class="form-wrap form-wrap-textarea">
                                <label class="form-label" for="contact-message">Your Message</label>
                                <textarea class="form-input" id="contact-message" name="message"
                                          data-constraints="@Required"></textarea>
                            </div>
                        </div>
                    </div>
                    <button class="button button-default" type="submit">Send <i class="material-icons"></i></button>
                </form>
            </div>
        </div>
    </div>
</section>
