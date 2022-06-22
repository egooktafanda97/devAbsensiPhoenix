const HttpRequestGet = async (urls, response) => {
  const up = await axios
    .get(urls, {
      headers: { Authorization: "Bearer " + sessionStorage.getItem("_token") },
    })
    .catch((err) => {
      swal({
        title: "Ma'af?",
        text: "untuk kemanan sistem, kami membatasi waktu login anda , sekarang session anda telah habis & silahkan login kembali",
        icon: "warning",
        closeOnClickOutside: false,
        showConfirmButton: false,
        showCancelButton: false,
        buttons: "Login",
      }).then((willDelete) => {
        if (willDelete) {
          window.location.href = site_url + "Login";
        } else {
          return false;
        }
      });
    });
  if (up != undefined) {
    if (up.status == 200) {
      response(up.data);
    }
  }
};

HttpRequestGet(site_url + "engine/api/auth/login-checks", (res) => {});
