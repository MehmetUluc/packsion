<?php $__env->startSection('content'); ?>


<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<div class="wrapper reveal-side-navigation">
    <div class="wrapper-inner">


        <div class="content clearfix">

            <div class="section-block intro-title-2 xxsmall bkg-charcoal-transition">
                <div class="row">
                    <div class="column width-12">
                        <div class="row">
                            <div class="column width-12">
                                <div class="title-container">
                                    <div class="title-container-inner">
                                        <ul class="breadcrumb all-caps">
                                            <li>
                                                <a href="/">Anasayfa</a>
                                            </li>
                                            <li>
                                                Kayıt Ol / Giriş Yap
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-block hero-5 hero-5-2 height-auto bkg-grey-ultralight mobile-bkg-white">
                <div class="media-column width-6 bkg-white"></div>
                <div class="tabs style-3 login-tabs">
                    <ul class="tab-nav center">
                        <li class="active">
                            <a href="#all">All</a>
                        </li>
                        <li>
                            <a href="#uye-girisi">Üye Girişi</a>
                        </li>
                        <li>
                            <a href="#kayit-ol">Kayıt Ol</a>
                        </li>
                    </ul>
                    <div class="tab-panes">
                        <div id="all" class="active animate">
                            <div class="tab-content">
                                <div class="row">
                                    <div class="column width-6 center-padding-right">
                                        <form class="sign-up-form" action="/customer/register" method="post" novalidate>
                                            <h3 class="mb-30 all-caps fw-700">Kayıt ol <div class="form-response title-response"></div></h3>
                                            <div class="row">
                                                <div class="column width-12">
                                                    <input type="text" name="customers_firstname" class="form-fname form-element large" placeholder="İsim" value="<?php echo e(old('customers_firstname')); ?>" tabindex="1" required>
                                                </div>
                                                <div class="column width-12">
                                                    <input type="text" name="customers_lastname" value="<?php echo e(old('customers_lastname')); ?>" class="form-lname form-element large" placeholder="Soyisim" tabindex="2">
                                                </div>
                                                <div class="column width-12">
                                                    <input type="email" name="customers_email_address" value="<?php echo e(old('customers_email_address')); ?>" class="form-email form-element large" placeholder="E-Posta Adresi" tabindex="3" required>
                                                </div>
                                                <div class="column width-12">
                                                    <input type="password" name="password" class="form-password form-element large" placeholder="Yeni Şifre" tabindex="4" required>
                                                </div>

                                                <div class="column width-12">
                                                    <input type="text" name="honeypot" class="form-honeypot form-element large">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="column width-12">
                                                    <div class="field-wrapper">
                                                         <input id="checkbox-1" class="form-element checkbox" name="agrement" type="checkbox" required>
                                                        <label for="checkbox-1" class="checkbox-label"><strong><a class="lightbox-link" data-content="inline" data-modal-mode data-modal-width="1140" data-lightbox-animation="fadeIn" href="#agreement-modal">Üyelik sözleşmesini</a></strong>'ni ve okuduğumu ve kabul ettiğimi, “Packsion Müşterilerinin 
<a target="_blank" href="/aydinlatma-metni"><strong>Kişisel Verilerinin İşlenmesi Ve Aktarılmasına İlişkin Aydınlatma Metni</strong></a>'ni okuduğumu ve bu
kapsamda kişisel verilerimin işlenmesinin bilgim dahilinde olduğunu beyan ve taahhüt
ederim.
 </label>
                                                    </div>
                                                    <div class="field-wrapper">
                                                         <input id="checkbox-2" class="form-element checkbox" name="checkbox-2" type="checkbox" required>
                                                        <label for="checkbox-2" class="checkbox-label">Tarafımla pazarlama ve tanıtım amaçlı iletişime geçilmesine izin verir, pazarlama ve tanıtım
