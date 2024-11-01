<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ajit-developerPortfolio</title>
    <style>
      * {
        margin: 0;
        padding: 0;
      }
      body {
        background-color: blue;
        color: white;
        font-family: Georgia, "Times New Roman", Times, serif;
      }
      nav {
        background-color: rgb(5, 5, 52);
        display: flex;
        justify-content: space-around;
        align-items: center;
        height: 80px;
      }
      nav ul {
        display: flex;
        justify-content: center;
        font-size: 28px;
      }
      nav ul li {
        list-style: none;
        margin: 15px;
      }
      nav ul li a {
        text-decoration: none;
        color: white;
      }
      nav ul li a:hover {
        color: rgb(26, 212, 215);
        font-size: 30px;
      }
      .left {
        font-size: 1.9rem;
      }
      .first {
        display: flex;
        justify-content: space-around;
        margin: 80px 0;
        align-items: center;
      }
      .first > div {
        width: 40%;
      }
      .leftSection {
        width: 50px;
        font-size: 2.5rem;
        margin: 7.5%;
      }
      .rightSection {
        width: 34px;
      }
      .rightSection img {
        width: 80%;
      }
      .pur {
        color: rgb(4, 213, 255);
      }
      #element {
        color: rgb(4, 213, 255);
      }
     .rightSection img{ 
        height: 40rem;
        width: auto;
     }
   
      .grey{
        color: lightblue;
      }
      
     .second.box {
       background-color: white; 
       width: 80vw;
       height: 2px;
       margin: 56px 0;
       display: flex;

     }
     .box .vertical{
        height: 90px;
        width: 1px;
        background-color: white;
        margin: 0 100px;
    } 
      .btn{
        padding: 10px;
        border-radius: 30px;
        background-color: rgb(4, 213, 255);
        shape-margin: 10px;
        color: black;
      }
      .about{
        font-size: 25px;

      }
      
      .container{
        margin-top: 30px;
        text-size-adjust: 35px;
        font-size: 26px;
        padding-bottom: 25px;
      }
      .certificate{
        padding-top: 20px;
        padding-left:20px;
        text-size-adjust: 30px;
        color: aliceblue;
      }
      .certificate,.a{
        color: red;
        font-size: 30px;
        
      }
      .bot{
        padding-left: 20px;
        padding-top: 18px;
      }
      .abt{
        padding-left: 20px;
        padding-top: 18px;
      }
    </style>
  </head>
  <body>
    <header>
      <nav>
        <div class="left">Ajit portfolio</div>
        <div class="right">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">Project</a></li>
            <li><a href="contact.php">Contact me </a></li>
          </ul>
        </div>
      </nav>
    </header>
    <main>
      <section class="first">
        <div class="leftSection">
          Hi,my name is<span class="pur"> Ajit pillai</span>
          <div>and I am a passionate</div>
          <span id="element"></span>
        </div>
        <div class="rightSection">
          <img src="img.jpg" alt="" />
        </div>
      </section>
      <a href="Ajitpillai_resume.docx"><button class="btn">resume</button></a>
      <hr>
      <section id="about" class="about">
        <div class="abt"><h2>About Me</h2></div>
        <div class="container">
            <p>Hi! I'm Ajit Pillai, a passionate web and developer with experience in building web . I love to create user-friendly applications that solve real-world problems.</p>
        </div>
        <hr>
     
    </main>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
      var typed = new Typed("#element", {
        strings: ["FrontEnd Developer", "BackEnd Developer", "Fullstack Web Developer"],
        typeSpeed: 60,
        loop: true,    
        backSpeed: 40, 
        backDelay: 1000 
      });
    </script>
    
  </body>
</html>
