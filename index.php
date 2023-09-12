<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <title>Document</title>

    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="styles.css" />
  </head>

  <body>
    <div class="header">
      <div class="left-section">
        <img
          class="megaparts-logo"
          src="images/Megaparts-Logo-Light-Large.png"
        />
      </div>

      <div class="middle-section">
        <img class="search-icon" src="images/l.png" />

    
      </div>

      <div class="col-md-4 text-end right-section">
        <div id="cart-container">
          <a href="view_cart.php">
              <img src="images/cartt.png" alt="Cart Icon">
              <span id="cart-item-count">0</span>
          </a>
        </div>
        <img class="three-icons" src="images/Frame 7.png" />
        <img class="user-icon" src="images/vhod.png" />
        <img class="youtube-apps-icon" src="images/youtube.png" />
        <img class="facebook-icon" src="images/fblogo.png" />
        <img class="number" src="images/number.png" />
      </div>
    </div>

    <div class="second-nav" id="secondNav">
      <div class="button-container" id="buttonContainer">
      <button class="auto">АВТОЧАСТИ</button>
        <button class="parts">БОРСА ЧАСТИ</button>
        <button class="auto-market">АВТОБОРСА</button>
        <button class="sell-cars">ПРОДАВА КОЛИ</button>
        <button class="sell-parts">ПРОДАВА ЧАСТИ</button>
        <button class="games">ИГРИ</button>
      </div>
    </div>

   

    <section class="search">
      <div class="container">
        <h2>Бързо търсене</h2>
        <div class="input-group">
          <input type="text" class="addTxt" />
          <button class="add-button" type="button">Търсене</button>
        </div>
        <button class="add-button">Всичко</button>
        <button class="all-buttons">АВТОЧАСТИ</button>
        <button class="all-buttons">БОРСА ЧАСТИ</button>
        <button class="all-buttons">АВТОБОРСА</button>
        <button class="all-buttons">ПРОДАВА КОЛИ</button>
        <button class="all-buttons">ПРОДАВА ЧАСТИ</button>
        <button class="all-buttons">ИГРИ</button>
      </div>
    </section>

    <section class="product-section">
    <h1>Add New Product</h1>
    <form action="add_product.php" method="post">
        <div class="product-container">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>

            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea><br>

            <label for="price">Price:</label>
            <input type="number" id="price" name="price" min="0" step="0.01" required><br>

            <label for="image_url">Image URL:</label>
            <input type="url" id="image_url" name="image_url"><br>

            <input type="submit" value="Add Product">
        </div>
    </form>
