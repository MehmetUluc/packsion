

<?php $__env->startSection('content'); ?>
  <?php 
    if(session('gender') == 'man'){
      $gender = 'woman';
      session()->put('gender', 'woman');
    } elseif(session('gender') == 'man') {
      $gender = 'man';
      session()->put('gender', 'man');
    } else {
      $gender = '';
    }
   ?>
  <div class="content clearfix">

  				<div class="section-block intro-title-2 xsmall bkg-charcoal-transition">
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
  													Abonelik Başlat
  												</li>
  											</ul>
  										</div>
  									</div>
  								</div>
  							</div>
  						</div>
  					</div>
  				</div>

  				<div class="section-block pt-30">
  					<div class="row">
  					    <div class="column width-12">
  					    	<div class="style-box single">
  								<div class="feature-column bg-column">
  									<div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700">
  										<a class="overlay-link no-page-fade" href="javascript:;">
  											<img src="assets/images/packsion-box.png" alt=""/>
  											<div class="overlay-info">
  												<h2 class="fw-800">Packsion Abonelik</h2>
  												<!-- <h3>Değişken ücretlerdedeki kutularımızla stil danışmanlarımız size en uygun kombinasyonlı oluşturup sizi yormadan adresinize yolluyor.</h3> -->
  												<ul>
                            <li class="mobile"><strong>Stil formunuzu doldurdunuz.</strong></li>
                            <li class="mobile"><strong>Sonraki adımda kutunuzu ve abonelik sürenizi seçin. Tek seferlik de deneyebilirisiniz.</strong></li>
                            <li class="mobile"><strong>Seçtiğiniz kutu değerinde gelen kombininizi ev konforunda deneyin</strong></li>
                            <li class="mobile"><strong>Beğendiğiniz parçaları tutup, beğenmediklerinizi anında iade edip paranızı geri alın.</strong></li>
                            
                          </ul>
                         
                          
                            <button class="button bkg-white all-caps" onclick="javascript:window.location.href='/checkout/payment'; return false;"><strong>SATIN ALIN</strong></button>
                          
                          <button class="button bkg-white all-caps scroll"><strong>ÖRNEK KOMBİNLER</strong></button>
  											</div>
  										</a>
  									</div>
  								</div>
  							</div>

                <div class="single-product full-width pull-left">
  								<article>
  									<div class="row">
                      <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    										<div class="column width-3 <?php echo e($image->gender); ?>">
    											<div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="500" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.8">
    												<a class="overlay-link lightbox-link" data-group="" data-caption="" data-image-url="//packsion.com/<?php echo e($image->image); ?>" href="//packsion.com/<?php echo e($image->image); ?>" data-lightbox-animation="fadeIn">
    													<img src="//packsion.com/<?php echo e($image->image); ?>" alt="" style="transition-duration: 500ms;">
    													<span class="overlay-info center" style="transition-duration: 500ms; background-color: rgba(255, 255, 255, 0.8);">
    														<span>
    															<span>
    																<span class="icon-magnifying-glass fs-26"></span>
    															</span>
    														</span>
    													</span>
    												</a>
    											</div>
    										</div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  									</div>
  								</article>

  							</div>
                <div class="row" style="margin-top:50px; margin-bottom: 20px;">
  
  <div class="column width-12 center" style="margin-bottom: 20px;">
    <h2 class="mb-20 all-caps"><strong>Nasıl Çalışır?</strong></h2>
    <a href="/nasil-calisir">
      <img src="/assets/packsion_steps.gif">
    </a>
  </div>
