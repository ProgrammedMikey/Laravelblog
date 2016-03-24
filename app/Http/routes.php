<?php


Route::group(['middleware' => ['web']], function () {
    Route::get('/', [
        'uses' => 'PostController@getBlogIndex',
        'as' => 'blog.index'
    ]);

    Route::get('/blog', [
        'uses' => 'PostController@getBlogIndex',
        'as' => 'blog.index'
    ]);

    Route::get('/blog/{post_id}&{end}', [
        'uses' => 'PostController@getSinglePost',
        'as' => 'blog.single'
    ]);

    Route::get('/about', function() {
        return view('frontend.other.about');
    })->name('about');

    Route::get('/contact', [
        'uses' => 'ContactMessageController@getContactIndex',
        'as' => 'contact'
    ]);

    Route::group([
         'prefix' => '/admin'
    ], function() {
        Route::get('/', [
            'uses' => 'AdminController@getIndex',
            'as' => 'admin.index'
        ]);

        Route::get('/blog/posts', [
            'uses' => 'PostController@getPostIndex',
            'as' => 'admin.blog.index'
        ]);

        Route::get('/blog/posts/create', [
            'uses' => 'PostController@getCreatePost',
            'as' => 'admin.blog.create_post'
        ]);

        Route::get('/blog/posts/{post_id}&{end}', [
            'uses' => 'PostController@getSinglePost',
            'as' => 'admin.blog.post'
        ]);

        Route::post('/blog/posts/create', [
            'uses' => 'PostController@postCreatePost',
            'as' => 'admin.blog.post.create'
        ]);

        Route::get('/blog/posts/{post_id}/edit', [
            'uses' => 'PostController@getUpdatePost',
            'as' => 'admin.blog.post.edit'
        ]);

        Route::post('/blog/posts/update', [
            'uses' => 'PostController@postUpdatePost',
            'as' => 'admin.blog.post.update'
        ]);

        Route::get('/blog/posts/{post_id}/delete', [
            'uses' => 'PostController@getDeletePost',
            'as' => 'admin.blog.post.delete'
        ]);
    });
});
