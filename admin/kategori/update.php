<?php
if (isset($_POST['edit'])) {
    $id = htmlentities(htmlspecialchars(strip_tags(trim($_POST['id']))));
    $nama = htmlentities(htmlspecialchars(strip_tags(trim($_POST['kategori']))));

    $query = mysqli_query($koneksi, "UPDATE kategori SET kategori='$nama' WHERE id_kategori='$id'");

    if ($query) {
        header("Location: index.php?page=kategori");
    } else {
        echo "Gagal";
    }
}
