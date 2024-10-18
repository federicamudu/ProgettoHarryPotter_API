let btnDetail = document.querySelectorAll('.btnDetail')
if(btnDetail){
    btnDetail.forEach(el => {
        el.addEventListener('click', function () {
            let scrolledPosition = localStorage.getItem('scrolledPosition')
            let scroll = window.scrollY
            localStorage.setItem('scrolledPosition', scroll)

        })
    })
    console.log(localStorage.getItem('scrolledPosition'));
}
