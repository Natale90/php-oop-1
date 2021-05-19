<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// GOAL: come detto a lezione, generare nuovo controller con rotta associata;
// definire poi classe Movie con titolo e descrizione;
// definire costruttore con titolo necessario e descrizione opzionale;
// e metodo getString() che restituisca una stringa riportante tutte le variabili;
// generare poi un paio di istanze e stamparle per mezzo del dd() come visto in classe

class Movie{

  public $title;
  public $description;

  public function __construct($title, $description = null){

    $this -> title = $title;

    if ($description == null) {

      $this -> description = 'description not available';
    } else{

      $this -> description = $description;
    }

  }

  public function getString(){

    return "Movie: " . $this -> title . "-->" . $this ->  description;
  }

}

class myControllerOne extends Controller
{
  public function home(){

    $movieOne = new Movie('Pirati dei caraibi', 'Un pirata burlone si diverte andando a cacciarsi nei guai nei sette mari');
    $movieTwo = new Movie('Ritorno al futuro', 'Uno scenziato non troppo pazzo modifica una delorean in modo che possa viaggiare nello spazio');
    $movieThree = new Movie('Rocky V');


    $collection = [

      $movieOne,
      $movieTwo,
      $movieThree
    ];

    $str = '';
    foreach ($collection as $movie) {

      $str .= $movie -> getString() . "\n";
    }

    dd($str);

    return view('pages.home');
  }
}
