
function generate_popup(node)
{
  if( typeof node.tags === "undefined")
    return;
  popup = "";

  if('capacity' in node.tags) {
    popup += "Anzahl: "+node.tags['capacity']+"<br/>";
  }
  popup += "<br/><a href=\"http://www.openstreetmap.org/edit?node=" + node.id + "\" target=\"_blank\">edit</a>";

  return popup; 

}
