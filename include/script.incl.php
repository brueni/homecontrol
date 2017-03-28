<script type="text/javascript">
/*function light_mystrom(device, aktion) {
  var lighturl = "http://homecontrol-backend.home/homecontrol-backend/light-mystrom.php?switch=" + device + "&action=" + aktion;
  $.get(lighturl, function(data) {
  });
}*/
function dev_power(device, aktion) {
  var xhr = new XMLHttpRequest();
  var requesturl = "http://homecontrol-backend.home/homecontrol-backend/dev_power.php?dev=" + device + "&action=" + aktion;
  xhr.open('GET', requesturl);
  xhr.send();
}

function light_mystrom(device, aktion) {
  var xhr = new XMLHttpRequest();
  var requesturl = "http://homecontrol-backend.home/homecontrol-backend/light-mystrom.php?switch=" + device + "&action=" + aktion;
  xhr.open('GET', requesturl);
  xhr.send();
}

function light_nrdylight_set(aktion) {
  var xhr = new XMLHttpRequest();
  var requesturl = "http://homecontrol-backend.home/homecontrol-backend/set_nrdylight.php?mode=" + aktion;
  xhr.open('GET', requesturl);
  xhr.send();
}

function light_ediplug(device, aktion) {
  var xhr = new XMLHttpRequest();
  var requesturl = "http://homecontrol-backend.home/homecontrol-backend/light-ediplug.php?switch=" + device + "&action=" + aktion;
  xhr.open('GET', requesturl);
  xhr.send();
}

function light_nrdylight_ctrl(mode, scene, brightness, repeat) {
  var xhr = new XMLHttpRequest();
  var requesturl = "http://homecontrol-backend.home/homecontrol-backend/ctrl_nrdylight.php?mode=" + mode + "&scene=" + scene + "&brightness=" + brightness + "&repeat=" + repeat;
  xhr.open('GET', requesturl);
  xhr.send();
}

</script>
