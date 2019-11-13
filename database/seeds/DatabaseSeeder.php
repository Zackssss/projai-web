<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $faker = Faker::create('fr_FR');
        foreach(range(1,10)as $index){
            DB::table('produits')->insert([
                'nom_produit' => $faker->name,
                'description_produit' => $faker->realText($maxNbChars=255),
                'prix' => $faker->numberBetween(1,20),
                'nbr_de_vente'=> $faker->numberBetween(1,50),
                'id_evenement'=> $faker->numberBetween(0,5),
                'url_image_produit'=>$faker->imageUrl($width = 400, $height = 600, true, 'Faker')
                
            ]);}
            foreach(range(1,10)as $index){
                DB::table('images')->insert([
                    'chemin' => $faker->imageUrl($width = 400, $height = 600, 'animals', true, 'Faker') ,
                    'visibilite_image' => 1,
                    'appréciation' => $faker->numberBetween(1,20),
                    'user_id_createur_img'=> $faker->numberBetween(1,50),
                    'id_evenement'=> $faker->numberBetween(1,5)
                    
                    
                ]);}
            foreach(range(1,10)as $index){
                    DB::table('commandes')->insert([
                        'id_commande'=> $faker -> numberBetween(1,5),
                        'date_commande' => $faker->date($format = 'Y-m-d', $max = 'now') ,
                        'quantite' =>$faker->numberBetween(1,20),
                        'user_id' => $faker->numberBetween(1,20),
                        'id_produit'=> $faker->numberBetween(1,50),
                        
                        
                    ]);}
            foreach(range(1,10)as $index){
                DB::table('commentaires')->insert([
                    'texte' => $faker->realText($maxNbChars=50) ,
                    'visibilite_commentaire' =>1,
                    'user_id_createur_com' => $faker->numberBetween(1,20),
                    'id_image'=> $faker->numberBetween(1,50),
                    
                        
                ]);}
            foreach(range(1,10)as $index){
                 DB::table('evenements')->insert([
                    'nom_evenement' => $faker->realText($maxNbChars=10) ,
                    'association' =>$faker->company(),
                    'Description_evenement' => $faker->realText($maxNbChars=240),
                    'date_evenement'=> $faker->date($format = 'Y-m-d', $max = 'now') ,
                    'recurence'=> 0,
                    'date_creation' => $faker->date($format = 'Y-m-d', $max = 'now'),
                    'user_id'=> $faker->numberBetween(1,10)
                        
                            
                    ]);}
                
    }
}

    
    

