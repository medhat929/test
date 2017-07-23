<?php 
{
/* ay 7aga */
echo "this is our routes";
Route::get('any', 'routers@index');
Route::get('Hi', function(){
    echo "hello";
});
Route::post('/admin/{id}', 'adminController@pay');

}
?>