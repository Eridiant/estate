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