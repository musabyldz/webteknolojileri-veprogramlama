<html>

<head>

    <!-- Web sitesi head bloğu (shift + alt + A)-->
    <title>Web Programlama Dersi</title>
    <meta charset="UTF-8">
    <meta name="keywords" content="Web, Php, Mvc, Programlama">
    <meta name="description" content="Abc Firması ... Alanda ... yılından beri hizmet vermektedir.">
    <meta name="author" content="... Yazılım">

</head>

<body>
    <h4>Programlama</h4>

    <!-- HTML Açıklama Satırıdır. -->

    <?php
    /* Php Açıklama Satırları */
    //Tek Satır Açıklama

    echo "<h3>Php Dersi</h3>";
    echo "<h3>Adü - Aymes</h3> <hr> " . "Bilgisayar Programcılığı";
    //echo "<h3>Adü - Aymes</h3> <hr> " . "Bilgisayar Programcılığı";


    echo "<h3>Değişken Tanımlamada Dikkat Edilecek Hususlar</h3>";

    echo "<ol>
            <li>Php'de değişken isimleri $ işareti ile başlar.</li>
            <li>Php'de değişken isimleri sayısal ifadelerle başlayamaz.</li>
            <li>Php'de değişken isimleri iki kelimeden oluşuyorsa - veya _ kullanılır.</li>
            <li>Php'de değişken isimlerinde Türkçe karakter kullanılmamalıdır(ö,ç,ğ,ü).</li>
            <li>Php'de değişken isimlerinde büyük-küçük harf duyarlılığı vardır.</li>
            <li>Php'de değişken içeriğinde eğer metinseler ifadeler varsa \" veya ' kullanılır.</li>
            <li>Php'de değişken içeriğinde eğer sayısal ifadeler varsa tırnak kullanmadan direkt yazılır.</li>
        </ol>
    ";

    echo "<h3> Değişken Tanımlama Özellikleri </h3>";

    $isim = "Ahmet";
    $soyisim = "Çalışkan";
    echo "$isim  $soyisim <br>";  //echo $isim ." ". $soyisim; 

    echo '$isim  $soyisim <br>';  //echo $isim ." ". $soyisim; 

    /* Üniversite-Myo-Ad-Soyad-No değişkenlerini tanımlayarak içeriğine uygun değerler giriniz ve bu değerleri 
    bir tablo yardımıyla satır satır ekrana yazdırınız. */

    $isim = "Ali Kemal";

    ?>
    <br>
    <table>
        <thead>
            <tr>
                <th>Başlıklar</th>
                <th>İçerikler</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $isim; ?></td>
            </tr>
        </tbody>
    </table>

    <?php

    echo "<h3>Matematiksel İşlemler</h3>";
    echo "<h5>Toplama İşlemi</h5>";

    $sayi1 = 15;
    $sayi2 = 5;
    echo "$sayi1 + $sayi2 = ";
    echo $sayi1 + $sayi2;


    echo "<br>";

    $sonuc = $sayi2 + $sayi1;

    echo "<br>";

    echo "$sayi1 + $sayi2 = $sonuc";





    echo "<h5>Çıkarma İşlemi</h5>";

    $sayi1 = 15;
    $sayi2 = 5;
    echo "$sayi1 - $sayi2 = ";
    echo $sayi1 - $sayi2;


    echo "<br>";

    $sonuc = $sayi2 - $sayi1;

    echo "<br>";

    echo "$sayi1 - $sayi2 = $sonuc";



    echo "<h5>Çarpma İşlemi</h5>";

    $sayi1 = 15;
    $sayi2 = 5;
    echo "$sayi1 * $sayi2 = ";
    echo $sayi1 * $sayi2;


    echo "<br>";

    $sonuc = $sayi2 * $sayi1;

    echo "<br>";

    echo "$sayi1 * $sayi2 = $sonuc";




    echo "<h5>Bölme İşlemi</h5>";

    $sayi1 = 15;
    $sayi2 = 5;
    echo "$sayi1 / $sayi2 = ";
    echo $sayi1 / $sayi2;


    echo "<br>";

    $sonuc = $sayi2 / $sayi1;

    echo "<br>";

    echo "$sayi1 / $sayi2 = $sonuc";



    echo "<h3> Tırnaklar Arasındaki Fark</h3>";
    $uni = "Adnan Menderes Üni.";
    echo "$uni'sini bu sene kazandım."; /* Değişken içeriği okunur. */
    echo "<br>";
    echo '$uni\'sini bu sene kazandım.'; /* Değişken ismi yazılır. */




    echo "<h3>Atama Operatörleri</h3>";
    $sayi = 300;
    echo "\$sayi değişken içerisindeki değer : $sayi <br>";

    $sayi += 150; // $sayi = $sayi + 150
    echo "\$sayi değişkeni içerisindeki değer : $sayi <br>";

    $sayi -= 50;
    echo "\$sayi değişkeni içerisindeki değer : $sayi <br>";

    $sayi /= 5;
    echo "\$sayi değişkeni içerisindeki değer : $sayi <br>";

    $sayi *= 15;
    echo "\$sayi değişkeni içerisindeki değer : $sayi <br>";

    $sayi++; // $sayi= $sayi+1
    echo "\$sayi değişkeni içerisindeki değer : $sayi <br>";

    $sayi--;
    echo "\$sayi değişkeni içerisindeki değer : $sayi <br>";

    --$sayi;
    echo "\$sayi değişkeni içerisindeki değer : $sayi <br>";

    ++$sayi;
    echo "\$sayi değişkeni içerisindeki değer : $sayi <br>";



    echo "<h3>Hazır Fonksiyonlar</h3>";

    echo "<h5>Rand</h5>";
    /* Rastgele sayı üretir. */

    $sayi = rand(0, 100);
    echo "\$sayi değişkeni içerisindeki rastgele üretilen değer:$sayi <br>";

    //Örn: Rastgele 0-100 arasında üretilen değer eğer 50'den küçükse Kaldı, değilse Geçti yazsın.

    if ($sayi >= 50) {
        echo "Geçti - Notunuz: $sayi";
    
    }
    else{
        echo "Kaldı - Notunuz: $sayi";
    }





    ?>



    <br><br><br><br><br>

</body>




</html>