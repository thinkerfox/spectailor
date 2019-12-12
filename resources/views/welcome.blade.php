<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <title>Spectailor</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- YOUR META INFO -->
    <meta name="description" content="Spectailor">
    <meta name="author" content="http://spectailor.co">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon-100.png">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>
    <section class="section section-intro" id="section-intro">
        <main class="max-container">
            <header>
                <div class="row align-items-center">
                    <div class="col-6"><img src="{{ asset('img/logo.svg') }}" alt="Spectailor" title="Spectailor Official Website"></div>
                    <div class="col-6"><button class="spectailor-btn" id="get-in-touch-btn">GET IN TOUCH</button></div>
                </div>
            </header>
        </main>
        <div class="main-container">
            <div class="opening">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6 hidden-lg hidden-md hidden-sm">
                        <img src="{{ asset('img/intro.svg') }}" alt="Welcome to Spectailor" class="img-fluid">
                    </div>
                    <div class="col-md-5 col-12">
                        <span class="hero-light">Bespoke</span>
                        <h1>User Experience</h1>
                        <p>We offer uniquely suited experience to your target group and provide novel solutions to create added value for your business.</p>
                        <button class="spectailor-btn dark-btn" id="explore-btn">EXPLORE NOW</button>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-12 col-md-6 hidden-xs">
                        <img src="{{ asset('img/intro.svg') }}" alt="Welcome to Spectailor" class="img-fluid">
                    </div>
                </div>
                <div class="opening-end hidden-xs">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <span class="scroll-down">Scroll Down</span>
                        </div>
                        <div class="col-6">
                            <span class="thinkerfox">Business<br/>Partner</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-content" id="section-audit">
        <div class="main-container">
            <div class="content">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <img src="{{ asset('img/audit.svg') }}" alt="Audit" class="img-fluid section-img">
                    </div>
                    <div class="col-1"></div>
                    <div class="col-md-7 col-12">
                        <h2>
                            Audit
                        </h2>
                        <h3>
                            Our priority is always to gather and understand data.
                        </h3>
                        <div class="row">
                            <div class="col-12"><h4>Activities</h4></div>
                            <div class="col-md-4 col-12">
                                <p>
                                    Stakeholder interviews <br/>
                                    User interviews <br/>
                                    Field studies <br/>
                                    Diary studies
                                </p>

                            </div>
                            <div class="col-md-8 col-12">
                                <p>
                                    Experience sampling <br/>
                                    Competitor analysis and industry research <br/>
                                    And more…
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12"><h4>Value</h4></div>
                            <div class="col-12">
                                <p>
                                    Organisational alignment & focus <br/>
                                    Deeper understanding of user issues <br/>
                                    Insightful experience map for the acquisition <br/>
                                    Improved awareness of future market expectations <br/>
                                    Sound strategy process
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-content" id="section-refine">
        <div class="main-container">
            <div class="content">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <img src="{{ asset('img/refine.svg') }}" alt="Audit" class="img-fluid section-img">
                    </div>
                    <div class="col-1"></div>
                    <div class="col-md-7 col-12">
                        <h2>
                            Refine
                        </h2>
                        <h3>
                            We constantly evaluate the efficiency of the UX audit to yield optimum results.
                        </h3>
                        <div class="row">
                            <div class="col-12"><h4>Activities</h4></div>
                            <div class="col-12">
                                <p>
                                    User journey / experience map <br/>
                                    Wireframing & prototyping <br/>
                                    User tests <br/>
                                    Card sorting
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12"><h4>Value</h4></div>
                            <div class="col-12">
                                <p>
                                    Ongoing growth <br/>
                                    Rapid adaptability to changing market conditions <br/>
                                    Increased conversion rate <br/>
                                    User acceptance
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-content" id="section-strategy">
        <div class="main-container">
            <div class="content">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <img src="{{ asset('img/strategy.svg') }}" alt="Audit" class="img-fluid section-img">
                    </div>
                    <div class="col-1"></div>
                    <div class="col-md-7 col-12">
                        <h2>
                            Strategy
                        </h2>
                        <h3>
                            In the light of the audit results, we identify less-than-perfect areas and user-oriented strategy.
                        </h3>
                        <div class="row">
                            <div class="col-12"><h4>Activities</h4></div>
                            <div class="col-12">
                                <p>
                                    Personas, scenarios, contexts modeling <br/>
                                    Information architecture <br/>
                                    MVP definition, product roadmap <br/>
                                    Workshops
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12"><h4>Value</h4></div>
                            <div class="col-12">
                                <p>
                                    Reconceptualisation <br/>
                                    Target audience definition <br/>
                                    Vision creation experience <br/>
                                    Lucid process control
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-content" id="section-tailoring">
        <div class="main-container">
            <div class="content">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <img src="{{ asset('img/tailoring.svg') }}" alt="Audit" class="img-fluid section-img">
                    </div>
                    <div class="col-1"></div>
                    <div class="col-md-7 col-12">
                        <h2>
                            Tailoring
                        </h2>
                        <h3>
                            We offer uniquely suited experience to your target group and provide novel solutions to create added value for your business.
                        </h3>
                        <div class="row">
                            <div class="col-12"><h4>Activities</h4></div>
                            <div class="col-12">
                                <p>
                                    Solutions & conceptual design <br/>
                                    Interaction & visual design <br/>
                                    Data visualizations <br/>
                                    UI component libraries
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12"><h4>Value</h4></div>
                            <div class="col-12">
                                <p>
                                    Best practices and standards <br/>
                                    Mitigation for inefficient source <br/>
                                    Purposeful design <br/>
                                    Better SEO planning
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-footer" id="section-contact">
        <div class="main-container">
            <div class="content">
                <div class="row">
                    <div class="col-md-4 col-12">
                        <h2>
                            Our Offices
                        </h2>
                        <p class="contact-sub">Don’t hesitate. Feel free to visit us.</p>
                        <div class="contact-point clearfix">
                            <h4>Tubitak Martek</h4>
                            <address>
                                Tübitak Gebze Yerleşkesi İdari Kuluçka <br> Binası 26/41 Gebze, Kocaeli
                            </address>
                            <a class="spectailor-link small-link" href="mailto:hello@spectailor.co">Get directions</a>
                        </div>
                        <div class="contact-point clearfix">
                            <h4>Kolektif House</h4>
                            <address>
                                Esentepe Mah. Talatpaşa Cad. No: 5 <br> (Harman Sok. Girişi) Şişli, İstanbul
                            </address>
                            <a class="spectailor-link small-link" href="mailto:hello@spectailor.co">Get directions</a>
                        </div>
                    </div>
                    <div class="col-2"></div>
                    <div class="col-md-6 col-12">
                        <h2>
                            Tailor with us!
                        </h2>
                        <p class="contact-sub">Our form is not cool enough? <a class="spectailor-link" href="mailto:hello@spectailor.co">Send us an e-mail</a></p>
                        <div class="row">
                            <div class="col-12">
                                <form action="{{ route('mail.contact') }}" method="POST" id="spectailor-form">
                                    @csrf
                                    <div class="form-set">
                                        <label for="name">Your full name</label>
                                        <input type="text" name="name" id="name_field" required placeholder="How should we call you?">
                                    </div>
                                    <div class="form-set">
                                        <label for="email">Your fancy mail</label>
                                        <input type="text" name="email" id="email_field" required placeholder="Your mail adress">
                                    </div>
                                    <div class="form-set">
                                        <label for="body">Your message</label>
                                        <textarea name="body" id="myTextArea" required rows="1" placeholder="What’s on your mind?"></textarea>
                                    </div>
                                    <div class="form-set">
                                        <button class="spectailor-btn dark-btn hand-logo" id="spectailor-form-submit" type="submit"><i class="icon-hand"></i> SAY HI!</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="max-container">
                <div class="row align-items-center">
                    <div class="col-md-4 hidden-xs">
                        <p class="copyright">© 2019 Spectailor - All Rights Reserved</p>
                    </div>
                    <div class="col-md-4 footer-logo hidden-xs">
                        <img src="{{ asset('img/logo.svg') }}" alt="Spectailor">
                    </div>
                    <div class="col-md-4 col-12">
                        <ul class="socials">
                            <li><a href="" id="icon-instagram"></a></li>
                            <li><a href="" id="icon-linkedin"></a></li>
                            <li><a href="" id="icon-dribble"></a></li>
                            <li><a href="" id="icon-medium"></a></li>
                        </ul>
                    </div>
                    <div class="col-12 hidden-md hidden-sm hidden-lg">
                        <p class="copyright">© 2019 Spectailor - All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </footer>
    </section>

