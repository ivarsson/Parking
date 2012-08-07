var sp = getSpotifyApi(1);
var pictureCollection = sp.require('nasa_images_collection');
var songCollection  = sp.require('spotify_favorite_songs_collection');

exports.init = function () {
  $('#button').click(function() {
      var picture = pictureCollection.getPicture();
      var song = songCollection.findSongForPicture(picture);
      $('#content').html('');
      $('#content').append($('<p>' + song + '</p>'));
      $('#content').append($('<img src="' + picture.url + '" />'));
  });
}