amaçlarıyla kişisel verilerimin işlenmesine dair <a target="_blank" href="/acik-riza-metni"><strong>Packsion Müşterilerinin Kişisel Verilerinin
İşlenmesi Ve Aktarılmasına İlişkin Açık Rıza Metni</strong></a>'ni okuduğumu ve bu kapsamda açık
rızam olduğunu kabul ve beyan ederim.</label>
                                                    </div>
                                                </div>

                                                <div class="column width-12 mt-20">
                                                    <input type="submit" value="Kayıt Ol" class="button medium bkg-black bkg-hover-theme color-white color-hover-white all-caps pull-left full-width">
                                                </div>
                                                <div class="column width-12 mt-20">
                                                    <a class="action-social-login medium button social-button facebook" rel="nofollow" href="/auth/facebook"><i class="fa fa-facebook"></i><span>Facebook İle Kaydol</span></a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="column width-5 push-1">
                                        <form class="sign-up-form" action="/customer/login" method="post" novalidate>
                                            <h3 class="mb-30 all-caps fw-700">Üye girişi <div class="form-response title-response"></div></h3>
                                            <div class="row">
                                                <div class="column width-12">
                                                    <input type="email" name="customers_email_address" class="form-email form-element large" placeholder="E-Posta Adresi" tabindex="1" required>
                                                </div>
                                                <div class="column width-12">
                                                    <input type="password" name="password" class="form-password form-element large" placeholder="Şifre" tabindex="2" required>
                                                </div>
                                                <div class="column width-12">
                                                    <input type="text" name="honeypot" class="form-honeypot form-element large">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="column width-6">
                                                    <div class="field-wrapper">
                                                         <input id="remember-me" class="form-element checkbox" name="remember-me" type="checkbox">
                                                        <label for="remember-me" class="checkbox-label">Beni Hatırla</label>
                                                    </div>
                                                </div>
                                                <div class="column width-6 right">
                                                    <a class="recuperate-password pt-10" href="/customer/password/reset">Şifremi unuttum</a>
                                                </div>
                                                <div class="column width-12 mt-20">
                                                    <input type="submit" value="Giriş Yap" class="form-submit button medium bkg-black bkg-hover-theme color-white color-hover-white all-caps pull-left full-width">
                                                </div>
                                                <div class="column width-12 mt-20">
                                                    <a class="action-social-login medium button social-button facebook" rel="nofollow" href="/auth/facebook"><i class="fa fa-facebook"></i><span>Facebook İle Giriş Yap</span></a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="uye-girisi">
                            <div class="tab-content">
                                <div class="row">
                                    <div class="column width-12">
                                        <form class="sign-in-form-mobile" action="" method="post" novalidate>
                                            <h3 class="mb-30 all-caps fw-700">Üye girişi <div class="form-response title-response"></div></h3>
                                            <div class="row">
                                                <div class="column width-12">
                                                    <input type="email" name="customers_email_address" class="form-email form-element large" placeholder="E-Posta Adresi" tabindex="1" required>
                                                </div>
                                                <div class="column width-12">
                                                    <input type="password" name="password" class="form-password form-element large" placeholder="Şifre" tabindex="2" required>
                                                </div>
                                                <div class="column width-12">
                                                    <input type="text" name="honeypot" class="form-honeypot form-element large">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="column width-6">
                                                    <div class="field-wrapper">
                                                         <input id="remember-me" class="form-element checkbox" name="remember-me" type="checkbox">
                                                        <label for="remember-me" class="checkbox-label">Beni Hatırla</label>
                                                    </div>
                                                </div>
                                                <div class="column width-6 right">
                                                    <a class="recuperate-password pt-10" href="/customer/password/reset">Şifremi unuttum</a>
                                                </div>
                                                <div class="column width-12 mt-20">
                                                    <input type="submit" value="Giriş Yap" class="form-submit button medium bkg-black bkg-hover-theme color-white color-hover-white all-caps pull-left full-width">
                                                </div>
                                                <div class="column width-12 mt-20">
                                                    <a class="action-social-login medium button social-button facebook" rel="nofollow" href="/auth/facebook"><i class="fa fa-facebook"></i><span>Facebook İle Giriş Yap</span></a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="kayit-ol">
                            <div class="tab-content">
                                <div class="row">
                                    <div class="column width-12">
                                        <form class="sign-up-form-mobile" action="/customer/register" method="post" novalidate>
                                            <h3 class="mb-30 all-caps fw-700">Kayıt ol <div class="form-response title-response"></div></h3>
                                            <div class="row">
                                                <div class="column width-12">
                                                    <input type="text" name="customers_firstname" class="form-fname form-element large" placeholder="İsim" tabindex="1" required>
                                                </div>
                                                <div class="column width-12">
                                                    <input type="text" name="customers_lastname" class="form-lname form-element large" placeholder="Soyisim" tabindex="2">
                                                </div>
                                                <div class="column width-12">
                                                    <input type="email" name="customers_email_address" class="form-email form-element large" placeholder="E-Posta Adresi" tabindex="3" required>
                                                </div>
                                                <div class="column width-12">
                                                    <input type="password" name="password" class="form-password form-element large" placeholder="Yeni Şifre" tabindex="4" required>
                                                </div>
                                                <div class="column width-12">
                                                    <input type="text" name="honeypot" class="form-honeypot form-element large">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="column width-12">
                                                    <div class="field-wrapper">
                                                         <input id="checkbox-1" class="form-element checkbox check1" name="agrement" type="checkbox" required>
                                                        <label for="checkbox-1" class="checkbox-label check1"><strong><a class="lightbox-link" data-content="inline" data-modal-mode data-modal-width="1140" data-lightbox-animation="fadeIn" href="#agreement-modal">Üyelik sözleşmesini</a></strong>'ni ve okuduğumu ve kabul ettiğimi, “Packsion Müşterilerinin 
