<?php


class Movie
{

  public $title;
  public $description;
  public $length;
  public $genre;
  public $placeholder;

  public function __construct($title, $description, $length, Genre $genre, $placeholder = 'https://picsum.photos/400/200')
  {
    $this->title = $title;
    $this->description = $description;
    $this->length = $length;
    $this->genre = $genre;
    $this->placeholder = $placeholder;
  }


  function getMovieDetails()
  {

    $genre_name = $this->genre?->name;

    return "Title: $this->title | Description: $this->description | Genre: $genre_name";
  }
}
