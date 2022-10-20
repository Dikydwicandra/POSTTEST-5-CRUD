<?php
require 'koneksi.php';

// Check if POST data is not empty
if (!empty($_POST)) {
    // Post data not empty insert a new record
    // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $tahun = isset($_POST['tahun']) ? $_POST['tahun'] : '';
    $genre = isset($_POST['genre']) ? $_POST['genre'] : '';
    $durasi = isset($_POST['durasi']) ? $_POST['durasi'] : '';
    $rating = isset($_POST['rating']) ? $_POST['rating'] : '';

    // Insert new record into the contacts table
mysqli_query($conn,"INSERT INTO data_film VALUES ('','$nama', '$tahun', '$genre', '$durasi', '$rating')");
    // Output message
    $msg = 'Created Successfully!';
}
?>


<?=template_header('Create')?>

<div class="content update">
	<h2>Create Contact</h2>
    <form action="create.php" method="post">
        <label for="id">ID</label>
        <label for="nama">Judul</label>
        <input type="text" name="id" value="auto" id="id">
        <input type="text" name="nama" id="nama">
        <label for="tahun">Tahun</label>
        <label for="genre">Genre</label>
        <input type="number" name="tahun" id="tahun">
        <input type="text" name="genre" id="notelp">
        <label for="durasi">Durasi</label>
        <input type="number" name="durasi" id="durasi">
        <label for="rating">Rating</label>
        <input type="number" name="rating" id="rating">
        <input type="submit" value="Create">
    </form>
   
</div>

<?=template_footer()?>