<a target="_blank" href="/aydinlatma-metni"><strong>Kişisel Verilerinin İşlenmesi Ve Aktarılmasına İlişkin Aydınlatma Metni</strong></a>'ni okuduğumu ve bu
kapsamda kişisel verilerimin işlenmesinin bilgim dahilinde olduğunu beyan ve taahhüt
ederim.
 </label>
                                                    </div>
                                                    <div class="field-wrapper">
                                                         <input id="checkbox-2" class="form-element checkbox check2" name="checkbox-2" type="checkbox" required>
                                                        <label for="checkbox-2" class="checkbox-label check2">Tarafımla pazarlama ve tanıtım amaçlı iletişime geçilmesine izin verir, pazarlama ve tanıtım
amaçlarıyla kişisel verilerimin işlenmesine dair <a target="_blank" href="/acik-riza-metni"><strong>Packsion Müşterilerinin Kişisel Verilerinin
İşlenmesi Ve Aktarılmasına İlişkin Açık Rıza Metni</strong></a>'ni okuduğumu ve bu kapsamda açık
rızam olduğunu kabul ve beyan ederim.</label>
                                                    </div>
                                                </div>

                                                <div class="column width-12 mt-20">
                                                    <input type="submit" value="Kayıt Ol" class="form-submit button medium bkg-black bkg-hover-theme color-white color-hover-white all-caps pull-left full-width">
                                                </div>

                                                <div class="column width-12 mt-20">
                                                    <a class="action-social-login medium button social-button facebook" rel="nofollow" href="/auth/facebook"><i class="fa fa-facebook"></i><span>Facebook İle Kaydol</span></a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Agreement Modal -->
            <div id="agreement-modal" class="section-block pt-50 pb-20 background-none hide">
                <div class="row">
                    <div class="column width-12">
                      <p>PACKSION &Uuml;YELİK S&Ouml;ZLEŞMESİ</p>
<p>1. TARAFLAR</p>

<p><a name="_GoBack"></a> İşbu PACKSION &Uuml;yelik S&ouml;zleşmesi ("S&ouml;zleşme") www.packsion.com adlı internet sitesinin sahibi, Kemeraltı Caddesi Galata İş Merkezi No: 30-1A K:6 Karak&ouml;y Beyoğlu / İstanbul adresinde mukim PACKERS PAZARLAMA İ&Ccedil; VE DIŞ TİCARET A.Ş. (Bundan b&ouml;yle "PACKSION" olarak anılacaktır) ile <a href="http://www.packsion.com/">www.packsion.com</a> internet sitesine (&ldquo;WEBSİTESİ&rdquo;) &uuml;ye olan internet kullanıcısı ("&Uuml;YE") arasında akdedilmiştir.</p>

<p>2. Y&Uuml;R&Uuml;RL&Uuml;K VE SONA ERDİRME</p>

