<?php


Route::resource('SnmpMib', 'Modules\HfcSnmp\Http\Controllers\SnmpMibController');
Route::resource('SnmpValue', 'Modules\HfcSnmp\Http\Controllers\SnmpValueController');
Route::resource('DeviceType', 'Modules\HfcSnmp\Http\Controllers\DeviceTypeController');
Route::resource('Device', 'Modules\HfcSnmp\Http\Controllers\DeviceController');
Route::get('Device/{modem}/controlling', array ('as' => 'Device.controlling_edit', 'uses' => 'Modules\HfcSnmp\Http\Controllers\DeviceController@controlling_edit'));
Route::put('Device/{modem}/controlling', array ('as' => 'Device.controlling_update', 'uses' => 'Modules\HfcSnmp\Http\Controllers\DeviceController@controlling_update'));

Route::get('Device/fulltextSearch', array('as' => 'Device.fulltextSearch', 'uses' => 'DeviceController@fulltextSearch'));
Route::get('DeviceType/fulltextSearch', array('as' => 'DeviceType.fulltextSearch', 'uses' => 'DeviceTypeController@fulltextSearch'));
Route::get('SnmpMib/fulltextSearch', array('as' => 'SnmpMib.fulltextSearch', 'uses' => 'SnmpMibController@fulltextSearch'));
Route::get('SnmpValue/fulltextSearch', array('as' => 'SnmpValue.fulltextSearch', 'uses' => 'SnmpValueController@fulltextSearch'));