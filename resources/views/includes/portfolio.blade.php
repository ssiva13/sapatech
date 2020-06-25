<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
    <h2>Portfolio</h2><br>
    <h4>Our Reputation</h4>
    <div class="row text-center slideanim">
        <div class="col-sm-4">
            <div class="thumbnail" style="width:400; height:300">
                <img src="{{ asset('img/geek.jpg')}}" alt="Geek" width="400" height="300">
                <p><strong>TechBlaze Kenya</strong></p>
                <p>Yes, we built Techblaze</p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="thumbnail" style="width:400; height:300">
                <img src="{{ asset('img/default-monochrome.svg')}}" alt="Geek" width="400" height="300">
                <p><strong>SapaTech</strong></p>
                <p>Yes, we built our very own Sapatech</p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="{{ asset('/img/geek.jpg')}}" alt="Geek" width="400" height="300">
                <p><strong>Crime-Lex</strong></p>
                <p>Yes, we built Crime-Lex</p>
            </div>
        </div>
    </div>
    <div class="special-heading-inner-border" style="border-color:#000;"></div>

    <br>
    <div class="customer">
        <h2>What our clients say</h2>
        <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <h4>"SapaTech Solutions is the best. I am so happy with the website they designed for
                        us!"<br><span>BenSon Maina,
                            Maish Tech</span></h4>
                </div>
                <div class="item">
                    <h4>"One word for SapaTech Solutions... WOW!!"<br><span>Sam Musili, Satoshi Telecoms</span></h4>
                </div>
                <div class="item">
                    <h4>"Could I... Be any more happy with SapaTech Solutions?"<br><span>David Kang'ara, CyberSec
                            Engineer/PenTester,
                            HackerOne</span></h4>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon fas fa-arrow-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon fas fa-arrow-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>