<p>&Uuml;YE'nın &uuml;yelik kaydı, işbu S&ouml;zleşme'de yer alan t&uuml;m maddeleri okuması ve kabul etmesiyle ger&ccedil;ekleşir ve S&ouml;zleşme y&uuml;r&uuml;rl&uuml;ğe girer. PACKSION ve &Uuml;YE, bu S&ouml;zleşme'yi karşı tarafa yapacağı tek taraflı bir bildirimle her zaman feshedebilir. Bu durumda &Uuml;YE&rsquo;nin &ouml;demiş olduğu hizmet bedelinin s&uuml;resinin sona ermesini takiben, PACKSION&rsquo;ın &Uuml;YE&rsquo;ye karşı herhangi bir sorumluluğu kalmayacaktır.</p>

<p>3. S&Ouml;ZLEŞMENİN KONUSU</p>
<p>&Uuml;YE'nin WEBSİTESİ&rsquo;nden yararlanma ve WEBSİTESİ&rsquo;ni kullanma koşulları ile &Uuml;YE tarafından PACKSION markası &uuml;r&uuml;nlerinin internet, mobil telefonlar, akıllı TV sistemleri veya benzer platformlarda geliştirilebilen uygulamalar aracılığıyla sipariş verme imkanı ve buna ilişkin sair hizmetler S&ouml;zleşme'nin konusunu oluşturmaktadır.</p>

<p>4. PACKSION&rsquo;IN KULLANICI SİSTEMİ</p>
<p>4.1. Her &Uuml;YE, kendisinin belirleyeceği bir &ldquo;kullanıcı adı&rdquo; veya e-posta adresi ile &ldquo;şifre&rdquo;ye sahip olur. &ldquo;Kullanıcı adı&rdquo; e-posta adreslerinde olduğu gibi her &uuml;yeye &ouml;zeldir ve aynı kullanıcı adı farklı &uuml;yelere verilmez.</p>

<p>4.2. &Uuml;YE&rsquo;nin, WEBSİTESİ &uuml;yeliği gerektiren sistemlere bağlanabilmesi i&ccedil;in kullanıcı adını veya kayıtlı e-posta adresi ile şifresini girmesi gereklidir. Bu işlem WEBSİTESİ sistemine giriş yapmak şeklinde tanımlanmıştır.</p>

<p>4.3. &ldquo;Şifre&rdquo; sadece ilgili &Uuml;YE&rsquo;nin bilgisi d&acirc;hilindedir. Kullanıcı şifresi unutulduğu takdirde WEBSİTESİ,, talep &uuml;zerine &Uuml;YE&rsquo;nin WEBSİTESİ sisteminde kayıtlı e-posta adresine yeni şifre oluşturabilmek i&ccedil;in bir bağlantı g&ouml;nderecektir. Şifre'nin belirlenmesi ve korunması tamamıyla &Uuml;YE&rsquo;nin kendi sorumluluğundadır ve şifre kullanımından doğacak problemlerden veya oluşabilecek zararlardan kesinlikle sorumlu değildir.</p>

<p>5. PACKSION &Uuml;YELİK PAKETLERİ</p>

<p>&Uuml;YE, dilerse, S&Ouml;ZLEŞME kapsamında 2 t&uuml;r &uuml;yelik yapabilecektir:</p>
<p>i. Aylık Abonelik Kutu &Uuml;yeliği</p>
<p>ii. Tek Seferlik Kutu &Uuml;yeliği:</p>

<p>Yukarıdaki &uuml;yelik paketlerine ilişkin &uuml;yelik ve kullanım koşulları, www.packsion.com&rsquo;daki &ldquo;Kutularımız&rdquo; da yer almaktadır. PACKSION, s&ouml;z konusu &uuml;yelik paketleri ve i&ccedil;eriklerini değiştirme hakkını saklı tutmaktadır.</p>


<p>6. &Uuml;YE VE PACKSION'IN HAK VE Y&Uuml;K&Uuml;ML&Uuml;L&Uuml;KLERİ</p>

