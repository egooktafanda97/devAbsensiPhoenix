const HttpRequestUpdate = async (urls, data, response) => {
  const up = await axios
    .post(urls, data, {
      headers: { Authorization: "Bearer " + sessionStorage.getItem("_token") },
    })
    .catch((err) => {
      $(".loading").fadeOut();
    });
  if (up != undefined) {
    if (up.status == 200) {
      response(up.data);
    }
  }
};

function dataURItoBlob(dataURI) {
  var byteString = atob(dataURI.split(",")[1]);
  var mimeString = dataURI.split(",")[0].split(":")[1].split(";")[0];

  var ab = new ArrayBuffer(byteString.length);
  var ia = new Uint8Array(ab);

  for (var i = 0; i < byteString.length; i++) {
    ia[i] = byteString.charCodeAt(i);
  }
  var blob = new Blob([ab], { type: mimeString });

  return blob;
}

// vars
let result = document.querySelector(".result"),
  img_result = document.querySelector(".img-result"),
  img_w = document.querySelector(".img-w"),
  img_h = document.querySelector(".img-h"),
  options = document.querySelector(".options"),
  save = document.querySelector("#SavesImage"),
  cropped = document.querySelector(".cropped"),
  upload = document.querySelector("#imageUpload");

var image = document.getElementById("image");
var cropBoxData;
var canvasData;
var cropper;

// on change show image with crop options
upload.addEventListener("change", (e) => {
  if (e.target.files.length) {
    // start file reader
    const reader = new FileReader();
    reader.onload = (e) => {
      $("#modal").modal(options);
      $("#image").attr("src", e.target.result);

      $("#modal")
        .on("shown.bs.modal", function () {
          cropper = new Cropper(image, {
            autoCropArea: 0.5,
            ready: function () {
              //Should set crop box data first here
              cropper.setCropBoxData(cropBoxData).setCanvasData(canvasData);
            },
          });
        })
        .on("hidden.bs.modal", function () {
          cropBoxData = cropper.getCropBoxData();
          canvasData = cropper.getCanvasData();
          cropper.destroy();
        });
    };
    reader.readAsDataURL(e.target.files[0]);
  }
});

// save on click
$("#SavesImage").click(function (e) {
  const id = $(this).data("id");
  e.preventDefault();
  $(".loading").fadeIn();
  // get result to data uri
  if (cropper != undefined && cropper != null && cropper != "") {
    let imgSrc = cropper
      .getCroppedCanvas({
        width: 300, // input value
      })
      .toDataURL();
    const blobs = dataURItoBlob(imgSrc);
    const myFile = new File([blobs], "image.jpg", {
      type: blobs.type,
    });

    const form_data = new FormData();
    form_data.append("id", id);
    form_data.append("image", myFile);
    HttpRequestUpdate(
      site_url + "engine/api/kantin/edit-img",
      form_data,
      (res) => {
        window.location.reload();
        $(".loading").fadeOut();
      }
    );

    cropper.destroy();
  } else {
    $(".loading").fadeOut();
  }
});
