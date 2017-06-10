<?php

Route::auth();
Route::get('/user', 'HomeController@index');
Route::get('/user/edit', 'HomeController@edit');

// admin route 
Route::get('admin/login', ['as'  => 'getlogin', 'uses' =>'Admin\AuthController@showLoginForm']);
Route::post('admin/login', ['as'  => 'postlogin', 'uses' =>'Admin\AuthController@login']);
Route::get('admin/password/reset', ['as'  => 'getreser', 'uses' =>'Admin\AuthController@email']);

Route::get('admin/logout', ['as'  => 'getlogin', 'uses' =>'Admin\AuthController@logout']);

Route::get('/', ['as'  => 'index', 'uses' =>'PagesController@index']);
// cart - oder
Route::get('gio-hang', ['as'  => 'getcart', 'uses' =>'PagesController@getcart']);
// them vao gio hang
Route::get('gio-hang/addcart/{id}', ['as'  => 'getcartadd', 'uses' =>'PagesController@addcart']);
Route::get('gio-hang/update/{id}/{qty}-{dk}', ['as'  => 'getupdatecart', 'uses' =>'PagesController@getupdatecart']);
Route::get('gio-hang/delete/{id}', ['as'  => 'getdeletecart', 'uses' =>'PagesController@getdeletecart']);
Route::get('gio-hang/xoa', ['as'  => 'getempty', 'uses' =>'PagesController@xoa']);

// tien hanh dat hang
Route::get('dat-hang', ['as'  => 'getoder', 'uses' =>'PagesController@getoder']);
Route::post('dat-hang', ['as'  => 'postoder', 'uses' =>'PagesController@postoder']);


Route::get('/tin-tuc', ['as'  => 'getNews', 'uses' =>'PagesController@getNews']);
Route::get('tintuc/{cat}', ['as'  => 'getNewGroup', 'uses' =>'PagesController@getNewGroup']);

Route::get('/tin-tuc/{id}-{slug}', ['as'  => 'getdetailnews', 'uses' =>'PagesController@detailNews']);


Route::get('/lien-he', 'PagesController@lienhe');
Route::post('/gui-lien-he', 'PagesController@createContact');

Route::resource('/tim-kiem', 'PagesController@search');
Route::resource('/search-ajax', 'PagesController@searchAjax');

Route::resource('/tim-kiem-admin', 'ProductsController@search');

// category
Route::get('/tat-ca', ['as'  => 'getcateAll', 'uses' =>'PagesController@getcateAll']);
Route::get('/{cat}', ['as'  => 'getcate', 'uses' =>'PagesController@getcate']);
Route::get('/san-pham/{id}-{slug}', ['as'  => 'getdetail', 'uses' =>'PagesController@detail']);

Route::get('cate/{cat}/{param}/{value}', ['as'  => 'getcateParam', 'uses' =>'PagesController@getcateParam']);

Route::resource('payment', 'PayMentController');

Route::post('/loc-du-lieu', 'PagesController@filterCate');

