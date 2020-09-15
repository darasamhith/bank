<script>
var images = ["s5.jpg", "s6.jpg", "s2.jpg"];

var i = 1;
var max = images.length;

function changeImage(){
  document.getElementById("slider").src = images[i++];
  if(i==max){
    i=0;
  }
}

setInterval(function(){changeImage()}, 3000);

</script>

<p align="center"><img src="s5.jpg" class="img-responsive" width="100%" id="slider" align="center"></p>
