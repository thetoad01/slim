<form class="contact-form" method="post" action="/contact" novalidate>
    <div class="visually-hidden">
        <label for="website">Website</label>
        <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
    </div>

    <div class="row g-4">
        <div class="col-md-6">
            <label class="tag" for="name">Name</label>
            <input class="form-control" type="text" id="name" name="name" autocomplete="name" required>
        </div>
        <div class="col-md-6">
            <label class="tag" for="email">Your email</label>
            <input class="form-control" type="email" id="email" name="email" autocomplete="email" required>
        </div>
        <div class="col-12">
            <label class="tag" for="message">Message</label>
            <textarea class="form-control" id="message" name="message" rows="6" required></textarea>
        </div>
    </div>

    <button class="btn btn-copper mt-4" type="submit">Send</button>
</form>
