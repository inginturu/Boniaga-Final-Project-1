<!-- resources/views/products/show.blade.php -->
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="{{url('assets/img/BoniagaLogo.jpg')}}">
  <title>Detail Produk</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
  <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/material-kit.css?v=3.1.0') }}" rel="stylesheet" />
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Inter', sans-serif;
    }
    
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 15px;
    }
    
    .product-container {
      margin-top: 15px;
      margin-bottom: 40px;
    }
    
    .product-layout {
      display: flex;
      gap: 30px;
      align-items: flex-start;
    }
    
    .product-image-section {
      flex: 0 0 50%;
      max-width: 50%;
      position: relative;
    }
    
    .product-info-section {
      flex: 0 0 50%;
      max-width: 50%;
    }
    
    .product-title {
      font-size: 28px;
      font-weight: 700;
      margin-top: 0;
      margin-bottom: 12px;
      color: #333;
    }
    
    .product-subtitle {
      font-size: 16px;
      color: #555;
      margin-bottom: 16px;
      line-height: 1.5;
    }
    
    .product-description {
      color: #666;
      font-size: 15px;
      line-height: 1.6;
      margin-bottom: 20px;
    }
    
    .product-price {
      font-size: 22px;
      font-weight: 600;
      margin: 16px 0;
      color: #333;
    }
    
    .btn-contact {
      background-color: #25D366;
      color: white;
      padding: 12px 24px;
      border-radius: 4px;
      font-weight: 600;
      font-size: 16px;
      display: inline-block;
      text-align: center;
      text-decoration: none;
      border: none;
      cursor: pointer;
      transition: all 0.3s ease;
      margin-bottom: 12px;
      width: 100%;
    }
    
    .btn-contact:hover {
      background-color: #128C7E;
      color: white;
      text-decoration: none;
    }
    
    .price-note {
      font-size: 14px;
      color: #777;
      margin-top: 6px;
      display: block;
    }
    
    .back-link {
      display: inline-flex;
      align-items: center;
      margin-bottom: 20px;
      text-decoration: none;
      color: #444;
      font-weight: 600;
      font-size: 15px;
      transition: all 0.2s ease;
      position: relative;
      z-index: 10;
    }
    
    .back-link:hover {
      color: #000;
    }
    
    .back-icon {
      margin-right: 6px;
    }
    
    .related-section {
      margin-top: 40px;
    }
    
    .related-title {
      font-size: 22px;
      font-weight: 600;
      margin-bottom: 20px;
      color: #333;
    }
    
    .related-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 20px;
    }
    
    .related-item {
      background: white;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
      transition: all 0.3s ease;
    }
    
    .related-item:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 15px rgba(0,0,0,0.1);
    }
    
    .related-img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }
    
    .related-info {
      padding: 14px;
    }
    
    .related-name {
      font-size: 15px;
      font-weight: 600;
      margin: 0 0 6px;
      color: #333;
    }
    
    .related-price {
      font-weight: 600;
      color: #444;
      margin-bottom: 10px;
    }
    
    .related-link {
      display: inline-block;
      text-decoration: none;
      color: #333;
      font-size: 14px;
      font-weight: 500;
      border: 1px solid #ddd;
      padding: 5px 10px;
      border-radius: 4px;
      transition: all 0.2s ease;
    }
    
    .related-link:hover {
      background-color: #f8f8f8;
      border-color: #ccc;
    }
    
    /* Improved Image Gallery System */
    .product-gallery {
      position: relative;
      width: 100%;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    }
    
    .gallery-main {
      position: relative;
      width: 100%;
      height: 400px;
      overflow: hidden;
    }
    
    .gallery-main-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.3s ease;
    }
    
    .gallery-nav {
      position: relative;
      margin-top: 10px;
    }
    
    .gallery-thumbs {
      display: flex;
      gap: 10px;
      margin: 0;
      padding: 0;
      list-style: none;
      overflow-x: auto;
      scrollbar-width: thin;
      padding-bottom: 8px;
      scroll-behavior: smooth;
    }
    
    .gallery-thumbs::-webkit-scrollbar {
      height: 5px;
    }
    
    .gallery-thumbs::-webkit-scrollbar-track {
      background: #f1f1f1;
      border-radius: 10px;
    }
    
    .gallery-thumbs::-webkit-scrollbar-thumb {
      background: #888;
      border-radius: 10px;
    }
    
    .gallery-thumbs::-webkit-scrollbar-thumb:hover {
      background: #555;
    }
    
    .gallery-thumb-item {
      flex: 0 0 80px;
    }
    
    .gallery-thumb {
      width: 80px;
      height: 60px;
      object-fit: cover;
      border-radius: 4px;
      cursor: pointer;
      border: 2px solid transparent;
      transition: all 0.2s ease;
    }
    
    .gallery-thumb.active {
      border-color: #25D366;
      transform: scale(1.05);
    }
    
    .gallery-thumb:hover {
      opacity: 0.85;
    }
    
    .gallery-arrows {
      position: absolute;
      top: 50%;
      width: 100%;
      display: flex;
      justify-content: space-between;
      padding: 0 15px;
      transform: translateY(-50%);
      z-index: 5;
      pointer-events: none;
    }
    
    .gallery-arrow {
      width: 40px;
      height: 40px;
      background-color: rgba(255, 255, 255, 0.8);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      pointer-events: auto;
      border: none;
      box-shadow: 0 2px 5px rgba(0,0,0,0.15);
      transition: all 0.2s ease;
      outline: none;
    }
    
    .gallery-arrow:hover {
      background-color: rgba(255, 255, 255, 1);
      box-shadow: 0 3px 8px rgba(0,0,0,0.2);
    }
    
    .gallery-arrow:focus {
      outline: none;
    }
    
    .gallery-indicator {
      position: absolute;
      bottom: 15px;
      left: 50%;
      transform: translateX(-50%);
      background-color: rgba(0, 0, 0, 0.5);
      color: white;
      padding: 5px 10px;
      border-radius: 15px;
      font-size: 12px;
      font-weight: 500;
      z-index: 5;
    }
    
    /* Order Options */
    .order-options {
      margin-top: 20px;
    }
    
    .quantity-selector {
      display: flex;
      align-items: center;
      margin-bottom: 15px;
    }
    
    .quantity-selector label {
      margin-right: 10px;
      font-weight: 500;
    }
    
    .quantity-input {
      display: flex;
      align-items: center;
      border: 1px solid #ddd;
      border-radius: 4px;
      overflow: hidden;
    }
    
    .quantity-btn {
      background-color: #f5f5f5;
      border: none;
      width: 30px;
      height: 30px;
      font-size: 16px;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.2s ease;
    }
    
    .quantity-btn:hover {
      background-color: #e0e0e0;
    }
    
    .quantity-value {
      width: 40px;
      text-align: center;
      border: none;
      border-left: 1px solid #ddd;
      border-right: 1px solid #ddd;
      height: 30px;
      padding: 0;
    }
    
    @media (max-width: 768px) {
      .product-layout {
        flex-direction: column;
      }
      
      .product-image-section,
      .product-info-section {
        flex: 0 0 100%;
        max-width: 100%;
      }
      
      .related-grid {
        grid-template-columns: repeat(2, 1fr);
      }
      
      .gallery-main {
        height: 300px;
      }
    }
    
    @media (max-width: 576px) {
      .related-grid {
        grid-template-columns: 1fr;
      }
      
      .gallery-main {
        height: 250px;
      }
      
      .gallery-thumb-item {
        flex: 0 0 60px;
      }
      
      .gallery-thumb {
        width: 60px;
        height: 45px;
      }
    }
  </style>
