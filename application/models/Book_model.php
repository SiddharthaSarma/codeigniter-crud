<?php

/**
 * Created by PhpStorm.
 * User: siddhartha
 * Date: 12-08-2017
 * Time: 11:06
 */
class Book_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getAllBooks()
    {
        $query = $this->db->get('books');
        return $query->result();
    }

    public function getBookDetails($id)
    {
        $where['book_id'] = $id;
        $query = $this->db->get_where('books', $where);
        return $query->result();
    }

    public function updateBook($id, $book)
    {
        $where['book_id'] = $id;
        $query = $this->db->update('books', $book, $where);
        return $query;
    }

    public function insert($book)
    {
        return $this->db->insert('books', $book);
    }
}