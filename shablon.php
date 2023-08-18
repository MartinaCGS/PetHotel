
<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PetHotel.bg</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Sriracha&display=swap');
 
    body {
      margin: 0;
      box-sizing: border-box;
    }
 
    /* CSS for header */
    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #f5f5f5;
    }
 
    .header .logo {
      font-size: 25px;
      font-family: 'Sriracha', cursive;
      color: #000;
      text-decoration: none;
      margin-left: 30px;
    }
 
    .nav-items {
      display: flex;
      justify-content: space-around;
      align-items: center;
      background-color: #f5f5f5;
      margin-right: 20px;
    }
 
    .nav-items a {
      text-decoration: none;
      color: #000;
      padding: 35px 20px;
    }
 
    /* CSS for main element */
    .intro {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 720px;
      background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.5) 100%), url("https://images.unsplash.com/photo-1563460716037-460a3ad24ba9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80");
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }
 
    .intro h1 {
      font-family: sans-serif;
      font-size: 60px;
      color: #fff;
      font-weight: bold;
      text-transform: uppercase;
      margin: 0;
    }
 
    .intro p {
      font-size: 20px;
      color: #d1d1d1;
      text-transform: uppercase;
      margin: 20px 0;
    }
 
    .intro button {
      background-color: #5edaf0;
      color: #000;
      padding: 10px 25px;
      border: none;
      border-radius: 5px;
      font-size: 20px;
      font-weight: bold;
      cursor: pointer;
      box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.4)
    }
 
    .achievements {
      display: flex;
      justify-content: space-around;
      align-items: center;
      padding: 40px 80px;
    }
 
    .achievements .work {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 0 40px;
    }
 
    .achievements .work i {
      width: fit-content;
      font-size: 50px;
      color: #333333;
      border-radius: 50%;
      border: 2px solid #333333;
      padding: 12px;
    }
 
    .achievements .work .work-heading {
      font-size: 20px;
      color: #333333;
      text-transform: uppercase;
      margin: 10px 0;
    }
 
    .achievements .work .work-text {
      font-size: 15px;
      color: #585858;
      margin: 10px 0;
    }
 
    .about-us {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 40px 80px;
      border-top: 2px solid #eeeeee;
    }
 
    .about-us img {
      width: 500px;
      max-width: 100%;
      height: auto;
      border-radius: 10px;
    }
 
    .about-us-text h2 {
      font-size: 30px;
      color: #333333;
      text-transform: uppercase;
      margin: 0;
    }
 
    .about-us-text p {
      font-size: 15px;
      color: #585858;
      margin: 10px 0;
    }
 
    /* CSS for footer */
    .footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #302f49;
      padding: 40px 80px;
    }
 
    .footer .copy {
      color: #fff;
    }
 
    .bottom-links {
      display: flex;
      justify-content: space-around;
      align-items: center;
      padding: 40px 0;
    }
 
    .bottom-links .links {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 0 40px;
    }
 
    .bottom-links .links span {
      font-size: 20px;
      color: #fff;
      text-transform: uppercase;
      margin: 10px 0;
    }
 
    .bottom-links .links a {
      text-decoration: none;
      color: #a1a1a1;
      padding: 10px 20px;
    }
  </style>
</head>
 <!-- първа страница -->
