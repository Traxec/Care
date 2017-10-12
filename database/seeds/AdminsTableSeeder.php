<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $admins = factory(Admin::class)->times(1)->make();
      Admin::insert($admins->makeVisible(['password','remember_token'])->toArray());

      $admin = Admin::find(1);
      $admin->name = 'Traxec';
      $admin->username = 'Traxec';
      $admin->password = bcrypt('4057208');
      $admin->save();
    }
}
