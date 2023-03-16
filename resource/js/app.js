const $ = function () {
    for (let item of arguments) {
        var elements = document.querySelectorAll(item);
    }
    return elements.length == 1 ? elements[0] : elements;
}
function activeCkeditor($) {
    if (Object.keys($).length == 0) {
        CKEDITOR.replace($);
    } else {
        $.forEach(element => {
            CKEDITOR.replace(element);
        });
    }
}
// function preview() {
//     $('#imgTmp').src = URL.createObjectURL(event.target.files[0])
// }
function preview($) {
    $.src = URL.createObjectURL(event.target.files[0])
}