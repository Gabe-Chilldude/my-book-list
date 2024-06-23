const header = document.getElementById('header')

window.onscroll = function() {scrollHeader()}

function scrollHeader()  {
    if(document.documentElement.scrollTop > 5)  {
        header.classList.add('scroll_header')
    } else {
        header.classList.remove('scroll_header')
    }
}
