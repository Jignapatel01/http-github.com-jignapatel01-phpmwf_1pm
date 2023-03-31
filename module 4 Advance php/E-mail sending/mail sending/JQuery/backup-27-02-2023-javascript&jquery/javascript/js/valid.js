function test()
{
    if(document.frm.name.value=="")
    {
        // alert('Please Enter your name')
        document.getElementById("error").innerHTML="Please eneter firstName *";
        document.frm.name.focus();
        return false;
    }
    if(document.frm.fname.value=="")
    {
        alert('Please Enter your firstname')
        document.frm.fname.focus();
        return false;
    }
    
    if(document.frm.lname.value=="")
    {
        alert('Please Enter your lastname')
        document.frm.lname.focus();
        return false;
    }
}