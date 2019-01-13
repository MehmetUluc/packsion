<?php
	/*
	Project Name: IonicEcommerce
	Project URI: http://ionicecommerce.com
	Author: VectorCoder Team
	Author URI: http://vectorcoder.com/
	Version: 2.1
	*/

	header("Cache-Control: no-cache, must-revalidate");
	header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
	header('Access-Control-Allow-Origin:  *');
	header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
	header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Admin controller Routes
|--------------------------------------------------------------------------
|
| This section contains all admin Routes
|
|
*/


Route::group(['prefix' => 'admin'], function () {


	Route::group(['namespace' => 'Admin'], function () {

		Route::group(['middleware' => 'auth'], function () {
			Route::get('/dashboard/{reportBase}', 'AdminController@dashboard');
			Route::get('/toexcel', 'AdminCustomersController@toExcel');
			Route::get('/post', 'AdminController@myPost');
			//show admin personal info record
			Route::get('/adminInfo', 'AdminController@admininfo');

		/*
		|--------------------------------------------------------------------------
		| categories/Product Controller Routes
		|--------------------------------------------------------------------------
		|
		| This section contains categories/Product Controller Routes
		|
		|
		*/
			//main listingManufacturer
			Route::get('/listingManufacturer', 'AdminManufacturerController@listingManufacturer');
			Route::get('/addManufacturer', 'AdminManufacturerController@addManufacturer');
			Route::post('/addNewManufacturer', 'AdminManufacturerController@addNewManufacturer');
			Route::get('/editManufacturer/{id}', 'AdminManufacturerController@editManufacturer');
			Route::post('/updateManufacturer', 'AdminManufacturerController@updateManufacturer');
			Route::post('/deleteManufacturer', 'AdminManufacturerController@deleteManufacturer');

			//main categories
			Route::get('/listingCategories', 'AdminCategoriesController@listingCategories');
			Route::get('/addCategory', 'AdminCategoriesController@addCategory');
			Route::post('/addNewCategory', 'AdminCategoriesController@addNewCategory');
			Route::get('/editCategory/{id}', 'AdminCategoriesController@editCategory');
			Route::post('/updateCategory', 'AdminCategoriesController@updateCategory');
			Route::get('/deleteCategory/{id}', 'AdminCategoriesController@deleteCategory');

						Route::get('/orders/stilist/{id}', 'AdminOrdersController@stilist');

			//sub categories
			Route::get('/listingSubCategories', 'AdminCategoriesController@listingSubCategories');
			Route::get('/addSubCategory', 'AdminCategoriesController@addSubCategory');
			Route::post('/addNewSubCategory', 'AdminCategoriesController@addNewSubCategory');
			Route::get('/editSubCategory/{id}', 'AdminCategoriesController@editSubCategory');
			Route::post('/updateSubCategory', 'AdminCategoriesController@updateSubCategory');
			Route::get('/deleteSubCategory/{id}', 'AdminCategoriesController@deleteSubCategory');

			//products
			Route::get('/listingProducts', 'AdminProductsController@listingProducts');
			Route::get('/addProduct', 'AdminProductsController@addProduct');
			Route::post('/addNewProduct', 'AdminProductsController@addNewProduct');

			//add attribute against newly added product
			Route::get('/addProductAttribute/{id}/', 'AdminProductsController@addProductAttribute');
			Route::get('/addProductImages/{id}/', 'AdminProductsController@addProductImages');
			Route::post('/addNewDefaultAttribute', 'AdminProductsController@addNewDefaultAttribute');
			Route::post('/addNewProductAttribute', 'AdminProductsController@addNewProductAttribute');
			Route::post('/updateProductAttribute', 'AdminProductsController@updateProductAttribute');
			Route::post('/updateDefaultAttribute', 'AdminProductsController@updateDefaultAttribute');
			Route::post('/deleteProduct', 'AdminProductsController@deleteProduct');
			Route::post('/deleteProductAttribute', 'AdminProductsController@deleteProductAttribute');
			Route::post('/deleteDefaultAttribute', 'AdminProductsController@deleteDefaultAttribute');
			Route::post('editProductAttribute', 'AdminProductsController@editProductAttribute');
			Route::post('editDefaultAttribute', 'AdminProductsController@editDefaultAttribute');
			Route::post('deleteProductAttributeModal', 'AdminProductsController@deleteProductAttributeModal');
			Route::post('deleteDefaultAttributeModal', 'AdminProductsController@deleteDefaultAttributeModal');

			//product attribute
			Route::post('/addNewProductImage', 'AdminProductsController@addNewProductImage');
			Route::post('editProductImage', 'AdminProductsController@editProductImage');
			Route::post('/updateProductImage', 'AdminProductsController@updateProductImage');
			Route::post('/deleteProductImageModal', 'AdminProductsController@deleteProductImageModal');
			Route::post('/deleteProductImage', 'AdminProductsController@deleteProductImage');
			Route::get('/editProduct/{id}', 'AdminProductsController@editProduct');
			Route::post('/updateProduct', 'AdminProductsController@updateProduct');
			Route::post('/getOptions', 'AdminProductsController@getOptions');
			Route::post('/getOptionsValue', 'AdminProductsController@getOptionsValue');


			//Attribute
			Route::get('/listingAttributes', 'AdminProductsController@listingAttributes');
			Route::get('/addAttributes', 'AdminProductsController@addAttributes');
			Route::post('/addNewAttributes', 'AdminProductsController@addNewAttributes');
			Route::get('/editAttributes/{id}/{language_id}', 'AdminProductsController@editAttributes');
			Route::post('/updateAttributes/', 'AdminProductsController@updateAttributes');
			Route::post('/deleteAttribute', 'AdminProductsController@deleteAttribute');
			Route::post('/addAttributeValue', 'AdminProductsController@addAttributeValue');
			Route::post('/updateAttributeValue', 'AdminProductsController@updateAttributeValue');
			Route::post('/checkAttributeAssociate', 'AdminProductsController@checkAttributeAssociate');
			Route::post('/checkValueAssociate', 'AdminProductsController@checkValueAssociate');
			Route::post('/deleteValue', 'AdminProductsController@deleteValue');


			//manageAppLabel
			Route::get('/listingAppLabels', 'AdminAppLabelsController@listingAppLabels');
			Route::get('/addAppKey', 'AdminAppLabelsController@addAppKey');
			Route::post('/addNewAppLabel', 'AdminAppLabelsController@addNewAppLabel');
			Route::get('/editAppLabel/{id}', 'AdminAppLabelsController@editAppLabel');
			Route::post('/updateAppLabel/', 'AdminAppLabelsController@updateAppLabel');
			Route::get('/manageAppLabel', 'AdminAppLabelsController@manageAppLabel');


			//customers
			Route::get('/listingCustomers', 'AdminCustomersController@listingCustomers');
			Route::get('/addCustomers', 'AdminCustomersController@addCustomers');
			Route::post('/addNewCustomers', 'AdminCustomersController@addNewCustomers');


			//add adddresses against customers
			Route::get('/addCustomerAddresses/{id}/', 'AdminCustomersController@addCustomerAddresses');
			Route::post('/addNewCustomerAddress', 'AdminCustomersController@addNewCustomerAddress');
			Route::post('/editAddress', 'AdminCustomersController@editAddress');
			Route::post('/updateAddress', 'AdminCustomersController@updateAddress');
			Route::post('/deleteAddress', 'AdminCustomersController@deleteAddress');

			//edit customer
			Route::get('/editCustomers/{id}', 'AdminCustomersController@editCustomers');
			Route::post('/updateCustomers', 'AdminCustomersController@updateCustomers');
			Route::post('/deleteCustomers', 'AdminCustomersController@deleteCustomers');

			//orders
			Route::get('/listingOrders', 'AdminOrdersController@listingOrders');
						Route::get('/pendingOrders', 'AdminOrdersController@listingOrders');
			Route::get('/listingShipments', 'AdminOrdersController@listingShipments');
			Route::get('/listingShipped', 'AdminOrdersController@listingShipments');
			Route::get('/alllistingShipments', 'AdminOrdersController@listingShipments');
			Route::get('/shipment/{id}', 'AdminOrdersController@shipmentDetail');
			Route::post('/shipment/{id}', 'AdminOrdersController@shipmentDetail');

			Route::get('/shipments/quiz_export/{id}', 'AdminOrdersController@exportQuiz');
			Route::get('/shipments/add/{id}', 'AdminOrdersController@addProduct');
			Route::get('/shipments/add_product/{id}', 'AdminOrdersController@addProductV2');
			Route::post('/shipments/add_product/{id}', 'AdminOrdersController@addProductV2');
			Route::get('/shipments/import/{id}', 'AdminOrdersController@productFormExcel');
			Route::post('/shipments/add/{id}', 'AdminOrdersController@addProduct');
			Route::post('print_invoice', 'AdminOrdersController@print_invoice');
			Route::get('/shipments/remove/{shipment}/{id}', 'AdminOrdersController@removeProductMeta');
			Route::get('/api/products/search', 'AdminProductsController@getApiProduct');
			Route::get('/viewOrder/{id}', 'AdminOrdersController@viewOrder');
			Route::post('/updateOrder', 'AdminOrdersController@updateOrder');
			Route::post('/deleteOrder', 'AdminOrdersController@deleteOrder');

			//countries
			Route::get('/listingCountries', 'AdminTaxController@listingCountries');
			Route::get('/addCountry', 'AdminTaxController@addCountry');
			Route::post('/addNewCountry', 'AdminTaxController@addNewCountry');
			Route::get('/editCountry/{id}', 'AdminTaxController@editCountry');
			Route::post('/updateCountry', 'AdminTaxController@updateCountry');
			Route::post('/deleteCountry', 'AdminTaxController@deleteCountry');

			//zones
			Route::get('/listingZones', 'AdminTaxController@listingZones');
			Route::get('/addZone', 'AdminTaxController@addZone');
			Route::post('/addNewZone', 'AdminTaxController@addNewZone');
			Route::get('/editZone/{id}', 'AdminTaxController@editZone');
			Route::post('/updateZone', 'AdminTaxController@updateZone');
			Route::post('/deleteZone', 'AdminTaxController@deleteZone');

			//tax class
			Route::get('/listingTaxClass', 'AdminTaxController@listingTaxClass');
			Route::get('/addTaxClass', 'AdminTaxController@addTaxClass');
			Route::post('/addNewTaxClass', 'AdminTaxController@addNewTaxClass');
			Route::get('/editTaxClass/{id}', 'AdminTaxController@editTaxClass');
			Route::post('/updateTaxClass', 'AdminTaxController@updateTaxClass');
			Route::post('/deleteTaxClass', 'AdminTaxController@deleteTaxClass');

			//tax rate
			Route::get('/listingTaxRates', 'AdminTaxController@listingTaxRates');
			Route::get('/addTaxRate', 'AdminTaxController@addTaxRate');
			Route::post('/addNewTaxRate', 'AdminTaxController@addNewTaxRate');
			Route::get('/editTaxRate/{id}', 'AdminTaxController@editTaxRate');
			Route::post('/updateTaxRate', 'AdminTaxController@updateTaxRate');
			Route::post('/deleteTaxRate', 'AdminTaxController@deleteTaxRate');

			//shipping setting
			Route::get('/shippingMethods', 'AdminShippingController@shippingMethods');
			Route::get('/upsShipping', 'AdminShippingController@upsShipping');
			Route::post('/updateUpsShipping', 'AdminShippingController@updateUpsShipping');
			Route::get('/flateRate', 'AdminShippingController@flateRate');
			Route::post('/updateFlateRate', 'AdminShippingController@updateFlateRate');
			Route::post('/defaultShippingMethod', 'AdminShippingController@defaultShippingMethod');

			//Payment setting
			Route::get('/paymentSetting', 'AdminPaymentController@paymentSetting');
			Route::post('/updatePaymentSetting', 'AdminPaymentController@updatePaymentSetting');

			//orders
			Route::get('/listingOrderStatus', 'AdminSiteSettingController@listingOrderStatus');
			Route::get('/addOrderStatus', 'AdminSiteSettingController@addOrderStatus');
			Route::post('/addNewOrderStatus', 'AdminSiteSettingController@addNewOrderStatus');
			Route::get('/editOrderStatus/{id}', 'AdminSiteSettingController@editOrderStatus');
			Route::post('/updateOrderStatus', 'AdminSiteSettingController@updateOrderStatus');
			Route::post('/deleteOrderStatus', 'AdminSiteSettingController@deleteOrderStatus');

			//setting page
			Route::get('/setting', 'AdminSiteSettingController@setting');
			Route::get('/invoice', 'AdminSiteSettingController@invoice');
			Route::get('/invoice/{id}', 'AdminSiteSettingController@showinvoice');
			Route::post('/invoice/{id}', 'AdminSiteSettingController@postinvoice');
			Route::get('/deleteinvoice/{id}', 'AdminSiteSettingController@deleteinvoice');
			Route::get('/editinvoice/{id}', 'AdminSiteSettingController@editinvoice');
			Route::get('/addTemplate', 'AdminSiteSettingController@addTemplate');
			Route::post('/addTemplate', 'AdminSiteSettingController@addTemplate');
			Route::post('/updateSetting', 'AdminSiteSettingController@updateSetting');

			//language setting
			Route::get('/getLanguages', 'AdminSiteSettingController@getLanguages');
			Route::get('/listingLanguages', 'AdminSiteSettingController@listingLanguages');
			Route::get('/addLanguages', 'AdminSiteSettingController@addLanguages');
			Route::post('/addNewLanguages', 'AdminSiteSettingController@addNewLanguages');
			Route::get('/editLanguages/{id}', 'AdminSiteSettingController@editLanguages');
			Route::post('/updateLanguages', 'AdminSiteSettingController@updateLanguages');
			Route::post('/deletelanguage', 'AdminSiteSettingController@deletelanguage');

			//coupons
			Route::get('/listingBanners', 'AdminBannersController@listingBanners');
			Route::get('/addBanner', 'AdminBannersController@addBanner');
			Route::post('/addNewBanner', 'AdminBannersController@addNewBanner');
			Route::get('/editBanner/{id}', 'AdminBannersController@editBanner');
			Route::post('/updateBanner', 'AdminBannersController@updateBanner');
			Route::post('/deleteBanner/', 'AdminBannersController@deleteBanner');

			//profile setting
			Route::get('/adminProfile', 'AdminController@adminProfile');
			Route::post('/updateProfile', 'AdminController@updateProfile');
			Route::post('/updateAdminPassword', 'AdminController@updateAdminPassword');

			//reports
			Route::get('/statsCustomers', 'AdminReportsController@statsCustomers');
			Route::get('/statsProductsPurchased', 'AdminReportsController@statsProductsPurchased');
			Route::get('/statsProductsLiked', 'AdminReportsController@statsProductsLiked');
			Route::get('/productsStock', 'AdminReportsController@productsStock');
			Route::post('/productSaleReport', 'AdminReportsController@productSaleReport');

			//Devices and send notification
			Route::get('/listingDevices', 'AdminNotificationController@listingDevices');
			Route::get('/viewDevices/{id}', 'AdminNotificationController@viewDevices');
			Route::post('/notifyUser/', 'AdminNotificationController@notifyUser');
			Route::get('/notifications/', 'AdminNotificationController@notifications');
			Route::post('/sendNotifications/', 'AdminNotificationController@sendNotifications');
			Route::post('/customerNotification/', 'AdminNotificationController@customerNotification');
			Route::post('/singleUserNotification/', 'AdminNotificationController@singleUserNotification');
			Route::post('/deletedevice/', 'AdminNotificationController@deletedevice');

			//coupons
			Route::get('/listingCoupons', 'AdminCouponsController@listingCoupons');
			Route::get('/addCoupons', 'AdminCouponsController@addCoupons');
			Route::post('/addNewCoupons', 'AdminCouponsController@addNewCoupons');
			Route::get('/editCoupons/{id}', 'AdminCouponsController@editCoupons');
			Route::post('/updateCoupons', 'AdminCouponsController@updateCoupons');
			Route::post('/deleteCoupon', 'AdminCouponsController@deleteCoupon');
			Route::post('/couponProducts', 'AdminCouponsController@couponProducts');

			//news categories
			Route::get('/listingNewsCategories', 'AdminNewsCategoriesController@listingNewsCategories');
			Route::get('/addNewsCategory', 'AdminNewsCategoriesController@addNewsCategory');
			Route::post('/addNewsNewCategory', 'AdminNewsCategoriesController@addNewsNewCategory');
			Route::get('/editNewsCategory/{id}', 'AdminNewsCategoriesController@editNewsCategory');
			Route::post('/updateNewsCategory', 'AdminNewsCategoriesController@updateNewsCategory');
			Route::post('/deleteNewsCategory', 'AdminNewsCategoriesController@deleteNewsCategory');

			//news
			Route::get('/listingNews', 'AdminNewsController@listingNews');
			Route::get('/addNews', 'AdminNewsController@addNews');
			Route::post('/addNewNews', 'AdminNewsController@addNewNews');
			Route::get('/editNews/{id}', 'AdminNewsController@editNews');
			Route::post('/updateNews', 'AdminNewsController@updateNews');
			Route::post('/deleteNews', 'AdminNewsController@deleteNews');

			//pages controller
			Route::get('/listingPages', 'AdminPagesController@listingPages');
			Route::get('/addPage', 'AdminPagesController@addPage');
			Route::post('/addNewPage', 'AdminPagesController@addNewPage');
			Route::get('/editPage/{id}', 'AdminPagesController@editPage');
			Route::post('/updatePage', 'AdminPagesController@updatePage');
			Route::get('/pageStatus', 'AdminPagesController@pageStatus');


			Route::get('/listingFaq', 'AdminPagesController@listingFaq');
			Route::get('/addFaq', 'AdminPagesController@addFaq');
			Route::post('/addNewFaq', 'AdminPagesController@addNewFaq');
			Route::get('/editFaq/{id}', 'AdminPagesController@editFaq');
			Route::post('/updateFaq', 'AdminPagesController@updateFaq');
			Route::get('/faqStatus', 'AdminPagesController@faqStatus');
			Route::get('/deleteFaq/{id}', 'AdminPagesController@deleteFaq');


			Route::get('/influencers', 'InfluencerController@index');
			Route::get('/influencers/add', 'InfluencerController@create');
			Route::post('/influencers', 'InfluencerController@store');
			Route::get('influencers/delete/{id}', 'InfluencerController@delete');
			Route::get('/influencers/edit/{id}', 'InfluencerController@edit');
			Route::post('/influencers/{id}', 'InfluencerController@update');


						Route::get('/slideshows', 'SlideshowController@index');
			Route::get('/slideshows/add', 'SlideshowController@create');
			Route::post('/slideshows', 'SlideshowController@store');
			Route::get('slideshows/delete/{id}', 'SlideshowController@delete');
			Route::get('/slideshows/edit/{id}', 'SlideshowController@edit');
			Route::post('/slideshows/{id}', 'SlideshowController@update');







		});

		//sign up
		Route::get('/signup', 'AdminController@signup');
		Route::post('/signup', 'AdminController@createEditor');
		Route::get('/editors', 'AdminController@getEditor');
		Route::post('/signme', 'AdminController@signme');

		//log in
		Route::get('/login', 'AdminController@login');
		Route::get('/passreset', 'AdminController@passreset');
		Route::post('/checkLogin', 'AdminController@checkLogin');

		//log out
		Route::get('/logout', 'AdminController@logout');
});

});

