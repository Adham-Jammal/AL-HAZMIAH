let preloader = document.getElementById("preloader");
if (preloader) {
    window.addEventListener("load", () => {
        preloader.remove();
    });
}

window.addEventListener("load", () => {
    x = document.querySelectorAll('.links a')
    for( let i = 1 ; i < x.length  ; i++){
        x[i].addEventListener('click' , () => {
            document.querySelector('.burger').click()
        })
    }
    AOS.init({
        duration: 1000,
        easing: "ease-in-out",
        once: true,
        mirror: false,
    });
});

$(".vision-carousel").owlCarousel({
    margin : 10,
    loop: true,
    rtl : true,
    autoplay: true,
    autoplaySpeed: 1000,
    autoplayTimeout: 6000,
    dots: false,
    smartSpeed: 1000,
    lazyLoad: true,
    nav: true,
    navText : ["","<i class='fa fa-chevron-left'></i>"],
    responsive:{
        400:{
            items:1,
        },
        768:{
            items:3,
        },
    }

  });
  $(".message-carousel").owlCarousel({
    margin : 20,
    loop: true,
    rtl : true,
    autoplay: true,
    autoplaySpeed: 1000,
    autoplayTimeout: 6000,
    dots: false,
    smartSpeed: 1000,
    lazyLoad: true,
    nav: false,
    navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
    responsive:{
        400:{
            items:2,
        },
        768:{
            items:3,
        },
        1000:{
            items:4,
        },

    }
  });
  $(".message-2-carousel").owlCarousel({
    items:1,
    margin : 10,
    loop: true,
    rtl : true,
    autoplay: false,
    autoplaySpeed: 1000,
    autoplayTimeout: 6000,
    dots: false,
    smartSpeed: 1000,
    lazyLoad: true,
    nav: false,
    navText : ["","<i class='fa fa-chevron-right'></i>"],
    responsive:{
        400:{
            items:1,
        },
        768:{
            items:1,
        },
    }

  });

  $(".team-carousel").owlCarousel({
    margin : 10,
    loop: true,
    rtl : true,
    autoplay: true,
    autoplaySpeed: 1000,
    autoplayTimeout: 6000,
    dots: false,
    smartSpeed: 1000,
    lazyLoad: true,
    responsive:{
        400:{
            items:1,
        },
        768:{
            items:5,
        },
    }
  });

  $(".partners-slider").owlCarousel({
    items: 5,
    loop: true,
    rtl : true,
    autoplay: true,
    autoplaySpeed: 1000,
    autoplayTimeout: 6000,
    dots: false,
    smartSpeed: 1000,
    lazyLoad: true,
    nav: false,
    responsive: {
        0: {
            items: 1,
            nav: false,
        },
        600: {
            items: 3,
            nav: false,
        },
        1000: {
            items: 5,
        },
    },
  });
  const observer = lozad(); // lazy loads elements with default selector as '.lozad'
  observer.observe();

// Mail
let inputs = document.querySelectorAll('.input'),
    sendBtn = document.getElementById("submit"),
    fullName = document.getElementById("name"),
    email = document.getElementById("email"),
    subject = document.getElementById("subject"),
    phone = document.getElementById("phone"),
    message = document.getElementById("message");
const validateEmail = (email) => {
    var regex =
        /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return regex.test(String(email).toLowerCase());
};
sendBtn.addEventListener("click", (e) => {
    e.preventDefault();
    flag = 0;

    if (fullName.value === "") {
        flag--;
        fullName.style = "border : 1px solid #f00";
    } else {
        flag++;
        fullName.style = "border : 1px solid #C4C4C4";
    }
    if (!validateEmail(email.value)) {
        flag--;
        email.style = "border : 1px solid #f00";
    } else {
        flag++;
        email.style = "border : 1px solid #C4C4C4";
    }
    if (subject.value === "") {
        flag--;
        subject.style = "border : 1px solid #f00";
    } else {
        flag++;
        subject.style = "border : 1px solid #C4C4C4";
    }
    if (phone.value.length < 10) {
        flag--;
        phone.style = "border : 1px solid #f00";
    } else {
        flag++;
        phone.style = "border : 1px solid #C4C4C4";
    }
    if (message.value === "") {
        flag--;
        message.style = "border : 1px solid #f00";
    } else {
        flag++;
        message.style = "border : 1px solid #C4C4C4";
    }

    if (flag == 5)
        Email.send({
            Host: "smtp.elasticemail.com",
            Username: "alhazmia.info@gmail.com",
            Password: "55B9D38B964519A6D4789CFB8712A40C3886",
            To: "Project@alhazmia.com",
            From: "alhazmia.info@gmail.com",
            Subject: " Alhazmia Form ",
            Body: `Name : ${fullName.value} <br>
                   Email : ${email.value} <br>
                   subject : ${subject.value}<br>
                   phone : ${phone.value} <br>
                   Message : ${message.value}<br>
                   `,
        }).then(
            Swal.fire({
                icon: "success",
                title: "تم الإرسال بنجاح",
                text: "سنقوم بمراجعة رسالتكم بأقرب وقت ممكن",
                confirmButtonText: "إغلاق",
                closeOnConfirm: false,
                closeOnCancel: false,
            })
        ).then(
            inputs.forEach((input) => { input.value = '' })
        );
});
