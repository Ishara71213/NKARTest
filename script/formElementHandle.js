let visibleBtn = document.getElementById("visibleIcon");
let passwordInput = document.getElementById("password");
let confirmPasswordInput = document.getElementById("confirmPassword");

function togleVisibility() {
  if (passwordInput.type === "text") {
    passwordInput.setAttribute("type", "password");
    confirmPasswordInput.setAttribute("type", "password");
    visibleBtn.classList.remove("visiblity");
  } else {
    passwordInput.setAttribute("type", "text");
    confirmPasswordInput.setAttribute("type", "text");
    visibleBtn.classList.add("visiblity");
  }
}

let addImageInputElem = document.getElementById("addImageInput");
let addImageTextElem = document.getElementById("addImageText");
let addImageElem = document.getElementById("addImage");

let addImageBtnElme = document.getElementById("addImageBtn");

function fileUpload() {
  console.log("haihiuhais");
  addImageInputElem.click();
}

addImageInputElem.addEventListener("change", updateImageDisplay);

const fileTypes = [
  "image/apng",
  "image/bmp",
  "image/gif",
  "image/jpeg",
  "image/pjpeg",
  "image/png",
  "image/svg",
  "image/tiff",
  "image/webp",
  "image/x-icon",
];

function validFileType(file) {
  return fileTypes.includes(file.type);
}

function updateImageDisplay() {
  addImageElem.classList.add("displayNone");
  addImageTextElem.classList.add("imageName");
  const curFiles = addImageInputElem.files[0];
  const fileName = curFiles.name;

  console.log(validFileType(curFiles));

  if (validFileType(curFiles)) {
    addImageTextElem.innerText = fileName;
    addImageTextElem.classList.remove("imageNameErr");
    addImageBtnElme.classList.remove("fileUploadContainerError");
  } else {
    addImageTextElem.innerText = "Invalid File type, Try again";
    addImageTextElem.classList.add("imageNameErr");
    addImageBtnElme.classList.add("fileUploadContainerError");
  }

  console.log(curFiles);
}

// addImageInputElem.addEventListener("change", updateImageDisplay);

//   addImageTextElem.innerHTML = fileName[fileName.length - 1];
//   document.myForm.submit();
//   e.preventDefault();
