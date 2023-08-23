<?php

include "../Controller/addressController.php";
$resultT = $_SESSION["townships"];
$resultR = $_SESSION["regions"];
$userData = $_SESSION["user_data"];
$verifyData = $_SESSION["verifyData"];
// echo "<pre>";
// print_r($userData);
// echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./resources/img/logo_upt.png" type="image/png" sizes="16x16">
    <title>Profile Edit</title>
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=BioRhyme&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./resources/css/scroll.css">
    <script src="../View/resources/js/product.js" defer></script>
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-purple-200 dark:bg-color-primary-dark ">
<?php include "./navigation.php"; ?>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 bg-transparent" id="navbar-user">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent dark:border-gray-700">
                    <li>
                        <a href="./mainPage.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-purple-600 md:p-0 dark:text-white md:dark:hover:text-purple-500 dark:hover:bg-gray-700 dark:hover:text-purple-500 md:dark:hover:bg-transparent dark:border-gray-700 font-bold" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="./aboutUs.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-purple-600 md:p-0 dark:text-white md:dark:hover:text-purple-500 dark:hover:bg-gray-700 dark:hover:text-purple-500 md:dark:hover:bg-transparent dark:border-gray-700 font-bold">About Us</a>
                    </li>
                    <li>
                        <a href="./contactUs.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-purple-600 md:p-0 dark:text-white md:dark:hover:text-purple-500 dark:hover:bg-gray-700 dark:hover:text-purple-500 md:dark:hover:bg-transparent dark:border-gray-700 font-bold">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="flex flex-wrap w-full mt-24 ">
        <form action="../Controller/profileUpdateController.php" method="post" enctype="multipart/form-data">
            <div class="flex flex-wrap w-auto h-auto">
                <div class="md:flex flex-col m-5 space-y-5 w-[100%] md:w-44">
                    <a href="./userProfileEditUpd.php">
                        <button type="button" class="w-44 bg-white dark:bg-gray-800  text-purple-800 dark:text-white rounded-md p-2 dark:hover:ring-purple-800 hover:ring-2 hover:outline-none hover:ring-purple-300  shadow-md font-semibold border-l-4 border-l-purple-900 dark:border-l-purple-400">Manage Profile</button>
                    </a>
                    <a href="./userCart.php">
                        <button type="button" class="w-36  bg-white dark:bg-gray-800  text-purple-800 dark:text-white rounded-md p-2 dark:hover:ring-purple-800 hover:ring-2 hover:outline-none hover:ring-purple-300  shadow-md font-semibold border-l-4 border-l-purple-900 dark:border-l-purple-400">Cart</button>
                    </a>
                    <a href="./Wishlist2.php">
                        <button type="button" class="w-36 border border-solid dark:border-black bg-white dark:bg-gray-800  text-purple-800 dark:text-white rounded-md p-2 dark:hover:ring-purple-800 hover:ring-2 hover:outline-none hover:ring-purple-300  shadow-md font-semibold border-l-4 border-l-purple-900 dark:border-l-purple-400">WishList</button>
                    </a>
                    <a href="./user_history.php">
                        <button type="button" class="w-36 border border-solid dark:border-black bg-white dark:bg-gray-800  text-purple-800 dark:text-white rounded-md p-2 dark:hover:ring-purple-800 hover:ring-2 hover:outline-none hover:ring-purple-300  shadow-md font-semibold border-l-4 border-l-purple-900 dark:border-l-purple-400">History</button>
                    </a>
                    <a href="./orderNotification.php"> <button type="button" class="w-36 border border-solid dark:border-black bg-white dark:bg-gray-800  text-purple-800 dark:text-white rounded-md p-2 dark:hover:ring-purple-800 hover:ring-2 hover:outline-none hover:ring-purple-300  shadow-md font-semibold border-l-4 border-l-purple-900 dark:border-l-purple-400">Notification</button>
                    </a>
                </div>

                <main class=" dark:bg-gray-800 bg-white px-10 my-5 mx-auto w-[100%] md:w-3/4 md:flex flex-col border border-gray-200 rounded-lg shadow dark:border-gray-700 dark:text-white">
                    <div class=" my-5  w-[100%] space-y-3">
                        <div>
                            <p class=" font-philosopher text-3xl text-center">My Profile</p>
                            <p class="text-center">Manage and protect your account</p>
                        </div>
                        <div class=" w-40 h-40 border border-dashed rounded-full border-gray-400 m-auto flex justify-center items-center">
                            <label for="photo">
                                <input type="file" class=" hidden" id="photo" accept=".png,.jpeg" name="photo">
                                <?php if (isset($userData["p_picture"])) { ?>
                                    <img src="../../Storage//profile/<?= $userData["p_picture"] ?>" id="photoimg" alt="" class="">
                                <?php } else { ?>
                                    <img src="../../Merchant/View/resources/img/gallery-add.png" id="photoimg" alt="" class=" w-16 h-16">
                                <?php } ?>
                            </label>

                        </div>

                    </div>
            </div>

            <div class=" w-full m-auto space-y-4 flex flex-wrap">
                <div class="space-y-3 w-3/5 m-auto">
                    <!-- <input type="text" placeholder="Username" class="profileInputBox w-44 md:w-64 rounded-md text-gray-900 border border-gray-300  bg-gray-50 text-sm sm:text-xs focus:ring-purple-500 focus:border-purple-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-purple-300 dark:focus:border-purple-300" name="username"> -->

                    <input type="text" value="<?php echo isset($userData["username"]) ? $userData["username"] : '';  ?>" placeholder="Name" class="profileInputBox w-44 md:w-64 rounded-md text-gray-900 border border-gray-300  bg-gray-50 text-sm sm:text-xs focus:ring-purple-500 focus:border-purple-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-purple-300 dark:focus:border-purple-300" name="name" required>

                    <!-- <input type="text" placeholder="Email" class="profileInputBox w-44 md:w-64 rounded-md text-gray-900 border border-gray-300  bg-gray-50 text-sm sm:text-xs focus:ring-purple-500 focus:border-purple-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-purple-300 dark:focus:border-purple-300" name="email"> -->

                    <input type="text" value="<?php echo isset($userData["phone"]) ? $userData["phone"] : '';  ?>" placeholder="Phone Number" class="profileInputBox w-44 md:w-64 rounded-md text-gray-900 border border-gray-300  bg-gray-50 text-sm sm:text-xs focus:ring-purple-500 focus:border-purple-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-purple-300 dark:focus:border-purple-300" name="phone_no" required>

                    <p class="text-xs pl-2 inline font-bold text-gray-500">Date of Birth - </p>
                    <input type="date" value="<?php echo isset($userData["birthday"]) ? $userData["birthday"] : '';  ?>" class="rounded-md  w-40 text-gray-900 border border-gray-300 dark:text-white  bg-gray-50 text-sm sm:text-xs focus:ring-purple-500 focus:border-purple-500 dark:bg-gray-700 dark:border-gray-600  dark:focus:ring-purple-300 dark:focus:border-purple-300" name="dob" required>

                    <input type="text" value="<?php echo isset($userData["street"]) ? $userData["street"] : '';  ?>" placeholder="Street" class="profileInputBox  w-44 md:w-64 rounded-md text-gray-900 border border-gray-300  bg-gray-50 text-sm sm:text-xs focus:ring-purple-500 focus:border-purple-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-purple-300 dark:focus:border-purple-300" name="street" required>


                    <p class="text-xs pl-2 pr-4 inline font-bold text-gray-500">Township - </p>
                    <select name="township" class="profileInputBox w-32 rounded-md text-gray-900 dark:text-white border border-gray-300 bg-gray-50 text-sm sm:text-xs focus:ring-purple-500 focus:border-purple-500 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-purple-300 dark:focus:border-purple-300" required>
                        <?php foreach ($resultT as $tID => $township) { ?>
                            <option value="<?= $tID ?>" <?= isset($userData["t_name"]) && $township["t_name"] == $userData["t_name"] ? 'selected' : '' ?>>
                                <?= $township["t_name"]; ?>
                            </option>
                        <?php } ?>
                    </select>


                    <p class="text-xs pl-2 inline font-bold text-gray-500">Region/State - </p>
                    <select name="region" class="profileInputBox rounded-md w-32 text-gray-900 dark:text-white  border border-gray-300  bg-gray-50 text-sm sm:text-xs focus:ring-purple-500 focus:border-purple-500 dark:bg-gray-700 dark:border-gray-600  dark:focus:ring-purple-300 dark:focus:border-purple-300" required>
                        <?php foreach ($resultR as $rID => $region) { ?>
                            <option value="<?= ++$rID ?>" <?= isset($userData["r_name"]) && $region["r_name"] == $userData["r_name"] ? 'selected' : '' ?>>
                            <?= $region["r_name"]; ?></option>
                        <?php } ?>
                    </select><br>

                    <div class="space-x-3 pb-3 float-right ">
                        <button type="submit" class=" text-white bg-purple-500 scale-100 hover:scale-90 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-purple-600  dark:focus:ring-purple-800 shadow-md ">Save</button>
                        <button class="  text-white bg-red-500 scale-100 hover:scale-90 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600  dark:focus:ring-red-800 shadow-md ">Cancel</button>
                    </div>
                    <div class="flex items-center space-x-3">
                        <p class="text-xs pl-2 inline font-bold text-gray-500">Gender - </p>
                        <div>
                            <?php if (isset($userData["gender"]) && $userData["gender"] == 0) { ?>
                                <input type="radio" id="male" name="gender" value="0" required checked>
                            <?php } else { ?>
                                <input type="radio" id="male" name="gender" value="0" required>
                            <?php } ?>
                            <label for="male" class="md:text-base text-sm dark:text-white">Male</label>

                            <?php if (isset($userData["gender"]) && $userData["gender"] == 1) { ?>
                                <input type="radio" id="female" name="gender" value="1" required checked>
                            <?php } else { ?>
                                <input type="radio" id="female" name="gender" value="1" required>
                            <?php } ?>
                            <label for="female" class="md:text-base text-sm dark:text-white">Female</label>

                            <?php if (isset($userData["gender"]) && $userData["gender"] == 2) { ?>
                                <input type="radio" id="other" name="gender" value="2" required checked>
                            <?php } else { ?>
                                <input type="radio" id="other" name="gender" value="2" required>
                            <?php } ?>
                            <label for="other" class="md:text-base text-sm dark:text-white">Other</label>
                        </div>

                    </div>
                </div>

            </div>
            </main>
            </div>
        </form>
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
    <script src="./resources/js/toggle.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
</body>

</html>