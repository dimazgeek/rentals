function initialize() {
  var myLatlng = new google.maps.LatLng(42.3133735, -71.0571571);
  var myLatlng1 = new google.maps.LatLng(42.459174, -71.037228);
  var myLatlng2 = new google.maps.LatLng(42.405346,-71.120988);
  var myLatlng3 = new google.maps.LatLng(42.380098, -71.103833);
  var myLatlng4 = new google.maps.LatLng(42.393284, -71.237042);
  var myLatlng5 = new google.maps.LatLng(42.340522, -71.074994);
  var mapOptions = {
    zoom: 10,
    center: myLatlng
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var marker1 = new google.maps.Marker({
      position: myLatlng1,
      map: map,
      title: 'Linkin Park'
  });
  var marker2 = new google.maps.Marker({
      position: myLatlng2,
      map: map,
      title: 'avril'+''+'10-juni'+''+'goverment center',
	  content: '12-sep'
  });
  var marker3 = new google.maps.Marker({
      position: myLatlng3,
      map: map,
      title: 'dj hardwell'+''+'12-july-2015'+''+'house of blues',
	  content: '12-sep'
	  
  });
  var marker4 = new google.maps.Marker({
      position: myLatlng4,
      map: map,
      title: 'celine dion'+'12-sep-2015'+''+'TD garden',
	  content: '12-sep'
  });
  var marker5 = new google.maps.Marker({
      position: myLatlng5,
      map: map,
      title: 'britney'+''+'10-agustus'+''+'xfinity center',
	  content: '12-sep'
  });
}

google.maps.event.addDomListener(window, 'load', initialize);



