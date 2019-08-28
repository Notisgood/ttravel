<?php
Route::get('/', function () {
    return view('auth/login');
});

Session::put('lang', 'en');
Route::get('/en',function(){
 Session::put('lang', 'en');
 return back();
});
Route::get('/th',function(){
 Session::put('lang', 'th');
 return back();
});

Auth::routes();
Route::get('test','homeController@blank');
//
Route::get('index','productController@index');
Route::get('home', 'productController@home')->name('home');
Route::get('profile', 'productController@profile')->name('profile');
Route::get('dashboard', 'productController@dashboard')->name('dashboard');

//register start
Route::post('add', 'MemberController@add')->name('add');
Route::get('access', 'MemberController@access')->name('access');
Route::get('register', 'productController@register')->name('register');
//register end
// scoott front
Route::get('about','frontendController@about')->name('about');
Route::get('career','frontendController@career')->name('career');
Route::get('contact','frontendController@contact')->name('contact');
Route::get('exclusive_tour','frontendController@exclusive_tour')->name('exclusive_tour');
Route::get('index','frontendController@index')->name('index');
Route::get('package_tour/{id}','frontendController@package_tour')->name('package_tour');
Route::get('read_ticket/{id}','frontendController@read_ticket')->name('read_ticket');
Route::get('readpackage_tour/{id}','frontendController@readpackage_tour')->name('readpackage_tour');
Route::get('ticket','frontendController@ticket')->name('ticket');

Route::post('careerregis','frontendController@careerregis')->name('careerregis');
Route::post('emailIn','frontendController@emailIn')->name('emailIn');
// front end
//backtravel new
Route::get('staffadd','MemberController@staffadd')->name('staffadd');
Route::get('staffedit/{id}','MemberController@staffedit')->name('staffedit');
Route::post('staffupdate','MemberController@staffupdate')->name('staffupdate');
Route::get('staffdel/{id}','MemberController@staffdel')->name('staffdel');



Route::post('uploadbanner','bannerController@uploadbanner')->name('upbanner');
Route::get('banner', 'bannerController@banners')->name('banner');
Route::get('banneradd','bannerController@banneradd')->name('banneradd');
Route::get('bannerdel/{id}','bannerController@bannerdel')->name('bannerdel');

Route::get('wordbanner','bannerController@wordbanner')->name('wordbanner');
Route::get('wordbanneradd','bannerController@wordbanneradd')->name('wordbanneradd');
Route::get('wordbanneredit/{id}','bannerController@wordbanneredit')->name('wordbanneredit');
Route::post('wordbanneraddit','bannerController@wordbanneraddit')->name('wordbanneraddit');
Route::post('wordbannereditupdate','bannerController@wordbannereditupdate')->name('wordbannereditupdate');
Route::get('wordbannerdel/{id}','bannerController@wordbannerdel')->name('wordbannerdel');


Route::get('tourpack', 'productTourController@tourpack')->name('tourpack');
Route::get('touredit/{id}', 'productTourController@touredit')->name('touredit');
Route::get('touradd', 'productTourController@touradd')->name('touradd');
Route::post('touraddit', 'productTourController@touraddit')->name('touraddit');
Route::post('tourupdate', 'productTourController@tourupdate')->name('tourupdate');
Route::get('imgdel/{id}','productTourController@imgdel')->name('imgdel');
Route::get('tourdel/{id}','productTourController@tourdel')->name('tourdel');
Route::get('traveldel/{id}','productTourController@traveldel')->name('traveldel');
Route::get('ticketpack','productTourController@ticketpack')->name('ticketpack');
Route::get('ticketadd','productTourController@ticketadd')->name('ticketadd');
Route::post('ticketaddit','productTourController@ticketaddit')->name('ticketaddit');
Route::get('ticketedit/{id}','productTourController@ticketedit')->name('ticketedit');
Route::post('ticketupdate', 'productTourController@ticketupdate')->name('ticketupdate');
Route::get('ticketdatedel/{id}','productTourController@ticketdatedel')->name('ticketdatedel');
Route::get('ticketdetaildel/{id}','productTourController@ticketdetaildel')->name('ticketdetaildel');
Route::get('ticketpromodel/{id}','productTourController@ticketpromodel')->name('ticketpromodel');
Route::get('ticketdel/{id}','productTourController@ticketdel')->name('ticketdel');
Route::get('ticketimgdel/{id}','productTourController@ticketimgdel')->name('ticketimgdel');


