
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        

                        <div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h3 class="text-center">Create new book</h3>
        </div>
        <div class="card-body">
          <form method="POST" action="http://localhost/bookstore/public/registerb" enctype="multipart/form-data">
            <div class="form-group">
              <label for="username">Title</label>
              <input type="text" id="title" name="title" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="password">Author</label>
              <input type="text" id="author" name="author" class="form-control" required>
            </div>
            <div class="form-group">
            <label for="categoria">Category</label>
            <select class="form-control" id="category">
                <option>fiction</option>
                <option>comedy</option>
          <!-- Agrega más opciones según sea necesario -->
            </select>
            </div>
            
            <div class="form-group">
                <label for="descripcion">Description</label>
                <textarea name="description" class="form-control" id="description" rows="3" placeholder="Write the book description"></textarea>
            </div>

            <div class="mb-3"></div>

            <div class="form-group">
                <label for="imagenLibro">Select book image</label>
                <input name="bookimg" type="file" class="form-control-file" id="bookimg">
            </div>

            <div class="mb-3"></div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">Creater</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

                        
                    </div>
                </main>
                