</section>



    <div class="product-catalog">
        <h1>Product Catalog</h1>
        <div id="product-container" class="grid-view">
            <!-- Product items will be dynamically loaded here -->

          
            
        </div>
    </div>



          <?php
          
          $cartUpdated = isset($_GET['cart_updated']) ? $_GET['cart_updated'] : null;

          if ($cartUpdated !== null) {
              echo "<p>Cart updated. </p>";
          }
          ?>


    <div class="my-slideshow-container">
      <div class="my-slide my-fade">
          <img src="images/Rectangle 100.png" alt="Снимка 1">
      </div>
      <div class="my-slide my-fade">
          <img src="images/Rectangle 100.png" alt="Снимка 2">
      </div>
      <div class="my-slide my-fade">
          <img src="images/Rectangle 100.png" alt="Снимка 3">
      </div>
  </div>

  <div style="text-align:center">
      <span class="my-dot"></span>
      <span class="my-dot"></span>
      <span class="my-dot"></span>
  </div>


    <section class="four-elements">
      <div class="container-one">
        <img src="images/Vector.png" alt="" />
        <p>Експресна доставка</p>
      </div>

      <div class="container-one">
        <img src="images/2.png" alt="" />
        <p>Нови части всеки ден</p>
      </div>

      <div class="container-one">
        <img src="images/3.png" alt="" />
        <p>Проверено качество</p>
      </div>

      <div class="container-one">
        <img src="images/4.png" alt="" />
        <p>Право на връщане</p>
      </div>
    </section>



    <div class="container-fluid">
      <section class="section">
        <div class="column1">
          <div class="container1">
            <img src="images/nastr.png" alt="" />
            <h1>Авточасти</h1>
            <p>Най-големия онлайн магазин за авточасти в България!</p>
            <button>Разгледай</button>
          </div>
        </div>
        <div class="column2">
          <div class="image-container">
            <div class="image-item">
              <img src="images/image 2.png" alt="Image 1" />
              <div class="image-text">
                Фар за Audi A5 Coupe I (06.2007 - 01.2017), купе, позиция: дясна
              </div>
            </div>
            <div class="image-item">
              <img src="images/far.png" alt="Image 1" />
              <div class="image-text">
                Фар за Audi A5 Coupe I (06.2007 - 01.2017), купе, позиция: дясна
              </div>
            </div>
            <div class="image-item">
              <img src="images/image 2.png" alt="Image 1" />
              <div class="image-text">
                Фар за Audi A5 Coupe I (06.2007 - 01.2017), купе, позиция: дясна
              </div>
            </div>
            <div class="image-item">
              <img src="images/far.png" alt="Image 1" />
              <div class="image-text">
                Фар за Audi A5 Coupe I (06.2007 - 01.2017), купе, позиция: дясна
              </div>
            </div>
            <div class="image-item">
              <img src="images/image 2.png" alt="Image 1" />
              <div class="image-text">
                Фар за Audi A5 Coupe I (06.2007 - 01.2017), купе, позиция: дясна
              </div>
            </div>
            <div class="image-item">
              <img src="images/far.png" alt="Image 1" />
              <div class="image-text">
                Фар за Audi A5 Coupe I (06.2007 - 01.2017), купе, позиция: дясна
              </div>
            </div>
            <div class="image-item">
              <img src="images/image 2.png" alt="Image 1" />
              <div class="image-text">
                Фар за Audi A5 Coupe I (06.2007 - 01.2017), купе, позиция: дясна
              </div>
            </div>

            <!-- Previous and Next arrows for sliding -->
            <div class="prev" onclick="scrollImages(-1)">
              <i class="fas fa-chevron-left"></i>
            </div>
            <div class="next" onclick="scrollImages(1)">
              <i class="fas fa-chevron-right"></i>
            </div>
          </div>
        </div>
      </section>

      <section class="custom-section">
        <div class="custom-column2">
          <div class="custom-image-container">
            <div class="custom-image-item">
              <img src="images/image 2.png" alt="Image 1" />
              <div class="custom-image-text">
                Фар за Audi A5 Coupe I (06.2007 - 01.2017), купе, позиция: дясна
              </div>
            </div>
            <div class="custom-image-item">
              <img src="images/far.png" alt="Image 2" />
              <div class="custom-image-text">
                Фар за Audi A5 Coupe I (06.2007 - 01.2017), купе, позиция: дясна
              </div>
            </div>
            <div class="custom-image-item">
              <img src="images/image 2.png" alt="Image 3" />
              <div class="custom-image-text">
                Фар за Audi A5 Coupe I (06.2007 - 01.2017), купе, позиция: дясна
              </div>
            </div>
            <div class="custom-image-item">
              <img src="images/far.png" alt="Image 3" />
              <div class="custom-image-text">
                Фар за Audi A5 Coupe I (06.2007 - 01.2017), купе, позиция: дясна
              </div>
            </div>
            <div class="custom-image-item">
              <img src="images/image 2.png" alt="Image 3" />
              <div class="custom-image-text">Text for Image 3</div>
            </div>

            <!-- Previous and Next arrows for sliding -->
            <div class="custom-prev" onclick="scrollImages(-1)">
              <i class="fas fa-chevron-left"></i>
            </div>
            <div class="custom-next" onclick="scrollImages(1)">
              <i class="fas fa-chevron-right"></i>
            </div>
          </div>
        </div>
        <div class="custom-column1">
          <!-- Първа колона - авточасти -->
          <div class="custom-container">
            <img src="images/borsa.png" alt="" />
            <h1>Борса части</h1>
            <p>Най-големата борса за авточасти в България!</p>
            <button>Разгледай</button>
          </div>
        </div>
      </section>

      <section class="section2">
        <div class="box left1">
          <img src="images/avtoborsa.png" alt="" />
          <h2>Автоборса</h2>
          <p>Залагане, търгуване и продаване на автомобили.</p>
          <button>Разгледай</button>
        </div>
        <div class="box left2">
          <img src="images/prodava koli.png" alt="" />
          <h2>Продава коли</h2>
          <p>Обяви за коли. Част от MEGACARS.</p>
          <button>Разгледай</button>
        </div>
        <div class="box right1">
          <img src="images/nastr.png" alt="" />
          <h2>Продава части</h2>
          <p>Обяви за части. Част от MEGAОБЯВИ.</p>
          <button>Разгледай</button>
        </div>
        <div class="box right2">
          <img src="images/game.png" alt="" />
          <h2>Игри</h2>
          <p>Забавления за ценители.</p>
          <button>Разгледай</button>
        </div>
      </section>
    </div>

    <section class="maps">
      <div class="img-map">
        <img src="images/map.png" alt="" />
        <div class="wrapper">
          <div class="button">
            <div class="icon">
              <i class="fas fa-cog" white-icon></i>
            </div>
            <span>MEGAPARTS Sofia</span>
          </div>
          <div class="button">
            <div class="icon">
              <i class="fas fa-cog"></i>
            </div>
            <span>MEGAPARTS Varna</span>
          </div>
        </div>
      </div>
    </section>

    


    <section class="section3">
      <div class="box1">
       
        <h1>Полезно за вас</h1>
        <p>Формуляр за връщане</p>
        <p>Мнения за MEGAPARTS</p>
        <p>Регистрирай се за продавач</p>
        
      </div>
      <div class="box2">
        
        <h2>Онлайн Пазаруване</h2>
        <p>Общи условия на платформата</p>
        <p>Общи условия на MEGAPARTS Борса</p>
        <p>Общи условия Вендор</p>
        
      </div>
      <div class="box3">
        
        <h1>За нас</h1>
        <p>Представяне</p>
        <p>Общи условия на MEGAPARTS Борса</p>
        <p>Общи условия Вендор</p>
        
      </div>
      <div class="box4">
        <img src="images/Frame 358.png" alt="" />
        <img src="images/Frame 364.png" alt="">
        
      </div>
    </section> 
  </div>


    <script src="script.js"></script>
  </body>
</html>
