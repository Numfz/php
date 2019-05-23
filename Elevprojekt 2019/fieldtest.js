function check(a, l) {
    if (checkField(a)) {
        if (checkField(l))
            return true;
        else
            return false;
    } else
        return false;
}


function checkField(f) {
    f = f.trim();
    if (f.length == 0 || f == "") {
        return false;
    } else {

        if (f.length > 15) {
            alert("För långt användarnamn eller lösenord,\nhögst 15 tecken är tillåtet.\nDu har använt " + f.length + " tecken.");
            return false;
        } else {

            if (  checkTecknet(f) )
            {
                  return true;
            }
            else
            {
                  return false;
            }


        }

    }
}

function checkTecknet(t)
{
    var patt = /[\s \\ \/ < >]/;
    var ut = t.match(patt);
    if (ut == null)
        return true;
    else
        alert("Du har använt tecken i användarnamnet eller i lösenordet som inte är tillåtna");

}
