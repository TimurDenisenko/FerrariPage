<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/Ferrari-logo.png" type="image/png">
</head>
<body>
<header class="main-header container-fluid py-3 d-flex align-items-center justify-content-between">
    <img src="images/Ferrari-Emblem.png" alt="Ferrari Logo" class="logo" onclick="window.location.href='index.php';" style="cursor: pointer; max-width: 80px; height: auto;">
    <span href="index.php" class="ms-3 fs-4" onclick="window.location.href='index.php';" style="cursor: pointer; z-index: 2000;">Ferrari</span>
    <nav class="ms-auto w-100">
        <ul class="nav justify-content-center align-items-center">
            <li class="nav-item">
                <a class="nav-link">Vehicles</a>
                <div class="dropdown-menu">
                    <div class="models-grid">
                        <a href="https://www.ferrari.com/en-EE/auto/sf90-stradale" class="model dropdown-item">
                            <img src="images/Ferrari-SF90-Stradale-Transparent.png" alt="Ferrari SF90 Stradale" class="model-img">
                            <h4 class="model-title">Ferrari SF90 Stradale</h4>
                            <p class="model-info">Lease Starting at $499/mo</p>
                        </a>
                        <a href="https://www.ferrari.com/en-EE/auto/812-superfast" class="model dropdown-item">
                            <img src="images/Ferrari-812-Superfast-Transparent.png" alt="Ferrari 812 Superfast" class="model-img">
                            <h4 class="model-title">Ferrari 812 Superfast</h4>
                            <p class="model-info">Lease Starting at $799/mo</p>
                        </a>
                        <a href="Ferrari_F8_Tributo.php" class="model dropdown-item">
                            <img src="images/Ferrari-F8-Tributo-Transparent.png" alt="Ferrari F8 Tributo" class="model-img">
                            <h4 class="model-title">Ferrari F8 Tributo</h4>
                            <p class="model-info">Lease Starting at $299/mo</p>
                        </a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link">Discover</a>
                <div class="dropdown-menu">
                    <div class="models-grid">
                        <a href="https://www.ferrari.com/en-US/auto" class="model dropdown-item">
                            <img src="images/discover-news.png" alt="Latest News" class="model-img">
                            <h4 class="model-title">Latest News</h4>
                            <p class="model-info">Stay updated with Ferrari news</p>
                        </a>
                        <a href="https://www.ferrari.com/en-EN/museums/events-calendar" class="model dropdown-item">
                            <img src="images/discover-events.png" alt="Events" class="model-img">
                            <h4 class="model-title">Events</h4>
                            <p class="model-info">Join exclusive Ferrari events</p>
                        </a>
                        <a href="https://www.ferrari.com/en-EN/magazine/articles/great-ferrari-innovations-the-cockpit" class="model dropdown-item">
                            <img src="images/discover-technology.png" alt="Technology" class="model-img">
                            <h4 class="model-title">Technology</h4>
                            <p class="model-info">Explore Ferrari's cutting-edge technology</p>
                        </a>
                        <a href="https://www.ferrari.com/en-US/history" class="model dropdown-item">
                            <img src="images/discover-history.png" alt="History" class="model-img">
                            <h4 class="model-title">History</h4>
                            <p class="model-info">Learn about Ferrari's legacy</p>
                        </a>
                        <a href="https://carconfigurator.ferrari.com/en_EN" class="model dropdown-item">
                            <img src="images/discover-configurator.png" alt="Configurator" class="model-img">
                            <h4 class="model-title">Configurator</h4>
                            <p class="model-info">Build your dream Ferrari</p>
                        </a>
                        <a href="https://www.ferrari.com/en-EN/formula1" class="model dropdown-item">
                            <img src="images/discover-racing.png" alt="Racing" class="model-img">
                            <h4 class="model-title">Racing</h4>
                            <p class="model-info">Discover Ferrari's racing achievements</p>
                        </a>
                        <a href="https://www.ferrari.com/en-EN/auto/ownersclub" class="model dropdown-item">
                            <img src="images/discover-clubs.png" alt="Clubs" class="model-img">
                            <h4 class="model-title">Clubs</h4>
                            <p class="model-info">Join the Ferrari community</p>
                        </a>
                        <a href="https://www.ferrari.com/en-EN/lifestyle-fashion-academy-2024" class="model dropdown-item">
                            <img src="images/discover-lifestyle.png" alt="Lifestyle" class="model-img">
                            <h4 class="model-title">Lifestyle</h4>
                            <p class="model-info">Explore Ferrari's lifestyle collection</p>
                        </a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link">Shop</a>
                <div class="dropdown-menu">
                    <div class="models-grid">
                        <a href="https://store.ferrari.com" class="model dropdown-item">
                            <img src="images/shop-clothing.png" alt="Clothing" class="model-img">
                            <h4 class="model-title">Clothing</h4>
                            <p class="model-info">Ferrari-branded clothing</p>
                        </a>
                        <a href="https://www.ferrari.com/en-EN/auto/ferrari-genuine-accessories" class="model dropdown-item">
                            <img src="images/shop-accessories.png" alt="Accessories" class="model-img">
                            <h4 class="model-title">Accessories</h4>
                            <p class="model-info">Ferrari-inspired accessories</p>
                        </a>
                        <a href="https://store.ferrari.com/en-it/ferrari-gift-guide" class="model dropdown-item">
                            <img src="images/shop-gift-cards.png" alt="Gift Cards" class="model-img">
                            <h4 class="model-title">Gift</h4>
                            <p class="model-info">Gift the Ferrari experience</p>
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
</header>