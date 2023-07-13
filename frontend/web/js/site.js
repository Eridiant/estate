document.addEventListener('DOMContentLoaded', () => {
    if (document.querySelector('#test')) {
        document.querySelector('.projects-switch').addEventListener('click', (e) => {
            e.preventDefault();
            let target = e.target;
            if (target.closest('a')) {
                // target = target.closest('a');
                // console.log('target', target);
                ajaxRequest('site/test', {'options':target.closest('a').dataset.type})
                    .then(response => {
                        if (JSON.parse(response)) {
                            console.log('response', document.querySelector('#test1'));

                            document.querySelector('#test1').innerHTML = JSON.parse(response);

                            var prj = new Swiper("#test1 .projects-swiper", {
                                // slidesPerView: "auto",
                                slidesPerView: 3,
                                // centeredSlides: true,
                                spaceBetween: 35,
                                // autoHeight: true,
                                loop: true,
                                // initialSlide: 1,
                                // dynamicBullets: true,
                                // watchOverflow: true,
                                // observer: true,
                                // observeParents: true,
                                // observeSlideChildren: true,
                                pagination: {
                                    el: ".swiper-pagination",
                                    clickable: true,
                                },
                                navigation: {
                                    nextEl: ".projects-next",
                                    prevEl: ".projects-prev",
                                },
                                breakpoints: {
                                    1024: {
                                        slidesPerView: 3,
                                        // spaceBetween: 35,
                                    },
                                    768: {
                                        slidesPerView: 2,
                                    },
                                    300: {
                                        slidesPerView: 1,
                                        // centeredSlides: true,
                                        // slidesPerView: "auto",
                                    },
                                },
                            });
                            return;
                        }

                });
            }
            
            // if (target.tagName !== 'a') return;
            // document.querySelector('.projects-switch a').dataset.type = e.target.dataset.type;
            // document.querySelector('.projects-switch a').click();
            // document.querySelector('.projects-switch a').dataset.type;
        
        });
        document.querySelector('.projects-switch a').dataset.type;
    }
})

function ajaxRequest(cntr, rqst) {
    // console.log(wrap.dataset.id);
    return new Promise((succeed, fail) => {
        // console.log(wrap.dataset.id);
        let quizRequest = new XMLHttpRequest();
        quizRequest.open("POST", `/${cntr}`, true);
        quizRequest.setRequestHeader('Content-Type', 'application/json');

        quizRequest.setRequestHeader('X-CSRF-Token', document.querySelector('meta[name="csrf-token"]').content);
        quizRequest.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        quizRequest.onload = function () {
            if (quizRequest.readyState == XMLHttpRequest.DONE && quizRequest.status == 200) {
                succeed(quizRequest.response);
            } else if (quizRequest.status == 400) {
                // throw Error('Ошибка: ' + quizRequest.status);
                fail(new Error(`Request failed: ${quizRequest.status}`));
            } else {
                // throw Error('Ошибка, что-то пошло не так.');
                fail(new Error(`Request failed: ${quizRequest.status}`));
            }
        }
        quizRequest.onerror = function () {
            console.log(onerror)
        };

        // let data = {};
        // let data = { 'flat':i };

        // quizRequest.send('survey_id=2&parent_id=0');
        // quizRequest.send(JSON.stringify(data));
        quizRequest.send(JSON.stringify(rqst));
    })
}