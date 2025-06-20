<?php

$koneksi = mysqli_connect("localhost", "root", "", "topupgame");



function deleteGame($id) {
    global $koneksi;
    $query = "DELETE FROM namagame WHERE id='$id'";
    mysqli_query($koneksi, $query);
    return header("location: admin.php");
}

function getDataGame() {
    global $koneksi;
    $result = mysqli_query($koneksi,"SELECT * FROM namagame");
    $datas = [];
    while($data = mysqli_fetch_array($result)) {
        $datas[] = $data;
    }

    return $datas;
}

function updateGame($data) {
    $id = $data['id'];
    $game = $data['game'];
    $uid = $data['uid'];

    global $koneksi;
    mysqli_query($koneksi,"UPDATE namagame SET game='$game',uid='$uid' WHERE id = '$id'");
    return header("location:admin.php");
} 

function tambahGame($data) {
    $game = $data['game'];
    $uid = $data['uid'];

    global $koneksi;

    mysqli_query($koneksi,"INSERT INTO namagame VALUES('','$game','$uid')");
    return header('location: admin.php');
}



