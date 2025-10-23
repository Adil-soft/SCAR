<form method="POST" action="subir-foto.php" enctype="multipart/form-data">
                <label for="foto">Subir Foto:</label>
                 <input type="file" id="foto" name="foto" value="<?php if(isset($_FILES['foto'])) echo $_FILES['foto']; ?>">
              </div>
            </div>
                <input type="submit" name="submit" class="btn btn-primary" value="Confirmar">
                 <a class="btn btn-primary" href="publicidadEventos.php">Pagina de inicio</a>
             </div>
        </form>