</body>
<script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
<script>
    let sections = ['section-intro', 'section-audit', 'section-refine', 'section-strategy', 'section-tailoring', 'section-contact'];
    if($( window ).height() < 800){
        $('.opening-end').addClass('static-end');
        $('footer').addClass('static-footer-end');
    }
    $(window).resize(function(){
        if($( window ).height() < 800){
            $('.opening-end').addClass('static-end');
            $('footer').addClass('static-footer-end');
        }else{
            $('.opening-end').removeClass('static-end');
            $('footer').removeClass('static-footer-end');
        }
    });

    $(function() {
        $('#myTextArea').on('keyup paste', function() {
            var $el = $(this),
                offset = $el.innerHeight() - $el.height();

            if ($el.innerHeight() < this.scrollHeight) {
                // Grow the field if scroll height is smaller
                $el.height(this.scrollHeight - offset);
            } else {
                // Shrink the field and then re-set it to the scroll height in case it needs to shrink
                $el.height(1);
                $el.height(this.scrollHeight - offset);
            }
        });
    });

    $('#explore-btn').click(function(){
        $('html, body').stop().animate({ scrollTop: $('#section-audit').offset().top }, 1000);
    });
    $('#get-in-touch-btn').click(function(){
        $('html, body').stop().animate({ scrollTop: $('#section-contact').offset().top }, 1000);
    });
    $('input:required').change(function(){
        let elem = $(this);
        if(elem.val() === ""){
            elem.siblings('label').css('color', '#f0403b');
            elem.css('border-color', '#f0403b');
        }else{
            elem.siblings('label').css('color', '#000');
            elem.css('border-color', '#000');
        }
    });
    $('textarea:required').change(function(){
        let elem = $(this);
        if(elem.val() === ""){
            elem.siblings('label').css('color', '#f0403b');
            elem.css('border-color', '#f0403b');
        }else{
            elem.siblings('label').css('color', '#000');
            elem.css('border-color', '#000');
        }
    });


    $('#spectailor-form-submit').on('click',function(){
        $('input:required').each(function(){
            let elem = $(this);
            if(elem.val() === ""){
                elem.css('border-color', '#f0403b');
                elem.siblings('label').css('color', '#f0403b');
            }else{
                elem.css('border-color', '#000');
                elem.siblings('label').css('color', '#000');
            }
        });
        $('textarea:required').each(function(){
            let elem = $(this);
            if(elem.val() === ""){
                elem.css('border-color', '#f0403b');
                elem.siblings('label').css('color', '#f0403b');
            }else{
                elem.css('border-color', '#000');
                elem.siblings('label').css('color', '#000');
            }
        });
    });
    var globalBaseUrl = "{{ url('') }}";
    $('#spectailor-form').submit(function(e){
        e.preventDefault();
        var name = $('#name_field').val();
        var email = $('#email_field').val();
        var body = $('#myTextArea').val();
        $('#spectailor-form-submit').text('SENDING...').addClass('form-wait');
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            url: globalBaseUrl+'/contact',
            data: { name:name, email:email, body:body },
            success: function( msg ) {
                $('#spectailor-form-submit').text('SUCCESS').removeClass('form-wait').addClass('form-success')
            }
        });
    });
</script>
</html>