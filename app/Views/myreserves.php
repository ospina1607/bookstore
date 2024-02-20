
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
                                            <th>Action</th>
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

                                    <?php foreach ($reserves as $reserve): ?>
                                    <tr>
                                            <td><?= $reserve['title'] ?></td>
                                            <td><?= $reserve['author'] ?></td>
                                            <td><a href="<?php echo "http://localhost/bookstore/public/reserves/delete/" . $reserve['id'] . "/" . $reserve['reserve_id']  ?>" class="btn btn-danger">Delete</a></td>      
                                    </tr>
                                    <?php endforeach; ?>

        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>


                
