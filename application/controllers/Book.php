<?php

/**
 * Created by PhpStorm.
 * User: siddhartha
 * Date: 12-08-2017
 * Time: 10:30
 */
class Book extends CI_Controller
{
    // constructor
    public function __construct()
    {
        parent::__construct();
        $this->load->model('book_model', 'Book');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['books'] = $this->Book->getAllBooks();
        $this->load->view('book_view', $data);
    }

    public function add()
    {
        if(!empty($_POST)) {
            $book = [
                'book_isbn' => $_POST['isbn'],
                'book_title' => $_POST['title'],
                'book_author' => $_POST['author'],
                'book_category' => $_POST['category']
            ];
            $result = $this->Book->insert($book);
            if($result) {
                redirect('/book');
            }
        }
        $this->load->view('add_book');
    }

    public function edit($id) {
        if(!empty($_POST)) {
            $book = [
                'book_isbn' => $_POST['isbn'],
                'book_title' => $_POST['title'],
                'book_author' => $_POST['author'],
                'book_category' => $_POST['category']
            ];
            $result = $this->Book->updateBook($id, $book);
            if($result) {
                redirect('/book');
            }
        }
        $data['id'] = $id;
        $data['book'] = $this->Book->getBookDetails($id)[0];
        $this->load->view('edit_book', $data);
    }

}