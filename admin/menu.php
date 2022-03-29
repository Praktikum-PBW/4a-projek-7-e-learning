<?php
    if(isset($_GET['page'])){
        $page = $_GET['page'];

        include '../lib/koneksi.php';

        switch($page){
            case 'dashboard':
                include 'dashboard.php';
                break;
            case 'kategori':
                include 'kategori/index.php';
                break;
            case 'kategori_create':
                include 'kategori/create.php';
                break;
            case 'kategori_proses':
                include 'kategori/create_proses.php';
                break;
            case 'kategori_edit':
                include 'kategori/edit.php';
                break;
            case 'kategori_update':
                include 'kategori/update.php';
                break;
            case 'kategori_delete':
                include 'kategori/delete.php';
                break;
            case 'blog':
                include 'blog/index.php';
                break;
            case 'blog_create':
                include 'blog/create.php';
                break;
            case 'blog_proses':
                include 'blog/create_proses.php';
                break;
            case 'blog_edit':
                include 'blog/edit.php';
                break;
            case 'blog_update':
                include 'blog/update.php';
                break;
            case 'blog_delete':
                include 'blog/delete.php';
                break;
            default:
                echo "Maaf halam tidak ditemukan";
                break;
        }
    }else{
        include 'dashboard.php';
    }
?>