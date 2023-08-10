
function cartElement($productimg,$productname, $productprice){
    $element = "
    <div class="flex items-center text-[12px] md:text-[16px] font-bold justify-evenly w-[361px]  md:w-[384px]
                     md:h-[58px] mt-5 border border-transparent border-t-black border-b-black md:ml-6 font-poppins">
                        <img class=" w-16" src="$productimg" alt="">
                        <div class="w-[35px] h-[32px] border border-gray-600 rounded-md flex items-center justify-center">$productname</div>
                        <div class="flex w-[60px] md:w-[80px] h-[26px] border border-gray-600 rounded-md items-center justify-evenly">
                            <p>+</p>
                            <p>2</p>
                            <p>-</p>
                        </div>
                        <p> $productprice</p>
                        <p>$200</p>
                        <div class="absolute left-[88%] md:left-[52.7%] rounded-full w-[20px] h-[20px] bg-[#EBEBEB]  text-[#777777] flex items-center justify-center">x</div>
                    </div> ";
};

?>
</body>
</html>