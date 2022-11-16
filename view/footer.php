<!-- footer -->
<div class="footer pt-20 mau_footer">
            <div class="text-center">
                <p class="text-4xl text-white text2">ZeeZee Chicken House - Tinh hoa Gà Việt</p>
            </div>
            <div class="justify-between flex pt-10 text-white text-center pb-20">
                <p class="pl-10">54 Lý Thường Kiệt, P. Trần Hưng Đạo<br> <span>
                        Q. Hoàn Kiếm, Hà Nội</span></p>
                <p>Hotline <br>
                    <span>033 561 5454</span>
                </p>
                <p class="pr-10">Giờ hoạt động
                    Thứ Hai – Chủ nhật: 10:30 – 22:00</p>
                   
            </div>
            <hr>
            <div class="text-center text-white p-2"><p>zeezeechickenhouse @ 2022 CREATED BY carrot solution.</p></div>
        </div>
    </div>




    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1 }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 5000); // Change image every 5 seconds
        }
    </script>
</body>

</html>