// --------------------------------cac cong viec trong admin (back-end)--------------------------------------- 
Route::group(['middleware' => 'admin'], function () {
      Route::group(['prefix' => 'admin'], function() {
        
       	Route::get('/home', function() {         
         return view('back-end.home');       	
       });
       // -------------------- quan ly danh muc----------------------
       	Route::group(['prefix' => 'danhmuc'], function() {
           Route::get('add',['as'        =>'getaddcat','uses' => 'CategoryController@getadd']);
           Route::post('add',['as'       =>'postaddcat','uses' => 'CategoryController@postadd']);

           Route::get('/',['as'       =>'getcat','uses' => 'CategoryController@getlist']);
           Route::get('del/{id}',['as'   =>'getdellcat','uses' => 'CategoryController@getdel'])->where('id','[0-9]+');
           
           Route::get('edit/{id}',['as'  =>'geteditcat','uses' => 'CategoryController@getedit'])->where('id','[0-9]+');
           Route::post('edit/{id}',['as' =>'posteditcat','uses' => 'CategoryController@postedit'])->where('id','[0-9]+');
    	});
         // -------------------- quan ly san pham--------------------
        Route::group(['prefix' => '/sanpham'], function() {
           Route::get('/add',['as'        =>'getaddpro','uses' => 'ProductsController@getadd']);
           Route::post('/add',['as'       =>'postaddpro','uses' => 'ProductsController@postadd']);

           Route::get('/{loai}',['as'       =>'getpro','uses' => 'ProductsController@getlist']);
           Route::get('/del/{id}',['as'   =>'getdellpro','uses' => 'ProductsController@getdel'])->where('id','[0-9]+');
           
           Route::get('/edit/{id}',['as'  =>'geteditpro','uses' => 'ProductsController@getedit'])->where('id','[0-9]+');
           Route::post('/edit/{id}',['as' =>'posteditpro','uses' => 'ProductsController@postedit'])->where('id','[0-9]+');
      });
       // -------------------- quan ly tin tuc-----------------------------
        Route::group(['prefix' => '/news'], function() {
           Route::get('/add',['as'        =>'getaddnews','uses' => 'NewsController@getadd']);
           Route::post('/add',['as'       =>'postaddnews','uses' => 'NewsController@postadd']);

           Route::get('/',['as'       =>'getnews','uses' => 'NewsController@getlist']);
           Route::get('/del/{id}',['as'   =>'getdellnews','uses' => 'NewsController@getdel'])->where('id','[0-9]+');
           
           Route::get('/edit/{id}',['as'  =>'geteditnews','uses' => 'NewsController@getedit'])->where('id','[0-9]+');
           Route::post('/edit/{id}',['as' =>'posteditnews','uses' => 'NewsController@postedit'])->where('id','[0-9]+');
      });
        // -------------------- quan ly đơn đặt hàng--------------------
        Route::group(['prefix' => '/donhang'], function() {;

           Route::get('',['as'       =>'getpro','uses' => 'OdersController@getlist']);
           Route::get('/del/{id}',['as'   =>'getdeloder','uses' => 'OdersController@getdel'])->where('id','[0-9]+');
           
           Route::get('/detail/{id}',['as'  =>'getdetail','uses' => 'OdersController@getdetail'])->where('id','[0-9]+');
           Route::post('/detail/{id}',['as' =>'postdetail','uses' => 'OdersController@postdetail'])->where('id','[0-9]+');
      });
        // -------------------- quan ly thong tin khach hang--------------------
        Route::group(['prefix' => '/khachhang'], function() {;

           Route::get('',['as'       =>'getmem','uses' => 'UsersController@getlist']);
           Route::get('/del/{id}',['as'   =>'getdelmem','uses' => 'UsersController@getdel'])->where('id','[0-9]+');
           
           Route::get('/edit/{id}',['as'  =>'geteditmem','uses' => 'UsersController@getedit'])->where('id','[0-9]+');
      });
       // -------------------- quan ly thong nhan vien--------------------
        Route::group(['prefix' => '/nhanvien'], function() {;

           Route::get('',['as'       =>'getnv','uses' => 'Admin_usersController@getlist']);
           Route::get('/del/{id}',['as'   =>'getdelnv','uses' => 'Admin_usersController@getdel'])->where('id','[0-9]+');
           
           Route::get('/edit/{id}',['as'  =>'geteditnv','uses' => 'Admin_usersController@getedit'])->where('id','[0-9]+');
           Route::post('/edit/{id}',['as' =>'posteditnv','uses' => 'Admin_usersController@postedit'])->where('id','[0-9]+');
      });
      // ---------------van de khac ----------------------

      // -------------------- quan ly lien he-----------------------------
      Route::group(['prefix' => '/contacts'], function() {
          Route::get('/',['as'       =>'getContacts','uses' => 'PagesController@getlistContact']);
          Route::get('/del/{id}',['as'   =>'getdelContact','uses' => 'PagesController@getdelContact'])->where('id','[0-9]+');
      });

      // -------------------- quan ly Banner----------------------
      Route::group(['prefix' => 'advs'], function() {
          Route::get('add',['as'        =>'getadvs','uses' => 'AdvsController@getadd']);
          Route::post('add',['as'       =>'postaddadvs','uses' => 'AdvsController@postadd']);

          Route::get('/',['as'       =>'getadvs','uses' => 'AdvsController@getlist']);
          Route::get('del/{id}',['as'   =>'getdelladvs','uses' => 'AdvsController@getdel'])->where('id','[0-9]+');

          Route::get('edit/{id}',['as'  =>'geteditadvs','uses' => 'AdvsController@getedit'])->where('id','[0-9]+');
          Route::post('edit/{id}',['as' =>'posteditadvs','uses' => 'AdvsController@postedit'])->where('id','[0-9]+');
      });

      // -------------------- quan ly Day----------------------
      Route::group(['prefix' => 'day'], function() {
          Route::get('add',['as'        =>'getday','uses' => 'DayController@getadd']);
          Route::post('add',['as'       =>'postaddday','uses' => 'DayController@postadd']);

          Route::get('/',['as'       =>'getday','uses' => 'DayController@getlist']);
          Route::get('del/{id}',['as'   =>'getdellday','uses' => 'DayController@getdel'])->where('id','[0-9]+');

          Route::get('edit/{id}',['as'  =>'geteditday','uses' => 'DayController@getedit'])->where('id','[0-9]+');
          Route::post('edit/{id}',['as' =>'posteditday','uses' => 'DayController@postedit'])->where('id','[0-9]+');
      });

      // -------------------- quan ly May----------------------
      Route::group(['prefix' => 'may'], function() {
          Route::get('add',['as'        =>'getmay','uses' => 'MayController@getadd']);
          Route::post('add',['as'       =>'postaddmay','uses' => 'MayController@postadd']);

          Route::get('/',['as'       =>'getmay','uses' => 'MayController@getlist']);
          Route::get('del/{id}',['as'   =>'getdellmay','uses' => 'MayController@getdel'])->where('id','[0-9]+');

          Route::get('edit/{id}',['as'  =>'geteditmay','uses' => 'MayController@getedit'])->where('id','[0-9]+');
          Route::post('edit/{id}',['as' =>'posteditmay','uses' => 'MayController@postedit'])->where('id','[0-9]+');
      });

      // -------------------- quan ly group_watch ----------------------
      Route::group(['prefix' => 'group_watch'], function() {
          Route::get('add',['as'        =>'getgroup_watch','uses' => 'GroupWatchController@getadd']);
          Route::post('add',['as'       =>'postaddgroup_watch','uses' => 'GroupWatchController@postadd']);

          Route::get('/',['as'       =>'getgroup_watch','uses' => 'GroupWatchController@getlist']);
          Route::get('del/{id}',['as'   =>'getdellgroup_watch','uses' => 'GroupWatchController@getdel'])->where('id','[0-9]+');

          Route::get('edit/{id}',['as'  =>'geteditgroup_watch','uses' => 'GroupWatchController@getedit'])->where('id','[0-9]+');
          Route::post('edit/{id}',['as' =>'posteditgroup_watch','uses' => 'GroupWatchController@postedit'])->where('id','[0-9]+');
     });

      // -------------------- quan ly branchs ----------------------
      Route::group(['prefix' => 'branchs'], function() {
          Route::get('add',['as'        =>'getbranchs','uses' => 'BranchsController@getadd']);
          Route::post('add',['as'       =>'postaddbranchs','uses' => 'BranchsController@postadd']);

          Route::get('/',['as'       =>'getbranchs','uses' => 'BranchsController@getlist']);
          Route::get('del/{id}',['as'   =>'getdellbranchs','uses' => 'BranchsController@getdel'])->where('id','[0-9]+');

          Route::get('edit/{id}',['as'  =>'geteditbranchs','uses' => 'BranchsController@getedit'])->where('id','[0-9]+');
          Route::post('edit/{id}',['as' =>'posteditbranchs','uses' => 'BranchsController@postedit'])->where('id','[0-9]+');
      });

      // -------------------- quan ly sliders ----------------------
      Route::group(['prefix' => 'sliders'], function() {
          Route::get('add',['as'        =>'getsliders','uses' => 'SlidersController@getadd']);
          Route::post('add',['as'       =>'postaddsliders','uses' => 'SlidersController@postadd']);

          Route::get('/',['as'       =>'getsliders','uses' => 'SlidersController@getlist']);
          Route::get('del/{id}',['as'   =>'getdellsliders','uses' => 'SlidersController@getdel'])->where('id','[0-9]+');

          Route::get('edit/{id}',['as'  =>'geteditsliders','uses' => 'SlidersController@getedit'])->where('id','[0-9]+');
          Route::post('edit/{id}',['as' =>'posteditsliders','uses' => 'SlidersController@postedit'])->where('id','[0-9]+');
      });

      // -------------------- quan ly partners ----------------------
      Route::group(['prefix' => 'partners'], function() {
          Route::get('add',['as'        =>'getpartners','uses' => 'PartnersController@getadd']);
          Route::post('add',['as'       =>'postaddpartners','uses' => 'PartnersController@postadd']);

          Route::get('/',['as'       =>'getpartners','uses' => 'PartnersController@getlist']);
          Route::get('del/{id}',['as'   =>'getdellpartners','uses' => 'PartnersController@getdel'])->where('id','[0-9]+');

          Route::get('edit/{id}',['as'  =>'geteditpartners','uses' => 'PartnersController@getedit'])->where('id','[0-9]+');
          Route::post('edit/{id}',['as' =>'posteditpartners','uses' => 'PartnersController@postedit'])->where('id','[0-9]+');
      });


      // -------------------- quan ly group news ----------------------
      Route::group(['prefix' => 'groupnews'], function() {
          Route::get('add',['as'        =>'getgroupnews','uses' => 'GroupnewsController@getadd']);
          Route::post('add',['as'       =>'postaddgroupnews','uses' => 'GroupnewsController@postadd']);

          Route::get('/',['as'       =>'getgroupnews','uses' => 'GroupnewsController@getlist']);
          Route::get('del/{id}',['as'   =>'getdellgroupnews','uses' => 'GroupnewsController@getdel'])->where('id','[0-9]+');

          Route::get('edit/{id}',['as'  =>'geteditgroupnews','uses' => 'GroupnewsController@getedit'])->where('id','[0-9]+');
          Route::post('edit/{id}',['as' =>'posteditgroupnews','uses' => 'GroupnewsController@postedit'])->where('id','[0-9]+');
      });

      Route::group(['prefix' => 'slidecate'], function() {
          Route::get('add',['as'        =>'getslidecate','uses' => 'SlidecateController@getadd']);
          Route::post('add',['as'       =>'postaddslidecate','uses' => 'SlidecateController@postadd']);

          Route::get('/',['as'       =>'getslidecate','uses' => 'SlidecateController@getlist']);
          Route::get('del/{id}',['as'   =>'getdellslidecate','uses' => 'SlidecateController@getdel'])->where('id','[0-9]+');

          Route::get('edit/{id}',['as'  =>'geteditslidecate','uses' => 'SlidecateController@getedit'])->where('id','[0-9]+');
          Route::post('edit/{id}',['as' =>'posteditslidecate','uses' => 'SlidecateController@postedit'])->where('id','[0-9]+');
      });

      // -------------------- quan ly partners ----------------------
      Route::group(['prefix' => 'settings'], function() {
          Route::get('/',['as'       =>'getsettings','uses' => 'SettingsController@getlist']);
      });
      Route::post('/postsettLogo',['as'       =>'postsettLogo','uses' => 'SettingsController@postsettLogo']);
      Route::post('/settDiachichung',['as'       =>'settDiachichung','uses' => 'SettingsController@settDiachichung']);
      Route::post('/settWelcome',['as'       =>'settWelcome','uses' => 'SettingsController@settWelcome']);
      Route::post('/settCopyright',['as'       =>'settCopyright','uses' => 'SettingsController@settCopyright']);
      Route::post('/settLogoPay',['as'       =>'settLogoPay','uses' => 'SettingsController@settLogoPay']);
      Route::post('/settSocial',['as'       =>'settSocial','uses' => 'SettingsController@settSocial']);

      Route::post('/settFooterlink',['as'       =>'settFooterlink','uses' => 'SettingsController@settFooterlink']);
      Route::post('/settMessage',['as'       =>'settMessage','uses' => 'SettingsController@settMessage']);
      Route::post('/settHotline',['as'       =>'settHotline','uses' => 'SettingsController@settHotline']);

      Route::post('/settIntro',['as'       =>'settIntro','uses' => 'SettingsController@settIntro']);
    });

});
