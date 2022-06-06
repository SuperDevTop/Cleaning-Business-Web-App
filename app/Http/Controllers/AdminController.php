<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $count_users = User::all()->count();
        $count_groups = Group::all()->count();
        $groups = [];
        $user_names = User::all('name');
        $group_names = Group::all('name');

        for($i = 0; $i < $count_groups; $i++)
        {
            $groups[$i] = User::where('group_id', $i + 1)->get();
        }

        $path = 'user.index';

        if($request->session()->has('admin'))
        {
            $path = 'index';
        }

        return view($path)->with([
            'count_users' => $count_users,
            'count_groups' => $count_groups,
            'groups' => $groups,
            'user_names' => $user_names,
            'group_names' => $group_names
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $name = $request->name;
        $status = $request->status;
        $date = $request->date;
        $cleaning_material = $request->cleaning_material;
        $group_id = $request->group_id;

        $result = User::where('name', $name)
                ->update([
                    'status' => $status, 
                    'date' => $date, 
                    'cleaning_material' => $cleaning_material, 
                    'group_id' => $group_id
                ]);

        
            return redirect('index');

    }

  
    public function group_save(Request $request)
    {       
        $request->validate([
            'new_group_name' => 'required'
        ]);

        $group_name = $request->new_group_name;

        $group = new Group();
        $group->name = $group_name;
        $group->save();

        return redirect('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function test(Request $request)
    {
        $count_users = User::all()->count();
        $count_groups = Group::all()->count();
        $user_names = User::all('name');
        $group_names = Group::all('name');

        for($i = 0; $i < $count_groups; $i++)
        {
            $groups[$i] = User::where('group_id', $i + 1)->get();
        }
        return([
            'as' => Group::all('name'),
            'groups' => $groups[0][0]['name'],
            'g' => $group_names,
            'user_name' => $user_names
        ]);
    }
}
