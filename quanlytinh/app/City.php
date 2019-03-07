<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function customers(){
  return $this->hasMany('App\Customer');
}
	public function store(Request $request){
	  $city = new City();
	  $city->name     = $request->input('name');
	  $city->save();
	 
	  //tao moi xong quay ve trang danh sach khach hang
	  return redirect()->route('customers.index');
}
}
