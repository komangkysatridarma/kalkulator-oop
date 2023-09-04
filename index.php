<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator OOP PHP</title>

    <style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap');
        body{
            background-image: url(bulett.svg);
            background-size: cover;
            background-repeat: repeat;
        }
        .box{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container{
            width: 13rem;
            height: 15rem;
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            justify-content: center;
            padding: 2rem 2rem;
            text-align: center;
            background-color: #fff;
            border-radius: 1rem;
            
        }
        span{
            font-family: 'Roboto', sans-serif;

        }
        .info{
            display: flex;
            flex-direction: column;
            margin: 10px 0;
        }
        .input{
            height:45px;
            width:100%;
            border:none;
            outline:none;
            padding:0 0 0 20px;
            border-radius:16px;
            color:#040D12;
            background: rgba(255,255,255,0.1);
            margin:0.5rem 0;
            font-size: 1rem;
            background-color: #EEEDED;
        }
        .submit{
            border:none;
            border-radius:16px;
            font-size:1rem;
            height:3rem;
            outline:none;
            width:89%;
            background:rgba(255,255,255,0.7);
            cursor:pointer;
            background-color: #EEEDED;
            margin-bottom: 1rem;
        }
        select{
            width: 3rem;
            height: 2rem;
            display: flex;
            justify-content: center;
            text-align: center;
            background-color: #fff;
            margin-bottom: 1rem;
            border: none;
            outline: none;
            background-color: #EEEDED;
            border-radius: 12px;
        }
        option{
            color: #040D12;
            font-size: medium;
        }
        
        @media (max-width:450px){
            html {
            font-size: 70%;

        }
    }
    </style>
</head>
<body>
<div class="box">
    <div class="container">
        <form action="" method="post">
        <span>Kalkulator with OOP PHP</span>
            <input type="number" name="x" class="input" placeholder="Masukan Angka Pertama" required>
            <input type="number" name="y" class="input" placeholder="Masukan Angka Kedua" required>
            <select name="operasi">
                    <option value="tambah">+</option>
                    <option value="kurang">-</option>
                    <option value="kali">*</option>
                    <option value="bagi">/</option>
                </select>
            <input type="submit" value="Hitung" class="submit">
            <?php
include "fungsi.php";
$Kalku = new Kalkulator;

if($_POST){
    $x = $_POST['x'];
    $y = $_POST['y'];
    if($_POST['operasi']== "tambah"){
        echo "Hasil = ".$x." + ".$y." = ".$Kalku->setTambah($x,$y). "<br /><br />";
        }elseif($_POST['operasi']== "kurang"){
        echo "Hasil = ".$x." - ".$y." = ".$Kalku->setKurang($x,$y). "<br /><br />";
        }elseif($_POST['operasi']== "kali"){
        echo "Hasil = ".$x." * ".$y." = ".$Kalku->setKali($x,$y). "<br /><br />";
        }elseif($_POST['operasi']== "bagi"){
        echo "Hasil = ".$x." / ".$y." = ".$Kalku->setBagi($x,$y). "<br /><br />";
        }
}
?>
        </form>
    </div>
</div>
</body>
</html>