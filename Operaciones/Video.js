var myVideo = document.getElementById("video1");
function playPause() { 
    if (myVideo.paused) 
      myVideo.play(); 
    else 
      myVideo.pause(); 
  } 
  
  function makeNormal() { 
      myVideo.width = 560; 
  } 

  function makeSmall() { 
    myVideo.width = 420; 
    } 

  function makeVerySmall() { 
      myVideo.width = 320; 
  } 
  
  

 