<?php
/*
|--------------------------------------------------------------------------
| database/seeds/DatabaseSeeder.php *** Copyright netprogs.pl | available only at Udemy.com | further distribution is prohibited  ***
|--------------------------------------------------------------------------
*/

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
        $this->call(UsersTableSeeder::class); 
        $this->call(CitiesTableSeeder::class);         
        $this->call(ObjectsTableSeeder::class); 
        $this->call(AddressesTableSeeder::class); 
        $this->call(NotificationsTableSeeder::class); 
        $this->call(ArticlesTableSeeder::class); 
        $this->call(CommentsTableSeeder::class); 
        $this->call(LikeablesTableSeeder::class); 
        $this->call(PhotosTableSeeder::class); 
        $this->call(RoomsTableSeeder::class); 
        $this->call(ReservationsTableSeeder::class); 
        $this->call(RolesTableSeeder::class); 
        $this->call(RoleUserTableSeeder::class); 

    }
}