/*
|--------------------------------------------------------------------------
| App Controller Routes
|--------------------------------------------------------------------------
|
| This section contains all Routes of application
|
|
*/

Route::group(['namespace' => 'App'], function () {

	Route::post('/getCategories', 'CategoriesController@getCategories');

	//registration url
	Route::post('/registerDevices', 'CustomersController@registerDevices');

	//registration url
	Route::post('/processRegistration', 'CustomersController@processRegistration');

	//update customer info url
	Route::post('/updateCustomerInfo', 'CustomersController@updateCustomerInfo');

	//update customer password url
	//Route::post('/updateCustomerPassword', 'CustomersController@updateCustomerPassword');

	// login url
	Route::post('/processLogin', 'CustomersController@processLogin');

	//social login
	Route::post('/facebookRegistration', 'CustomersController@facebookRegistration');
	Route::post('/googleRegistration', 'CustomersController@googleRegistration');
	//push notification setting
	Route::post('/notify_me', 'CustomersController@notify_me');

	// forgot password url
	Route::post('/processForgotPassword', 'CustomersController@processForgotPassword');


	/*
	|--------------------------------------------------------------------------
	| Location Controller Routes
	|--------------------------------------------------------------------------
	|
	| This section contains countries shipping detail
	| This section contains links of affiliated to address
	|
	*/

	//get country url
	Route::post('/getCountries', 'LocationController@getCountries');

	//get zone url
	Route::post('/getZones', 'LocationController@getZones');

	//get all address url
	Route::post('/getAllAddress', 'LocationController@getAllAddress');

	//address url
	Route::post('/addShippingAddress', 'LocationController@addShippingAddress');

	//update address url
	Route::post('/updateShippingAddress', 'LocationController@updateShippingAddress');

	//update default address url
	Route::post('/updateDefaultAddress', 'LocationController@updateDefaultAddress');

	//delete address url
	Route::post('/deleteShippingAddress', 'LocationController@deleteShippingAddress');


	/*
	|--------------------------------------------------------------------------
	| Product Controller Routes
	|--------------------------------------------------------------------------
	|
	| This section contains product data
	| Such as:
	| top seller, Deals, Liked, categroy wise or category individually and detail of every product.
	*/

	//get categories
	Route::post('/allCategories', 'MyProductController@allCategories');

	//get categories
	Route::post('/allSubCategories', 'MyProductController@allSubCategories');

	//getAllProducts
	Route::post('/getAllProducts', 'MyProductController@getAllProducts');

	//getTopSellerProducts
	Route::post('/getTopSellerProducts', 'MyProductController@getTopSellerProducts');

	//getSpecialProductsDeal
	Route::post('/getSpecialProductsDeal', 'MyProductController@getSpecialProductsDeal');

	//getProductDetail
	Route::post('/getMostLikedProducts', 'MyProductController@getMostLikedProducts');

	//like products
	Route::post('/likeProduct', 'MyProductController@likeProduct');

	//unlike products
	Route::post('/unlikeProduct', 'MyProductController@unlikeProduct');

	//get filters
	Route::post('/getFilters', 'MyProductController@getFilters');

	//get getFilterproducts
	Route::post('/getFilterproducts', 'MyProductController@getFilterproducts');

	//get getSignleCategory
	Route::post('/getSingleCategory', 'MyProductController@getSingleCategory');

	//get getSignleCategory
	Route::post('/getProductDetail', 'MyProductController@getProductDetail');

	//get getWishList
	Route::post('/getWishList', 'MyProductController@getWishList');

	//get getWishList
	Route::post('/getSearchData', 'MyProductController@getSearchData');


	/*
	|--------------------------------------------------------------------------
	| News Controller Routes
	|--------------------------------------------------------------------------
	|
	| This section contains news data
	| Such as:
	| top news or category individually and detail of every news.
	*/

	//get categories
	Route::post('/allNewsCategories', 'NewsController@allNewsCategories');

	//getAllProducts
	Route::post('/getAllNews', 'NewsController@getAllNews');



	/*
	|--------------------------------------------------------------------------
	| Reviews Controller Routes
	|--------------------------------------------------------------------------
	|
	| This section contains review of every customer towords products
	|
	*/
	/*

	//add review
	Route::get('/addReview', 'MyProductController@addReview');

	//add editReview
	Route::get('/editReview', 'MyProductController@editReview');

	//add review
	Route::get('/deleteReview', 'MyProductController@deleteReview');
	*/

	/*
	|--------------------------------------------------------------------------
	| Cart Controller Routes
	|--------------------------------------------------------------------------
	|
	| This section contains customer cart products
	|
	*/


	//get Cart
	Route::post('/getCart', 'CartController@getCart');

	//add To Cart
	Route::post('/addToCart/', 'CartController@addToCart');

	//add updateCart
	Route::post('/updateCart', 'CartController@updateCart');

	//delete Cart
	Route::post('/deleteFromCart', 'CartController@deleteFromCart');


	/*
	|--------------------------------------------------------------------------
	| Cart Controller Routes
	|--------------------------------------------------------------------------
	|
	| This section contains customer orders
	|
	*/


	//get all orders
	Route::get('/generateBraintreeToken', 'OrderController@generateBraintreeToken');

	//add To order
	Route::post('/addToOrder', 'OrderController@addToOrder');

	//get all orders
	Route::post('/getOrders', 'OrderController@getOrders');

	//get default payment method
	Route::get('/getPaymentMethods', 'OrderController@getPaymentMethods');

	//get shipping / tax Rate
	Route::post('/getRate', 'OrderController@getRate');

	//get Coupon
	Route::post('/getCoupon', 'OrderController@getCoupon');


	/*
	|--------------------------------------------------------------------------
	| Banner Controller Routes
	|--------------------------------------------------------------------------
	|
	| This section contains banners, banner history
	|
	*/


	//get banners
	Route::get('/getBanners', 'BannersController@getBanners');

	//banners history
	Route::post('/bannerHistory', 'BannersController@bannerHistory');



	/*
	|--------------------------------------------------------------------------
	| App setting Controller Routes
	|--------------------------------------------------------------------------
	|
	| This section contains app  languages
	|
	*/


	Route::get('/siteSetting', 'AppSettingController@siteSetting');
	//old app label
	Route::post('/appLabels', 'AppSettingController@appLabels');
	//new app label
	Route::get('/appLabels3', 'AppSettingController@appLabels3');

	Route::post('/contactUs', 'AppSettingController@contactUs');

	Route::get('/getLanguages', 'AppSettingController@getLanguages');


	/*
	|--------------------------------------------------------------------------
	| Page Controller Routes
	|--------------------------------------------------------------------------
	|
	| This section contains news data
	| Such as:
	| top Page individually and detail of every Page.
	*/


	//getAllPages
	Route::post('/getAllPages', 'PagesController@getAllPages');

});


