<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <style>
    body{
        background: #B3C8CF;
        font-family: sans-serif;
    }
    .kalkulator{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        width: 500px;
        background: #BED7DC;
        margin: 100px auto;
        padding: 50px 30px;
        border-radius: 10px;
        box-shadow: 0px 10px 20px 0px #F1EEDC;
    }
    .inputan{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    .bilangan{
        width: 300px;
        margin: 5px;
        border: none;
        font-size: 16pt;
        border-radius: 5px;
        padding: 10px;  
    }
    .operator{
        font-size: 16pt;
        border: none;
        width: 320px;
        margin: 5px;
        border-radius: 5px;
        padding: 10px;
    }
    .hitung{
        width: 320px;
        background: #F1EEDC;
        border-top: none;
        border-right: none;
        border-left: none;
        border-radius: 5px;
        padding: 10px 20px;
        color: white;
        font-size: 20pt;
        border-bottom:5px solid #E5DDC5;
        text-align: center;
        margin: 5px;
    }
    .title{
        text-align: center;
        color: #F1EEDC;
        font-weight: 600;
    }
    .hasil{
        width: 300px;
        margin: 5px;
        border: none;
        font-size: 16pt;
        border-radius: 5px;
        padding: 10px; 
        text-align: right;
    }
    </style>
</head>
<body>
    <?php 
    if(isset($_POST['hitung'])){
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $operasi = $_POST['operasi'];
        switch ($operasi) {
            case '+':
                $hasil = $bil1+$bil2;
            break;
            case '-':
                $hasil = $bil1-$bil2;
            break;
            case '*':
                $hasil = $bil1*$bil2;
            break;
            case '/':
                $hasil = $bil1/$bil2;
            break;          
        }
    }
    ?>
    <div class="kalkulator">
        <h2 class="title">KALKULATOR</h2>
        <form method="post" action="kalkulator.php" class="inputan">           
            <input type="text" name="bil1" class="bilangan" autocomplete="off" placeholder="Masukkan Angka Pertama">
            <input type="text" name="bil2" class="bilangan" autocomplete="off" placeholder="Masukkan Angka Kedua">
            <select class="operator" name="operasi">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">x</option>
                <option value="/">/</option>
            </select>
            <input type="submit" name="hitung" value="=" class="hitung">                                         
        </form>
        <?php if(isset($_POST['hitung'])){ ?>
            <input type="text" value="<?php echo $hasil; ?>" class="hasil">
        <?php }else{ ?>
            <input type="text" value="0" class="hasil">
        <?php } ?>            
    </div>
</body>
</html>