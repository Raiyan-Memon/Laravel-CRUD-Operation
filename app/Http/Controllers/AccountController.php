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


    public function __construct()
    {
        $this->middleware('auth');
    }


    
    public function index()
    {
        // echo "<script>alert('message');</script>";
        $account = account::all();
        return view('accounts.index',compact('account'));

        // return view('accounts.index');
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

        echo "<script>alert('Inserted');</script>"; 
       $input = $request -> validate([
            'user_name' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'dob' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'gender' => '',
            'hobby' => '',
            'country' => '',
            'state' =>''
           

        ]);
        // dd($request->toarray());
      
      $query = account::create($input);

           

           

    // $person = new Person;
    // $person->name = $request->name;
    // $person->dob = $request->dob;
    // $person->age = $request->age;
    // $person->description = $request->description;
    // $person->phone = $request->phone;
    // $person->email = $request->email;
    // // $person->hobbies = $request->hobbies;
    // $person->gender = $request->gender;
    // $person->save();

    
    return redirect()-> route('accounts.index') -> with('insert-msg','successfully inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(Account $account)
    {
        return view('accounts.show');
        // echo "this is show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account)
    {
        return view('accounts.edit', compact('account'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Account $account)
    {
      $request -> validate([
            'user_name' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'dob' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'hobby' => '',
            'gender' => '',
            'country' => '',
            'state' => ''
        ]);

        // dd($account->id, $request->all('user_name','first_name','last_name','dob','phone','email','address'));

        account::where('id',$account->id)->update($request->all('user_name','first_name','last_name','dob','phone','email','address','hobby','gender','country','state'));
        return redirect() -> route('accounts.index') -> with('update-msg',"Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
    //    $account->delete();
        account::find($account->id)->delete();

        $msg = "<script>alert('Inserted');</script>"; 
        return redirect() -> route('accounts.index') ->with('message', 'Deleted');

     
    }
}