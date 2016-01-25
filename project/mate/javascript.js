
function generate_title(node)
{
  var title = ""; 

  if( typeof node.tags === "undefined")
    return title;

    return node.tags.name;
}

function generate_icon(node)
{
  var icon = mate_icon_normal; 

  if( typeof node.tags === "undefined")
    return icon;

  if('drink:club-mate' in node.tags) {
    if( node.tags['drink:club-mate'] == 'retail')
      icon = mate_icon_retail;
    else if( node.tags['drink:club-mate'] == 'served')
      icon = mate_icon_served;
  }
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
