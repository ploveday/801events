<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listCtrl extends Controller
{
    public function show()
    {
       $characters = [
         '1' => 'Emilia Clarke',
         '2'           => 'Kit Harington',
         '3'         => 'Maisie Williams',
         '4'         => 'Carice van Houten',
         '5'         => 'Jason Momoa',
         '6'   => 'Peter Dinklage',
         '7'      => 'Iwan Rheon',
         '8'      => 'Aidan Gillen',
         '9'   => 'Gwendoline Christie',
         '0'         => 'Conleth Hill'
       ];

       return view('organizers')->withCharacters($characters);
    }

    public function allevent()
    {
       $characters = [
         '1' => 'Emilia Clarke',
         '2'           => 'Kit Harington',
         '3'         => 'Maisie Williams',
         '4'         => 'Carice van Houten',
         '5'         => 'Jason Momoa',
         '6'   => 'Peter Dinklage',
         '7'      => 'Iwan Rheon',
         '8'      => 'Aidan Gillen',
         '9'   => 'Gwendoline Christie',
         '0'         => 'Conleth Hill'
       ];

       return view('allevents')->withCharacters($characters);
    }
    
    public function createvent()
    {
       $characters = [
         '1' => 'Emilia Clarke',
         '2'           => 'Kit Harington',
         '3'         => 'Maisie Williams',
         '4'         => 'Carice van Houten',
         '5'         => 'Jason Momoa',
         '6'   => 'Peter Dinklage',
         '7'      => 'Iwan Rheon',
         '8'      => 'Aidan Gillen',
         '9'   => 'Gwendoline Christie',
         '0'         => 'Conleth Hill'
       ];

       return view('createevent')->withCharacters($characters);
    }

    
    public function tickets()
    {
       $characters = [
         '1' => 'Emilia Clarke',
         '2'           => 'Kit Harington',
         '3'         => 'Maisie Williams',
         '4'         => 'Carice van Houten',
         '5'         => 'Jason Momoa',
         '6'   => 'Peter Dinklage',
         '7'      => 'Iwan Rheon',
         '8'      => 'Aidan Gillen',
         '9'   => 'Gwendoline Christie',
         '0'         => 'Conleth Hill'
       ];

       return view('allevents')->withCharacters($characters);
    }

    public function scanticket()
    {
       $characters = [
         '1' => 'Emilia Clarke',
         '2'           => 'Kit Harington',
         '3'         => 'Maisie Williams',
         '4'         => 'Carice van Houten',
         '5'         => 'Jason Momoa',
         '6'   => 'Peter Dinklage',
         '7'      => 'Iwan Rheon',
         '8'      => 'Aidan Gillen',
         '9'   => 'Gwendoline Christie',
         '0'         => 'Conleth Hill'
       ];

       return view('allevents')->withCharacters($characters);
    }
}


