<?php
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        include '../lib/koneksi.php';

        switch($page){
            case 'dashboard':
                include 'dashboard.php';
                break;
            case 'Buku':
                include 'Buku/index.php';
                break;
            case 'Buku_create':
                include 'Buku/create.php';
                break;
            case 'Buku_store':
                include 'Buku/store.php';
                break;
            case 'Buku_edit':
                include 'Buku/edit.php';
                break;
            case 'Buku_update':
                include 'Buku/update.php';
                break;
            case 'Buku_delete':
                include 'Buku/delete.php';
                break;
            case 'user':
                include 'user/index.php';
                break;
            case 'user_create':
                include 'user/create.php';
                break;
            default :
                echo "Maaf Halaman Tidak Ada";
                break;    
        }
    }else{
        include 'dashboard.php';
    }