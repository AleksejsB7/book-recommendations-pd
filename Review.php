<?php
class Review
{
    public $full_name;
    public $book_title;
    public $review_text;
    public $rating;
    public $submitted_at;

    function __construct($full_name, $book_title, $review_text, $rating, $submitted_at)
    {
        $this->full_name = $full_name;
        $this->book_title = $book_title;
        $this->review_text = $review_text;
        $this->rating = $rating;
        $this->submitted_at = $submitted_at;
    }
}
