<?php
// session_start();
include "./sidebar.php";
include "../Controller/settingShowDataController.php";
// include "../Controller/settingController.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./resources/img/logo_upt.png" type="image/png" sizes="16x16">
    <title>Setting</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="./resources/js/dateandtime.js " defer></script>
    <link href="./resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/setting.css">
    <script>
        function displayUserImage(imgId, inputId) {
            const imgElement = document.getElementById(imgId);
            const fileInput = document.getElementById(inputId);

            if (fileInput.files && fileInput.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    imgElement.src = e.target.result; // Update the src attribute with the uploaded image
                }

                reader.readAsDataURL(fileInput.files[0]); // Read the uploaded image as data URL
            }
        }
    </script>
</head>

<body>
    <div class="ml-56">
        <p class="font-poppins mt-2 font-semibold text-xl pl-5">Setting</p>
        <section class=" p-5">
            <div class=" clear-both w-full rounded-lg p-3 shadow-xl border-2 border-blue-950">
                <section class="flex">
                    <div>
                        <p class=" text-text2 font-philosopher text-lg font-semibold">Account</p>
                        <div class="flex justify-around ">
                            <p class="font-philosopher font-light text-base mt-2">Logo</p>
                            <p class="font-philosopher font-light text-base mt-2">Banner</p>
                        </div>
                        <form action="../Controller/settingController.php" method="post" enctype="multipart/form-data">
                            <div class="flex justify-around">
                                <div class="border border-dashed w-32 h-32 rounded-xl border-gray-800 mt-3 flex justify-center items-center">
                                    <label for="photo5" class="cursor-pointer">
                                        <input type="file" id="photo5" name="photo5" style="display: none;" onchange="displayUserImage('photoimg5', 'photo5')">
                                        <?php
                                        if (isset($merchant["logo"])) {
                                            echo '<img src="../../Storage/profile/' . $merchant["logo"] . '" id="photoimg5" alt="">';
                                        } else {
                                            echo '<img src="./resources/img/gallery-add.png" id="photoimg5" alt="">';
                                        }
                                        ?>

                                    </label>
                                    <!-- <p class="font-poppins text-gray-400 text-sm w-20 ml-5 text-center mt-5">Upload the photo</p> -->
                                </div>
                                <div class="border border-dashed w-32 h-32 rounded-xl border-gray-800 mt-3 flex justify-center items-center">
                                    <label for="photo6" class="cursor-pointer">
                                        <input type="file" id="photo6" name="photo6" style="display: none;" onchange="displayUserImage('photoimg6', 'photo6')">
                                        <?php
                                        if (isset($merchant["banner"])) {
                                            echo '<img src="../../Storage/profile/' . $merchant["banner"] . '" id="photoimg6" alt="">';
                                        } else {
                                            echo '<img src="./resources/img/gallery-add.png" id="photoimg6" alt="">';
                                        }
                                        ?>
                                    </label>
                                    <!-- <p class="font-poppins text-gray-400 text-sm w-20 ml-5 text-center mt-5">Upload the photo</p> -->
                                </div>
                            </div>
                            <div class=" space-y-5 pt-5">
                                <div class="flex space-x-10 mt-2">
                                    <div class="flex flex-col">
                                        <label class=" text-sm">Shop Name<span class=" text-red-600">*</span></label>
                                        <input type="text" name="shopName" class="w-72 p-1 border border-solid  rounded-md mt-2 outline-none indent-2" value="<?php echo isset($merchant['store_name']) ? $merchant['store_name'] : '';  ?>" required>
                                    </div>
                                    <div class="flex flex-col">
                                        <label for="" class=" text-sm">Address</label>
                                        <input type="text" name="address" class="w-72  p-1 border border-solid  rounded-md mt-2 outline-none indent-2" value="<?php echo isset($merchant['address']) ? $merchant['address'] : '';  ?>" >
                                    </div>
                                </div>
                                <div class="flex space-x-10 mt-2">
                                    <div class="flex flex-col">
                                        <label for="" class=" text-sm">Phone Number</span>
                                            <span class="text-red-600">
                                                <?php
                                                if (isset($_SESSION['error'])) {
                                                    echo  $_SESSION['error'];
                                                }
                                                ?>
                                            </span>
                                        </label>
                                        <input type="text" name="phNo" class="w-72 p-1 border border-solid rounded-md mt-2 outline-none indent-2" value="<?php echo isset($merchant['phone']) ? $merchant['phone'] : ''; ?>" placeholder="09********" >
                                    </div>
                                    <div class="flex flex-col">
                                        <label for="myTextarea" class=" text-sm">Slogan</label>
                                        <textarea id="myTextarea" name="slogan" cols="30" rows="5" class="w-72 p-1 border border-solid rounded-md mt-2 outline-none indent-2" require><?php echo trim(isset($merchant['slogan'])) ? $merchant['slogan'] : ''; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 pr-10">
                                <button type="submit" name="cancel" class="w-28 p-2 mr-2 bg-blue-600  rounded-lg mb-2 text-white hover:text-black hover:bg-white hover:border border-black ">Cancel</button>
                                <button type="submit" name="send" class="w-28 p-2 bg-blue-600 rounded-lg text-white hover:text-black hover:border border-black  mb-2 hover:bg-white">Save</button>
                            </div>
                        </form>
                    </div>
                    <div class=" ml-20 pl-20 border-l-2 border-gray-300">
                        <p class=" text-text2 font-philosopher text-lg font-semibold">Update Password</p>
                        <form action="../Controller/updatePwController.php" method="post" class="w-full h-auto  pt-5">
                            <div class=" space-y-3">
                                <div class="flex flex-col">
                                    <label for="oldPassword" class=" text-sm">Old Password<span class=" text-red-600">*</span>
                                        <p class="text-red-500">
                                            <?php
                                            if (isset($_SESSION["message1"])) {
                                                echo $_SESSION["message1"];
                                            }
                                            ?></p>
                                    </label>
                                    <input type="password" name="oldPassword" id="oldPassword" class="w-72 p-2 border border-solid  rounded-md mt-2 font-medium outline-none " placeholder=" Please enter old password" required>
                                </div>
                                <div class="flex flex-col">
                                    <label for="newPassword" name="" class="text-sm ">New Password<span class=" text-red-600">*</span>
                                        <p class="text-red-500">
                                            <?php
                                            if (isset($_SESSION["message"])) {
                                                echo $_SESSION["message"];
                                            }
                                            ?></p>
                                    </label>
                                    <input type="password" name="newPassword" id="newPassword" class="w-72 p-2 border border-solid  rounded-md mt-2 font-medium outline-none" placeholder="Please enter New password" required>
                                </div>
                                <div class="flex flex-col">
                                    <label for="confirmPassword" class="text-sm mt-2 ">Confirm New Password<span class=" text-red-600">*</span></label>
                                    <input type="password" name="confirmPassword" id="" class="w-72 p-2 border border-solid rounded-md mt-2 font-medium outline-none" placeholder="Please enter again to confirm" required>
                                </div>
                            </div>
                            <div class=" mt-[195px]">
                                <button type="submit" name="reset" class="w-28 p-2 mr-2 bg-blue-600  rounded-lg mb-2 text-white hover:text-black hover:bg-white hover:border border-black ">Reset</button>
                                <button type="submit" name="update" class="w-28 p-2 bg-blue-600 rounded-lg text-white hover:text-black hover:border border-black  mb-2 hover:bg-white">Update</button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </section>
    </div>
</body>

</html>
<?php
$_SESSION["message1"] = "";
$_SESSION["message"] = "";
$_SESSION['error'] = "";
?>