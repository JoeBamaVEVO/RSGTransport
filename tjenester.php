<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'head.php'?>
</head>
<body>
<main>
  <content>    
    <?php include 'navbar.php'?>
    <div class="slideshow-container">
      <div class="mySlides fade">
        <img src="bilder/Bilde1.svg" style="width: 100%" />
      </div>
      <div class="mySlides fade">
        <img src="bilder/Bilde2.svg" style="width: 100%" />
      </div>
      <div class="mySlides fade">
        <img src="bilder/Bilde3.svg" style="width: 100%" />
      </div>
    </div>
    <div class="container-fluid">
      <div class="tjenesterListe">
        <ul>
          <li>
            <div class="container-tjenester">
              <img src="https://placehold.co/300" alt="">  
              <div class="container-text">
                <p class="PageHeader">Transport</p>
                <p class="PageText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque nulla perspiciatis minus nostrum, repellat eveniet velit totam fuga distinctio eos quia eius tempora dolores vitae eaque cupiditate iste temporibus commodi.</p>
              </div>
            </div>
          </li>   
          <li>
            <div class="container-tjenester">
              <img src="https://placehold.co/300" alt="">  
              <div class="container-text">
                <p class="PageHeader">Planering</p>
                <p class="PageText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi aperiam odio, aut quidem adipisci fugiat voluptates eos ratione cumque iste eligendi sit enim provident! Rem ipsa harum quasi voluptate voluptatem.</p>
              </div>
            </div>
          </li>   
        </ul>
      </div>
    </div>
  </content> 
  <?php include 'footer.php' ?>
  <script src="script.js"></script>   
</main>
     
</body>
</html>