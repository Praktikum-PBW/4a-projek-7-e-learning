<?php
if(isset($_POST['tambah'])){
    $nama = htmlentities(htmlspecialchars(strip_tags(trim($_POST['kategori']))));

    $query = mysqli_query($koneksi, "INSERT INTO kategori VALUES (null,'$nama')");
    if($query){
        header("Location: index.php?page=kategori");
    }else{
        echo "gagal";
    }
}
?>