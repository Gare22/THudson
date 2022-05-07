const style = document.createElement('style');
style.innerHTML = `
.gallery-items:first-child{
    animation: bannermove ` + getGalleryWidth()/125 +`s linear infinite;
}


@keyframes bannermove {
    0% {
        margin-left: 0px;
    }
    100% {
        margin-left: -`+ getGalleryWidth() +`px;
    }
}`

function getGalleryWidth(){
    var children = document.getElementById('home-gallery').children;
    var totalWidth = 0;

    for (var i = 0; i < children.length-2; i++) {
        totalWidth += parseInt(children[i].offsetWidth, 10);
    }

    return totalWidth;
}

document.head.appendChild(style);