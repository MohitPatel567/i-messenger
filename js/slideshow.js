var index=1;
var temp=1;
function showslide()
{
      var x = document.getElementsByClassName("slider");
      var y = document.getElementsByClassName("curr_btn");
      x[temp-1].style.display="none";
      y[temp-1].style.backgroundColor="white";
      if(index>x.length)
      {
            index=1;
      }
      if(index<1)
      {
            index = x.length;
      }
      x[index-1].style.display="block";
      y[index-1].style.backgroundColor="black";
      temp=index;
      index++;
      setTimeout(showslide, 2000);
 }
function currpos(n)
{
      index = n;
      showslide();
}