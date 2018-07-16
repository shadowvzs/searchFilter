<?php

Route::get('search/{query}', 'ProductController@test')->where('query','.+');
