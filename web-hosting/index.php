<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Hosting</title>
    <!-- <link rel="shortcut icon" href="img/logo.webp" type="image/x-icon"> -->
    <link rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
     integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" 
     />
     <link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
<body>
    

<header>
    <section class="container d-flex">

    <a href="index.php" class="logo">
        <img src="img/logo.webp">
    </a>

    

    <nav class="menu">
        <ul class="#">
            <li><a href="#">Home</a></li>
            <li><a href="#">Hosting</a></li>
            <li><a href="#">Domain</a></li>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Support</a></li>
            <li><a href="#">Solutions</a></li>
            <li><a href="#">Affilates</a></li>
            <li><a href="#">Contacs</a></li>
        </ul>
    </nav>

    </section>
</header>


<main>
    <!--Slider start -->
    <section class="slider">
        <div class="container">
            <img src="img/slider-content-server.webp" class="slider_content_img">
            <a href="#"><button class="slider-btn">Log In Now!</button></a>
        </div>
    </section>
    <!--Slider end -->

    <section id="services">

        <div class="container">
        <div class="divider"></div>
                <!--Service divs start-->
        <?php
        $services = [
            'services-1' => [
                'title' => 'Domain Name',
                'subname' => 'Registrations from $9.50',
                'icon' => 'fa-solid fa-comment',
            ],
            'services-2' => [
                'title' => 'Dedicates Server',
                'subname' => 'Registrations from $9.50',
                'icon' => 'fa-solid fa-server',
            ],
            'services-3' => [
                'title' => 'Boradband',
                'subname' => 'Registrations from $9.50',
                'icon' => 'fa-solid fa-download',
            ],
            'services-4' => [
                'title' => 'Web Hosting',
                'subname' => '50% OFF for 3 month',
                'icon' => 'fa-solid fa-globe',
            ],
        ];
        ?>
<?php foreach ($services as $key => $service_item): ?>                 

        <div class="services-item">

    <h4><i class="<?php echo $service_item['icon']; ?>"></i><?php echo $service_item['title']; ?></h4>
    <span class="subname">

        <?php echo $service_item['subname']; ?>
    </span>

    <ul class="services-list">
        <li class="active"><i class="fa-solid fa-caret-right"></i>NEW: domain privacy</li>
        <li><i class="fa-solid fa-caret-right"></i>Easy domain transfers</li>
        <li><i class="fa-solid fa-caret-right"></i>Advanced DNS control</li>
        <li><i class="fa-solid fa-caret-right"></i>Personalised e-mail</li>
    </ul>


    <a href="#">View Details</a>

    <button><a href="#">Sign UP NOW!</a></button>
        </div>

    <?php endforeach; ?>

        <div class="divider"></div>
    </div>
        <!--Service divs end-->
      
        <main>
    <section>
        <!-- Services Banner start -->
        <div class="container services-banner-outher">

            <div class="services-banner">
                <div class="services-banner-left">
                    <h2>Personal Started</h2>
                    <ul>
                        <li>
                            <i class="fa-solid fa-caret-right"></i>
                            10 MB disk space
                        </li>
                        <li>
                            <i class="fa-solid fa-caret-right"></i>
                            100 MB monthly bandwidth
                        </li>
                        <li>
                            <i class="fa-solid fa-caret-right"></i>
                            10 mail boxes
                        </li>
                        <li>
                            <i class="fa-solid fa-caret-right"></i>
                            Front Page Extensions
                        </li>
                    </ul>
                </div>


                <div class="services-banner-right">
                    <div class="price-label">
                        <p>from</p>
                        <span><i>$3,<b>99</b></i></span>
                    </div>
                </div>
            </div>


            <div class="services-banner">
                <div class="services-banner-left">
                    <h2>Small Business</h2>
                    <ul>
                        <li>
                            <i class="fa-solid fa-caret-right"></i>
                            100 MB disk space
                        </li>
                        <li>
                            <i class="fa-solid fa-caret-right"></i>
                            1000 MB monthly bandwidth
                        </li>
                        <li>
                            <i class="fa-solid fa-caret-right"></i>
                            10 mail boxes
                        </li>
                        <li>
                            <i class="fa-solid fa-caret-right"></i>
                            Front Page Extensions
                        </li>
                    </ul>
                </div>

                
                <div class="services-banner-right">
                    <div class="price-label">
                        <p>from</p>
                        <span><i>$5,<b>99</b></i></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

        <!-- Footer Start -->
<footer class="footer-area">
  
  <div class="container footer-inner">

    <div class="footer-item">
        <h3>Footer Form Label</h3>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cupiditate debitis doloremque, dolorum earum expedita
            ipsa iusto nam nemo nulla praesentium quaerat quasi quo quos sunt velit vero! Tenetur, voluptates.
            <i class="fa-solid fa-angles-right"></i>
        </p>
    </div>
    <div class="footer-item">
        <h3>Footer Form Label</h3>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A amet animi aperiam cupiditate earum est fugit
            harum iste laborum libero maxime minus, mollitia nesciunt nisi numquam quam similique. Eos, molestias.
            <i class="fa-solid fa-angles-right"></i>
        </p>
    </div>
    <div class="footer-item">
        <h3>Footer Form Label</h3>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aperiam atque dolor dolorem doloribus eaque inventore,
            iste magnam neque, obcaecati officia quasi recusandae sit soluta sunt tempore veritatis vero! Suscipit.
            <i class="fa-solid fa-angles-right"></i>
        </p>
    </div>
  </div>

    <div class="footer-bottom">
        <div class="container">
           <span> WEB HOSTİNG © 2010 (2024)</span>
            <a href="#">Privacy Policy</a>
        </div>
    </div>
    
</footer>

</body>
</html>