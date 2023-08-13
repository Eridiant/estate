document.addEventListener("DOMContentLoaded", () => {
    // alert("Hello World!");
    if (document.querySelector('.gallery')) {
        let gallery = document.querySelector('.gallery');
        let pjGallery = document.querySelector('#project-gallery');
        let deletefiles = document.querySelector('#project-deletefiles');

        gallery.addEventListener('click', (e) => {
            // console.log('e.target');
            let img = [];
            let del = [];
            if (e.target.closest('.gallery-check input')) {
                gallery.querySelectorAll('.gallery-check input[type="checkbox"]:checked').forEach(element => {
                    img.push(element.dataset.img);
                });
                pjGallery.value = img.toString();
            }
            if (e.target.closest('.gallery-delete input')) {
                gallery.querySelectorAll('.gallery-delete input[type="checkbox"]:checked').forEach(element => {
                    del.push(element.dataset.img);
                });
                deletefiles.value = del.toString();
            }
            
        })
    }
})



function request(cntr, rqst) {
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

        quizRequest.send(JSON.stringify(rqst));
    })
}