</div>
  							<div class="accordion pull-left full-width" data-toggle-icon>
  								<h3 class="mb-30 all-caps fw-700">KAFANIZDA SORU İŞARETLERİ Mİ VAR?</h3>
  								<ul>
  									<li>
  										<a href="#panel-1">Tek Seferlik üye olabilir miyim?</a>
  										<div id="panel-1">
  											<div class="accordion-content">
  												<p>
  													Üyeliğinizi oluşturduğunuz sırada üyelik süresini 1 ay olarak seçerek tek seferlik üye olabilirsiniz.
  												</p>
  											</div>
  										</div>
  									</li>
  									<li>
  										<a href="#panel-2">Üyeliğimi istediğim zaman iptal edebilir miyim?</a>
  										<div id="panel-2">
  											<div class="accordion-content">
  												<p>
  													Üyeliğinizi dilediğiniz zaman ‘’Hesabım’’ bölümüne girdikten sonra, ‘’Üyeliği iptal Et’’ bölümüne tıklayarak iptal edebilirsiniz.
  												</p>
  											</div>
  										</div>
  									</li>
  									<li>
  										<a href="#panel-3">Üyeliğimi dondurabilir miyim?</a>
  										<div id="panel-3">
  											<div class="accordion-content">
  												<p>
  													Üyeliğinizi dilediğiniz zaman ‘’Hesabım’’ bölümüne girdikten sonra, ‘’Üyeliği Dondur’’ bölümüne tıklayarak maksimum 3 ay olmak kaydıyla istediğiniz süreyle dondurabilirsiniz.
  												</p>
  											</div>
  										</div>
  									</li>
  									<li>
  										<a href="#panel-4">Kutularım hangi sıklıkla bana ulaşır?</a>
  										<div id="panel-4">
  											<div class="accordion-content">
  												<p>
  													İlk kutunuz siparişi verdikten sonra 10 gün içinde size teslim edilir. Bu tarihten itibaren üyeliğiniz boyunca aylık periyotlarla kutunuza sahip olursunuz.
  												</p>
  											</div>
  										</div>
  									</li>
  									<li>
  										<a href="#panel-5">Ürünleri ne kadar süre içinde iade edebilirim?</a>
  										<div id="panel-5">
  											<div class="accordion-content">
  												<p>
  													İstediğiniz ürünleri veya kutunuzdaki ürünlerin tamamını 14 gün içinde ücretsiz olarak aynı kargo firmasına iade edebilirsiniz. İade edilen ürünlerin kesinlikle kullanılmamış ve yıpranmamış olması gerekmektedir, aksi durumda iade geçersiz sayılacaktır.
  													<br /><br />
  													Ürünleri iade etmek için faturanız üzerinde bulunan iade bölümünü eksiksiz olarak doldurup imzalamanız gerekmektedir.
  												</p>
  											</div>
  										</div>
  									</li>
  									<li>
  										<a href="#panel-6">Kutumda hangi markaların olmasını beklemeliyim?</a>
  										<div id="panel-6">
  											<div class="accordion-content">
  												<p>
  													Packsion olarak geniş bir marka ve ürün portföyü ile çalışmaktayız. Kombinlerinizde kullanılacak olan markaların bir sınırı olmamakla birlikte, Türkiye’deki e-ticaret sitelerinde bulunan bilindik markaların kullanılmasını bekleyebilirsiniz.
  												</p>
  											</div>
  										</div>
  									</li>
  									<li>
  										<a href="#panel-7">Kutumda ayakkabı,çanta ve aksesuar bulunacak mı?</a>
  										<div id="panel-7">
  											<div class="accordion-content">
  												<p>
  													Seçtiğiniz kutuya ve ihtiyacınıza bağlı olarak kombinlerinizde ayakkabı,çanta ve aksesuar da bulunabilir. Siparişiniz sonrası stil danışmanınız sizinle iletişime geçecek ve ihtiyacınız doğrultusunda kombininizi oluşturacaktır.
  												</p>
  											</div>
  										</div>
  									</li>
  									<li>
  										<a href="#panel-8">Tek bir parçayı iade edebilir miyim yoksa tüm kombini mi iade etmeliyim?</a>
  										<div id="panel-8">
  											<div class="accordion-content">
  												<p>
  													Kombininzin tamamını iade edebildiğiniz gibi içinde bulunan herhangi bir parçayı tek başına da iade edebilirsiniz. İade ettiğiniz ürünün bedeli hesabınıza aktarılır. Her bir parçanın değeri faturanız üzerinde bulunmaktadır.
  												</p>
  											</div>
  										</div>
  									</li>
  									<li>
  										<a href="#panel-9">Kombinleri gerçek stil danışmanları mı hazırlıyor yoksa bilgisayar mı seçiyor?</a>
  										<div id="panel-9">
  											<div class="accordion-content">
  												<p>
  													Kombinlerimizin tamamı alanında uzman ve stil danışmanlığı eğitimini almış profesyoneller tarafından size özel olarak hazırlanmaktadır. Siparişiniz sonrasında stil danışmanlarımız sizinle iletişime geçecektir.
  												</p>
  											</div>
  										</div>
  									</li>
  									<li>
  										<a href="#panel-10">Bir kullanıcı ile sürekli aynı stil danışmanı mı ilgileniyor?</a>
  										<div id="panel-10">
  											<div class="accordion-content">
  												<p>
  													Kullanıcılarımızı daha iyi anlamak ve daha iyi bir hizmet verebilmek için bir kullanıcı ile ilgilenen stil danışmanı sabittir. Kullanıcının talep etmesi durumunda kendisine farklı bir stil danışmanı da atanabilir. Stil danışmanı değişiklik talebinizi info@packsion.com adresi üzerinden bize iletebilirsiniz.
  												</p>
  											</div>
  										</div>
  									</li>
  								</ul>
  							</div>

  					    </div>
  					</div>
  				</div>




<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
	<style type="text/css">
  .bg-column {
    background: #E9DCC9;
    /* background-image: url(/assets/product-bg.jpg); */
}
	.desktop {
		display:none;
	}
  @media  only screen and (max-width: 720px) {
  .style-box .feature-column .thumbnail {
      float: left;
      width: 100%;
      height: 301px !important;
      text-align: center;
      color: #fff;
  }
  .desktop {
		display:block;
	}
  ul li.mobile {
    display: none;
  }
    .bg-column {
    background: #E9DCC9;
    /* background-image: url(/assets/product-bg.jpg); */
}
}

.single ul strong {

    color: black !important;
    font-weight: 700;

}
  
.single-product{
	display: none;
	padding: 2rem 4rem;
	background-color: #fff;
	box-shadow: 0px 0px 40px rgba(0,0,0,0.05);
}
.single-product.show{
	display: block;
}
.single-product .form-select{
	max-width: 10rem;
}
.single-product > article{
	display: block;
	margin: 2rem 0 4rem 0;
    padding-bottom: 2rem;
    border-bottom: 1px solid #eaeaea;
}
.single-product > article:last-child{
	border-bottom-color: transparent;
}

<?php if(session('gender') == 'woman'): ?>
.column.width-3.man {
  display: none;
}
<?php endif; ?>
<?php if(session('gender') == 'man'): ?>
.column.width-3.woman {
  display: none;
}
<?php endif; ?>

	</style>
		<script type="text/javascript">
		$(".scroll").click(function() {
			$('.single-product').show(200);
		    $('html,body').animate({ scrollTop: $(".single-product").offset().top-100 }, 300);
		});
	</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>