<body>
  <header class="header">
    <a href="#" class="logo"></a>
    <nav class="nav-items">
    
      <a href="#">Вход</a>
      <a href="#">Регистрация</a>
      <a href="#">За нас</a>

      
    </nav>
  </header>
  <main>
    <div class="intro">
     
      <h1> Намерете идеалния хотел</h1> 
      <h1> за вашия любимец!</h1>
      <p>Очаква Ви пътуване,но как да откриете подходяшия хотел за вашия домашен любимец?<br>
        PetHotel ще Ви помогне да намерите правилното място.</p>
      
    </div>
    <div class="achievements">    
    </div>  
    </div>
 
  </main>

  <!-- /* mine* / -->


        <style>
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }
    
    .topnav {
      overflow: hidden;
      background-color: #333;
    }
    
    .topnav a {
      float: left;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 10px;
    }
    
    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }
    
    /* Create a right-aligned (split) link inside the navigation bar */
    .topnav a.split {
      float: right;
      background-color: #04AA6D;
      color: white;
    }
    </style>
     <style>
      body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
      }
      
      .navbar {
        overflow: hidden;
        background-color: #333;
        position: fixed;
        bottom: 0;
        width: 100%;
      }
      
      .navbar a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
      }
      
      .navbar a:hover {
        background: #f1f1f1;
        color: black;
      }
      
      .navbar a.active {
        background-color: #04AA6D;
        color: white;
      }
      
      .main {
        padding: 16px;
        margin-bottom: 30px;
      }
     
            @import url('https://fonts.googleapis.com/css2?family=Sriracha&display=swap');
         
            body {
              margin: 0;
              box-sizing: border-box;
            }
         
            /* CSS for header */
            .header {
              display: flex;
              justify-content: space-between;
              align-items: center;
              background-color: #f5f5f5;
            }
         
            .header .logo {
              font-size: 25px;
              font-family: 'Sriracha', cursive;
              color: #000;
              text-decoration: none;
              margin-left: 30px;
            }
         
            .nav-items {
              display: flex;
              justify-content: space-around;
              align-items: center;
              background-color: #f5f5f5;
              margin-right: 20px;
            }
         
            .nav-items a {
              text-decoration: none;
              color: #000;
              padding: 35px 20px;
            }
         
            /* CSS for main element */
            .intro {
              display: flex;
              flex-direction: column;
              justify-content: center;
              align-items: center;
              width: 100%;
              height: 720px;
              background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.5) 100%), url("pet.jpg");
              background-size: cover;
              background-position: center;
              background-repeat: no-repeat;
            }
         
            .intro h1 {
              font-family: sans-serif;
              font-size: 60px;
              color: #fff;
              font-weight: bold;
              text-transform: uppercase;
              margin: 0;
            }
         
            .intro p {
              font-size: 20px;
              color: #d1d1d1;
              text-transform: uppercase;
              margin: 20px 0;
            }
         
            .intro button {
              background-color: #5edaf0;
              color: #000;
              padding: 10px 25px;
              border: none;
              border-radius: 5px;
              font-size: 20px;
              font-weight: bold;
              cursor: pointer;
              box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.4)
            }
         
            .achievements {
              display: flex;
              justify-content: space-around;
              align-items: center;
              padding: 40px 80px;
            }
         
            .achievements .work {
              display: flex;
              flex-direction: column;
              justify-content: center;
              align-items: center;
              padding: 0 40px;
            }
         
            .achievements .work i {
              width: fit-content;
              font-size: 50px;
              color: #333333;
              border-radius: 50%;
              border: 2px solid #333333;
              padding: 12px;
            }
         
            .achievements .work .work-heading {
              font-size: 20px;
              color: #333333;
              text-transform: uppercase;
              margin: 10px 0;
            }
         
            .achievements .work .work-text {
              font-size: 15px;
              color: #585858;
              margin: 10px 0;
            }
       
         
            /* CSS for footer */
            .footer {
              display: flex;
              justify-content: space-between;
              align-items: center;
              background-color: #302f49;
              padding: 40px 80px;
            }
         
            .footer .copy {
              color: #fff;
            }
         
            .bottom-links {
              display: flex;
              justify-content: space-around;
              align-items: center;
              padding: 40px 0;
            }
         
            .bottom-links .links {
              display: flex;
              flex-direction: column;
              justify-content: center;
              align-items: center;
              padding: 0 40px;
            }
         
            .bottom-links .links span {
              font-size: 20px;
              color: #fff;
              text-transform: uppercase;
              margin: 10px 0;
            }
         
            .bottom-links .links a {
              text-decoration: none;
              color: #a1a1a1;
              padding: 10px 20px;
            }
           
@media only screen and (max-device-width: 1024px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
  }
}
      </style>
      </div>
    </div>
  </footer>
