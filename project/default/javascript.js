
function generate_title(node)
{
  var title = ""; 

  if( typeof node.tags === "undefined")
    return title;

    return node.tags.name;
}

function generate_icon(node)
{
  var icon = icon_normal; 

  if( typeof node.tags === "undefined")
    return icon;
  
  return icon;
}

function generate_popup(node)
{
  if( typeof node.tags === "undefined")
    return;
  var output;
  popup = "<b>"+node.tags.name+"</b>";

  if('website' in node.tags) {
    url = node.tags['website'];
    if (!url.match(/^[a-zA-Z]+:\/\//))
    {
      url = 'http://' + url;
    }
    popup += "<br/><a href=\""+url+"\" target=\"_blank\">Website</a><br/>"; 
  }

  return popup; 

}

window.setTimeout("$('#mapsmap').modal('show');", 1000);
