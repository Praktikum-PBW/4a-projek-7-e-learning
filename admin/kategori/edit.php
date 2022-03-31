<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "SELECT * FROM kategori where id_kategori = '$id'");
    $data = mysqli_fetch_array($query);

    if(mysqli_num_rows($query)==1){
?>
<div class="row">
    <div class="col-md-12">
        <h4>Edit Category</h4>
        <form action="index.php?page=kategori_update" method="post">
            <input type="hidden" name="id" value="<?= $id ?>">
            <div class="mb-2">
                <label for="kategori" class="form-label">Category Name</label>
                <input type="text" name="kategori" id="kategori" class="form-control" placeholder="Input category name" value="<?= $data['kategori']?>">
            </div>
            <input type="submit" value="Edit" name="edit" class="btn btn-primary">
        </form>
    </div>
</div>
<?php
    }else{
        header("Location: index.php?page=kategori");
    }
}else{
    header("Location: Index.php?page=kategori");
}
?>