</body>
      
      </html>
      <!DOCTYPE html>
      <html>
      <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <style>
      body, html {
        height: 100%;
        margin: 0;
        font: 400 15px/1.8 "Lato", sans-serif;
        color: #777;
      }

      .bgimg-1, .bgimg-2, .bgimg-3 {
        position: relative;
        opacity: 0.65;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;

      }
      .bgimg-1 {
        background-image: url("zoo.png");
        min-height: 100%;
      }

      .bgimg-2 {
        background-image: url("cat&dog.jpg");
        min-height: 400px;
      }

      .bgimg-3 {
        background-image: url("cat&rabbit.jpg");
        min-height: 400px;
      }

      .caption {
        position: absolute;
        left: 0;
        top: 50%;
        width: 100%;
        text-align: center;
        color: #000;
      }

      .caption span.border {
        background-color: #111;
        color: #fff;
        padding: 18px;
        font-size: 25px;
        letter-spacing: 10px;
      }

      span.border{
          display:block;
      }
      span.border:after{
          content:"";
          display:block;
          width:80px;
          height:3px;
          background-color:white;
          text-align:center;
          margin:0 auto;
          opacity:0.5;
      }

      h3 {
        letter-spacing: 5px;
        text-transform: uppercase;
        font: 20px "Lato", sans-serif;
        color: #111;
      }
      p::selection{
          background-color:yellow;
          color:pink;

      }
      p:first-line{color:white;}

      p:first-letter{font-family: "Algerian", cursive; font-size:1.5em;}


      /* Turn off parallax scrolling for tablets and phones */
      @media only screen and (max-device-width: 1024px) {
        .bgimg-1, .bgimg-2, .bgimg-3 {
          background-attachment: scroll;
        }
      }
      </style>
      </head>
      <body>

      <div class="bgimg-1">
        <style>
          body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
          }
          
          .topnav {
            overflow: hidden;
            background-color: white;
          }
          
          .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
          }
          
          .topnav a:hover {
            background-color: #ddd;
            color: black;
          }
          
          /* Create a right-aligned (split) link inside the navigation bar */
          .topnav a.split {
            float: right;
            background-color: #04AA6D;
            color: white;
          }
          
          </style>
          </head>
          <body>
          
          <!-- <div class="topnav">
            <a class="active" href="#home">Търсене по Хотел</a>
            <a href="#news">Търсене по населено място</a>
            <a href="#about" class="split">Регистрация</a>
            <a href="#about" class="split">Вход</a>
          </div> -->
          
          <div style="padding-left:16px">
            <h2></h2>
            <p></p>
          </div>
          
          </body>
        
      </div>

      <div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
        <h3 style="text-align:center;">Чрез нашата платформа можете да намерите най-подходящото място за вашия домашен любимец!</h3>
        <p></p>
      </div>

      <div class="bgimg-2">
        <div class="caption">
        <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;"></span>
        </div>
      </div>

      <div style="position:relative;">
        <div style="color:#ddd;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
        <h3 style="text-align:center;"> <b> Избор на временен дом за вашия любимец! </b> </h3>
        <p><!DOCTYPE html>
      <html>
      <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <style>
      * {
        box-sizing: border-box;
      }

      #myInput {
        background-image: url('/css/searchicon.png');
        background-position: 10px 12px;
        background-repeat: no-repeat;
        width: 100%;
        font-size: 16px;
        padding: 12px 20px 12px 40px;
        border: 1px solid #ddd;
        margin-bottom: 12px;
      }

      #myUL {
        list-style-type: none;
        padding: 0;
        margin: 0;
      }

      #myUL li a {
        border: 1px solid #ddd;
        margin-top: -1px; /* Prevent double borders */
        background-color: #f6f6f6;
        padding: 12px;
        text-decoration: none;
        font-size: 18px;
        color: black;
        display: block
      }

      #myUL li a:hover:not(.header) {
        background-color: #eee;
      }
      </style>
      </head>
      <body>

      <h2>Търсене по хотел:</h2>



      <ul id="myUL">
        <li> <h2> <a href="#">Хотел Бау и Мяу, гр.София</a> </h2> </li>
        <li> <h2> <a href="#">Хотел Веселите Oпашчици, гр.Варна</a> </h2> </li>
        <li> <h2> <a href="#">Хотел Шаро и Писана, гр.София</a> <h/2> </li>
        <li> <h2> <a href="#">Хотел Рунтави лапички, гр.Пловдив</a> <h/2> </li>
        <li> <h2> <a href="#">Хотел Щастливи животни, гр.София</a> </h2> </li>
        <li> <h2> <a href="#">Хотел Безкрайни игри, гр.Пловдив</a> </h2> </li>
      </ul>

      <script>
      function myFunction() {
          var input, filter, ul, li, a, i, txtValue;
          input = document.getElementById("myInput");
          filter = input.value.toUpperCase();
          ul = document.getElementById("myUL");
          li = ul.getElementsByTagName("li");
          for (i = 0; i < li.length; i++) {
              a = li[i].getElementsByTagName("a")[0];
              txtValue = a.textContent || a.innerText;
              if (txtValue.toUpperCase().indexOf(filter) > -1) {
                  li[i].style.display = "";
              } else {
                  li[i].style.display = "none";
              }
          }
      }
      </script>

      </body>
      </html>
      </p>
        </div>
      </div>

      <div class="bgimg-3">
        <div class="caption">
          <!-- още един трасперант -->
        <!-- <span class="border" style="background-color:white;font-size:25px;color: #f7f7f7;"></span> -->
        
        </div>
      </div>

      <div style="position:relative;">
        <div style="color:#ddd;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
        <h3 style="text-align:center;">Резервация</h3>
        <p>
          <!-- <!DOCTYPE html>
      <html> -->
      <!-- <head>
          <meta charset="UTF-8" />
          <title>HTML форми</title>
      </head> -->
