// Navigation
var navLinks = document.getElementById("navLinks");
var bars = document.getElementById("bars");

bars.onclick = function () {
    navLinks.classList.toggle("open");

    if (navLinks.classList.contains("open")) {
        bars.src = "img/close.png";
    }
    else {
        bars.src = "img/bars.png";
    }
}


// Practice code for upload also...

// function showPreview(event) {
//     if (event.target.files.length > 0) {
//         var src = URL.createObjectURL(event.target.files[0]);
//         var preview = document.getElementById("dummy");
//         preview.src = src;
//         preview.style.display = "block";
//     }
// }

// function showPreview2(event2) {
//     if (event2.target.files.length > 0) {
//         var src1 = URL.createObjectURL(event2.target.files[0]);
//         var preview2 = document.getElementById("dummy2");
//         preview2.src = src1;
//         preview2.style.display = "block";
//     }
// }


// Supposed code for upload - I don't really know how to upload an image using javascript.

// var input = document.getElementById("file");
// var output = document.getElementsByClassName("preview");
// let imagesArray = [];

// input.addEventListener("change", () => {
//     var file = input.files;
//     imagesArray.push(file[0]);
//     displayImages();
//   })

// function displayImages() {
// let images = ""
// imagesArray.forEach((image, index) => {
//     images += `<div class="image">
//     <img src="${URL.createObjectURL(image)}" alt="image">
//     <span onclick="deleteImage(${index})">&times;</span>
//     </div>`
// })
// output.innerHTML = images;
// }

//   function deleteImage(index) {
//     imagesArray.splice(index, 1)
//     displayImages()
//   }