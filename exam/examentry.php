<!doctype html>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<style>
@keyframes anim{from{width:0px} to{width:600px;}}
.box{
width:600px;
overflow:hidden;
white-space:nowrap;/*this property makes text not to fall in next line until we get brake*/
animation-name:anim;
animation-duration:3s;
animation-timing-function:steps(100,end);
}
</style>
<div class="box">
Test completed.....
</div>
