var peopleList = [
    "https://goj2.com/wp-content/uploads/2019/01/zacSlider.png",
    "https://goj2.com/wp-content/uploads/2019/01/hughSlider.png",
    "https://goj2.com/wp-content/uploads/2019/01/jimmySlider.png",
    "https://goj2.com/wp-content/uploads/2019/01/melanieSlider.png",
    "https://goj2.com/wp-content/uploads/2019/01/mSlider.png",
    "https://goj2.com/wp-content/uploads/2019/01/troySlider.png",
    "https://goj2.com/wp-content/uploads/2019/01/chelseaSlider.png",
    "https://goj2.com/wp-content/uploads/2019/01/erikSlider.png",
    "https://goj2.com/wp-content/uploads/2019/01/hannahSlider.png",
    "https://goj2.com/wp-content/uploads/2019/01/mattSlider.png"
  ]
  var indexLength = peopleList.length;
  var currIndex = 0;
  document.getElementById("person").addEventListener("animationiteration", function() {
    document.getElementById("imgModule").src=peopleList[currIndex];
    if(currIndex < indexLength-1){
      currIndex++;
    }else{
      currIndex = 0;
    }
  }, false);