<section class="footer">

<div class="share">
    <a href="https://www.facebook.com/sanket.prajapati.3990/" class="fab fa-facebook-f"></a>
    <a href="https://www.youtube.com/channel/UCrkCiBSmviKZ2gaeVYow3wA" class="fab fa-youtube"></a>
    <a href="https://www.instagram.com/sanketprajapati91/?hl=en" class="fab fa-instagram"></a>
    <a href="https://www.linkedin.com/in/sanket-prajapati-726b04206/" class="fab fa-linkedin"></a>

</div>


<div class="credit">created by <span>Sanket Prajapati </span> and <span>his group</span><br>Copyright © 2022 | all rights reserved</div>


</section>
<script>
    console.log("hiiiiiiii");

    document.getElementById('mbar').addEventListener("click",()=>{
   document.querySelector('.navbar').classList.toggle('navbargo');
   
    });

//     document.getElementById('mcross').addEventListener("click",()=>{
//    document.querySelector('.navbar').style.display = 'none';
//     });
    

</script>
<script src="js\jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="js\bootstrap.min.js"></script>
<script src="js\actions.js"></script>
<!--okzoom Plugin-->
<script src="js/okzoom.min.js" type="text/javascript"></script>
<!--owl carousel plugin-->
<script type="text/javascript" src="js/owl.carousel.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<script>
     


     AOS.init({
        offset: 300,
        duration: 1000,
    });



    const readMoreBtn = document.querySelector(".read-more-btn");
const text = document.querySelector(".text");

readMoreBtn.addEventListener("click", (e) => {
  text.classList.toggle("show-more");
  if (readMoreBtn.innerText === "Read More") {
    readMoreBtn.innerText = "Read Less";
  } else {
    readMoreBtn.innerText = "Read More";
  }
});
/*let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    navbar.classList.remove('active');
   
}

var preloader= document.getElementById('loading');
function myfunction(){
    preloader.style.display= 'none';
   
}  */
    $(document).ready(function(){

        $('#product-img').okzoom({
            width: 200,
            height: 200,
            scaleWidth: 800
        });

        $('.banner-carousel').owlCarousel({
            loop: true,
            margin: 0,
            responsiveClass: true,
            navText : ["",""],
            responsive: {
                0: {
                    items: 1,
                    nav: true

                },
                600: {
                    items: 1,
                    nav: true
                },
                1000: {
                    items: 1,
                    nav: true,
                    loop: false,
                    margin: 10
                }
            }
        });

        $('.popular-carousel').owlCarousel({
            loop: true,
            margin: 0,
            responsiveClass: true,
            navText : ["",""],
            responsive: {
                0: {
                    items: 1,
                    nav: true

                },
                600: {
                    items: 2,
                    nav: true
                },
                800: {
                    items: 4,
                    nav: true
                },
                1000: {
                    items: 5,
                    nav: true,
                    loop: false,
                    margin: 10
                }
            }
        });

        $('.latest-carousel').owlCarousel({
            loop: true,
            margin: 0,
            responsiveClass: true,
            navText : ["",""],
            responsive: {
                0: {
                    items: 1,
                    nav: true

                },
                600: {
                    items: 2,
                    nav: true
                },
                800: {
                    items: 3,
                    nav: true
                },
                1000: {
                    items: 4,
                    nav: true,
                    loop: false,
                    margin: 5
                }
            }
        });
    });

</script>
<script src="js/script.js">
</script>

</body>
</html>