<p>6.1. &Uuml;YE, WEBSİTESİ&rsquo;ni, y&uuml;r&uuml;rl&uuml;kteki mevzuat h&uuml;k&uuml;mlerine ve bu S&ouml;zleşme koşullarına uygun şekilde kullanmayı, aksi hale oluşacak t&uuml;m hukuki, idari ve cezai y&uuml;k&uuml;ml&uuml;l&uuml;klerden sorumlu olacağını ve PACKSION'i bu nedenle ortaya &ccedil;ıkabilecek t&uuml;m zarar, dava, talep ve iddialardan ari tutacağını, bunlara karşı tazmin edeceğini kabul ve taahh&uuml;t eder.</p>

<p>6.2. WEBSİTESİ&rsquo;nin tasarımı, yazılımı ve/veya &uuml;r&uuml;nlere ait metin ve g&ouml;rsel i&ccedil;eriklere ilişkin t&uuml;m fikri m&uuml;lkiyet hakları PACKSION'ın m&uuml;lkiyetinde olup, &Uuml;YE tarafından kullanılamaz. PACKSION, s&ouml;z konusu bilgilerle &Uuml;YE bilgilerini a&ccedil;ıklamadan, demografik bilgiler i&ccedil;eren raporlar d&uuml;zenleyebilir veya bu tarz bilgileri veya raporları kendisi kullanabilir ve bu rapor ve/veya istatistikleri iş ortakları ile &uuml;&ccedil;&uuml;nc&uuml; kişilerle bedelli veya bedelsiz paylaşabilir. Bu işlemler PACKSION Gizlilik Politikası h&uuml;k&uuml;mlerine aykırılık teşkil etmez.</p>

<p>6.3. &Uuml;YE, WEBSİTESİ&rsquo;nde, spam, virus, truva atı ve benzeri yazılımlar kullanamaz, herhangi bir program vasıtasıyla internet sitesinin diğer &uuml;yelerinin internet sitesinden yararlanmalarını &ouml;nleyecek, internet sitesini kullanılmayacak hale getirecek veya &ouml;nemli &ouml;l&ccedil;&uuml;de yavaşlatacak, PACKSION'ın yazılım ve donanımına zarar verebilecek işlemlerde bulunamaz. WEBSİTESİ&rsquo;nin bu t&uuml;r yazılımlardan korunması amacıyla, olanaklar &ccedil;er&ccedil;evesinde, &ouml;nlem alınmıştır; &Uuml;YE'nin kendi donanım ve yazılımıyla ilgili olarak kendi koruma sistemini bulundurması gerekir, WEBSİTESİ&rsquo;ne erişimi sebebiyle kendi yazılım, donanım ve işletim sistemlerinde oluşabilecek her t&uuml;rl&uuml; sorun ve bu sorunların sonu&ccedil;larından &Uuml;YE sorumludur.</p>

<p>6.4. &Uuml;YE, WEBSİTESİ&rsquo;ni hi&ccedil;bir şekilde kamu d&uuml;zenini bozucu, genel ahlaka aykırı, başkalarını rahatsız ve taciz edici, başkalarının fikri ve telif haklarına tecav&uuml;z edecek şekilde ve yasalara aykırı başkaca ama&ccedil;lar i&ccedil;in kullanamaz.</p>

<p>6.5. WEBSİTESİ&rsquo;nde herhangi bir &Uuml;YE'nin beyan edeceği fikir ve g&ouml;r&uuml;şler nedeniyle PACKSION veya &uuml;&ccedil;&uuml;nc&uuml; kişilerin uğrayabileceği zararlardan, yalnızca beyan eden &Uuml;YE sorumludur.</p>

<p>6.6. PACKSION, &Uuml;YE verilerinin &uuml;&ccedil;&uuml;nc&uuml; kişilerce ele ge&ccedil;irilmesinden, okunmasından ve &Uuml;YE yazılım ve verilerine gelebilecek zararlardan dolayı sorumlu değildir. &Uuml;YE, WEBSİTESİ&rsquo;nin kullanılmasından dolayı uğrayabileceği herhangi bir zarar y&uuml;z&uuml;nden PACKSION'dan tazminat talep etmemeyi peşinen kabul etmiştir.</p>

<p>6.7. &Uuml;YE, WEBSİTESİ&rsquo;nin diğer &uuml;yelerinin bilgilerine ve yazılımlarına ulaşmaya veya bunları kullanmaya &ccedil;alışmayacağını, aksi halde doğabilecek hukuki ve cezai sorumluluğun tamamen &Uuml;YE'ye ait olduğunu kabul eder.</p>

