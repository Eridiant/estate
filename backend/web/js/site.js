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

    if (document.querySelector('.field-district-polygon')) {
        let dp = document.querySelector('#district-polygon');
        dp.addEventListener('input', (e) => {
            let input = dp.value;

            if (input.indexOf('<coordinates>') !== -1) {
                const startTag = '<coordinates>';
                const endTag = '</coordinates>';

                const startIndex = input.indexOf(startTag) + startTag.length;
                const endIndex = input.indexOf(endTag, startIndex);

                input = input.substring(startIndex, endIndex).trim();
            }

            const lines = input.split('\n');
            let output = [];

            if (input.indexOf('lng') !== -1 || input.trim() == '') {
                if (input.includes(' ') || input.includes('\n')) {
                    input = input.replace(/[\s-\n]/g, '');

                    dp.value = input;
                }
                return;
            }

            lines.forEach(line => {
                const parts = line.split(',');

                if (parts.length >= 2 && parseInt(parts[2]) !== 1) {
                    const lng = parseFloat(parts[0]);
                    const lat = parseFloat(parts[1]);
                    output.push({ lng, lat });
                }
            });

            // console.log(output);
            output = JSON.stringify(output, null);

            dp.value = output;
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