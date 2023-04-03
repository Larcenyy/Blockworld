window.addEventListener("DOMContentLoaded", (event) => {
    let playButton = document.getElementById("play-button");

    if (playButton){
        let showImg = document.getElementById("showImg");

        let iframe = document.createElement("iframe");
        iframe.setAttribute("src", videourl);
        iframe.setAttribute("width", "900");
        iframe.setAttribute("height", "700");
        iframe.setAttribute("frameborder", "0");
        iframe.setAttribute("allowfullscreen", "");

        playButton.addEventListener("click", function () {
            showImg.style.display = 'none';
            this.parentNode.replaceChild(iframe, this);
        });
    }

    document.querySelectorAll('table').forEach(function (event){
        event?.querySelector(".table-dark")?.classList.remove('table-dark')
    })


    addAnim(document.querySelector("#content_litebans h2"))

    document.getElementById("content_shop")?.querySelectorAll(".payment-method")?.forEach( (event) => {
        console.log(event)
        addBox(event, [
            "card",
            "cursorAnim"
        ])
    })

});

window.addEventListener('load', (event) => {
    fadeOutEffect()
});

function fadeOutEffect() {
    let fadeTarget = document.querySelector(".page-loader");
    let fadeEffect = setInterval(function () {
        if (!fadeTarget.style.opacity) {
            fadeTarget.style.opacity = 1;
        }
        if (fadeTarget.style.opacity > 0) {
            fadeTarget.style.opacity -= 0.1;
            fadeTarget.style.zIndex = -22;

        } else {
            clearInterval(fadeEffect);
        }
    }, 200);
}

AOS.init();

const navbar = document.querySelector(".navIndex");

const maxScroll = document.querySelector(".home-background")? 400 : 200 ;


window.addEventListener('scroll', () => {
    const posScroll = window.scrollY;

    if (posScroll < maxScroll) {
        navbar.classList.remove("navActive");
    } else {
        navbar.classList.add("navActive");
    }

});

window.addEventListener("DOMContentLoaded", (event) => {
    particlesJS("particles-js", {
        "particles": {
            "number": {"value": 160, "density": {"enable": true, "value_area": 800}},
            "color": {"value": "#ffffff"},
            "shape": {
                "type": "circle",
                "stroke": {"width": 0, "color": "#000000"},
                "polygon": {"nb_sides": 5},
                "image": {"src": false, "width": 100, "height": 100}
            },
            "opacity": {
                "value": 1,
                "random": true,
                "anim": {"enable": true, "speed": 1, "opacity_min": 0, "sync": false}
            },
            "size": {"value": 3, "random": true, "anim": {"enable": false, "speed": 4, "size_min": 0.3, "sync": false}},
            "line_linked": {"enable": false, "distance": 150, "color": "#ffffff", "opacity": 0.4, "width": 1},
            "move": {
                "enable": true,
                "speed": 1,
                "direction": "none",
                "random": true,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {"enable": false, "rotateX": 600, "rotateY": 600}
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {"enable": true, "mode": "bubble"},
                "onclick": {"enable": true, "mode": "repulse"},
                "resize": true
            },
            "modes": {
                "grab": {"distance": 400, "line_linked": {"opacity": 1}},
                "bubble": {"distance": 250, "size": 0, "duration": 2, "opacity": 0, "speed": 3},
                "repulse": {"distance": 400, "duration": 0.4},
                "push": {"particles_nb": 4},
                "remove": {"particles_nb": 2}
            }
        },
        "retina_detect": true
    })
});


function addBox (select, addclass = '') {
    if (select && select.classList) {
        // let classList = "borderType" `${...addclass}`
        select?.classList?.add(...addclass, "borderType");
    }
}

// document.querySelectorAll('div.card-body.text-center').forEach(function (event){
//     if (event){
//         addBox(event);
//     }
// })

function addAnim (select) {
   select?.classList.add("text-center", "line-1", "anim-typewriter");
}

document.querySelectorAll('h1').forEach(function (event){
    if (event){
        addAnim(event);
    }
})

const btnPrimary = document.querySelectorAll('a')
for (let i = 0; i < btnPrimary.length; i++){
    if (btnPrimary[i].classList == "btn btn-primary"){
        btnPrimary[i].classList.add("btnJoin");
    }
}



