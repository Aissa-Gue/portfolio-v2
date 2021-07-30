<section id="contact" class="container">
    <h3 class="text-center py-4 border-bottom">Get In Touch</h3>
    <p class="fs-5 text-center mb-5">
        I would love to hear your interesting thoughts and your ideas.
        <br> Plz send me a meessage and I will get
        back to you within 24 hours.
    </p>
    <div class="row justify-content-center align-items-center">
        <div class="col-md-5">

            <img src="img/contact.svg" class="img-fluid" alt="">

        </div>
        <div class="col-md-6 mt-3">
            <form action="sendMail.php" method="POST">
                <!-- Name input -->
                <div class="form-outline mb-4">
                    <input type="text" name="name" id="name" class="form-control" required />
                    <label class="form-label" for="name">Name</label>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" name="email" id="email" class="form-control" required />
                    <label class="form-label" for="email">Email address</label>
                </div>

                <!-- Subject input -->
                <div class="form-outline mb-4">
                    <input type="text" name="subject" id="subject" class="form-control" required />
                    <label class="form-label" for="subject">Subject</label>
                </div>

                <!-- Message input -->
                <div class="form-outline mb-4">
                    <textarea class="form-control" name="message" id="message" rows="4" required></textarea>
                    <label class="form-label" for="message">Message</label>
                </div>

                <!-- Submit button -->
                <button type="submit" name="send" class="btn btn-primary btn-block mb-4">Send</button>
            </form>
        </div>
    </div>
</section>