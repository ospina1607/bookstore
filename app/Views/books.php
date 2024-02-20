
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Select your books</h1>
                        <ol class="breadcrumb mb-4">
                           
                        </ol>
                       
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Books List
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Category</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Category</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                    <?php foreach ($books as $book): ?>
                                    <tr>
                                            <td><?= $book['title'] ?></td>
                                            <td><?= $book['author'] ?></td>
                                            <td> <?= $book['category'] ?> <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal"
                                            data-title="<?php echo $book['title']?>" data-author="<?php echo $book['author']?>"
                                            data-description="<?php echo $book['description']?>"
                                            data-img="<?php echo $book['image_id']?>"
                                            data-id="<?php echo $book['id']?>"
                                            style="margin-left:20px;">
  Reserve
</button> </td>
                                    </tr>
                                    <?php endforeach; ?>

        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reserve a book</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div style="text-align: center;" class="modal-body">
        <input style="width:200px; margin-left:135px" type="number" class="form-control" id="days" placeholder="´Number of days">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <!-- More content... -->
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS (Loads before) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function(){
    $('#exampleModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget); // Actives modal
      var title = button.data('title'); // Extracts the data
      var author = button.data('author');
      var desc = button.data('description');
      var image = button.data('img');
      var id = button.data('id');
      var modal = $(this);
      var input = document.getElementById("days");
    
       var days = input.value;

      var direction='http://localhost/bookstore/public/reserves/create/'+
      ''


      var dataHtml = '<img src="http://localhost/bookstore/public/images/'+image+' "> '+
      '<h3>'+ title + '</h3>'+
      '<p>'+'<i>'+author+'</i>.</p>'+
      '<h6>'+ desc +  '</h6>'+
      '<form method="POST" action="http://localhost/bookstore/public/reserves/create/1/2">'+
        ' <input name="days" style="width:200px; margin-left:135px" type="number" class="form-control" id="days" placeholder="´Number of days">'+
        '<input '+'value=" '+id+' "'+ 'name="bookId"  type="hidden" class="form-control" id="days" placeholder="´Number of days">'+
        '<button type="submit" class="btn btn-warning btn-block">Reserve</button>'+
        ''
        '</form>';

      modal.find('.modal-body').html(dataHtml);
    });
  });
</script>
                
