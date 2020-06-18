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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fullpage.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/examples.css') }}" />
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-155904987-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-155904987-1');
</script>
</head>

<body>
<header class="sticky-header" id="section-home">
    <main class="max-container">
        <div class="row align-items-center">
            <div class="col-6 col-lg-6">
                <div class="logo-container clearfix">
                    <a href="#home" class="sticky-header">
                        <img src="{{ asset('img/logo.svg') }}" class="spectailor-logo" alt="Spectailor">
                        <img src="{{ asset('img/logo-text.svg') }}" class="logo-blanket" alt="">
                    </a>
                </div>
            </div>
            <div class="col-6 col-lg-6"><a class="spectailor-btn navigation"  data-href="#section-contact" id="get-in-touch-btn">İLETİŞİME GEÇİN</a></div>
        </div>
    </main>
</header>

<main>
    <section class="section spec-section section-intro" data-anchor="home">
        <div class="main-container ">
            <div class="first-container main-container fullHeight">
            <div class="opening">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6 hidden-lg hidden-md hidden-sm">
                        <img src="{{ asset('img/intro.svg') }}" alt="Welcome to Spectailor" class="img-fluid">
                    </div>
                    <div class="col-md-5 col-12">
                        <span class="hero-light wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">Ürününüzün  </span>
                        <h1 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">kullanılabilirliğini </h1>
                        <span class="hero-light wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">artırın ve rekabet avantajı elde edin.  </span>
                        <p class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">Karmaşık süreçleri kolaylaştırarak, kullanıcı deneyimini faydalı ve kullanışlı hale getirin.</p>
                        <button class="spectailor-btn dark-btn hidden-xs wow fadeIn navigation" data-href="#section-audit" data-wow-duration="1s" data-wow-delay="0.5s" id="explore-btn">HEMEN KEŞFET</button>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-12 col-md-6 colNo hidden-xs">
                        <img src="{{ asset('img/sections/section-1.svg') }}" class="img-fluid wow fullWidth fadeInRight" alt="Welcome to Spectailor" data-wow-duration="1s" data-wow-delay="0s" >
                    </div>
                </div>
            </div>
            </div>
            <div class="opening-end hidden-xs">
                <div class="row align-items-center">
                    <div class="col-6 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0s">
                        <span class="scroll-down">Keşfet</span>
                    </div>
                    <div class="col-6 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0s">
                        <a href="https://thinkerfox.com" class="link-black" target="_blank"><span class="thinkerfox">Yazılım<br/>Partneri</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="spec-section section-content" id="section-audit">
        <div class="row align-items-center fullHeight">
            <div class="col-12">
                <div class="main-container">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-4 col-12 wow fadeIn" data-wow-duration="2.5s" data-wow-delay="0.6s">
                                <img src="{{ asset('img/sections/section-2.svg') }}"  alt="Audit" class="img-fluid section-img">
                            </div>
                            <div class="col-1"></div>
                            <div class="col-md-7 col-12" >
                                <h2 class="wow fadeIn" data-wow-duration="2.5s" data-wow-delay="0s">
                                    Hedef kitlenizi daha yakından tanıyın
                                </h2>
                                <h3  class="wow fadeIn font-24" data-wow-duration="2.5s" data-wow-delay="0.4s">
                                    Araştırma programları ile kullanıcıların ihtiyaçları ve takıldığı noktalarını keşfediyor, davranış modelleri oluşturarak stratejik
                                    kararlar için güvenilir bir temel hazırlıyoruz. Kullanıcı sadakatini ve büyüme/dönüşüm oranınızı iyileştiriyoruz.
                                </h3>
                                <div class="row">
                                    <div class="col-md-6 col-12 wow fadeIn" data-wow-duration="2.5s" data-wow-delay="0.6s">
                                        <p>
                                            <span>Kullanıcı araştırması</span>
                                            <span>Persona belirleme</span>
                                            <span>Kullanıcı yolculuğu haritası</span>
                                            <span>Teknoloji değerlendirmesi</span>
                                            <span>Kullanıcı edinme stratejisi</span>
                                        </p>
                                    </div>
                                    <div class="col-md-6 col-12 wow fadeIn" data-wow-duration="2.5s" data-wow-delay="0.8s">
                                        <p>
                                            <span>Kullanıcıların ne istediğini daha iyi anlayın</span>
                                            <span>Ürününüzün zayıf noktalarını keşfedin</span>
                                            <span>Strateji süreci için sağlam bir temel oluşturun</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="spec-section section-content" id="section-refine">
        <div class="row align-items-center fullHeight">
            <div class="col-12">
                <div class="main-container">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-4 col-12 wow fadeIn" data-wow-duration="2.5s" data-wow-delay="0.6s">
                                <img src="{{ asset('img/sections/section-3.svg') }}" alt="Refine" class="img-fluid section-img">
                            </div>
                            <div class="col-1"></div>
                            <div class="col-md-7 col-12">
                                <h2 class="wow fadeIn" data-wow-duration="2.5s" data-wow-delay="0s">
                                    Bir fikri prototip haline getirin
                                </h2>
                                <h3 class="wow fadeIn font-24" data-wow-duration="2.5s" data-wow-delay="0.2s">
                                    Projenizi doğru anlayarak, en uygun araçları kullanıyor ve analizlerimizi tamamlıyoruz. Vizyonunuzu, fikirlerinizi ve hedeflerinizi karşılayan insan merkezli somut bir projeye dönüştürmenize destek oluyoruz.
                                </h3>
                                <div class="row">
                                    <div class="col-lg-6 col-12 wow fadeIn" data-wow-duration="2.5s" data-wow-delay="0.3s">
                                        <p>
                                            <span>Wireframe oluşturma</span>
                                            <span>Prototipleme ile fikirleri doğrulama</span>
                                            <span>Kullanılabilirlik denetimi</span>
                                            <span>İnsan merkezli etkileşim tasarımı</span>
                                            <span>Tasarım çeşitliliği araştırması</span>
                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-12 wow fadeIn" data-wow-duration="2.5s" data-wow-delay="0.4s">
                                        <p>
                                            <span>İdeal özellikleri belirleyin</span>
                                            <span>Değişen pazar koşullarına adapte olun</span>
                                            <span>Bir UX çerçevesi oluşturun</span>
                                            <span>Ürününüzü başkalarına sergileyin</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="spec-section section-content" id="section-strategy">
        <div class="row align-items-center fullHeight">
            <div class="col-12">
                <div class="main-container">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-4 col-12 wow fadeIn" data-wow-duration="2.5s" data-wow-delay="0.6s">
                                <img src="{{ asset('img/sections/section-4.svg') }}" alt="Strategy" class="img-fluid section-img">
                            </div>
                            <div class="col-1"></div>
                            <div class="col-md-7 col-12">
                                <h2 class="wow fadeIn" data-wow-duration="2.5s" data-wow-delay="0s">
                                    Yeni bir ürün oluşturun
                                </h2>
                                <h3 class="wow fadeIn font-24" data-wow-duration="2.5s" data-wow-delay="0.2s">
                                    İyi bir MVP tanımlamanın; uzun ömürlü ve sürdürülebilir ürünler için ne kadar önemli olduğunun farkındayız. Kısa zamanlı projelerden, daha uzun soluklu ve sürekli gelişen ürünlere kadar, her türlü projenizi hayata geçirmenize eşlik ediyoruz.
                                </h3>
                                <div class="row">
                                    <div class="col-lg-6 col-12 wow fadeIn" data-wow-duration="2.5s" data-wow-delay="0.3s">
                                        <p>
                                            <span>Pazar araştırması</span>
                                            <span>Kullanıcı araştırması</span>
                                            <span>Ürün yol haritası</span>
                                            <span>Prototipleme</span>
                                            <span>Görsel Tasarım</span>
                                            <span>Kullanılabilirlik denetimi</span>
                                            <span>Marka geliştirme stratejisi</span>
                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-12 wow fadeIn" data-wow-duration="2.5s" data-wow-delay="0.4s">
                                        <p>
                                            <span>Bir takımı net bir vizyon etrafında birleştirin</span>
                                            <span>Hızlı bir şekilde MVP oluşturun</span>
                                            <span>Ürününüzü uyarlayın, büyütün ve ölçeklendirin</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="spec-section section-content" id="section-tailoring">
        <div class="row align-items-center fullHeight">
            <div class="col-12">
                <div class="main-container">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-4 col-12 wow fadeIn" data-wow-duration="2.5s" data-wow-delay="0.6s">
                                <img src="{{ asset('img/sections/section-5.svg') }}" alt="Tailoring" class="img-fluid section-img">
                            </div>
                            <div class="col-1"></div>
                            <div class="col-md-7 col-12">
                                <h2 class="wow fadeIn" data-wow-duration="2.5s" data-wow-delay="0s">
                                    Mevcut ürününüzü geliştirin
                                </h2>
                                <h3 class="wow fadeIn font-24" data-wow-duration="2.5s" data-wow-delay="0.2s">
                                    Kullanılabilirlik sorunlarının bir projenin hedeflerine ulaşmasındaki en büyük engel olduğunun farkındayız. Verilerin gücü doğrultusunda kullanılabilirlik sorunlarını
                                    belirleyerek; hedef kitlenizi
                                    anlıyor ve kullanımı kolaylaştırma odaklı uygun çözümler tasarlıyoruz.
                                </h3>
                                <div class="row">
                                    <div class="col-lg-6 col-12 wow fadeIn" data-wow-duration="2.5s" data-wow-delay="0.3s">
                                        <p>
                                            <span>Performans testleri</span>
                                            <span>Kullanılabilirlik denetimi</span>
                                            <span>Kullanıcı testleri</span>
                                            <span>Çok değişkenli testler</span>
                                            <span>Dönüşüm oranı optimizasyonu</span>
                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-12 wow fadeIn" data-wow-duration="2.5s" data-wow-delay="0.4s">
                                        <p>
                                            <span>Kullanıcı deneyimini ve memnuniyetini doğrulayın</span>
                                            <span>Ürününüz ile ilgili varsayımları ortadan kaldırın</span>
                                            <span>Daha iyi dönüşüm oranı elde edin</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="spec-section section-content" id="section-meet">
        <div class="row align-items-center fullHeight">
            <div class="col-12">
                <div class="main-container">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-4 col-12 wow fadeIn" data-wow-duration="2.5s" data-wow-delay="0.6s">
                                <img src="{{ asset('img/sections/section-6.svg') }}" alt="Tailoring" class="img-fluid section-img">
                            </div>
                            <div class="col-1"></div>
                            <div class="col-md-7 col-12">
                                <h2 class="wow fadeIn" data-wow-duration="2.5s" data-wow-delay="0s">
                                    Ödüllü UX takımımızla çalışın
                                </h2>
                                <h3 class="wow fadeIn font-24" data-wow-duration="2.5s" data-wow-delay="0.2s">
                                    Web sitelerinden, mobil uygulamalara; e-ticaret sistemlerinden, ERP yazılım arayüzlerine kadar birçok projede deneyim tasarlayan ödüllü Spectailor ekibimizle, projenizin UX Takımı olarak çalışıyoruz.
                                </h3>
                                <div class="row">
                                    <div class="col-lg-6 col-12 wow fadeIn" data-wow-duration="2.5s" data-wow-delay="0.3s">
                                        <p>
                                            <span>Atölyeler</span>
                                            <span>Tasarım sprintleri</span>
                                            <span>Görev analizi</span>
                                            <span>Liderlik</span>
                                            <span>Danışmanlık</span>
                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-12 wow fadeIn" data-wow-duration="2.5s" data-wow-delay="0.4s">
                                        <p>
                                            <span>Tasarım sprintleri ile hızlı gelişme elde edin</span>
                                            <span>Tasarım ekibinizi güçlendirin</span>
                                            <span>Zamandan tasarruf edin</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section spec-section section-footer" data-anchor="contact" id="section-contact">
        <div class="row align-items-center fullHeight">
            <div class="col-12">
                <div class="main-container">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-4 col-12">
                                <h2 class="wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
                                    Bizi ziyaret edin
                                </h2>
                                <p class="contact-sub wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.1s">Sizi ağırlayabileceğimiz 2 ofisimiz var.</p>
                                <div class="contact-point clearfix wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                    <h4>Ar-Ge Merkezi</h4>
                                    <address>
                                        Tübitak Gebze Yerleşkesi İdari Kuluçka <br> Binası 26/41 Gebze, Kocaeli
                                    </address>
                                    <a class="spectailor-link small-link" target="_blank" href="https://www.google.com/maps/place/Marmara+Teknokent/@40.7911646,29.4613693,17z/data=!4m12!1m6!3m5!1s0x14cb21da08d63b0f:0xd5496623aa7b626f!2zVMOcQsSwVEFLIE1BUlRFSw!8m2!3d40.7960302!4d29.4615546!3m4!1s0x0:0xa377ce0f80ed1f85!8m2!3d40.7908384!4d29.4620651">Yol tarifi</a>
                                </div>
                                <div class="contact-point clearfix wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.3s">
                                    <h4>Ofis</h4>
                                    <address>
                                        Kolektif House Levent, <br> Esentepe Mah. Talatpaşa Cad. No: 5 <br> (Harman Sok. Girişi) Şişli, İstanbul
                                    </address>
                                    <a class="spectailor-link small-link" target="_blank" href="https://www.google.com/maps/place/Kolektif+House/@41.0797124,29.0062754,17z/data=!3m1!4b1!4m5!3m4!1s0x14cab66774177699:0x936fefd8e611f9de!8m2!3d41.0797124!4d29.0084641">Yol tarifi</a>
                                </div>
                            </div>
                            <div class="col-2"></div>
                            <div class="col-md-6 col-12">
                                <h2 class="wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.3s">
                                    Siz ve ekibinizle tanışmak isteriz
                                </h2>
                                <p class="contact-sub wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.6s">Bize şuradan da ulaşabilirsiniz:  <br class="hidden-lg hidden-sm hidden-md"> <a class="spectailor-link" href="mailto:info@spectailor.co">info@spectailor.co</a></p>
                                <div class="row">
                                    <div class="col-12">
                                        <form action="{{ route('mail.contact') }}" method="POST" id="spectailor-form">
                                            @csrf
                                            <div class="form-set wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.4s">
                                                <label for="name">Adınız</label>
                                                <input type="text" name="name" id="name_field" required placeholder="Size nasıl hitap etmeliyiz?">
                                            </div>
                                            <div class="form-set wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.4s">
                                                <label for="email">E-posta adresiniz</label>
                                                <input type="text" name="email" id="email_field" required placeholder="@">
                                            </div>
                                            <div class="form-set wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
                                                <label for="body">Size nasıl faydalı olabiliriz</label>
                                                <textarea name="body" id="myTextArea" required rows="1" placeholder="Bir kaç cümle ile projenizden bahsedin"></textarea>
                                            </div>
                                            <div class="form-set wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
                                                <button class="spectailor-btn dark-btn hand-logo" id="spectailor-form-submit" type="submit"><i class="icon-hand"></i> GÖNDER</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="max-container">
                <div class="row align-items-center">
                    <div class="col-md-4 hidden-xs wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s">
                        <p class="copyright">© 2019 Spectailor - Tüm Hakkı Saklıdır</p>
                    </div>
                    <div class="col-md-4 footer-logo hidden-xs wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <img src="{{ asset('img/logo.svg') }}" alt="Spectailor">
                    </div>
                    <div class="col-md-4 col-12 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <ul class="socials">
                            <li><a href="https://instagram.com/spectailor" target="_blank" id="icon-instagram"></a></li>
                            <li><a href="https://www.linkedin.com/company/spectailor" target="_blank" id="icon-linkedin"></a></li>
                            <!--<li><a href="https://dribbble.com/spectailor" target="_blank" id="icon-dribble"></a></li>-->
                            <li><a href="https://medium.com/spectailor" target="_blank" id="icon-medium"></a></li>
                        </ul>
                    </div>
                    <div class="col-12 hidden-md hidden-sm hidden-lg wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0s">
                        <p class="copyright">© 2019 Spectailor - Tüm Hakkı Saklıdır</p>
                    </div>
                </div>
            </div>
        </footer>
    </section>
