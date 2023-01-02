function validation()
{
    if(document.frm.email.value=="")
    {
        alert('Please enter your email Address')
        document.frm.email.focus();
        return false;
    }
    if(document.frm.pass.value=="")
    {
        alert('Please enter your Password')
        document.frm.pass.focus();
        return false;
    }
}