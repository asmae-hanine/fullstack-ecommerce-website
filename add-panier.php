<!-- yassine ntaya ghadi dr hnaya l page dyal ajouter au panier -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce web</title>
    <!--css link-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/add-product.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,500&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>

<body>
    <header>
        <a href="#" class="logo"><img src="images/logo.png" alt="" width="3000" height="3000"></a>
        <ul class="navmenu">
            <li> <a href="#">Home</a></li>
            <li> <a href="#">Shop</a></li>
            <li> <a href="#">Product</a></li>
            <li> <a href="#">Page</a></li>
            <li> <a href="#">Docs</a></li>
        </ul>
        <div class="nav-icon"></div>
        <a href="#"><i class='bx bx-search'></i></a>
        <a href="#"><i class='bx bx-user'></i></a>
        <a href="#"><i class='bx bx-cart'></i></a>
        <div class="bx bx-menu" id="menu-icon"></div>
    </header><br>
    <br>
    <section class="products_panier">
        <div class="titre">
            <h1 class="titre-hover">Panier</h1>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Quantité</th>
                    <th>Prix unitaire</th>
                    <th>Photo</th>
                    <th>Prix total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Produit 1</td>
                    <td> <button class="quantity-btn" onclick="changeQuantity(this, -1)">-</button>
                        <span>0</span>
                        <button class="quantity-btn" onclick="changeQuantity(this, 1)">+</button>
                    </td>
                    <td>300</td>
                    <td><img src="images/img1.jpg" alt="Product 1" height="30" width="30"> </td>
                    <td class="total-price">0DH</td>
                </tr>
                <tr>
                    <td>Produit 2</td>
                    <td> <button class="quantity-btn" onclick="changeQuantity(this, -1)">-</button>
                        <span>0</span>
                        <button class="quantity-btn" onclick="changeQuantity(this, 1)">+</button>
                    </td>
                    <td>29.99 DH</td>
                    <td><img src="images/img2.jpg" alt="Product 2" height="30" width="30"></td>
                    <td class="total-price">0DH</td>
                </tr>
                <tr>
                    <td>Produit 3</td>
                    <td> <button class="quantity-btn" onclick="changeQuantity(this, -1)">-</button>
                        <span>0</span>
                        <button class="quantity-btn" onclick="changeQuantity(this, 1)">+</button>
                    </td>
                    <td>50 DH</td>
                    <td><img src="images/img3.jpg" alt="Product 2" height="30" width="30"></td>
                    <td class="total-price">0DH</td>
                </tr>
                <tr>
                    <td>Produit 4</td>
                    <td> <button class="quantity-btn" onclick="changeQuantity(this, -1)">-</button>
                        <span>0</span>
                        <button class="quantity-btn" onclick="changeQuantity(this, 1)">+</button>
                    </td>
                    <td>40 DH</td>
                    <td><img src="images/img4.jpg" alt="Product 2" height="30" width="30"></td>
                    <td class="total-price">0DH</td>
                </tr>
                <tr>
                    <td>Produit 5</td>
                    <td> <button class="quantity-btn" onclick="changeQuantity(this, -1)">-</button>
                        <span>0</span>
                        <button class="quantity-btn" onclick="changeQuantity(this, 1)">+</button>
                    </td>
                    <td>100 DH</td>
                    <td><img src="images/img5.jpg" alt="Product 2" height="30" width="30"></td>
                    <td class="total-price">0DH</td>
                </tr>
                <script>
                    function changeQuantity(button, amount) {
                        var row = button.parentNode.parentNode;
                        var quantityElement = row.getElementsByTagName('span')[0];
                        var totalElement = row.getElementsByClassName('total-price')[0];

                        var currentQuantity = parseInt(quantityElement.innerText, 10);
                        var newQuantity = currentQuantity + amount;

                        if (newQuantity >= 0) {
                            quantityElement.innerText = newQuantity;

                            var pricePerUnit = parseFloat(row.cells[2].innerText.replace('DH', ''));
                            var newTotal = (pricePerUnit * newQuantity).toFixed(2);

                            totalElement.innerText = 'DH' + newTotal;
                        }
                    }
                </script>
            </tbody>
        </table>
    </section>

    <!--Contact section kanft7o section okhra  -->
    <section class="Contact">
        <div class="contact-info">
            <div class="first-info">
                <h3>Brandscop</h3>
                <br>
                <p> 3245 FES,Maroc </p>
                <br>
                <p>+212779-452787</p>
                <br>
                <p>brandscoop18@gmail.com</p>

                <div class="social-icon">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <br>
                    <a href="#"><i class='bx bxl-whatsapp'></i></a>
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                </div>

            </div>

            <div class="second-info">
                <h4>Support</h4>
                <p>Contact us</p>
                <p>About page</p>
                <p>Size Guide</p>
                <p>Shopping & Resturns</p>
                <p>Privacy</p>
            </div>

            <div class="third-info">
                <h4>Shop</h4>
                <p>Men's Shopping</p>
                <p>Women's Shopping</p>
                <p>Kids's Shopping</p>
                <p>Furniture</p>
                <p>Discount</p>

            </div>
            <div class="fourth-info">
                <h4>Company</h4>
                <p>About</p>
                <p>Blog</p>
                <p>Affiliate</p>
                <p>Login</p>

            </div>

            <div class="five">
                <h4>Subscirbe</h4>
                <p>Receive Updates, Hot Deals,Discounts sent Straight In Your Inbox Daily</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <p>Receive Updates, Hot Deals,Discounts sent Straight In Your Inbox Daily</p>

            </div>


        </div>

        </div>

    </section>
    <div class="end-text">
        <p>Copright © @2024. All Rights.Designed By Oumayma Lamnii,Yassine Ou-cherrou,Asmae Hanin.</p>
    </div>


</body>

</html>