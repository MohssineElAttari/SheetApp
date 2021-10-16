

// const axios = require('axios');

async function showData() {
    let nom = document.getElementById('nom');
// console.log(nom);
    params = {
        link: nom.value,
        age:
      }

    let res = await axios.post('http://localhost:8000/api/readSheet/', params);

    console.log(res.data);
}