<p>6.8. &Uuml;YE, WEBSİTESİ&rsquo;ne &Uuml;YE olurken verdiği bilgilerin ger&ccedil;eğe uygun olduğunu, değişen bilgileri derhal d&uuml;zelteceğini ve PACKSION'ın bu bilgilerin ger&ccedil;eğe aykırılığı nedeniyle uğrayacağı t&uuml;m zararları tazmin edeceğini beyan ve taahh&uuml;t eder. &Uuml;YE, PACKSION&rsquo;ın bu bilgileri ve verileri her zaman silebileceğini, &Uuml;YE'nin &uuml;yeliğini askıya alabileceğini ve/veya sonlandırabileceğini kabul eder. PACKSION, &Uuml;YE'nin kişisel bilgilerini y&uuml;r&uuml;rl&uuml;kteki mevzuat &ccedil;er&ccedil;evesinde verilen mahkeme kararı veya idari emir gereğince yahut &Uuml;YE'nın rızasının bulunması halinde &uuml;&ccedil;&uuml;nc&uuml; kişilere a&ccedil;ıklayabilir; &Uuml;YE'nin rızasının bulunması halinde bu bilgileri ve &Uuml;YE'nin WEBSİTESİ&rsquo;ndeki hareketlerini, internet sitesinin geliştirilmesi ve &uuml;yelerine daha iyi hizmet sağlanabilmesi amacıyla kullanabilir.</p>

<p>6.9. &Uuml;YE'nin WEBSİTESİ&rsquo;nden aldığı şifreyi kullanma hakkı m&uuml;nhasıran &Uuml;YE'ye aittir. &Uuml;YE bu şifreyi herhangi bir &uuml;&ccedil;&uuml;nc&uuml; şahsa veremez. Şifrenin kullanımına ilişkin t&uuml;m hukuki, idari ve cezai sorumluluk &Uuml;YE'ye aittir.</p>
<p>6.10. PACKSION tarafından WEBSİTESİ&rsquo;nin iyileştirilmesi, geliştirilmesine y&ouml;nelik olarak ve/veya yasal mevzuat &ccedil;er&ccedil;evesinde siteye erişmek i&ccedil;in kullanılan internet servis sağlayıcısının adı ve Internet Protokol (IP) adresi, WEBSİTESİ&rsquo;ne erişilen tarih ve saat, WEBSİTESİ&rsquo;nde bulunulan sırada erişilen sayfalar ve WEBSİTESİ&rsquo;ne doğrudan bağlanılmasını sağlayan WEBSİTESİ&rsquo;nin internet adresi gibi birtakım bilgiler toplanabilir.</p>
<p>6.11. &Uuml;YE, y&uuml;r&uuml;rl&uuml;kte bulunan ve/veya y&uuml;r&uuml;rl&uuml;ğe alınacak uygulamalar kapsamında, PACKSION ve markalarının &uuml;r&uuml;n ve hizmet tanıtımları, reklamlar, kampanyalar, avantajlar, anketler ve diğer m&uuml;şteri memnuniyeti uygulamaları hakkında (sosyal medya kanalları da dahil olmak &uuml;zere) kendisine bilgi ve ilanlar g&ouml;nderilmesine izin verdiğini beyan ve kabul eder. &Uuml;YE, WEBSİTESİ&rsquo;ne &uuml;ye olurken ve/veya başka yollarla ge&ccedil;mişte vermiş olduğu ve/veya gelecekte vereceği kişisel ve alışveriş bilgilerinin ve alışveriş ve/veya t&uuml;ketici davranış bilgilerinin yukarıdaki ama&ccedil;larla toplanmasına, PACKSION tarafından kullanılmasına ve/veya arşivlenmesine izin verdiğini beyan ve kabul eder. &Uuml;YE aksini bildirmediği s&uuml;rece &uuml;yeliği sona erdiğinde de verilerin toplanmasına, PACKSION tarafından kullanılmasına ve/veya arşivlenmesine izin verdiğini beyan ve kabul eder. &Uuml;YE, yukarıda bahsi ge&ccedil;en bilgilerin toplanması, paylaşılması, kullanılması, arşivlenmesi ve/veya kendisine erişilmesi nedeniyle doğrudan ve/veya dolaylı maddi ve/veya manevi menfi ve/veya m&uuml;spet, kısaca herhangi bir zarara uğradığı konusunda talepte bulunmayacağını ve PACKSION&rsquo;ı sorumlu tutmayacağını kabul ve beyan eder. &Uuml;YE veri paylaşım tercihlerini değiştirmek isterse, bu talebini PACKSION&rsquo;ın <a href="mailto:info@packsion.com">info@packsion.com</a> adresine iletebilir.</p>


