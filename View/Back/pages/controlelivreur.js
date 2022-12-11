function verif()
{
 if(document.form.nom.value == "")  { 
   document.form.nom.focus();
   document.getElementById("error").innerHTML = "Veuillez entrer le nom!";
   return false;
  }
}