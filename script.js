
// const axios = require('axios');

async function showData() {
  let nom = document.getElementById('nom');
  alert('ok');
  // return;
  // console.log(nom);
  params = {
    link: nom.value,
  }

  let res = await axios.post('http://getsheet.p2m.ma/public/api/readSheet', params);

  console.log(res.data);
}