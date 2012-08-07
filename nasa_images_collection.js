var sp = getSpotifyApi(1);
var Picture = sp.require('picture');

exports.getPicture = function(picture) {
    console.log("TODO implement");
    return Picture.create('sp://musicfromspace/images/nasa.png', 1232023);
}
