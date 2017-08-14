<?php $this->load->view('common/header'); ?>
<?php $this->load->view('common/navbar'); ?>
<body>
<div class="container">
    <form method="post">
        <div class="form-group">
            <label for="txtBookISBN">Book ISBN</label>
            <input type="text" class="form-control" id="txtBookISBN"  name="isbn" placeholder="Enter book isbn">
        </div>
        <div class="form-group">
            <label for="txtBookTitle">Book Title</label>
            <input type="text" class="form-control" id="txtBookTitle" name="title" placeholder="Enter book title">
        </div>
        <div class="form-group">
            <label for="txtBookAuthor">Book Author</label>
            <input type="text" class="form-control" id="txtBookAuthor" name="author" placeholder="Enter book author">
        </div>
        <div class="form-group">
            <label for="txtBookDescription">Book category</label>
            <input type="text" class="form-control" name="category" id="txtBookCategory" placeholder="Enter book category">
        </div>
        <button type="submit" class="btn btn-primary pull-right">Add book</button>
    </form>
</div>
</body>