</head>

<body>
  @include('home.navbar')

  <div class="container mt-5">
    <!-- Back Button -->
    <div style="padding-top: 77px;">
      <a href="{{ route('products') }}" class="back-link">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="back-icon" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
        </svg>
        KEMBALI
      </a>
    </div>
    
    <div class="product-container">
      <div class="product-layout">
        <!-- Product Image Gallery - Improved Version -->
        <div class="product-image-section">
          @if ($product->images->count() > 0)
            <div class="product-gallery">
              <div class="gallery-main">
                <img id="galleryMainImage" src="{{ asset('storage/product_images/' . basename($product->images->first()->image_path)) }}" 
                     alt="{{ $product->name }}" class="gallery-main-image">
                
                @if($product->images->count() > 1)
                  <div class="gallery-arrows">
                    <button class="gallery-arrow gallery-prev" aria-label="Previous image">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                      </svg>
                    </button>
                    <button class="gallery-arrow gallery-next" aria-label="Next image">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                      </svg>
                    </button>
                  </div>
                  
                  <div class="gallery-indicator">
                    <span id="currentImageNum">1</span>/<span id="totalImages">{{ $product->images->count() }}</span>
                  </div>
                @endif
              </div>
              
              @if($product->images->count() > 1)
                <div class="gallery-nav">
                  <ul class="gallery-thumbs" id="galleryThumbs">
                    @foreach($product->images as $index => $image)
                      <li class="gallery-thumb-item">
                        <img src="{{ asset('storage/product_images/' . basename($image->image_path)) }}" 
                             alt="{{ $product->name }} - Thumbnail {{ $loop->iteration }}"
                             class="gallery-thumb {{ $index === 0 ? 'active' : '' }}"
                             data-index="{{ $index }}">
                      </li>
                    @endforeach
                  </ul>
                </div>
              @endif
            </div>
          @else
            <img src="{{ asset('assets/img/default-product.jpg') }}" class="product-image" alt="Gambar tidak tersedia">
          @endif
        </div>
        
        <!-- Product Information -->
        <div class="product-info-section">
          <h1 class="product-title">{{ $product->name ?? 'Ulos Songket' }}</h1>
          
          @if(isset($product->short_description) && !empty($product->short_description))
            <p class="product-subtitle">{{ $product->short_description }}</p>
          @else
            <p class="product-subtitle">Ulos dengan kualitas premium diproduksi dengan tangan sendiri, menghasilkan kesan tersendiri bagi penikmat desaign baju</p>
          @endif
          
          <div class="product-description">
            {{ $product->description ?? 'Ulos songket tradisional dengan kualitas terbaik. Dibuat oleh pengrajin berpengalaman menggunakan bahan premium. Cocok untuk berbagai acara tradisional maupun modern.' }}
          </div>
          
          <div class="product-price">
            Rp {{ number_format($product->price ?? 120000, 0, ',', '.') }}
          </div>
          
          <!-- Quantity Selector -->
          <div class="order-options">
            <div class="quantity-selector">
              <label for="quantity">Jumlah:</label>
              <div class="quantity-input">
                <button type="button" class="quantity-btn" id="decreaseQty">-</button>
                <input type="number" id="quantity" class="quantity-value" value="1" min="1" max="100">
                <button type="button" class="quantity-btn" id="increaseQty">+</button>
              </div>
            </div>
          </div>
          
          <a href="#" id="orderBtn" class="btn-contact">PESAN SEKARANG</a>
          <span class="price-note">Harga bersih dan dapat dinegosiasikan kembali</span>
        </div>
      </div>
    </div>
    
    <!-- Related Products Section -->
    @if(isset($relatedProducts) && count($relatedProducts) > 0)
    <div class="related-section">
      <h2 class="related-title">Produk Serupa</h2>
      
      <div class="related-grid">
        @foreach($relatedProducts as $related)
        <div class="related-item">
          @if ($related->images->isNotEmpty())
          <img src="{{ asset('storage/product_images/' . basename($related->images->first()->image_path)) }}" 
               class="related-img" alt="{{ $related->name }}">
          @else
          <img src="{{ asset('assets/img/default-product.jpg') }}" class="related-img" alt="Gambar tidak tersedia">
          @endif
          
          <div class="related-info">
            <h3 class="related-name">{{ $related->name }}</h3>
            <p class="related-price">Rp {{ number_format($related->price, 0, ',', '.') }}</p>
            <a href="{{ route('products.show', $related->id) }}" class="related-link">Lihat Detail</a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    @endif
  </div>

  @include('home.footer')

  <!-- Core JS Files -->
  <script src="{{ asset('assets/js/core/popper.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/js/material-kit.min.js?v=3.0.4') }}" type="text/javascript"></script>
  
  <!-- Improved Image Gallery Script -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Get elements
      const mainImage = document.getElementById('galleryMainImage');
      const thumbs = document.querySelectorAll('.gallery-thumb');
      const prevBtn = document.querySelector('.gallery-prev');
      const nextBtn = document.querySelector('.gallery-next');
      const currentImageNum = document.getElementById('currentImageNum');
      const totalImages = document.getElementById('totalImages');
      
      // If no gallery exists, exit the function
      if (!mainImage) return;
      
      let currentIndex = 0;
      const imageCount = thumbs.length;
      
      // Function to update the gallery
      function updateGallery(index) {
        // Validate index
        if (index < 0) index = imageCount - 1;
        if (index >= imageCount) index = 0;
        
        currentIndex = index;
        
        // Update main image with a nice fade effect
        mainImage.style.opacity = 0.7;
        setTimeout(() => {
          mainImage.src = thumbs[index].src;
          mainImage.style.opacity = 1;
        }, 200);
        
        // Update active thumbnail
        thumbs.forEach((thumb, i) => {
          if (i === index) {
            thumb.classList.add('active');
            // Ensure the active thumbnail is visible in the scroll area
            thumb.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
          } else {
            thumb.classList.remove('active');
          }
        });
        
        // Update counter if it exists
        if (currentImageNum) {
          currentImageNum.textContent = currentIndex + 1;
        }
      }
      
      // Set up event listeners for thumbnails
      thumbs.forEach((thumb, index) => {
        thumb.addEventListener('click', () => {
          updateGallery(index);
        });
      });
      
      // Set up event listeners for arrows if they exist
      if (prevBtn) {
        prevBtn.addEventListener('click', () => {
          updateGallery(currentIndex - 1);
        });
      }
      
      if (nextBtn) {
        nextBtn.addEventListener('click', () => {
          updateGallery(currentIndex + 1);
        });
      }
      
      // Add keyboard navigation
      document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') {
          updateGallery(currentIndex - 1);
        } else if (e.key === 'ArrowRight') {
          updateGallery(currentIndex + 1);
        }
      });
      
      // Add swipe support for touch devices
      let touchStartX = 0;
      let touchEndX = 0;
      
      const galleryMain = document.querySelector('.gallery-main');
      if (galleryMain) {
        galleryMain.addEventListener('touchstart', (e) => {
          touchStartX = e.changedTouches[0].screenX;
        }, false);
        
        galleryMain.addEventListener('touchend', (e) => {
          touchEndX = e.changedTouches[0].screenX;
          handleSwipe();
        }, false);
      }
      
      function handleSwipe() {
        if (touchEndX < touchStartX) {
          // Swiped left - next image
          updateGallery(currentIndex + 1);
        } else if (touchEndX > touchStartX) {
          // Swiped right - previous image
          updateGallery(currentIndex - 1);
        }
      }
      
      // Quantity selector functionality
      const quantityInput = document.getElementById('quantity');
      const decreaseBtn = document.getElementById('decreaseQty');
      const increaseBtn = document.getElementById('increaseQty');
      
      if (decreaseBtn && increaseBtn && quantityInput) {
        decreaseBtn.addEventListener('click', () => {
          const currentValue = parseInt(quantityInput.value);
          if (currentValue > 1) {
            quantityInput.value = currentValue - 1;
          }
        });
        
        increaseBtn.addEventListener('click', () => {
          const currentValue = parseInt(quantityInput.value);
          if (currentValue < 100) {
            quantityInput.value = currentValue + 1;
          }
        });
        
        // Ensure only numbers are entered
        quantityInput.addEventListener('input', () => {
          let value = parseInt(quantityInput.value);
          if (isNaN(value) || value < 1) {
            quantityInput.value = 1;
          } else if (value > 100) {
            quantityInput.value = 100;
          }
        });
      }
      
      // WhatsApp order button functionality
      const orderBtn = document.getElementById('orderBtn');
      if (orderBtn) {
        orderBtn.addEventListener('click', function(e) {
          e.preventDefault();
          
          // Get product details
          const productName = '{{ $product->name ?? "Ulos Songket" }}';
          const productPrice = '{{ number_format($product->price ?? 120000, 0, ",", ".") }}';
          const quantity = document.getElementById('quantity').value;
          const totalPrice = '{{ $product->price ?? 120000 }}' * quantity;
          const formattedTotalPrice = new Intl.NumberFormat('id-ID').format(totalPrice);
          
          // Create WhatsApp message template
          const message = `Halo, saya tertarik untuk memesan produk berikut:
          
*Nama Produk:* ${productName}
*Harga:* Rp ${productPrice}
*Jumlah:* ${quantity}
*Total:* Rp ${formattedTotalPrice}

Apakah produk ini masih tersedia? Saya ingin melakukan pemesanan. Terima kasih.`;
          
          // Encode the message for URL
          const encodedMessage = encodeURIComponent(message);
          
          // Create the WhatsApp URL with the pre-filled message
          const whatsappURL = `https://wa.me/+6285370459127?text=${encodedMessage}`;
          
          // Open WhatsApp in a new tab
          window.open(whatsappURL, '_blank');
        });
      }
    });
  </script>
</body>
</html>