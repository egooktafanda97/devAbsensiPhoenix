const { BrowserRouter, Switch } = ReactRouterDOM;
const Link = ReactRouterDOM.Link;
const Route = ReactRouterDOM.Route;
const Router = ReactRouterDOM.Browser;

// Component ============================================================
// -> riwayat
const Appbar = mui.react.Appbar,
  Button = mui.react.Button,
  Container = mui.react.Container,
  Panel = mui.react.Panel;

const Profile = () => {
  const [img, setImg] = React.useState();
  const onInputChange = (ev) => {
    if (e.target.files.length) {
      // start file reader
      const reader = new FileReader();
      reader.onload = (e) => {
        if (e.target.result) {
          // create new image
          let img = document.createElement("img");
          img.id = "image";
          img.src = e.target.result;
          // clean result before
          //   result.innerHTML = "";
          // append new image
          setImg(img);
          result.appendChild(img);
          // show save btn and options
          //   save.classList.remove("hide");
          //   options.classList.remove("hide");
          // init cropper
          cropper = new Cropper(img);
        }
      };
      reader.readAsDataURL(e.target.files[0]);
    }
  };
  return (
    <div>
      <Panel
        style={{
          borderRadius: "5px",
        }}>
        <div class='row'>
          <div class='col-md-3'>
            <div class='foto-coloms'>
              <div class='avatar-upload'>
                <div class='avatar-edit'>
                  <input
                    onChange={onInputChange}
                    type='file'
                    id='file-input'
                    accept='.png, .jpg, .jpeg'
                  />
                  <label htmlFor='file-input' />
                </div>
                <div class='avatar-preview'>
                  <div
                    id='imagePreview'
                    style={{
                      backgroundImage: `url(${window.base_url}/Assets/img/user/default.jpg`,
                    }}
                  />
                </div>
              </div>
            </div>
          </div>
          <div
            class='col-md-9'
            style={{
              display: "flex",
              alignItems: "center",
            }}>
            <h2>ok</h2>
          </div>
        </div>

        {/* testing */}
        <div class='box-2'>
          <div class='result'>
            {/* <img src={} style={{
                  width:"100%"
              }} /> */}
            {img}
          </div>
        </div>

        <div class='box-2 img-result hide'>
          <img class='cropped' src='' alt='' />
        </div>

        <div class='box'>
          <div class='options hide'>
            <label> Width</label>
            <input
              type='number'
              class='img-w'
              value='300'
              min='100'
              max='1200'
            />
          </div>

          <button class='btn save hide'>Save</button>

          <a href='' class='btn download hide'>
            Download
          </a>
        </div>
      </Panel>
    </div>
  );
};

// ---------------------------------------------------------------------
// ======================================================================

// =======================================================================
// ============= function ================================================
// =======================================================================

let result = document.querySelector(".result"),
  img_result = document.querySelector(".img-result"),
  img_w = document.querySelector(".img-w"),
  img_h = document.querySelector(".img-h"),
  options = document.querySelector(".options"),
  save = document.querySelector(".save"),
  cropped = document.querySelector(".cropped"),
  dwn = document.querySelector(".download"),
  upload = document.querySelector("#file-input"),
  cropper = "";

// on change show image with crop options
// upload.addEventListener("change", (e) => {});

// save on click
// save.addEventListener("click", (e) => {
//   e.preventDefault();
//   // get result to data uri
//   let imgSrc = cropper
//     .getCroppedCanvas({
//       width: img_w.value, // input value
//     })
//     .toDataURL();
//   // remove hide class of img
//   cropped.classList.remove("hide");
//   img_result.classList.remove("hide");
//   // show image cropped
//   cropped.src = imgSrc;
//   dwn.classList.remove("hide");
//   dwn.download = "imagename.png";
//   dwn.setAttribute("href", imgSrc);
// });

// =======================================================================

const RuterSwitch = () => {
  return (
    <Switch>
      <Route path='/' exact component={Profile} />
    </Switch>
  );
};
const App = () => (
  <BrowserRouter basename='/test'>
    <RuterSwitch />
  </BrowserRouter>
);

ReactDOM.render(<App />, document.querySelector("#app"));
