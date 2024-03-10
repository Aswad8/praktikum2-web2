<?php
//bikin variable nilai
$grade = "A";
//bikin predikat
$predikat;

//bikin percabangan switch
switch ($grade) {
    case "A":
        $predikat = "sangat baik";
        break;
     case "B":
         $predikat = "baik";
        break;
     case "C":
        $predikat = "cukup";
        break;
     case "D":
        $predikat = "kurang";
        break;
     case "E":
        $predikat = "sangat kurang";
        break;
    default:
        $predikat = "Nilai Tidak Ditemukan";

}
echo "predikat :". $predikat


?>