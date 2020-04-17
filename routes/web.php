<?php


Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'] , function() {
    Route::get('/home','MenuController@getHome')->name('admin.home');
    Route::get('/login', 'AdminController@getLogin')->name('admin.get.login');
    Route::post('/login', 'AdminController@postLogin')->name('admin.post.login');

    Route::get('/', 'AdminController@getIndex')->name('admin.get.index');

    Route::group(['prefix' => 'menu' ],function(){
            Route::get('/list','MenuController@getList')->name('admin.menu.get.list');

            Route::get('/create','MenuController@getCreate')->name('admin.menu.get.create');
            Route::post('/create','MenuController@postCreate')->name('admin.menu.post.create');

            Route::get('edit/{id}','MenuController@getEdit')->name('admin.menu.get.edit');
            Route::post('edit/{id}','MenuController@postEdit')->name('admin.menu.post.edit');

            Route::get('delete/{id}','MenuController@getDelete')->name('admin.menu.get.delete');

            Route::group(['prefix' => 'banner'],function(){

                    Route::get('/list-banner','MenuController@getListBanner')->name('admin.menu.get.listbanner');

                    Route::get('/create-banner','MenuController@getCreateBanner')->name('admin.menu.get.createbanner');
                    Route::post('/create-banner','MenuController@postCreateBanner')->name('admin.menu.post.createbanner');

                    Route::get('/edit-banner/{id}','MenuController@getEditBanner')->name('admin.menu.get.editbanner');
                    Route::post('/edit-banner/{id}','MenuController@postEditBanner')->name('admin.menu.post.editbanner');

                    Route::get('/delete-banner/{id}','MenuController@getDeleteBanner')->name('admin.menu.get.deletebanner');


        });

    });
    Route::group(['prefix' => 'about' ],function(){
        Route::group(['prefix' => 'project' ],function(){
        Route::get('/list-ky-nang','AboutController@getListKyNang')->name('admin.about.get.listkynang');

        Route::get('/create-ky-nang','AboutController@getCreateKynang')->name('admin.about.get.createkynang');
        Route::post('/create-ky-nang','AboutController@postCreateKynang')->name('admin.about.post.createkynang');

        Route::get('/edit-ky-nang/{id}','AboutController@getEditKynang')->name('admin.about.get.editkynang');
        Route::post('/edit-ky-nang/{id}','AboutController@postEditKynang')->name('admin.about.post.editkynang');

        Route::get('/delete-ky-nang/{id}','AboutController@getDeleteKynang')->name('admin.about.get.deletekynang');

    });
        Route::group(['prefix' => 'gioi-thieu' ],function(){

            Route::get('/list-gioi-thieu','AboutController@getListGioiThieu')->name('admin.about.get.listgioithieu');
            Route::get('/create-gioi-thieu','AboutController@getCreateGioiThieu')->name('admin.about.get.creategioithieu');
            Route::post('/create-gioi-thieu','AboutController@postCreateGioiThieu')->name('admin.about.post.creategioithieu');

            Route::get('/edit-gioi-thieu/{id}','AboutController@getEditGioiThieu')->name('admin.about.get.editgioithieu');
            Route::post('/edit-gioi-thieu/{id}','AboutController@postEditGioiThieu')->name('admin.about.post.editgioithieu');

            Route::get('/delete-gioi-thieu/{id}','AboutController@getDeleteGioiThieu')->name('admin.about.get.deletegioithieu');

        });

        Route::group(['prefix' => 'resume' ],function(){

            Route::get('/list-resume','AboutController@getListResume')->name('admin.about.get.listresume');
            Route::get('/create-resume','AboutController@getCreateResume')->name('admin.about.get.createresume');
            Route::post('/create-resume','AboutController@postCreateResume')->name('admin.about.post.createresume');

            Route::get('/edit-resume/{id}','AboutController@getEditResume')->name('admin.about.get.editresume');
            Route::post('/edit-resume/{id}','AboutController@postEditResume')->name('admin.about.post.editresume');

            Route::get('/delete-resume/{id}','AboutController@getDeleteResume')->name('admin.about.get.deleteresume');

        });

        Route::group(['prefix' => 'epx' ],function(){

            Route::get('/list-exp','AboutController@getListExp')->name('admin.about.get.listexp');

            Route::get('/create-exp','AboutController@getCreateExp')->name('admin.about.get.createexp');
            Route::post('/create-exp','AboutController@postCreateExp')->name('admin.about.post.createexp');

            Route::get('/edit-exp/{id}','AboutController@getEditExp')->name('admin.about.get.editexp');
            Route::post('/edit-exp/{id}','AboutController@postEditExp')->name('admin.about.post.editexp');

            Route::get('/delete-exp/{id}','AboutController@getDeleteExp')->name('admin.about.get.deleteexp');

        });
    });

    Route::group(['prefix'=>'contact'],function(){

        Route::group(['prefix' => 'link-contact' ],function(){
            Route::get('/list-link-contact','ContactController@getListLink')->name('admin.contact.get.listlinkcontact');

            Route::get('/create-link-contact','ContactController@getCreateLink')->name('admin.contact.get.createlinkcontact');
            Route::post('/create-link-contact','ContactController@postCreateLink')->name('admin.contact.post.createlinkcontact');

            Route::get('/edit-link-contact/{id}','ContactController@getEditLink')->name('admin.contact.get.editlinkcontact');
            Route::post('/edit-link-contact/{id}','ContactController@postEditLink')->name('admin.contact.post.editlinkcontact');

            Route::get('/delete-link-contact/{id}','ContactController@getDeleteLink')->name('admin.contact.get.deletelinkcontact');

        });

        Route::group(['prefix' => 'message' ],function(){
            Route::get('/list-message','ContactController@getListMessage')->name('admin.contact.get.listmessage');

            Route::get('/delete-message/{id}','ContactController@getDeleteMessage')->name('admin.contact.get.deletemessage');

        });
    });



});
//Route::get('thu',function (){
//   $thu = admin::All();
//
//       echo $thu ;
//
//});
