
<?php



Route::get('/', function () {
  return view('welcome');
});

Route::get('/pizzas', function () {
  // get data from a database
  $pizzas = [
    ['type' => 'hawaiian', 'base' => 'cheesy crust'],
    ['type' => 'volcano', 'base' => 'garlic crust'],
    ['type' => 'veg supreme', 'base' => 'thin & crispy']
  ];



  return view('pizzas', [
    'pizzas' => $pizzas,
    'name' => request('name'),
    'age' => request('age')
  ]);
});

Route::get('/pizzas/{id}', function ($id) {
  

  return view('details', ['id' => $id]);
});