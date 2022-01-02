
let slide = document.querySelectorAll('.card .background-image .background-image-left .in');
let index = 0;

function next()
{
    slide[index].classList.remove('active');
    index= (index+1) % slide.length;
    slide[index].classList.add('active');
}
function prev()
{
    slide[index].classList.remove('active');
    index= (index - 1 + slide.length ) % slide.length;
    slide[index].classList.add('active');
}