Route::group(['namespace' => 'Frontend'], function () {
	Route::get('/', 'HomeController@index');
	Route::post('/default/address', 'HomeController@setAddressDefault');
	Route::post('/default/quiz', 'HomeController@setQuizDefault');


	Route::get('/translations', 'TranslationController@getIndex');
	Route::get('/translations/view/{group?}', 'TranslationController@getView');
	Route::post('/translations/add/{groupKey}', 'TranslationController@postAdd');
	Route::post('/translations/delete/{groupKey}/{translationKey}', 'TranslationController@postDelete');
	Route::post('/translations/edit/{groupKey}', 'TranslationController@postEdit');
	Route::post('/translations/import', 'TranslationController@postImport');
	Route::post('/translations/publish/{groupKey}', 'TranslationController@postPublish');

	Route::middleware(['web', 'customer'])->group(function () {
		Route::get('/account/profile', 'AccountController@profile');
		Route::get('/account/quiz', 'AccountController@getQuizzes');
		Route::get('/account/quiz/{id}/step/{step}', 'AccountController@getQuiz');
		Route::post('/account/quiz/{id}/step/{step}', 'SubscriptionController@quizUpdate');
		Route::post('/account/profile', 'AccountController@profileUpdate');
		Route::get('/account/password', 'AccountController@password');
		Route::get('/account/address', 'AccountController@address');
		Route::get('/account/new/address', 'AccountController@newAdress');
		Route::post('/account/new/address', 'AccountController@postAddress');
		Route::get('/account/address/{id}', 'AccountController@editAddress');
		Route::get('/account/address/{id}/remove', 'AccountController@remove');
		Route::get('/account/quiz/{id}/remove', 'AccountController@removeQuiz');
		Route::post('/account/address/{id}', 'AccountController@setAddress');
		Route::get('/account/orders', 'AccountController@orders');
		Route::get('/account/order/{id}', 'AccountController@orderDetail');
		Route::post('/cancel/product/{id}', 'AccountController@cancelProduct');
		Route::get('/apply/product/{id}', 'AccountController@applyProduct');
		Route::post('/account/password', 'AccountController@passwordUpdate');


		Route::get('checkout/plan', 'SubscriptionController@plan');
		Route::get('checkout/info', 'SubscriptionController@info');
		Route::post('checkout/plan', 'SubscriptionController@planPost');
		Route::get('checkout/address', 'SubscriptionController@address');
		Route::get('checkout/new/address', 'SubscriptionController@addressForm');
		Route::post('checkout/new/address', 'SubscriptionController@newAddress');
		Route::post('checkout/address', 'SubscriptionController@setAddress');
		Route::get('checkout/saved_quiz', 'SubscriptionController@savedQuiz');
		Route::post('checkout/saved_quiz', 'SubscriptionController@setQuiz');
		Route::get('checkout/payment', 'SubscriptionController@payment');
		//Route::post('checkout/payment', 'PayuController@newPayment');
		Route::post('checkout/payment', 'PayuController@initPayment');
		Route::post('3d-return', 'PayuController@threeD');
		Route::get('checkout/success', 'PayuController@success');
		Route::get('membership/cancel/{id}', 'MembershipController@cancel');
		Route::get('account/order/{id}', 'AccountController@orderDetail');

		Route::get('state/{id}/district', 'SubscriptionController@state');




	});
	Route::get('product/{id}', 'HomeController@product');
	Route::get('products/', 'HomeController@products');
	Route::get('products/product/ajax/{id}', 'HomeController@quick_products');
	Route::get('influencer/product/{id}', 'HomeController@infProduct');
	Route::get('checkout/quiz/step/{step}', 'SubscriptionController@quiz');
	Route::post('checkout/coupon', 'SubscriptionController@coupon');
	Route::get('checkout/quiz/{id}', 'SubscriptionController@quizedit');
	Route::post('checkout/quiz/{id}', 'SubscriptionController@quizUpdate');
	Route::post('checkout/quiz/step/{step}', 'SubscriptionController@quizPost');
	Route::get('start_quiz', 'HomeController@start_quiz');
	Route::post('start_quiz', 'HomeController@setQuiz');
	Route::get('boxes', 'HomeController@boxes');
	Route::get('boxes/kadin', 'HomeController@boxesgender');
	Route::get('boxes/erkek', 'HomeController@boxesgender');
		Route::get('profile/packsion', 'HomeController@packsionProfile');
		Route::get('profile/{id}', 'HomeController@profile');
		Route::get('nasil-calisir', 'HomeController@how');
		Route::get('hakkimizda', 'HomeController@about');
		Route::get('s-s-s', 'HomeController@faq');
		Route::get('bize-ulasin', 'HomeController@contact');
		Route::post('bize-ulasin', 'HomeController@sendContact');



	Route::get('sozlesme/uyelik-sozlesmesi', 'AgrementController@index');
	Route::get('sozlesme/bilgilendirme-formu', 'AgrementController@form');


});
Route::group(['prefix' => 'customer'], function () {
  Route::get('/login', 'CustomerAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'CustomerAuth\LoginController@login');
  Route::get('/logout', 'CustomerAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'CustomerAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'CustomerAuth\RegisterController@register');

  Route::post('/password/email', 'CustomerAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/forget', 'CustomerAuth\ForgotPasswordController@sendEmail')->name('password.request');
  Route::post('/password/resetpass', 'CustomerAuth\ResetPasswordController@resetPass')->name('password.email');
  Route::get('/password/reset', 'CustomerAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'CustomerAuth\ResetPasswordController@showResetForm');
});


			Route::get('/admin/shipments/quiz/{id}', 'Admin\\AdminOrdersController@getQuiz');
			Route::get('/admin/shipments/quiz/{id}/text', 'Admin\\AdminOrdersController@getQuiz');
			Route::get('/admin/quiz/quiz/{id}/text', 'Admin\\AdminOrdersController@getQuizById');
Route::get('/admin/pdf/{id}', 'Admin\\PdfController@htmlToPdf');
Route::get('/admin/pdf/{id}/text', 'Admin\\PdfController@htmlToPdf');
Route::get('/admin/pdf1/{id}', 'Admin\\PdfController@htmlToPdf2');

Route::get('auth/{provider}', 'CustomerAuth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'CustomerAuth\LoginController@handleProviderCallback');
Route::get('kisisel-verilerin-korunmasi', 'Frontend\HomeController@kvkk');
Route::get('acik-riza-metni', 'Frontend\HomeController@riza');
Route::get('aydinlatma-metni', 'Frontend\HomeController@aydinlatma');
Route::get('reserve-cookie', 'Frontend\HomeController@reserve');
Route::get('preserve-cookie', 'Frontend\HomeController@preserve');



Route::get('payu/test', 'Frontend\\PayuController@testPayment');
Route::get('payu/{shipment_id}/confirm', 'Frontend\\PayuController@shipmentCheckout');
Route::get('payu/check/shipment', 'Frontend\\PayuController@shipmentPay');
Route::post('payu/confirm/{id}', 'Frontend\\PayuController@confirmpayment');


Route::get('ship/mail/{id}', 'TestController@shipmail');
Route::get('test/mail/', 'TestController@index');
Route::any('test/mng', 'MNGController@index');
Route::any('oauth/{id}', 'Frontend\HomeController@oauth');


Route::get('parasut/{id}', 'Admin\ParasutController@create');
Route::get('oplog/product', 'TestController@op_product');
Route::get('oplog/customer', 'TestController@op_customer');
Route::get('oplog/siparis', 'TestController@op_siparis');