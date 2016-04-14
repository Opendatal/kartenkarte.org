
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

  return popup; 

}

$( document ).ready( function() {
  $('#mapsmap').modal('show');
});
