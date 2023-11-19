
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form PHP</title>
  </head>
  <body>
    <h2>Form Data Mahasiswa Pemrograman Web</h2>
    <form action="index1.php" method="post">
      <label for="nama">Nama:</label>
      <input type="text" name="nama" required /><br />

      <label for="nim">NIM:</label>
      <input type="text" name="nim" required /><br />

      <label for="prodi">Pertemuan:</label>
      <input type="text" name="prodi" required /><br />

      <label for="kelas">Kelas:</label>
      <input type="text" name="kelas" required /><br />

      <label for="semester">Semester:</label>
      <input type="text" name="semester" required /><br />

      <input type="submit" value="Submit" />
    </form>
  </body>
</html>

