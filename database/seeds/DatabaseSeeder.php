<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	DB::table('users')->insert([
            'name' => 'Agust Einar',
            'email' => 'agust.e.agustsson@gmail.com',
            'password' => bcrypt('secret'),
        ]);

        DB::table('threads')->insert([
            ['title' => 'Titill A', 'body' => 'body fyrir titil A', 'user_id' => 1] ,

            ['title' => 'Titill B', 'body' => 'body fyrir titil B', 'user_id' => 1] ,

            ['title' => 'Titill C', 'body' => 'body fyrir titil C', 'user_id' => 1] ,

            ['title' => 'Titill D', 'body' => 'body fyrir titil D', 'user_id' => 1] ,

            ['title' => 'Titill E', 'body' => 'body fyrir titil E', 'user_id' => 1] 
        ]);

        DB::table('leikstjori')->insert([
            ['id' => 1, 'nafn' => 'Ragnar P. Ragnarsson', 'thjoderni' => 'Ísland'] ,
            ['id' => 2, 'nafn' => 'James Gatz', 'thjoderni' => 'England'] ,
            ['id' => 3, 'nafn' => 'Beggi Helga', 'thjoderni' => 'Ísland'] ,
            ['id' => 4, 'nafn' => 'W.C. Bartek', 'thjoderni' => 'Kanada'] ,
            ['id' => 5, 'nafn' => 'Wibe Lund', 'thjoderni' => 'Danmörk'] ,
        ]);

        DB::table('dvd')->insert([
            ['id' => 1, 'titill' => 'Vindurinn er blautur', 'adalleikari' => 'Pétur Selland',
            'utgafuar' => 1973, 'verd' => 2500, 'flokkur' => 'Spenna', 'leikstjori_id' => 5] ,

            ['id' => 2, 'titill' => 'Veiðidellan er frábær', 'adalleikari' => 'Gústaf Gústafsson',
            'utgafuar' => 1999, 'verd' => 3550, 'flokkur' => 'Sport', 'leikstjori_id' => 1] ,

            ['id' => 3, 'titill' => 'Into the wild', 'adalleikari' => 'John Johnsson',
            'utgafuar' => 1973, 'verd' => 2500, 'flokkur' => 'Drama', 'leikstjori_id' => 4] ,

            ['id' => 4, 'titill' => 'The Strider', 'adalleikari' => 'Biff Holmes',
            'utgafuar' => 1973, 'verd' => 2500, 'flokkur' => 'Ævintrýri', 'leikstjori_id' => 2] ,
        ]);
    }
}
