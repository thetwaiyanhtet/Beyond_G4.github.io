<?php
include "../Controller/orderHistoryDetailsController.php";
$userData = $_SESSION["user_data"];
$verifyData = $_SESSION["verifyData"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./resources/img/logo_upt.png" type="image/png" sizes="16x16">
    <title>Order History Details</title>
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script src="../View/resources/lib/jquery3.6.0.js"></script>
    <script src="../View/resources/js/order.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Style the star outline */
        .star-rating label {
            font-size: 24px;
            color: #ccc;
            cursor: pointer;
            transition: color 0.2s;
            /* Add a smooth color transition */
        }

        /* Style the filled star when selected */
        .star-rating input:checked~label {
            color: gold;
            /* Change to your desired filled star color */
        }
    </style>

</head>

<body class="bg-purple-200 dark:bg-color-primary-dark ">
    <?php include "./navigation.php"; ?>


    <section class="flex flex-wrap w-full mt-24">
        <div class="md:flex flex-col m-5 space-y-5 w-[100%] md:w-44">
            <a href="./userProfileEditUpd.php">
                <button type="button" class="w-36  bg-white dark:bg-gray-800  text-purple-800 dark:text-white rounded-md p-2 dark:hover:ring-purple-800 hover:ring-2 hover:outline-none hover:ring-purple-300  shadow-md font-semibold border-l-4 border-l-purple-900 dark:border-l-purple-400">Manage Profile</button>
            </a>
            <a href="./userCart.php">
                <button type="button" class="w-36  bg-white dark:bg-gray-800  text-purple-800 dark:text-white rounded-md p-2 dark:hover:ring-purple-800 hover:ring-2 hover:outline-none hover:ring-purple-300  shadow-md font-semibold border-l-4 border-l-purple-900 dark:border-l-purple-400">Cart</button>
            </a>
            <a href="./Wishlist2.php">
                <button type="button" class="w-36 border border-solid dark:border-black bg-white dark:bg-gray-800  text-purple-800 dark:text-white rounded-md p-2 dark:hover:ring-purple-800 hover:ring-2 hover:outline-none hover:ring-purple-300  shadow-md font-semibold border-l-4 border-l-purple-900 dark:border-l-purple-400">WishList</button>
            </a>
            <a href="./user_history.php">
                <button type="button" class="w-44 border border-solid dark:border-black bg-white dark:bg-gray-800  text-purple-800 dark:text-white rounded-md p-2 dark:hover:ring-purple-800 hover:ring-2 hover:outline-none hover:ring-purple-300  shadow-md font-semibold border-l-4 border-l-purple-900 dark:border-l-purple-400">History</button>
            </a>
            <a href="./orderNotification.php"> <button type="button" class="w-36 border border-solid dark:border-black bg-white dark:bg-gray-800  text-purple-800 dark:text-white rounded-md p-2 dark:hover:ring-purple-800 hover:ring-2 hover:outline-none hover:ring-purple-300  shadow-md font-semibold border-l-4 border-l-purple-900 dark:border-l-purple-400">Notification</button>
            </a>
        </div>
        <div class="star-rating-display">
            <?php for ($i = 1; $i <= 5; $i++) { ?>
                <span class="star <?php echo ($i <= $rating) ? 'filled' : ''; ?>"></span>
            <?php } ?>
        </div>
        <div class="my-5 w-[100%] md:w-3/4 ">
            <div class="w-auto p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                <div class="flex items-center justify-between mb-4">
                    <a href="./user_history.php"><ion-icon name="return-down-back-outline" class=" text-xl"></ion-icon></a>
                    <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Order Details</h5>
                </div>
                <div class="flow-root">
                    <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700 ">
                        <?php foreach ($orderDetails as $order) { ?>
                            <li class="py-3 sm:py-4 w-auto my-5 pt-3">
                                <div class="flex items-center justify-between space-x-4">
                                    <div class="flex">
                                        <img class="w-14 object-fill scale-150 rounded-full" src="../../Storage/product/<?= $order["p_one"] ?>" alt="...">
                                        <?php ?>
                                    </div>

                                    <div class="flex-col min-w-0">
                                        <p class="text-sm text-gray-500 truncate dark:text-gray-400 ">
                                            <?= $order["name"] ?>
                                        </p>
                                    </div>
                                    <div class="flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        <?= $order["sellprice"] ?> Ks
                                    </div>
                                    <button data-modal-target="popup-modal" data-order-id="<?= $order['product_id']; ?>" data-modal-toggle="popup-modal" class="rating-button block text-white bg-purple-400 scale-100 hover:scale-90 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-purple-600  dark:focus:ring-purple-800" type="button">
                                        Rate Your Satisfaction
                                    </button>
                                    <div>
                                        <div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                            <div class="relative w-full max-w-md max-h-full">
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                                                        <svg class="w-3 h-3" aria-hidden="true" fill="none" viewBox="0 0 14 14">
                                                            <path d="M20,2H4C2.9,2,2,2.9,2,4v18l4-4h14c1.1,0,2-0.9,2-2V4C22,2.9,21.1,2,20,2z M13.57,11.57L12,15l-1.57-3.43L7,10l3.43-1.57 L12,5l1.57,3.43L17,10L13.57,11.57z" />
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                    <div class="p-6 text-center">
                                                        <form action="../Controller/reviewNRatingController.php" method="post" id="review-form">
                                                            <!-- Hidden input to store the order ID -->
                                                            <input type="hidden" name="product_id" id="order-id-input" value="">
                                                            <svg class=" text-gray-800 dark:text-gray-600 w-12 h-12 mx-auto" viewBox="0 0 24 24">
                                                                <path d="M20,2H4C2.9,2,2,2.9,2,4v18l4-4h14c1.1,0,2-0.9,2-2V4C22,2.9,21.1,2,20,2z M13.57,11.57L12,15l-1.57-3.43L7,10l3.43-1.57 L12,5l1.57,3.43L17,10L13.57,11.57z" fill="#a1a1a1"></path>
                                                            </svg>
                                                            <h3 class=" text-lg font-normal text-gray-800 dark:text-gray-400 pb-2">Share Your Experience</h3>
                                                            <div class="flex items-center space-x-1 justify-center pb-2">
                                                                <label for="rating">Rating:</label>
                                                                <div class="star-rating">
                                                                    <label for="star1" data-rating="1"><ion-icon name="star-outline"></ion-icon></label>
                                                                    <input type="radio" id="star1" name="rating" value="1" hidden>
                                                                    <label for="star2" data-rating="2"><ion-icon name="star-outline"></ion-icon></label>
                                                                    <input type="radio" id="star2" name="rating" value="2" hidden>
                                                                    <label for="star3" data-rating="3"><ion-icon name="star-outline"></ion-icon></label>
                                                                    <input type="radio" id="star3" name="rating" value="3" hidden>
                                                                    <label for="star4" data-rating="4"><ion-icon name="star-outline"></ion-icon></label>
                                                                    <input type="radio" id="star4" name="rating" value="4" hidden>
                                                                    <label for="star5" data-rating="5"><ion-icon name="star-outline"></ion-icon></label>
                                                                    <input type="radio" id="star5" name="rating" value="5" hidden>
                                                                </div>
                                                            </div>

                                                            <label for="message"></label>
                                                            <textarea required id="message" name="message" rows="4" class="mb-4 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-purple-500 focus:border-purple-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-purple-500 dark:focus:border-purple-500" placeholder="Write your review here..."></textarea>
                                                            <button data-modal-hide="popup-modal" type="submit" class="text-white bg-purple-400  focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                                Submit
                                                            </button>
                                                            <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>

    </section>
    <section id="footer">
        <div class="relative bg-purple-300 dark:bg-color-primary-dark dark:text-white border-t border-t-transparent dark:border-t-slate-200">
            <div class="container pl-12 py-5 ">
                <div class="grid gap-10 md:grid-cols-3 pb-10">
                    <div class="space-y-6">
                        <img src="./resources/img/logo.png" class="h-20" alt="beyond Logo" />
                        <h4 class="font-bold text-lg">About Beyond</h4>
                        <p class="leading-relaxed"> Discover a curated collection of unique products that transcend the ordinary. Join us as we redefine the art of shopping, delivering seamless journeys that inspire and delight. Unleash the extraordinary with Beyond.</p>
                        <div class="flex gap-5 items-center">
                            <p>Follow Us</p>
                            <i class="fa-brands fa-facebook-f cursor-pointer hover:text-purple-700"></i>
                            <i class="fa-brands fa-twitter cursor-pointer hover:text-purple-700"></i>
                            <i class="fa-brands fa-youtube cursor-pointer hover:text-purple-700"></i>
                            <i class="fa-brands fa-instagram cursor-pointer hover:text-purple-700"></i>
                        </div>
                    </div>
                    <div class="flex justify-between md:justify-around">
                        <div class="space-y-6">
                            <h4 class="font-bold text-lg">Quick Links</h4>
                            <ul class="space-y-3">
                                <li class="underline hover:no-underline hover:text-purple-700"><a href="./mainPage.php">Home</a></li>
                                <li class="underline hover:no-underline hover:text-purple-700"><a href="./aboutUs.php">About us</a></li>
                                <li class="underline hover:no-underline hover:text-purple-700"><a href="./contactUs.php">Contact Us</a></li>
                                <li class="underline hover:no-underline hover:text-purple-700"><a href="./profileMenu.php">Profile</a></li>
                                <li class="underline hover:no-underline hover:text-purple-700"><a href="#blog">Return policy</a></li>
                                <li class="underline hover:no-underline hover:text-purple-700"><a href="#blog">Terms and Conditions</a></li>

                            </ul>
                        </div>

                    </div>
                    <div class="space-y-6">
                        <h4 class="font-bold text-lg">Newsletter</h4>
                        <p class="leading-relaxed">Subscribe With Email And Loads Of News Will Be Sent To You</p>
                        <div class="flex items-center">
                            <input type="text" class="w-3/4 text-black bg-color-white p-2 lg:p-3 rounded-l-md focus:outline-none" placeholder="Enter Your Email">

                            <button type="submit" class="px-4 py-2 lg:px-5 lg:py-3 rounded-r-md hover:opacity-90 border border-solid bg-slate-900">
                                <i class="fa-solid fa-chevron-right text-white"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center pt-10 border-t border-color-gray">
                    <p>2023 &copy; Beyond. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>


    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }

        document.addEventListener("DOMContentLoaded", function() {
            <?php
            if (isset($_SESSION["review_submitted"]) && $_SESSION["review_submitted"]) {
                // Clear the flag after displaying the popup
                unset($_SESSION["review_submitted"]);
            ?>
                // Display the popup
                alert("Thanks for rating us!");
            <?php
            }
            ?>
        });


        const starLabels = document.querySelectorAll('.star-rating label');
        //const starCountDisplay = document.getElementById('star-count');

        starLabels.forEach(label => {
            label.addEventListener('click', function() {
                const rating = parseInt(this.getAttribute('data-rating'));
                updateStarsColor(rating);
                //starCountDisplay.textContent = rating;
            });
        });

        function updateStarsColor(rating) {
            starLabels.forEach(label => {
                const labelRating = parseInt(label.getAttribute('data-rating'));
                label.style.color = (labelRating <= rating) ? 'gold' : '#ccc';
            });
        }
    </script>
</body>

</html>