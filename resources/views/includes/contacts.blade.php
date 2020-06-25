<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid">

    <h2 class="text-center">CONTACT US</h2>
    <div class="row">
        <div class="col-sm-5">
            <p>Contact us and we'll get back to you within 24 hours.</p>
            <p><span class="glyphicon fas fa-map-marker-alt"></span> Nairobi, Kenya</p>
            <p><span class="glyphicon fas fa-phone"></span> +254 737498706</p>
            <p><span class="glyphicon far fa-envelope"></span> support@sapatech.co.ke</p>
            <p>
                <a href="https://www.facebook.com/sapatech" target="_blank" title="Visit Our Facebook Page"><span
                        class="glyphicon fab fa-facebook-square"></span></a>
                <a href="https://www.google.com/sapatech" target="_blank" title=""><span
                        class="glyphicon fab fa-google"></span></a>
                <a href="https://www.twitter.com/sapatechke" target="_blank" title="Find Us on Twitter"><span
                        class="glyphicon fab fa-twitter-square"></span></a>
                <a href="https://www.youtube.com/sapatech" target="_blank" title="Find Us on Youtube"><span
                        class="glyphicon fab fa-youtube"></span></a>
            </p>
        </div>
        <div class="col-sm-7 slideanim">
            <form action=" {{ url('/mailing') }} " method="POST">
                @method('POST')
                @csrf
                <div class="row">
                    @include('includes.messages')
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>

                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="text" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 form-group">
                        <input class="form-control" id="subject" name="subject" placeholder="Subject" type="text"
                            required>
                    </div>
                </div>

                <textarea class="form-control" id="message" name="message" placeholder="Message"
                    rows="5"></textarea><br>
                <div class="row">
                    <div class="col-sm-12 form-group">

                        <button class="btn btn-primary pull-right" type="submit">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>