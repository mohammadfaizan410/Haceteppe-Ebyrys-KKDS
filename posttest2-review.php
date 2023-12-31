<?php
    require_once('config-students.php');
    session_start();
    $type = isset($_SESSION['ebyrysUserLogin']['type']) ? $_SESSION['ebyrysUserLogin']['type'] : '';
    $student_id = $type == 'student' ? $_SESSION['ebyrysUserLogin']['id'] : $_POST['student_id'];
    // if($type === 'student'){
    //     $sql = 'SELECT * FROM students WHERE id = :id';
    // }else{
    //     $sql = 'SELECT * FROM teachers WHERE id = :id';
    // }
    // $stmt = $db->prepare($sql);
    // $stmt->bindParam(':id', $student_id);
    // $result = $stmt->execute();
    // if($result){
    //     $student = $stmt->fetch(PDO::FETCH_ASSOC);
    //     $student_name = $student['name'] . ' ' . $student['surname'];
    //     $student_email = $student['email'];
    //     $student_group = $student['student_group'];
    // }
    // else{
    //     echo 'error';
    // }
    $posttest = '';
    $sql = 'SELECT * FROM posttest2 WHERE student_id = :id';
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $student_id);
    $result = $stmt->execute();

    if($result){
        $posttest = $stmt->fetch(PDO::FETCH_ASSOC);
    }else{
        echo 'error';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input[type="radio"]{
            width: 20px;
            height: 20px;
            margin-right: 5px;
        }
        label{
            margin-left: 5px;
        }

        .input-section{
            margin-bottom: 20px;
        }
        
        .error{
            display: none;
            color: red;
        }
        #back{
            font-weight: bold;
            border: 1px solid grey;
            background: linear-gradient(
            color: white;
            margin-bottom: 20px;
        }

    </style>
</head>
<body>
    <div class="container-fluid mt-5 w-75 p-4 mb-5" style="background-color: white; border-radius: 10px;">
        <button class="btn" id="back">Geri</button>
        <h2 class="form-header text-center mb-3">TEMA 1: Etiyoloji ve Gelişme</h2>

    <div class="input-section">
        <h5 class="username-label">1.Aşağıdaki ifadelerden hangisi doğrudur?</h5>
        <h6 class="error">Lütfen bir seçenek seçin</h6>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="a" name="theme1q1">
            <label for="a">Malnütrisyon basınç ülserlerine neden olur.</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="b" name="theme1q1">
            <label for="b">Oksijen yetersizliği basınç ülserlerine neden olur.</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="c" name="theme1q1">
            <label for="c">Nem  basınç ülserlerine neden olur.</label>
        </div>
    </div>
   
    <div class="input-section">
        <h5 class="username-label">2.Çok zayıf hastalar obez hastalara göre basınç ülseri gelişimi açısından daha fazla risk altındadır.</h5>
        <h6 class="error">Lütfen bir seçenek seçin</h6>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="a" name="theme1q2">
            <label for="a">Doğru: Temas alanı küçüldükçe basınç miktarı artar.</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="b" name="theme1q2">
            <label for="b">Yanlış: Bu kişilerin ağırlığı obez hastalara göre daha az olduğu için basınç daha azdır.</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="c" name="theme1q2">
            <label for="c">Yanlış: Obez hastalarda vasküler hastalık gelişme riski daha fazladır, bu da basınç ülseri gelişme riskini   
          artırır.</label>
        </div>
    </div>
    <div class="input-section">
        <h5 class="username-label">3.Yatakta yarı oturur pozisyonda (60˚) oturan hasta kaydığı zaman neler olur?</h5>
        <h6 class="error">Lütfen bir seçenek seçin</h6>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="a" name="theme1q3">
            <label for="a">Deri yüzeye tutunduğu zaman basınç artar.</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="b" name="theme1q3">
            <label for="b">Deri yüzeye tutunduğu zaman sürtünme artar.</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="disagree" name="theme1q3">
            <label for="c">Deri yüzeye tutunduğu zaman yırtılma artar.</label>
        </div>
    </div>
    <div class="input-section">
        <h5 class="username-label">4.Aşağıdaki ifadelerden hangisi doğrudur?</h5>
        <h6 class="error">Lütfen bir seçenek seçin</h6>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="a" name="theme1q4">
            <label for="a">Sabun cildi dehidrate edebilir ve böylece basınç ülseri riskini artırır.</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="b" name="theme1q4">
            <label for="b">İdrar, feçes ve yara drenajından kaynaklanan nem, basınç ülserlerine neden olur.</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="c" name="theme1q4">
            <label for="c">Yırtılma, hasta yataktan kaydığında derinin yatak yüzeyine yapışmasıyla oluşan kuvvettir.</label>
        </div>
    </div>
    <div class="input-section">
        <h5 class="username-label">5.Aşağıdaki ifadelerden hangisi doğrudur?</h5>
        <h6 class="error">Lütfen bir seçenek seçin</h6>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="a" name="theme1q5">
            <label for="a">Yakın zamanda hastayı ideal kilosunun altına düşüren kilo kaybı basınç ülseri riskini artırır.</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="b" name="theme1q5">
            <label for="b">Periferik kan dolaşımını azaltan ilaç kullanan aşırı obez hastalar, basınç ülseri açısından risk altında    
          değildir.</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="c" name="theme1q5">
            <label for="c">Yetersiz beslenme ve yaş, hastanın kilosunun normal olduğu durumlarda doku toleransı üzerinde etkili  
          değildir.</label>
        </div>
    </div>
    <div class="input-section">
        <h5 class="username-label">6.Basınç ülseri riski ve  …………… arasında ilişki yoktur.</h5>
        <h6 class="error">Lütfen bir seçenek seçin</h6>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="a" name="theme1q6">
            <label for="a">Yaş</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="b" name="theme1q6">
            <label for="b">Dehidratasyon</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="c" name="theme1q6">
            <label for="c">Hipertansiyon</label>
        </div>
    </div>
    <h2 class="form-header text-center mb-3">TEMA 2: Sınıflama ve Gözlem</h2>

    <div class="input-section">
        <h5 class="username-label">1.Aşağıdaki ifadelerden hangisi doğrudur?</h5>
        <h6 class="error">Lütfen bir seçenek seçin</h6>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="a" name="theme2q1">
            <label for="a">Fasyaya kadar inen bir basınç ülseri, 3. derece basınç ülseridir.</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="b" name="theme2q1">
            <label for="b">Fasyayı da aşan basınç ülseri, 3. derece  basınç ülseridir.</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="c" name="theme2q1">
            <label for="c">Üçüncü derece basınç ülserinden önce her zaman 2. derece basınç ülseri olur.</label>
        </div>
    </div>
   
    <div class="input-section">
        <h5 class="username-label">2.Aşağıdaki ifadelerden hangisi doğrudur?</h5>
        <h6 class="error">Lütfen bir seçenek seçin</h6>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="a" name="theme2q2">
            <label for="a">Hastanın topuğundaki bül her zaman 2. derece basınç ülseridir.</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="b" name="theme2q2">
            <label for="b">Hangi evre olursa olsun (1,2,3,4) basınç ülserlerinde cilt tabakasında kayıp görülür.</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="c" name="theme2q2">
            <label for="c">Nekroz oluştuğunda basınç ülseri 3. veya 4. derecedir.</label>
        </div>
    </div>
    <div class="input-section">
        <h5 class="username-label">3.Aşağıdaki ifadelerden hangisi doğrudur?</h5>
        <h6 class="error">Lütfen bir seçenek seçin</h6>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="a" name="theme2q3">
            <label for="a">Hasta yatak içinde hareket ettirildiği zaman yırtılma ve sürtünme oluşabilir.</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="b" name="theme2q3">
            <label for="b">Yüzeyel bir lezyon, öncesinde basmakla solmayan bir eritem varsa muhtemelen sürtünme lezyonudur.</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="disagree" name="theme2q3">
            <label for="c">Kissing ülser (birbiriyle temas eden ülser odakları) basınç ve yırtılma ile oluşur.</label>
        </div>
    </div>
    <div class="input-section">
        <h5 class="username-label">4.Oturma pozisyonunda basınç ülserlerinin gelişebileceği alanlar…</h5>
        <h6 class="error">Lütfen bir seçenek seçin</h6>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="a" name="theme2q4">
            <label for="a">Pelvik alan, dirsek ve topuk</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="b" name="theme2q4">
            <label for="b">Diz, ayak bileği ve kalça</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="c" name="theme2q4">
            <label for="c">Kalça, omuz ve topuk</label>
        </div>
    </div>
    <div class="input-section">
        <h5 class="username-label">5.Aşağıdaki ifadelerden hangisi doğrudur?</h5>
        <h6 class="error">Lütfen bir seçenek seçin</h6>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="a" name="theme2q5">
            <label for="a">Basınç ülseri riski olan tüm hastalarda haftada bir sistematik cilt değerlendirmesi yapılmalıdır.</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="b" name="theme2q5">
            <label for="b">Kendi başına hareket edemeyen, sandalyede oturan hastanın cildi her 2 - 3 saatte bir gözlenmelidir.</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="c" name="theme2q5">
            <label for="c">Basıncı eşit dağıtmayan bir yüzeyde yatan hastaların topukları günde en az 1 defa gözlenmelidir.</label>
        </div>
    </div>
    <h2 class="form-header text-center mb-3">TEMA 3: Risk Değerlendirmesi</h2>

    <div class="input-section">
        <h5 class="username-label">1.Aşağıdaki ifadelerden hangisi doğrudur?</h5>
        <h6 class="error">Lütfen bir seçenek seçin</h6>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="a" name="theme3q1">
            <label for="a">Risk değerlendirme araçları önlem alınması gereken yüksek riskli hastaların belirlenmesini sağlar.</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="b" name="theme3q1">
            <label for="b">Risk değerlendirme ölçeklerinin kullanımı önleyici girişimlerin maliyetini artırır.</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="c" name="theme3q1">
            <label for="c">Basınç ülseri riskini doğru olarak tahmin  etmek için risk değerlendirme ölçeği yeterli olmayabilir, mutlaka            
          klinik durum da göz önüne alınmalıdır.</label>
        </div>
    </div>
   
    <div class="input-section">
        <h5 class="username-label">2.Aşağıdaki ifadelerden hangisi doğrudur?</h5>
        <h6 class="error">Lütfen bir seçenek seçin</h6>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="a" name="theme3q2">
            <label for="a">Bakım evi hastalarının tümünde basınç ülseri gelişme riski günlük olarak değerlendirilmelidir.</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="b" name="theme3q2">
            <label for="b">Basınç ülseri gelişimini en aza indirmek için hastanın altına emici pedler yerleştirilmelidir.</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="c" name="theme3q2">
            <label for="c">Basınç ülseri öyküsü olan bir hastada yeni basınç ülseri gelişme riski yüksektir.</label>
        </div>
    </div>
    <h2 class="form-header text-center mb-3">TEMA 4: Nutrisyon/ Beslenme</h2>

    <div class="input-section">
        <h5 class="username-label">1.Aşağıdaki ifadelerden hangisi doğrudur?</h5>
        <h6 class="error">Lütfen bir seçenek seçin</h6>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="a" name="theme4q1">
            <label for="a">Malnütrisyon basınç ülserlerine neden olur.</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="b" name="theme4q1">
            <label for="b">Pahalı önleyici girişimler yerine nutrisyonel destek gıdalardan yararlanılabilir.</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="c" name="theme4q1">
            <label for="c">Dengeli beslenme, hastanın genel fiziksel durumunu olumlu yönde etkileyerek basınç ülseri riskininin   
          azalmasına katkıda bulunabilir.</label>
        </div>
    </div>
    <h2 class="form-header text-center mb-3">TEMA 5: Basınç/ makaslama miktarını azaltan önleyici girişimler</h2>

    <div class="input-section">
        <h5 class="username-label">1.Vücut ile oturulan yer arasında en az temas basıncı oluşturan oturma pozisyonu</h5>
        <h6 class="error">Lütfen bir seçenek seçin</h6>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="a" name="theme5q1">
            <label for="a">Dik oturma pozisyonu, her iki ayak elevasyonda</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="b" name="theme5q1">
            <label for="b">Dik oturma pozisyonu, her iki ayak yere basıyor</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="c" name="theme5q1">
            <label for="c">Arkaya doğru oturma pozisyonu, her iki bacak elevasyonda</label>
        </div>
    </div>

    <div class="input-section">
        <h5 class="username-label">2.Hangi pozisyon değiştirme şeması basınç ülseri riskini en çok azaltır?</h5>
        <h6 class="error">Lütfen bir seçenek seçin</h6>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="a" name="theme5q2">
            <label for="a">Sırt üstü pozisyon - 90˚lateral pozisyon - Sırt üstü pozisyon-90˚lateral pozisyon…</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="b" name="theme5q2">
            <label for="b">YSırt üstü pozisyon - 30˚ lateral pozisyon - 30˚ lateral pozisyon - Sırt üstü pozisyon…</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="c" name="theme5q2">
            <label for="c">Sırt üstü pozisyon - 30˚ lateral pozisyon - Oturur pozisyon - 30˚ lateral pozisyon - Sırt üstü pozisyon</label>
        </div>
    </div>
    <div class="input-section">
        <h5 class="username-label">3.Aşağıdaki ifadelerden hangisi doğrudur?</h5>
        <h6 class="error">Lütfen bir seçenek seçin</h6>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="a" name="theme5q3">
            <label for="a">Pozisyonunu değiştirebilen hastalara, sandalyede otururken minimum her 60 dakikada bir ağırlıklarını   
          değiştirmeleri öğretilmelidir.</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="b" name="theme5q3">
            <label for="b">Yan yatış pozisyonunda hasta yatak ile 90˚ açıda olmalıdır.</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="disagree" name="theme5q3">
            <label for="c">Yatak başı pozisyonu 30˚ olduğunda, yırtılma kuvveti hastanın sakrumunu maksimum derecede etkiler.</label>
        </div>
    </div>
    <div class="input-section">
        <h5 class="username-label">4.Eğer hasta sandalyeden kayıyorsa, oturulan alandaki basıncın büyüklüğü ……….. ile azaltılır.</h5>
        <h6 class="error">Lütfen bir seçenek seçin</h6>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="a" name="theme5q4">
            <label for="a">İnce bir havalı minder</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="b" name="theme5q4">
            <label for="b">Simit şekilli köpüklü minder</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="c" name="theme5q4">
            <label for="c">Jelli minder</label>
        </div>
    </div>
    <div class="input-section">
        <h5 class="username-label">5.Basınç ülseri gelişme riski olan hastada, bir viskoelastik köpük şilte…</h5>
        <h6 class="error">Lütfen bir seçenek seçin</h6>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="a" name="theme5q5">
            <label for="a">Basınç ülserini azaltmada etkilidir ve beraberinde pozisyon vermeye gerek yoktur.</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="b" name="theme5q5">
            <label for="b">Her iki saatte bir pozisyon değiştirme ile birlikte kullanılmalıdır.</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="c" name="theme5q5">
            <label for="c">Her dört saatte bir pozisyon değiştirme ile birlikte kullanılmalıdır</label>
        </div>
    </div>
    <div class="input-section">
        <h5 class="username-label">6.Sulu şiltenin bir dezavantajı…</h5>
        <h6 class="error">Lütfen bir seçenek seçin</h6>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="a" name="theme5q6">
            <label for="a">Kalçadaki yırtılmanın artmasıdır.</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="b" name="theme5q6">
            <label for="b">Topuktaki basıncın artmasıdır.</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="c" name="theme5q6">
            <label for="c">Spontan küçük vücut hareketlerinin azalmasıdır.</label>
        </div>
    </div>
    <div class="input-section">
        <h5 class="username-label">7. Hasta basınç azaltıcı köpük şilte üzerine yattığında</h5>
        <h6 class="error">Lütfen bir seçenek seçin</h6>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="a" name="theme5q7">
            <label for="a">Topuk elevasyonu gerekli değildir.</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="b" name="theme5q7">
            <label for="b">Topuk elevasyonu önemlidir.</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="c" name="theme5q7">
            <label for="c">Şilte üzerindeki çöküklük günde en az iki defa kontrol edilmelidir.</label>
        </div>
    </div>
    <h2 class="form-header text-center mb-3">TEMA 6: Basınç/yırtılmanın süresini azaltmak için önleyici girişimler</h2>

    <div class="input-section">
        <h5 class="username-label">1.Pozisyon değişikliği kesin önleyici bir yöntemdir. Çünkü …</h5>
        <h6 class="error">Lütfen bir seçenek seçin</h6>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="a" name="theme6q1">
            <label for="a">Basınç ve yırtılmanın büyüklüğü azalacaktır.</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="b" name="theme6q1">
            <label for="b">Basınç ve yırtılmanın  miktarı ve süresi azalacaktır.</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="c" name="theme6q1">
            <label for="c">Basınç ve yırtılmanın süresi azalacaktır.</label>
        </div>
    </div>

    <div class="input-section">
        <h5 class="username-label">2.Eğer .…… daha az hastada basınç ülseri gelişecektir</h5>
        <h6 class="error">Lütfen bir seçenek seçin</h6>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="a" name="theme6q2">
            <label for="a">Beslenme destegi sağlanırsap</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="b" name="theme6q2">
            <label for="b">Riskli alanlara masaj yapılırsa</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="c" name="theme6q2">
            <label for="c">Hastalar mobilize edilirse</label>
        </div>
    </div>
    <div class="input-section">
        <h5 class="username-label">3.Aşağıdaki ifadelerden hangisi doğrudur?/h5>
        <h6 class="error">Lütfen bir seçenek seçin</h6>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="a" name="theme6q3">
            <label for="a">Basınç azaltmayan köpük şiltede yatan riskli hastalara her iki saatte bir pozisyon verilmelidir.</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="b" name="theme6q3">
            <label for="b">Hava akımlı şiltede yatan riskli hastalarda her 4 saatte bir pozisyon değişikliği yapılmalıdır.</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="disagree" name="theme6q3">
            <label for="c">Viskoelastik köpük şiltede yatan riskli hastalarda her 2 saatte bir pozisyon değişikliği yapılmalıdır.</label>
        </div>
    </div>
    <div class="input-section">
        <h5 class="username-label">4.Değişen hava akımlı şiltede yatan hastada topukta basınç ülserinin önlenmesi için</h5>
        <h6 class="error">Lütfen bir seçenek seçin</h6>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="a" name="theme6q4">
            <label for="a">Özel bir önleyici önlem yoktur.</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="b" name="theme6q4">
            <label for="b">Topukların altına basınç azaltıcı minder yerleştirilir.</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="c" name="theme6q4">
            <label for="c">Bacakların alt kısmına topuklar yükselecek şekilde minder yerleştirilir.</label>
        </div>
    </div>
    <div class="input-section">
        <h5 class="username-label">5.Pozisyon verilemeyen yatağa bağımlı hastalarda basınç ülseri önlemede en uygun yöntem</h5>
        <h6 class="error">Lütfen bir seçenek seçin</h6>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="a" name="theme6q5">
            <label for="a">Basınç dağıtan köpük şilte</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="b" name="theme6q5">
            <label for="b">Değişen hava akımlı şilte</label>
        </div>
        <div class="d-flex flex-row align-items-center">
            <input type="radio" value="c" name="theme6q5">
            <label for="c">Riskli alanların çinko-oksit kremle lokal tedavisi</label>
        </div>
    </div>

    </div>
</body>
<script>
    $(document).ready(function(){
        $('[name="theme1q1"]').prop('disabled', true);
        $('[name="theme1q2"]').prop('disabled', true);
        $('[name="theme1q3"]').prop('disabled', true);
        $('[name="theme1q4"]').prop('disabled', true);
        $('[name="theme1q5"]').prop('disabled', true);
        $('[name="theme1q6"]').prop('disabled', true);
        $('[name="theme2q1"]').prop('disabled', true);
        $('[name="theme2q2"]').prop('disabled', true);
        $('[name="theme2q3"]').prop('disabled', true);
        $('[name="theme2q4"]').prop('disabled', true);
        $('[name="theme2q5"]').prop('disabled', true);
        $('[name="theme3q1"]').prop('disabled', true);
        $('[name="theme3q2"]').prop('disabled', true);
        $('[name="theme4q1"]').prop('disabled', true);
        $('[name="theme5q1"]').prop('disabled', true);
        $('[name="theme5q2"]').prop('disabled', true);
        $('[name="theme5q3"]').prop('disabled', true);
        $('[name="theme5q4"]').prop('disabled', true);
        $('[name="theme5q5"]').prop('disabled', true);
        $('[name="theme5q6"]').prop('disabled', true);
        $('[name="theme5q7"]').prop('disabled', true);
        $('[name="theme6q1"]').prop('disabled', true);
        $('[name="theme6q2"]').prop('disabled', true);
        $('[name="theme6q3"]').prop('disabled', true);
        $('[name="theme6q4"]').prop('disabled', true);
        $('[name="theme6q5"]').prop('disabled', true);
    })
</script>
<script>
    var teacher = <?php echo isset($_POST['student_id']); ?>;
    
    $('#back').click(function (e) { 
        e.preventDefault();
        if(teacher){
            $('#content').load('students-info.php');
        } else {
            $('#content').load('course.php');
        }
    });
    var posttest = <?php echo json_encode($posttest); ?>;
    if(posttest === ''){
        alert('You have not submitted the posttest yet');
    }
    else{
        $('input[name="theme1q1"][value="'+posttest['theme1q1']+'"]').prop('checked', true);
        $('input[name="theme1q2"][value="'+posttest['theme1q2']+'"]').prop('checked', true);
        $('input[name="theme1q3"][value="'+posttest['theme1q3']+'"]').prop('checked', true);
        $('input[name="theme1q4"][value="'+posttest['theme1q4']+'"]').prop('checked', true);
        $('input[name="theme1q5"][value="'+posttest['theme1q5']+'"]').prop('checked', true);
        $('input[name="theme1q6"][value="'+posttest['theme1q6']+'"]').prop('checked', true);
        $('input[name="theme2q1"][value="'+posttest['theme2q1']+'"]').prop('checked', true);
        $('input[name="theme2q2"][value="'+posttest['theme2q2']+'"]').prop('checked', true);
        $('input[name="theme2q3"][value="'+posttest['theme2q3']+'"]').prop('checked', true);
        $('input[name="theme2q4"][value="'+posttest['theme2q4']+'"]').prop('checked', true);
        $('input[name="theme2q5"][value="'+posttest['theme2q5']+'"]').prop('checked', true);
        $('input[name="theme3q1"][value="'+posttest['theme3q1']+'"]').prop('checked', true);
        $('input[name="theme3q2"][value="'+posttest['theme3q2']+'"]').prop('checked', true);
        $('input[name="theme4q1"][value="'+posttest['theme4q1']+'"]').prop('checked', true);
        $('input[name="theme5q1"][value="'+posttest['theme5q1']+'"]').prop('checked', true);
        $('input[name="theme5q2"][value="'+posttest['theme5q2']+'"]').prop('checked', true);
        $('input[name="theme5q3"][value="'+posttest['theme5q3']+'"]').prop('checked', true);
        $('input[name="theme5q4"][value="'+posttest['theme5q4']+'"]').prop('checked', true);
        $('input[name="theme5q5"][value="'+posttest['theme5q5']+'"]').prop('checked', true);
        $('input[name="theme5q6"][value="'+posttest['theme5q6']+'"]').prop('checked', true);
        $('input[name="theme5q7"][value="'+posttest['theme5q7']+'"]').prop('checked', true);
        $('input[name="theme6q1"][value="'+posttest['theme6q1']+'"]').prop('checked', true);
        $('input[name="theme6q2"][value="'+posttest['theme6q2']+'"]').prop('checked', true);
        $('input[name="theme6q3"][value="'+posttest['theme6q3']+'"]').prop('checked', true);
        $('input[name="theme6q4"][value="'+posttest['theme6q4']+'"]').prop('checked', true);
        $('input[name="theme6q5"][value="'+posttest['theme6q5']+'"]').prop('checked', true);    
    }
</script>
</html>