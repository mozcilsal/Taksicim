<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taksicim</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Genel sayfa stilleri */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #373e43;
        }

        /* Menü stilleri */
        .menü {
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(90deg, #3d3d3d, #1a1a1a);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 10px 20px;
            flex-wrap: wrap;
        }

        .menü a {
            color: white;
            text-decoration: none;
            padding: 14px 20px;
            margin: 0 5px;
            border-radius: 25px;
            font-size: 16px;
            transition: background-color 0.3s, transform 0.3s;
        }

        .menü a:hover {
            background-color: #FFD700;
            transform: scale(1.05);
        }

        .ana-sayfa-container {
            display: flex;
            align-items: center;
        }

        .ana-sayfa-container .resim {
            width: 150px;
            height: 50px;
            background-image: url('/images/taksicim.png');
            background-size: cover;
            background-position: center;
            border-radius: 25px;
            margin-right: 10px;
        }

        .ana-sayfa-container a {
            font-size: 16px;
            color: white;
            text-decoration: none;
        }

        .telefon {
            width: 60px;
            height: 60px;
            background-image: url('/images/telefon.png');
            background-size: cover;
            background-position: center;
            position: fixed;
            bottom: 20px;
            left: 20px;
            z-index: 1000;
        }

        .telefon a {
            display: block;
            width: 100%;
            height: 100%;
            text-indent: -9999px;
        }

        .whatsapp {
            width: 60px;
            height: 60px;
            background-image: url('/images/whatsapp.png');
            background-size: cover;
            background-position: center;
            position: fixed;
            bottom: 90px;
            left: 15px;
            z-index: 1000;
        }

        .whatsapp a {
            display: block;
            text-indent: -9999px;
            width: 100%;
            height: 100%;
        }

        .kayseri {
            border-radius: 5px;
            background-image: url('/images/kayseri.png');
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 500px;
            display: grid;
            place-items: center;
        }

        .text {
            text-align: center;
            color: white;
        }

        .text h1 {
            color: #e3bc22;
            font-size: 36px;
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }

        .text p {
            color:white;
            font-size: 24px;
            margin: 0;
            font-family: 'Poppins', sans-serif;
            
        }
        .button{
            padding-top: 20px;
            text-align: center;
            margin: 0;
        }
        .button input[type="button"] {
            
            background-color: #e3bc22; 
            color: black; 
            border: none;
            border-radius: 25px; 
            padding: 10px 20px; /* yazı ile kenarlar arası boşluk*/
             font-size: 24px; 
             cursor: pointer; /* imleç butona geldiğinde çıkacak */
                        
        }
        .button input[type="button"]:hover {
            background-color: #e3bc22; /* Hover durumunda butonun arka plan rengini değiştir */
            transform: scale(1.05); /* Butonun biraz büyümesini sağlar */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Hover durumunda gölge ekler */ 
        }
        
        .kutu {
            border-radius: 5px;
             height: 90px;
             width: %150;
             background-color: #e3bc22;
             margin: 0; 
             padding: 20px; /* İçerik ile kenar arasındaki boşluğu ayarlar */
             
        }
        .text2{
            text-align: center;
            color: white;
            
        }
        .text2 h1{
            padding-top: 20px;
            color: black;
            font-size: 30px;
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }
        .hakkimizda{
            padding-top: 100px;
            height: 100px;
            width: %150;
             background-color: #373e43;
             margin: 0;
             


        }
        .text3{
            text-align: center;
            color: white;
        }

        .text3 h1{
            padding-right: 50px;
            padding-top: 0px; /* Daha küçük bir değer */
            color: white;
            font-size: 36px;
            margin: 0;
            font-family: 'Poppins', sans-serif;

        }
        .text3 p{

            font-family: 'Poppins', sans-serif;
            font-size: 15px;
            padding-top: 10px;





        }
        .araba{
            margin-top: 1px;
            margin-left: 750px;
            
            background-image: url('/images/araba.png');
            background-size: cover;
            background-position: center;
            width: 300px;
            height: 300px;
          
           
            
        }
        .hizmetlerimiz{
            padding-top: 100px;
            height: 100px;
            width: %150;
             background-color: #373e43;
             margin: 0;

        }
        .text4{

            text-align: center;
            color: white;


        }
        .text4 h1{

            padding-right: 50px;
            padding-top: 100px; 
            color: #e3bc22;
            font-size: 36px;
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }
        .text4 p{


            color: #e3bc22;
        }
        .bavul{
            margin-top: 100px;
            margin-left: 300px;
            background-image: url('/images/harita.png');
            background-size: cover;
            background-position: center;  
            width: 120px;
            height: 96px;
            display: grid;
            place-items: center;  
            
        }
        .textbavul{

            
            display: inline;
            color: white;
            

        }
        .textbavul pre{

            
            padding-left: 185px;
            padding-top: 5px; 
            color: white;
            font-size: 12px;
            margin-top: 30px;
            font-family: 'Poppins', sans-serif;
            display: grid;
            line-height: 2;
            
            
        }
        .city{
            margin-top: 130px;
            margin-left: 900px;
            background-image: url('/images/city.png');
            
            background-size: cover;
            background-position: center;  
            width: 95px;
            height: 110px;
            display: grid;
            place-items: center;  
                



        }
        .citytext{
            display: inline;
            color: white;
            
        }
        .citytext pre{
            font-size: 12px;
            font-family: 'Poppins', sans-serif;
            display: grid;
            line-height: 2;
            margin-left: 750px;
            margin-top: 50px;
            


        }
        .plane{
            justify-content: center;
            align-items: center;
            margin-top: 1px;
            margin-left: 600px;
            background-image: url('/images/plane.png');
            background-size: cover;
            background-position: center;  
            width: 90px;
            height: 100px;
            display: flex;
            border-radius: 5px;
             

        }
        .planetext{

            display: inline;
            color: white;
        }
        .planetext pre{

            font-size: 12px;
            font-family: 'Poppins', sans-serif;
            display: grid;
            line-height: 2;
            margin-left: 1px;
            margin-top: 300px;

        }
        html {
    scroll-behavior: smooth; /* Yavaş kaydırma efekti ekler */
}

        
        
        

        
        

       



    </style>
</head>

<body>
    <div class="menü">
        <div class="ana-sayfa-container">
            <div class="resim"></div>
            <a href="#">Ana Sayfa</a>
        </div>
        <a href="#section1">Kurumsal</a>
        <a href="#">Hizmetlerimiz</a>
        <a href="#">İletişim</a>
    </div>
    <div class="telefon">
        <a href="https://web.whatsapp.com/"></a>
    </div>
    <div class="whatsapp">
        <a href="https://web.whatsapp.com/"></a>
    </div>

    <div class="kayseri">
        <div class="text">
            <h1>7 Gün 24 Saat Taksi Hizmeti</h1>
            <p>Kredi Karti Geçerlidir</p>
            <div class="button">
                <input type="button" value="📞03528654215">
            </div>
        </div>
    </div>

    <div class="kutu">
        <div class="text2">
            <h1>Kayseri'nin Her Yerine 7/24 Kesintisiz Acil Taksi Hizmeti Veriyoruz</h1>
        </div>
    </div>
    
    <div class="hakkimizda">
        <div class="text3">
            <section> </section>
            <h1 id="section1"> Hakkımızda</h1>
            <p>● Siz değerli müşterilerimizin 24 saat huzur ve güven içerisinde şehir içi ve şehir dışı ulaşımlarınızda <br> Taksicim misafir perverliği ve kalitesiyle hizmetinizdeyiz.
            <p>● Ekibimiz deneyimli şoför ve klimalı araçlardan oluşur, güven taşırız.</p>
            <p>● Şehiriçi, şehirdışı, havaalanı taşımacılığı, evcil hayvan taşımacılığı, kargo ve paket taşımacılığı ve personel taşımacılığı dahil çok alanda yanınızdayız.
            </p>
            
</p>
        </div>
    </div>
    <div class="hizmetlerimiz">
        <div class="text4">
        <h1>Hizmetlerimiz</h1>
        </div>
        
       <div class="bavul"></div>
        
            <div class="textbavul">
                <pre>   Kayseri de taksi arayan bütün müşterilerimize Kayseri'nin her <br>          yerine hızlı ve güvenli taksi hizmeti sağlamaktayız <br>              , Taksicim olarak görevimizi yapmaktayız</pre>
            </div>
        </div>
    </div>
        <div class="city">
        <div class="plane">
            <div class="planetext">

        <pre>Taksicim olarak, Kayseri içindeki havalimanı transfer hizmetlerimizle yolculuklarınızı <br> stressiz ve keyifli hale getiriyoruz. Deneyimli şoförlerimiz ve modern araçlarımızla, <br>                                            size sadece güvenli bir yolculuk değil, <br>                                             aynı zamanda rahatlık da sunuyoruz.</pre>
        </div>
        </div>

        </div>
        
        
            <div class="citytext">
            <pre>Kayseri Şehir içi ve dışı Kayseri taksi olarak hizmet veren taksi durağımız <br>                               işlevini daima ileri götürmektedir </pre>
            </div>
            
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
<p>.</p>
    
</body>

</html>
