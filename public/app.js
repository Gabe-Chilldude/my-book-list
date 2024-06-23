const header = document.getElementById('header')

window.onscroll = function() {scrollHeader()}

function scrollHeader()  {
    if(document.documentElement.scrollTop > 2)  {
        header.classList.add('scroll_header')
    } else {
        header.classList.remove('scroll_header')
    }
}
