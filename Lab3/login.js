function clickLogin()
{
    "use strict";
    if (document.getElementById("log01").style.visibility === 'hidden' || document.getElementById("log01").style.visibility === "")
    {
        if (document.getElementById("form01").style.visibility === 'visible')
        {
            document.getElementById("form01").style.visibility = 'hidden';
        }
        document.getElementById("log01").style.visibility = 'visible';
    } else
    {
        document.getElementById("log01").style.visibility = 'hidden';
    }
}

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

function clickRegister()
{
    "use strict";

    if (document.getElementById("form01").style.visibility === 'hidden' || document.getElementById("form01").style.visibility === "")
    {
        document.getElementById("form01").style.visibility = 'visible';
        document.getElementById("log01").style.visibility = 'hidden';
    } else
    {
        document.getElementById("form01").style.visibility = 'hidden';
    }
}

