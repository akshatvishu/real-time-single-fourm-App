<?php

Route::apiResource('/question','QuestionController');

Route::apiResource('/category', 'CategoryController');

Route::apiResource('/question/{question}/reply', 'ReplyController');

Route::post('/likes/{reply}', 'LikesController@likeIt');
Route::delete('/likes/{reply}', 'LikesController@unLikeIt');
