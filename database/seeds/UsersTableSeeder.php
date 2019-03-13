<?php
use Illuminate\Database\Seeder;
use App\User;

/**
 * User: KeepThinkingIt
 */

class UsersTableSeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(User::class)->times(2)->make();
        User::insert($users->makeVisible(['password', 'email', 'remember_token'])->toArray()); //让所有生成数据可见隐藏信息

        // 创建帐号
        $user = User::find(1);
        $user->name = 'xianyu';
        $user->email = 'admin@admin.com';
        $user->password = bcrypt('admins');
//        $user->confirmed = true;
        $user->save();

        $user = User::find(2);
        $user->name = 'dalao';
        $user->email = 'dalao@admin.com';
        $user->password = bcrypt('admins');
//        $user->confirmed = true;
        $user->save();

    }

}
