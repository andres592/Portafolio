

//carrusel
$(document).ready(function () {
  $('.carrusel').slick({
    autoplay: true,
    autoplaySpeed: 4000,
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 2,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1080,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  $('.slider').slick({
    autoplay: true,
    autoplaySpeed: 2000,
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 6,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1080,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  $('.carrusel-portal').slick({
    dots: false,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    autoplay : true
  });

});



// const img = document.querySelectorAll(".clothes-img");

// img.forEach(function (element) {
//   element.addEventListener("click", over);
// });

// function over() {
//   const container = this.parentElement;
//   const imageUrl = getBackgroundImageUrl(container);

//   if (imageUrl) {
//     const nuevaImagen = document.createElement("img");
//     nuevaImagen.src = imageUrl;
//     nuevaImagen.classList.add("foto-overlay");

//     const overlay = document.createElement("div");
//     overlay.classList.add("overlay-fotografia");

//     overlay.appendChild(nuevaImagen);
//     document.body.appendChild(overlay);

//     const cerrarModal = document.createElement("P");
//     cerrarModal.textContent = "X";
//     cerrarModal.classList.add("btnCerrar");
//     cerrarModal.onclick = function () {
//       overlay.remove();
//     };

//     overlay.appendChild(cerrarModal);

//     const body = document.querySelector("body");
//     body.appendChild(overlay);
//   }
// }

// function getBackgroundImageUrl(element) {
//   const style = window.getComputedStyle(element);
//   const backgroundImage = style.getPropertyValue("background-image");
//   if (backgroundImage && backgroundImage !== "none") {
//     const imageUrl = backgroundImage.slice(4, -1).replace(/["']/g, "");
//     return imageUrl;
//   } else {
//     return null;
//   }
// }