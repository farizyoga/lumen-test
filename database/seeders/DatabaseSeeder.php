<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{User, Phone};
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();

        $user->email = 'lumen@laravel.com';
        $user->fullname = 'Laravel Lumen';
        $user->password = Hash::make('lumen');
        $user->token = sha1(md5(time().Hash::make('lumen')));
        $user->device = 'ANDROID';

        $user->save();

        $phone = new Phone();

        $phone->user_id = $user->id;
        $phone->number = '081299994444';

        $phone->save();

        $phone = new Phone();

        $phone->user_id = $user->id;
        $phone->number = '08132992444';

        $phone->save();

        $phone = new Phone();

        $phone->user_id = $user->id;
        $phone->number = '081295219444';

        $phone->save();
    }
}