<body>
  
    <fieldset>
      
        <legend> <h2> Форма за резервация на хотел </h2> </legend>
        
        <style>
          
            body {
              
              font-family: Arial Black, Helvetica, sans-serif;
          
              
            }
            
            .navbar {
              overflow: hidden;
              background-color: white;
            }
            
            
            .dropdown {
              float: left;
              overflow: hidden;
            }
            
            .dropdown .dropbtn {
              font-size: 16px;  
              border: none;
              outline: none;
              color:black;
              padding: 14px 16px;
              background-color: inherit;
              font-family: inherit;
              margin: 0;
            }
            
            .navbar a:hover, .dropdown:hover .dropbtn {
              background-color: white;
            }
            
            .dropdown-content {
              display: none;
              position: absolute;
              background-color: #f9f9f9;
              min-width: 160px;
              box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
              z-index: 1;
            }
            
            .dropdown-content a {
              float: none;
              color: black;
              padding: 12px 16px;
              text-decoration: none;
              display: block;
              text-align: left;
            }
            
            
            
            .dropdown:hover .dropdown-content {
              display: block;
            }
            </style>
            </head>
            <body style="background-color: #002;">
            
       

            
        От дата:
        <input type="date" name='begin_date'><br><br>
        До дата:
        <input type="date"name='end_date'><br><br>
        Вид домашен любимец:
        <input type="radio" name='Pet' value='dog'>Куче
        <input type="radio" name='Pet' value='cat'>Котка<br><br>
        
        Време на престой: <input type="time" name='thetime'><br><br>
        <button class="dropbtn">Избор на хотел:
                </button>
                <input list='spisak' />
                    <datalist id='spisak'>
                        <option value='Хотел Бау и Мяу, гр.София'></option>
                        <option value='Хотел Веселите опашчици, гр.Варна'></option>
                        <option value='Хотел Шаро и Писана, гр.София'></option>
                        <option value='Хотел Рунтави лапички, гр.Пловдив'></option>
                        <option value='Хотел Щастливи животни, гр.София'></option>
                        <option value='Хотел Безкрайни игри, гр.Пловдив'></option>
                    </datalist>
        
        
    </fieldset>
   
    
    <!-- <br><input list='spisak' />
    <datalist id='spisak'>
        <option value='Хотел Мър и мяу,гр.Симитли'></option>
        <option value='Къща за гости Борова гора,Варна'></option>
        <option value='Хотел белият Елен,гр.Царевец'></option>
        <option value='Еко хотел Павлов,гр.Пловдив'></option>
        <option value='Зимна панорама,гр.София'></option>
    </datalist><br><br><br><br> -->
<!--     
    <input type='range' name='price' min='0' max='1000' />
    <output name="priceout" for='price'></output><br> -->
</form>
</body>
</html></p>
  </div>
</div>


      <!-- /*from lena*/ -->
      <main>
    <!-- <div class="intro">
      <h1>ХОТЕЛ ЗА ЖИВОТНИ</h1>
      <p>НИЕ ОБИЧАМЕ ВАШИТЕ ЖИВОТНИ</p>
      <button>Learn More</button>
    </div> -->
    <div class="achievements">
      
      <div class="work">
        <i class="fas fa-cat"></i>
        <p class="work-heading"></p>
        <p class="work-text">НИЕ ОБИЧАМЕ ВАШЕТО КОТЕ</p>
      </div>
      <div class="work">
        <i class="fas fa-dog"></i>
        <p class="work-heading"></p>
        <p class="work-text">ВАШЕТО КУЧЕ Е И НАШЕТО КУЧЕ</p>
      </div>
    </div>
    <div class="about-me">
      <div class="about-me-text">
        <h2></h2>
        <p>МЯСТО, КЪДЕТО КУЧЕТА И КОТКИ ЖИВЕЯТ СЪВМЕСТНО!</p>
      </div>
      
    </div>
  </main>
  <footer class="footer">
    <div class="copy">&copy; Pethotel.bg</div>
    <div class="bottom-links">
      <div class="links">
        <span>Повече информация</span>
        <a href="#">Кои сме ние?</a>
        <a href="#">Станете PetHotel</a>
        <a href="#">Свържете се с нас</a>
        <a href="#">Общи условия</a>
      </div>
      <div class="links">
        <span>Социални медии</span>
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        
      </div>
    </div>
  </footer>
</body>

</html>
      </head>
     