<?php $this->load->view('common/header') ?>
<?php $this->load->view('common/navbar') ?>
<body>
<div class="container">
    <h2 class="text-center"></h2>
    <table class="table table-bordered">
        <thead>
        <th>Book isbn</th>
        <th>Book title</th>
        <th>Book author</th>
        <th>Book category</th>
        <th></th>
        </thead>
        <tbody>
        <?php foreach ( $books as $book): ?>
        <tr>
            <td><?= $book->book_isbn ?></td>
            <td><?= $book->book_title ?></td>
            <td><?= $book->book_author ?></td>
            <td><?= $book->book_category ?></td>
            <td><a href="book/edit/<?=$book->book_id?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>