<p>7. HİZMET BEDELİ VE &Ouml;DEME ŞEKLİ</p>

<p>(1) &Uuml;YE, www.packsion.com&rsquo;daki Kutularımız&rsquo;da yer alan &uuml;yeliklerden birini se&ccedil;meyi tercih ettiği takdirde, se&ccedil;tiği &uuml;yelik paketine ait &uuml;cret, WEB SİTESİ &uuml;zerinden Mesafeli Satış S&ouml;zleşmesi &rsquo;nde yer alan banka hesabına EFT/havale yapılarak ya da &ouml;deme sistemi &uuml;zerinden kredi kartını kullanarak &ouml;denecektir.</p>


<p>8. UYUŞMAZLIKLARIN &Ccedil;&Ouml;Z&Uuml;LMESİ</p>

<p>Bu S&ouml;zleşme ile bağlantılı veya bu S&ouml;zleşme'den doğan t&uuml;m uyuşmazlıkların &ccedil;&ouml;z&uuml;m&uuml;nde İstanbul Merkez (&Ccedil;ağlayan) Mahkemeleri ve İcra Daireleri yetkilidir.</p>
                    </div>
                </div>
            </div>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

            <style type="text/css">
button.social-button span, .button.social-button span, .btn.social-button span, input[type="submit"].social-button span, input[type="button"].social-button span {
    padding-left: .9375rem;
    display: inline-block;
    position: relative;
    top: -1px;
}
button.facebook i, .button.facebook i, .btn.facebook i, input[type="submit"].facebook i, input[type="button"].facebook i {
    border-right: 1px solid #344f88;
}
button.facebook, .button.facebook, .btn.facebook, input[type="submit"].facebook, input[type="button"].facebook {
    color: #fff;
    border-color: #3b5998;
    background-color: #3b5998;
    text-align: center !important;
    font-size: 17px !important;
    width: 100%;
    font-weight: bold !important;
}
button.social-button, .button.social-button, .btn.social-button, input[type="submit"].social-button, input[type="button"].social-button {
    text-align: left;
    text-transform: none;
    margin: .625rem 0;
}
.social-button.facebook:hover {
    background-color: #3b5998;
    border-color: #3b5998;
}
button.facebook:hover, .button.facebook:hover, .btn.facebook:hover, input[type="submit"].facebook:hover, input[type="button"].facebook:hover, button.facebook:focus, .button.facebook:focus, .btn.facebook:focus, input[type="submit"].facebook:focus, input[type="button"].facebook:focus, button.facebook:active, .button.facebook:active, .btn.facebook:active, input[type="submit"].facebook:active, input[type="button"].facebook:active {
    color: #3b5998;
    background-color: #fff;
}
button.social-button i, .button.social-button i, .btn.social-button i, input[type="submit"].social-button i, input[type="button"].social-button i {
    display: inline;
    padding-right: 12px;
    margin-right: 0;
    font-size: 1.125rem;
    display: inline-block;
    position: relative;
    padding-top: 6px;
    margin-top: -6px;
    padding-bottom: 6px;
    margin-bottom: -6px;
    font-size: 20px;
}
a.facebook {
    font-family: 'Open Sans','Helvetica Neue',Helvetica,Arial,sans-serif !important;
    font-weight: 400 !important;
    text-align: center;
}
a.facebook:hover {
    transition: color,background-color .12s ease-out 0s;
}
.login-signup-container .action-social-login {
    min-width: 180px;
}
            </style>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
<script type="text/javascript">
    $(document).ready(function() {
    $("label.check2").click(function() {
        $('input.check2').click();
    });       
    $("label.check1").click(function() {
        $('input.check1').click();
    });           
});
</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>