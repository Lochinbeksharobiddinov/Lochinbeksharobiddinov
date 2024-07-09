<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;

class CarsController extends Controller
{
  public function create()
  {
    return view('cars.create');
  }

  public function store(Request $request)
  {


    if ($request->hasFile('photo')) {
      // $path = $request->files('photo')->getClientOrginalName;
      $name = $request->file('photo')->getClientOriginalName();
      $path = $request->file('photo')->store('cars-photo',$name);

      $cars = Cars::create([
        'photo' => $path,
        'model' => $request->model,
        'title' => $request->title,
        'prise' => $request->price,
        'description' => $request->description,
      ]);
     
    }
    
  
    return redirect()->route('/');
  }
  public function edit(Cars $cars){
    return view('cars.edit')->with('cars', $cars) ;
  }


public function update(Request $request, Cars $cars){
  if  ($request->hasFile('photo')){
    if(isset($cars->photo)){
      Storage::delete($cars->photo);
    }
    $name = $request->file('photo')->getClientOriginalName();
    $path = $request->file('photo')->store('cars-photo',$name);
  }
  $cars->update([
    'photo' => $path,
    'model' => $request->model,
    'title' => $request->title,
    'prise' => $request->price,
    'description' => $request->description,
  ]);
  return redirect()->route('/');
}
  public function delete(Cars $cars){
 if (isset($cars->photo)) {
  Storage::delete($cars->photo);
 }

 $cars->delete();
 return redirect()->route('/');
  }


}