</main>
</body>
<script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/wow.js') }}"></script>

<script>
    new WOW().init();
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

    $(".navigation").click(function() {
        var target = $(this).data('href');
        $('a.active').each(function(){
            $(this).removeClass('active');
        });
        $(this).addClass('active');
        $('html, body').animate({
            scrollTop: $(target).offset().top
        }, 1000);
    });
    window.autoscrollexecuted = false;
    $(document).ready(function(){
        if(window.location.hash && window.autoscrollexecuted === false){
            $('html, body').animate({
                scrollTop: $(window.location.hash.replace('#', '#section-')).offset().top - 50
            }, 100);
            window.autoscrollexecuted = true;
        }
    });

    $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();

        if($(this).scrollTop() >= $('#section-contact').position().top-100){
            window.location.hash = '#contact';
        }
        else if($(this).scrollTop() >= $('#section-tailoring').position().top-20){
            window.location.hash = '#tailoring';
        }
        else if($(this).scrollTop() >= $('#section-strategy').position().top-20){
            window.location.hash = '#strategy';
        }
        else if($(this).scrollTop() >= $('#section-refine').position().top-20){
            window.location.hash = '#refine';
        }
        else if($(this).scrollTop() >= $('#section-audit').position().top-20){
            window.location.hash = '#audit';
        }
        else{
            window.location.hash = '#home';
        }
    });
</script>

</html>