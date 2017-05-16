function clickLogout()
{
    "use strict";
    if (document.getElementById("logout01").style.visibility === 'hidden' || document.getElementById("logout01").style.visibility === "")
    {
        document.getElementById("logout01").style.visibility = 'visible';
    } else
    {
        document.getElementById("logout01").style.visibility = 'hidden';
    }
}

}

