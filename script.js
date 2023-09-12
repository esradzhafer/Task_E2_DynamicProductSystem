$(document).ready(function () {
  //sticky class to second-nav after a delay
  setTimeout(function () {
    $("#secondNav").addClass("sticky");
  }, 1000);

  // Show the button container after a delay
  setTimeout(function () {
    $("#buttonContainer").css("display", "flex");
  }, 2000);
});

let scrollPosition = 0;
const imageContainer = document.querySelector(".image-container");

function scrollImages(direction) {
  const imageWidth = 220; 
  scrollPosition += direction * imageWidth;
  scrollPosition = Math.max(scrollPosition, 0);
  scrollPosition = Math.min(
    scrollPosition,
    imageContainer.scrollWidth - imageContainer.clientWidth
  );
  imageContainer.scrollTo({ left: scrollPosition, behavior: "smooth" });
}

// JavaScript code to create an automatic image slider
const imageSlider = document.querySelector(".custom-image-container");
const imageItems = document.querySelectorAll(".custom-image-item");
const prevButton = document.querySelector(".custom-prev");
const nextButton = document.querySelector(".custom-next");

let currentIndex = 0;
const autoSlideDelay = 3000; 
const transparency = 0.7; 

// Функция за показване на текущия слайд и анимиране на предходния и следващия слайд
const showSlide = (index) => {
  imageItems.forEach((item, i) => {
    const distance = i - index;
    const opacity = 1 - Math.abs(distance) * transparency; 
    item.style.opacity = opacity;
    item.style.transform = `translateX(${distance * 10}%)`;
  });
};

// Функция за преминаване към следващ слайд
const nextSlide = () => {
  currentIndex = (currentIndex + 1) % imageItems.length;
  showSlide(currentIndex);
};

// Функция за преминаване към предишен слайд
const prevSlide = () => {
  currentIndex = (currentIndex - 1 + imageItems.length) % imageItems.length;
  showSlide(currentIndex);
};

// Функция за стартиране на автоматичното превключване
const startAutoSlide = () => {
  setInterval(nextSlide, autoSlideDelay);
};

// Attach click event listeners to the previous and next buttons
prevButton.addEventListener("click", prevSlide);
nextButton.addEventListener("click", nextSlide);

// Start auto-sliding
startAutoSlide();




let mySlideIndex = 0;
showMySlides();

function showMySlides() {
    let mySlides = document.getElementsByClassName("my-slide");
    let myDots = document.getElementsByClassName("my-dot");
    for (let i = 0; i < mySlides.length; i++) {
        mySlides[i].style.display = "none";
        myDots[i].classList.remove("my-active");
    }
    mySlideIndex++;
    if (mySlideIndex > mySlides.length) {
        mySlideIndex = 1;
    }
    mySlides[mySlideIndex - 1].style.display = "block";
    myDots[mySlideIndex - 1].classList.add("my-active");
    setTimeout(showMySlides, 2000); 
}





//php task




$(document).ready(function () {
    // Функция за зареждане и показване на продуктите
    function loadProducts() {
        $.ajax({
            url: 'get_products.php',
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                // Премахнете съдържанието на контейнера за продукти
                $('#product-container').empty();

                //  бутони за "Add to Cart" на видими и добавете им събития
                $.each(data, function (index, product) {
                    var productItem = `
                        <div class="product">
                            <h2>${product.name}</h2>
                            <p>${product.description}</p>
                            <p>Price: $${product.price}</p>
                            <img src="${product.image_url}" alt="${product.name}">
                            <button class="add-to-cart-btn" data-product-id="${product.id}">Add to Cart</button>
                        </div>
                    `;

                    $('#product-container').append(productItem);
                });

                // бутони за "Add to Cart" след зареждането на продуктите
                $('.add-to-cart-btn').show();

                // Обработка на събитията след зареждането на продуктите
                $('.add-to-cart-btn').click(function () {
                    var productId = $(this).data('product-id');
                    addToCart(productId);
                });
            },
            error: function (error) {
                
                console.error(error);
            },
        });
    }

    // Заредете продуктите при зареждане на страницата
    loadProducts();

    // Функция за добавяне на продукт към количката
    function addToCart(productId) {
       
        $.ajax({
            url: 'add_to_cart.php',
            type: 'POST',
            data: { product_id: productId },
            dataType: 'json',
            success: function (response) {
                
                alert(response.message);

               
                window.location.href = 'index.php';
            },
            error: function (error) {
                console.error(error);
            }
        });
    }
});


$(document).ready(function () {
    // Function to update the cart icon and item count
    function updateCartIcon() {
        // Make an AJAX request to fetch the cart count
        $.ajax({
            url: 'get_cart_count.php', // Create this PHP script to fetch the cart count
            dataType: 'json',
            success: function (response) {
                var cartItemCount = response.count;
                // Update the cart icon and item count
                $('#cart-item-count').text(cartItemCount);
            },
            error: function (error) {
                console.error(error);
            }
        });
    }

    // Call the updateCartIcon function to initialize the cart icon and item count
    updateCartIcon();

    $('.add-to-cart-btn').click(function () {
        console.log('Button Clicked'); // Check if this message appears
        var productId = $(this).data('product-id');
        addToCart(productId);
    });

    function addToCart(productId) {
        $.ajax({
            url: 'add_to_cart.php', // Create this PHP script to add the product to the cart
            type: 'POST',
            data: { product_id: productId },
            dataType: 'json',
            success: function (response) {
                if (response.success) {
                    // Display a notification to the user
                    alert(response.message);

                    // Update the cart count after adding the product
                    updateCartIcon();
                } else {
                    alert('Failed to add the product to the cart.');
                }
            },
            error: function (error) {
                console.error(error);
            }
        });
    }
});


