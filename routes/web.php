<?php

//php artisan make:mail ContactForMail --markdown=emails.contact.contact-form
//php artisan storage:link
//php artisan config:cache

Route::get('/', 'MosqueHomeController@index');
Route::get('/{id}/event_detail', 'MosqueHomeController@eventDetail');
Route::get('/mosque_committe', 'MosqueHomeController@mosquecommitte');
Route::get('/notice_board', 'MosqueHomeController@noticeboard');
Route::get('/{id}/notice_board', 'MosqueHomeController@noticedetail');
Route::get('/money_transaction', 'MosqueHomeController@moneytransaction');
Route::get('/photo_gallery', 'MosqueHomeController@photogallery');
Route::get('/book_library', 'MosqueHomeController@booklibrary');
Route::get('/video_gallery', 'MosqueHomeController@videogallery');
Route::get('/ramadan', 'MosqueHomeController@ramadan');
Route::get('/salat', 'MosqueHomeController@salat');
Route::get('/faq', 'MosqueHomeController@faqform');
Route::post('/faq', 'MosqueHomeController@faq');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/admin/imam_message', 'ImamMessageController');
Route::resource('/admin/event', 'EventController');
Route::resource('/admin/noticeboard', 'NoticeBoardController');
Route::resource('/admin/photo_slides', 'PhotoSlidesController');
Route::resource('/admin/committee', 'CommitteeController');
Route::resource('/admin/money_transaction', 'MoneyTransactionController');
Route::resource('/admin/photo_gallery', 'PhotoGalleryController');
Route::resource('/admin/video_gallery', 'VideoGalleryController');
Route::resource('/admin/book_library', 'BookLibraryController');
Route::resource('/admin/ramadan_calender', 'RamadanCalenderController');
Route::resource('/admin/question', 'FAQController');
Route::resource('/admin/salat', 'SalatController');
Route::post('/mailing', 'SendMailController@store');
