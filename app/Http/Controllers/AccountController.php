<?php
namespace App\Http\Controllers;
use App\Models\Account;
use Illuminate\Http\Request;
class AccountController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$data['accounts'] = Account::orderBy('id','desc')->paginate(5);
return view('accounts.index', $data);
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('accounts.create');
}
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
$request->validate([
'name' => 'required',
'password' => 'required',

]);
$account = new Account;
$account->name = $request->name;
$account->password = $request->password;

$account->save();
return redirect()->route('accounts.index')
->with('success','Account has been created successfully.');
}
/**
* Display the specified resource.
*
* @param  \App\Account  $account
* @return \Illuminate\Http\Response
*/
public function show(Account $account)
{
return view('accounts.show',compact('account'));
} 
/**
* Show the form for editing the specified resource.
*
* @param  \App\Account  $account
* @return \Illuminate\Http\Response
*/
public function edit(Account $account)
{
return view('accounts.edit',compact('account'));
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  \App\Account  $account
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
$request->validate([
'name' => 'required',
'password' => 'required',

]);
$account = Account::find($id);
$account->name = $request->name;
$account->password = $request->password;
$account->save();
return redirect()->route('accounts.index')
->with('success','Account Has Been updated successfully');
}
/**
* Remove the specified resource from storage.
*
* @param  \App\Account  $account
* @return \Illuminate\Http\Response
*/
public function destroy(Account $account)
{
$account->delete();
return redirect()->route('accounts.index')
->with('success','Account has been deleted successfully');
}
}