<?php

namespace Food\Http\Controllers;

use Food\User;
use Food\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Food\Http\Requests\Admin\storeRequest;
use Illuminate\Contracts\Validation\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $category= Category::pluck('name','id');
        $users = User::all();
        $totalUser=User::where('role_id','2')->get()->count();
        return view('admin.user.index',compact('users','user','category','totalUser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $category= Category::pluck('name','id');
        $users = User::all();
        return view('admin.user.create',compact('users','user','category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
       try {
                if($request->hasFile('avata'))
                {
                    $file = $request->file('avata');
                    $newFilename='images/users/'.rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
                    $destinationPath = public_path('images/users');
                    $file->move($destinationPath, $newFilename);
                }else{
                    $newFilename='';
                }
                 User::create([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'dob' => $request->dod,
                    'gender' => $request->gender,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                    'phone' => $request->phone,
                    'address' => $request->address,
                    'avatar' =>$newFilename,
                    'role_id' => 1
                ]);
                return redirect()->route('users.index');
       } catch (Exception $e) {

        return redirect()->back()->with('message', 'Không thể thêm. Có lỗi');
    
    }

    }

    /**
     * Display the specified resource.
     *
     * @param  \Food\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Food\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Food\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Food\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
