
peoplelist = document.querySelector(".people-list");

setInterval(() =>{
  let xhr = new XMLHttpRequest();
  xhr.open("GET", "php/people.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
          let dataPeople = xhr.response;
            peoplelist.innerHTML = dataPeople;
    }
  }
  xhr.send();
}, 500);

