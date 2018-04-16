<!DOCTYPE HTML>
<html>

<head>
      <style>
          .maintest{
      border: solid black 0px;
      border-bottom: solid 2px #00040c;
	height:120px;
	width:400px;
	position:absolute;
	top:0px;
	left:0px;
    transform: scale(0.9);
    display: block;
}
.sign{
    border: solid black 0px;
	height:120px;
	width:120px;
	position:absolute;
	top:0px;
	left:0px;
}
.test-sign{
   border: solid black 0px;
	height:50px;
	width:50px;
	position:absolute;
	top:34px;
	left:0px;
}
 .test-num{
    border: solid #00040c 2px;
	height:50px;
	width:50px;
	position:absolute;
	top:4px;
	left:80px;
    border-radius:50%;
 }

input[type="radio"] {
  position: absolute;
  visibility: hidden;
}

label {
border: 2px solid #00040c;
  display: block;
  width: 50px;
  height: 30px;
  background-color: #fff;
  cursor: pointer;
  border-radius: 1em;
}

input:checked + label {
       background-color:#00040c;
}
.test{
	height:40px;
	width:300px;
	z-index:30;
	position:absolute;
	top:60px;
	left:80px;

}
.tic1,.tic2, .tic3, .tic4, .tic5{
    position:absolute;
	top:5px;
}
.tic1{

	right:0px;
}
.tic2{

	right:60px;
}
.tic3{

   	right:120px;
}
.tic4{

	right:180px;
}
.tic5{
   right:240px;
}

      </style>
</head>

<body>
     <div id="maintest" class="maintest">
            <div id="sign" class="sign">
                 <img src="./img/test-sign.png" id="test-sign" class="test-sign">
                 <div id="test-num" class="test-num">
				 
				 </div>
            </div>
            <div class="test">
				<form>
            	<div class="tic1" class="check">
            		<input id="tic1-<?php echo $i; ?>" type="radio" name="test"/>
            		<label for="tic-<?php echo $i; ?>"  />
            	</div>
            	<div class="tic2" class="check">
            		<input id="tic2-<?php echo $i; ?>" type="radio" name="test"/>
            		<label for="tic2-<?php echo $i; ?>" />
            	</div>
            	<div class="tic3" class="check">
            		<input id="tic3-<?php echo $i; ?>" type="radio" name="test"/>
            		<label for="tic3-<?php echo $i; ?>" />
            	</div>
            	<div class="tic4" class="check">
            		<input id="tic4-<?php echo $i; ?>" type="radio" name="test"/>
            		<label for="tic4-<?php echo $i; ?>" />
            	</div>
            	<div class="tic5"class="check">
            		<input id="tic5-<?php echo $i; ?>" type="radio" name="test" />
            		<label for="tic5-<?php echo $i; ?>" />
				</form>
            	</div>
            </div>
         </div>

</body>
</html>