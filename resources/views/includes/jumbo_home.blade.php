<div class="jumbotron text-center" id="top">
    <h1 class="head-hide">SapaTech Solutions</h1>
    <div class="head-space"></div>
    <div class="heading-inner-border head-hide"></div>
    <p>Subscribe to Our Newsletter for more Information</p>
    <form action="POST" action=" {{ url('/mailing') }}">
        <div class="">
            <input type="email" class="search-form" size="80" placeholder="Email Address" required>
            <div class="btn">
                <button type="button" class="btn btn-sub">Subscribe</button>
            </div>
        </div>
    </form>
</div>