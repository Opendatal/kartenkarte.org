
function generate_popup(node)
{
  if( typeof node.tags === "undefined")
    return;
  popup = "";

  if( typeof node.tags.name !== "undefined" ) popup += "<b>"+node.tags.name+"</b></br>";
  if( typeof node.tags['wheelchair'] !== "undefined" ) {
    if( node.tags['wheelchair'] == "yes" ) popup += "Rolly: ja</br>";
    if( node.tags['wheelchair'] == "no" ) popup += "Rolly: nein</br>";
  }
  else if( typeof node.tags['toilets:wheelchair'] !== "undefined" ) {
    if( node.tags['toilets:wheelchair'] == "yes" ) popup += "Rolly: ja</br>";
    if( node.tags['toilets:wheelchair'] == "no" ) popup += "Rolly: nein</br>";
  }
  if( typeof node.tags['operator'] !== "undefined" ) popup += "Betreiber : " + node.tags['operator'] + "<br/>"; 
  if( typeof node.tags['network'] !== "undefined" ) popup += "Verbund: " + node.tags['network'] + "<br/>"; 
  if( typeof node.tags['addr:street'] !== "undefined" 
    && typeof node.tags['addr:housenumber'] !== "undefined" 
    && typeof node.tags['addr:postcode'] !== "undefined" 
    && typeof node.tags['addr:city'] !== "undefined" )
    popup += "<br/>" + node.tags['addr:street'] + " " + node.tags['addr:housenumber'] + "<br/>" + node.tags['addr:postcode'] + " " + node.tags['addr:city'];
  if( typeof node.tags['addr:suburb'] !== "undefined")
    popup += " " + node.tags['addr:suburb'] + "<br/><br/>"; 
  else
    popup += "<br/><br/>"; 
  if( typeof node['lat'] !== "undefined" && typeof node['lon'] !== "undefined" ) popup += "<small>" + node['lat'] + " N " + node['lon'] + " O</small><br/>"; 
  if( typeof node.tags['uic_ref'] !== "undefined" ) popup += "<small>UIC: " + node.tags['uic_ref'] + "</small><br/><a href=\"http://reiseauskunft.bahn.de/bin/bhftafel.exe/dn?evaId=" + node.tags['uic_ref'] + "&boardType=dep&time=actual&productsDefault=1111101&start=yes\" target=\"_blank\">Abfahrtsplan</a><br/>"; 
  popup += "<a href=\"http://www.openstreetmap.org/edit?node=" + node.id + "\" target=\"_blank\">Bearbeiten</a>";
 
  return popup; 

}
