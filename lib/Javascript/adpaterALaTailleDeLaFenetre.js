function adpaterALaTailleDeLaFenetre(){
  var largeur = document.documentElement.clientWidth,
  hauteur = document.documentElement.clientHeight;
   
  var source = document.getElementById('monDiv'); // recupere l'id source
  source.style.height = hauteur+'px'; // applique la hauteur de la page
  source.style.width = largeur+'px'; // la largeur
}
 
// Une fonction de compatibilite pour gerer les evenements
function addEvent(element, type, listener){
  if(element.addEventListener){
    element.addEventListener(type, listener, false);
  }else if(element.attachEvent){
    element.attachEvent("on"+type, listener);
  }
}
 
// On execute la fonction une premiere fois au chargement de la page
addEvent(window, "load", adpaterALaTailleDeLaFenetre);
// Puis a chaque fois que la fenetre est redimensionnee
addEvent(window, "resize", adpaterALaTailleDeLaFenetre);