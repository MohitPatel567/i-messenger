var temp=0;
function hidden_fun()
{
          var disp = document.getElementById("uprofile");
          if(temp==0)
           {
                disp.style.display="none";
                temp=1;
            }
            else 
            {
                disp.style.display="inline-block";
                temp=0;
            }
}
function upload_status_win()
{
            document.getElementById("windows").style.display = "block";
            document.getElementById("upload_status").style.display = "block";
}
function close_windows()
{
            document.getElementById("windows").style.display = "none";
            document.getElementById("upload_status").style.display = "none";
}