Route::get('continent', 'productTourController@continent')->name('continent');
Route::post('addcont', 'productTourController@addcont')->name('addcont');
Route::post('contupdate', 'productTourController@contupdate')->name('contupdate');
Route::get('country', 'productTourController@country')->name('country');
Route::post('countadd', 'productTourController@countadd')->name('countadd');
Route::post('countupdate', 'productTourController@countupdate')->name('countupdate');
Route::get('county', 'productTourController@county')->name('county');
Route::post('countyadd', 'productTourController@countyadd')->name('countyadd');
Route::post('countyupdate', 'productTourController@countyupdate')->name('countyupdate');
Route::post('/getcountry', 'productTourController@getcountry')->name('getcountry');
Route::post('/getcounty', 'productTourController@getcounty')->name('getcounty');
Route::get('contdel/{id}','productTourController@contdel')->name('contdel');
Route::get('countdel/{id}','productTourController@countdel')->name('countdel');
Route::get('countydel/{id}','productTourController@countydel')->name('countydel');

Route::get('jobmaneger', 'jobController@jobmaneger')->name('jobmaneger');
Route::get('jobadd', 'jobController@jobadd')->name('jobadd');
Route::get('jobedit/{id}', 'jobController@jobedit')->name('jobedit');
Route::post('jobaddit', 'jobController@jobaddit')->name('jobaddit');
Route::post('jobupdate', 'jobController@jobupdate')->name('jobupdate');
Route::get('jobpropdel/{id}','jobController@jobpropdel')->name('jobpropdel');
Route::get('jobdutydel/{id}','jobController@jobdutydel')->name('jobdutydel');
Route::get('jobdel/{id}','jobController@jobdel')->name('jobdel');
Route::get('jobregis', 'jobController@jobregis')->name('jobregis');
Route::get('emailcontact', 'jobController@emailcontact')->name('emailcontact');
//backtravel






// Route::get('productexp', 'productController@productexp')->name('productexp');
// Route::get('productrunout', 'productController@productrunout')->name('productrunout');
// Route::get('productin', 'productController@productin')->name('productin');
// Route::get('productout', 'productController@productout')->name('productout');
// Route::get('productlot', 'productController@productlot')->name('productlot');
// Route::get('productclass', 'productController@productclass')->name('productclass');
// Route::get('producttype', 'productController@producttype')->name('producttype');

// Route::get('reportdaily', 'productController@reportdaily')->name('reportdaily');
// Route::get('reportstaff', 'productController@reportstaff')->name('reportstaff');
// Route::get('reportproduct', 'productController@reportproduct')->name('reportproduct');
// // search
// Route::get('/productsearch', 'productController@productsearch')->name('productsearch');
// Route::get('/productfind', 'productController@productfind')->name('productfind');
// Route::get('/productfindday', 'productController@productfindday')->name('productfindday');

// // ajax request
// Route::post('/getProduct','productController@getProduct')->name('getProduct');
// Route::post('/getMember','MemberController@getMember')->name('getMember');


// //update
// Route::post('update_product','productController@update')->name('update.product');

// Route::post('updatetype','productController@updatetype')->name('updatetype');
// Route::post('updateclass','productController@updateclass')->name('updateclass');

// //edit
// Route::get('productedit/{id}', 'productController@productedit')->name('productedit');
// //insert
// Route::post('/inRegister','productController@inRegister');
// Route::post('/inProductType','productController@inProductType');
// Route::post('/inProductClass','productController@inProductClass');
// Route::post('/inProductIn','productController@inProductIn')->name('inProductIn');
// Route::post('/inProductOut','productController@inProductOut')->name('inProductOut');
// Route::post('/accessadd','MemberController@accessadd')->name('accessadd');

// // print pdf
// Route::post('/printpdf','productController@printpdf');
// Route::get('/form','productController@printpdf');
// //forloop insert
// Route::get('/addlot','productController@addlot');


// Route::get('datatable_product','productController@datatable_product');
// Route::get('datatable_productfind', 'productController@datatable_productfind');



//auth
Route::get('/userlogout','HomeController@userlogout')->name('user.logout');
Route::get('/home', 'HomeController@index')->name('home');
