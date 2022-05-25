"use strict";

function initMap() {
  var map = document.getElementById("map");
  var myCompany = {
    lat: 35.713747,
    lng: 139.45577,
  };
  var option = {
    zoom: 13,
    center: myCompany,
  };

  var mapObj = new google.maps.Map(map, option);
}

window.onload = function () {
  initMap();
};
