  //for NavChat
  function openNav() {
      document.getElementById("mySidenavchat").style.top = "95px";
      document.getElementById("mySidenavchat").style.height = "470px";
      document.getElementById("mySidenavchat").style.width = "100%";
      document.getElementById("mySidenavchat").style.paddingTop = "0";
      document.getElementById("mySidenavchat").style.borderTop = " 2px solid black";
      document.getElementById("chat").style.borderRadius = " 50px 50px 1px 1px";
      document.getElementById("chat").style.backgroundColor = "green";
      closeNavpeople();
  }

  function closeNav() {
      document.getElementById("mySidenavchat").style.borderTop = " none";
      document.getElementById("mySidenavchat").style.height = "0";
      document.getElementById("mySidenavchat").style.width = "50%";
      document.getElementById("mySidenavchat").style.top = "35px";
      document.getElementById("mySidenavchat").style.paddingTop = "60px";
      document.getElementById("chat").style.borderRadius = " 1px 1px 50px 50px";
      document.getElementById("chat").style.backgroundColor = "rgb(245, 245, 245)";
  }
  //for NavPeople
  function openNavpeople() {
      document.getElementById("mySidenavpeople").style.borderTop = " 2px solid black";
      document.getElementById("mySidenavpeople").style.top = "94px";
      document.getElementById("mySidenavpeople").style.height = "470px";
      document.getElementById("mySidenavpeople").style.width = "100%";
      document.getElementById("mySidenavpeople").style.paddingTop = "0";
      document.getElementById("people").style.borderRadius = "50px 50px 1px 1px ";
      document.getElementById("people").style.backgroundColor = "green";
      closeNav();
  }

  function closeNavpeople() {
      document.getElementById("mySidenavpeople").style.borderTop = " none";
      document.getElementById("mySidenavpeople").style.height = "0";
      document.getElementById("mySidenavpeople").style.width = "50%";
      document.getElementById("mySidenavpeople").style.top = "34px";
      document.getElementById("mySidenavpeople").style.paddingTop = "60px";
      document.getElementById("people").style.borderRadius = " 1px 1px 50px 50px ";
      document.getElementById("people").style.backgroundColor = "rgb(245, 245, 245)";
  }

  //for NavEmoji
  function openEmoji() {
      document.getElementById("ListEmoji").style.bottom = "10px";
      document.getElementById("ListEmoji").style.left = "20px";
      document.getElementById("ListEmoji").style.width = "100%";
      document.getElementById("ListEmoji").style.height = "170px";
      document.getElementById("ListEmoji").style.padding = "15px";
      document.getElementById("ListEmoji").style.borderRadius = " 5px ";
      document.getElementById("ListEmoji").style.overflowY = " hidden ";
      document.getElementById("open").style.display = "none";
      document.getElementById("close").style.display = "block";
      openPeopleEmoji();
  }

  function closeEmoji() {
      document.getElementById("ListEmoji").style.bottom = "10px";
      document.getElementById("ListEmoji").style.left = "20px";
      document.getElementById("ListEmoji").style.width = "0%";
      document.getElementById("ListEmoji").style.height = "0px";
      document.getElementById("ListEmoji").style.padding = "0px";
      document.getElementById("ListEmoji").style.borderRadius = " 0px ";
      document.getElementById("open").style.display = "block";
      document.getElementById("close").style.display = "none";
  }

  //for Emoji People
  function openPeopleEmoji() {
      document.getElementById("EmojiPeople").style.top = "5px";
      document.getElementById("EmojiPeople").style.left = "0px";
      document.getElementById("EmojiPeople").style.width = "95%";
      document.getElementById("EmojiPeople").style.height = "135px";
      document.getElementById("EmojiPeople").style.paddingLeft = "20px";
      document.getElementById("EmojiPeople").style.borderRadius = " 5px ";
      document.getElementById("EmojiPeople").style.overflowY = " scroll ";
      document.getElementById("peopleEmoji").style.backgroundColor = "lightblue";
      CloseAnimalEmoji();
      CloseObjectEmoji();
      CloseDrinkEmoji();
  }

  function ClosePeopleEmoji() {
      document.getElementById("EmojiPeople").style.left = "0px";
      document.getElementById("EmojiPeople").style.width = "0%";
      document.getElementById("EmojiPeople").style.height = "0px";
      document.getElementById("EmojiPeople").style.paddingLeft = "0px";
      document.getElementById("EmojiPeople").style.borderRadius = " 0px ";
      document.getElementById("EmojiPeople").style.overflowY = " scroll ";
      document.getElementById("peopleEmoji").style.backgroundColor = "white";
  }
  //for Emoji Animal
  function openAnimalEmoji() {
      document.getElementById("EmojiAnimal").style.left = "0px";
      document.getElementById("EmojiAnimal").style.width = "95%";
      document.getElementById("EmojiAnimal").style.height = "130px";
      document.getElementById("EmojiAnimal").style.paddingLeft = "20px";
      document.getElementById("EmojiAnimal").style.borderRadius = " 5px ";
      document.getElementById("EmojiAnimal").style.overflowY = " scroll ";
      document.getElementById("animalEmoji").style.backgroundColor = "lightblue";
      ClosePeopleEmoji();
      CloseObjectEmoji();
      CloseDrinkEmoji();
      CloseCarEmoji();
  }

  function CloseAnimalEmoji() {
      document.getElementById("EmojiAnimal").style.top = "5px";
      document.getElementById("EmojiAnimal").style.left = "0px";
      document.getElementById("EmojiAnimal").style.width = "0%";
      document.getElementById("EmojiAnimal").style.height = "0px";
      document.getElementById("EmojiAnimal").style.padding = "0px";
      document.getElementById("EmojiAnimal").style.paddingLeft = "0px";
      document.getElementById("EmojiAnimal").style.borderRadius = " 0px ";
      document.getElementById("EmojiAnimal").style.overflowY = " scroll ";
      document.getElementById("animalEmoji").style.backgroundColor = "white";
  }
  //for Emoji Drink
  function openDrinkEmoji() {
      document.getElementById("EmojiDrink").style.left = "0px";
      document.getElementById("EmojiDrink").style.width = "95%";
      document.getElementById("EmojiDrink").style.height = "130px";
      document.getElementById("EmojiDrink").style.paddingLeft = "20px";
      document.getElementById("EmojiDrink").style.borderRadius = " 5px ";
      document.getElementById("EmojiDrink").style.overflowY = " scroll ";
      document.getElementById("drinkEmoji").style.backgroundColor = "lightblue";
      ClosePeopleEmoji();
      CloseObjectEmoji();
      CloseAnimalEmoji();
      CloseCarEmoji();
  }

  function CloseDrinkEmoji() {
      document.getElementById("EmojiDrink").style.top = "5px";
      document.getElementById("EmojiDrink").style.left = "0px";
      document.getElementById("EmojiDrink").style.width = "0%";
      document.getElementById("EmojiDrink").style.height = "0px";
      document.getElementById("EmojiDrink").style.padding = "0px";
      document.getElementById("EmojiDrink").style.paddingLeft = "0px";
      document.getElementById("EmojiDrink").style.borderRadius = " 0px ";
      document.getElementById("EmojiDrink").style.overflowY = " scroll ";
      document.getElementById("drinkEmoji").style.backgroundColor = "white";
  }
  //for Emoji Car
  function openCarEmoji() {
      document.getElementById("EmojiCar").style.left = "0px";
      document.getElementById("EmojiCar").style.width = "95%";
      document.getElementById("EmojiCar").style.height = "130px";
      document.getElementById("EmojiCar").style.paddingLeft = "20px";
      document.getElementById("EmojiCar").style.borderRadius = " 5px ";
      document.getElementById("EmojiCar").style.overflowY = " scroll ";
      document.getElementById("carEmoji").style.backgroundColor = "lightblue";
      ClosePeopleEmoji();
      CloseObjectEmoji();
      CloseAnimalEmoji();
      CloseDrinkEmoji();
  }

  function CloseCarEmoji() {
      document.getElementById("EmojiCar").style.top = "5px";
      document.getElementById("EmojiCar").style.left = "0px";
      document.getElementById("EmojiCar").style.width = "0%";
      document.getElementById("EmojiCar").style.height = "0px";
      document.getElementById("EmojiCar").style.padding = "0px";
      document.getElementById("EmojiCar").style.paddingLeft = "0px";
      document.getElementById("EmojiCar").style.borderRadius = " 0px ";
      document.getElementById("EmojiCar").style.overflowY = " scroll ";
      document.getElementById("carEmoji").style.backgroundColor = "white";
  }
  //for Emoji Object
  function openObjectEmoji() {
      document.getElementById("EmojiObject").style.left = "0px";
      document.getElementById("EmojiObject").style.width = "95%";
      document.getElementById("EmojiObject").style.height = "130px";
      document.getElementById("EmojiObject").style.paddingLeft = "20px";
      document.getElementById("EmojiObject").style.borderRadius = " 5px ";
      document.getElementById("EmojiObject").style.overflowY = " scroll ";
      document.getElementById("objectEmoji").style.backgroundColor = "lightblue";
      ClosePeopleEmoji();
      CloseAnimalEmoji();
      CloseDrinkEmoji();
      CloseCarEmoji();
  }

  function CloseObjectEmoji() {
      document.getElementById("EmojiObject").style.left = "0px";
      document.getElementById("EmojiObject").style.width = "0%";
      document.getElementById("EmojiObject").style.height = "0px";
      document.getElementById("EmojiObject").style.paddingLeft = "0px";
      document.getElementById("EmojiObject").style.borderRadius = " 0px ";
      document.getElementById("EmojiObject").style.overflowY = " scroll ";
      document.getElementById("objectEmoji").style.backgroundColor = "white";
  }

  //for display emoji
  function getEmoji(control) {
      document.getElementById('message').value += control.innerHTML;
  }