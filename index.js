
    window.onload= defilImg 
    current_img = 0;
    arrImg = ['5.jpg','2.jpg','3.jpg','4.jpg']
     
     
    function defilImg(){
      if(current_img == arrImg.length)
      current_img = 0;
      document.getElementById('animationphoto').src = arrImg[current_img++];
      window.setTimeout('defilImg()',2500);
    }
