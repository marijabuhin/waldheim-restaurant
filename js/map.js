 var map = L.map('mapid').setView([49.1342171, 9.1158031,19], 15);
		L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
	    attribution: '&copy;<a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
		}).addTo(map);
		L.marker([49.1342171, 9.1158031,19]).addTo(map)
	    .bindPopup('<b>Café Bistro Waldheim</b><br>Egarten 1, 74211 Leingarten')
	    .openPopup()