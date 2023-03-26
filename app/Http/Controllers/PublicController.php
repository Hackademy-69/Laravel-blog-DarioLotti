<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
   public function homepage (){
    $Harry='Harry Potter';
    return view ('homepage',['Harry'=>$Harry]);
   } 

   public function HarryPotter(){
    $characters= [
        [ 'name' => 'Harry Potter', 'teams' => 'Grifondoro', 'img'=>'/img/Potter.jpg'],
        [ 'name' => 'Draco Malfoy', 'teams' => 'Serpeverde', 'img'=>'/img/Malfoi.jpg'],
        [ 'name' => 'Hermione Grenger', 'teams' => 'Grifondoro','img'=>'/img/Ermione.jpg'],
        [ 'name' => 'Ron Weasley', 'teams' => 'Grifondoro','img'=>'/img/Ron.jpg'],
        [ 'name' => 'Tom Riddle', 'teams' => 'Serpeverde', 'img'=>'/img/Tom.jpg'],
    ];
    return view ('HarryPotter', ['characters'=>$characters]);
   }

 


   public function HarryPotter_dettaglio($name){
    $characters= [
        [ 'name' => 'Harry Potter', 'teams' => 'Grifondoro', 'img'=>'/img/Potter.jpg', 'description'=>'il mago più potente'],
        [ 'name' => 'Draco Malfoy', 'teams' => 'Serpeverde', 'img'=>'/img/Malfoi.jpg', 'description'=>'il mago più viziato'],
        [ 'name' => 'Hermione Grenger', 'teams' => 'Grifondoro','img'=>'/img/Ermione.jpg', 'description'=>'la maga più studiosa'],
        [ 'name' => 'Ron Weasley', 'teams' => 'Grifondoro','img'=>'/img/Ron.jpg',  'description'=>'il mago più simpatico'],
        [ 'name' => 'Tom Riddle', 'teams' => 'Serpeverde', 'img'=>'/img/Tom.jpg', 'description'=>'il mago più malvagio'],
    ];
    foreach ($characters as $character) {
       if ($character['name'] == $name) {
        return view('HarryPotter_dettaglio', ['character'=> $character]);
       }
       
    }
   
   }

};
