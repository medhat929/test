<?php 
{

    /* ay 7aga */
    echo "this is our routes";

    Route::get('any', 'routers@index');


    Route::get('Hi', function(){
        echo "helooo";
    });

    Route::post('/admin/{id}', 'adminController@pay');

}
?>