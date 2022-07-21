<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use  Illuminate\Support\Facades\DB;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Database\Eloquent\Factories\Factory;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$user = User::factory()->create();
       // Activity::all();
        $user = User::find(22);
       $user->update(['name'=>'test_update']);
       $user->delete();

       $activity = Activity::all()->last();
        return $activity;

        // $user1 = User::create(['name' => 'user_manager','email'=> 'manager@gmail.com','password'=>'12345678']);
        // $user2 = User::create(['name' => 'user_test','email'=> 'user@gmail.com','password'=>'12345678']);

        //  $role1 = Role::create(['name' => 'user']);
        //  $role2 = Role::create(['name' => 'manager']);


        //  $permission1= Permission::create(['name' => 'add_project']);
        //  $permission2= Permission::create(['name' => 'update_project']);
        //  $permission3 = Permission::create(['name' => 'delete_project']);

        //  $user1->assignRole($role1);
        //  $user2->assignRole($role2);

        //  $role1->givePermissionTo($permission1);
        //  $role2->givePermissionTo([$permission1,$permission2]);

         //die();

        //
       // $user = User::find(15);
       // return $user->getAllPermissions();


        //  $role=Role::findByid(10);
        //  $permission=Permission::findByid(7);
        //  $role->givePermissionTo($permission);

        //  $permission->removeRole($role);
        //  $user=auth()->user();
        //  $user->assignRole($role);
        //  if($user->can('edit_project'))
        //  {
        //      echo 'can update project';
        //  }
        //  if($user->can('add_project'))
        //  {
        //      echo 'can add_project';
       //  }

        //  return $user->getAllPermissions();

        //  die();

       // $user1 = User::create(['name' => 'houda','email'=> 'houda@gmail.com','password'=>'12345678']);



         return view('home');
    }
}
