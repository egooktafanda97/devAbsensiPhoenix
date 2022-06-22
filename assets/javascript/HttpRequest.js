const reqPost = async (urls, data, response) => {
  const post = await axios
    .post(urls, data, {
      headers: { Authorization: "Bearer " + sessionStorage.getItem("_token") },
    })
    .catch((err) => {
      response(err.response.data);
    });
  if (post != undefined) {
    if (post.status == 200) {
      response(post);
    }
  }
};

const reqGet = async (urls, response) => {
  const post = await axios
    .get(urls, {
      headers: { Authorization: "Bearer " + sessionStorage.getItem("_token") },
    })
    .catch((err) => {
      response(err.response.data);
    });
  if (post != undefined) {
    if (post.status == 200) {
      response(post);
    }
  }
};
