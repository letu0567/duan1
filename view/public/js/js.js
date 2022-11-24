
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


        const open_title = document.getElementById('title_sp_ct');
        const open = document.getElementById('san_pham_con');
        const btn_close = document.getElementById('btn-close');
        const modal_container = document.getElementById('modal_container');

        open_title.addEventListener('click',()=>{
            // add class .show
            modal_container.classList.add('show');
            // alert("hihi");
        });
        open.addEventListener('click',()=>{
            // add class .show
            modal_container.classList.add('show');
            // alert("hihi");
        });
        btn_close.addEventListener('click',()=>{
            // add class .show
            modal_container.classList.remove('show');
            // alert("hihi");
        });
