
function generate_popup(node)
{
  if( typeof node.tags === "undefined")
    return;
  popup = "";

  if( typeof node.tags.name !== "undefined" ) popup += "<b>" + node.tags.name + "</b></br>";
  else if( typeof node.tags['memorial:name'] !== "undefined" ) popup += "<b>" + node.tags['memorial:name'] + "</b></br>";

  //if( typeof node['image'] !== "undefined" ) popup += "<img src=\"" + node.tags['image']  + "\" witdth=\"200px\"/>";

  if( typeof node.tags['addr:street'] !== "undefined" 
    && typeof node.tags['addr:housenumber'] !== "undefined" 
    && typeof node.tags['addr:postcode'] !== "undefined" 
    && typeof node.tags['addr:city'] !== "undefined" )
    popup += "<br/>" + node.tags['addr:street'] + " " + node.tags['addr:housenumber'] + "<br/>" + node.tags['addr:postcode'] + " " + node.tags['addr:city'];
  if( typeof node.tags['addr:suburb'] !== "undefined")
    popup += " " + node.tags['addr:suburb'] + "<br/><br/>"; 
  else
    popup += "<br/><br/>"; 
  if( typeof node['memorial:website'] !== "undefined" ) popup += "<a href=\"" + node.tags['memorial:website']  + "\" target=\"_blank\">Webseite</a>";
  if( typeof node['website'] !== "undefined" ) popup += "<a href=\"" + node.tags['website']  + "\" target=\"_blank\">Webseite</a>";
  if( typeof node['wikipedia'] !== "undefined" ) popup += "<a href=\"" + getWikipediaURL( node.tags['wikipedia'] ) + "\" target=\"_blank\">Wikipedia</a>";
  popup += "<a href=\"http://www.openstreetmap.org/edit?node=" + node.id + "\" target=\"_blank\">Bearbeiten</a>";
 
  return popup; 

}
