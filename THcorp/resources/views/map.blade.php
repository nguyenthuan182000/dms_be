<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>LeafletJS - OpenStreetMap API by Seth Phat</title>
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
		integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
		crossorigin="" />
	<script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
		integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
		crossorigin=""></script>
	<style>
		#sethPhatMap {
			width: 100%;
			height: 600px;
		}

		.map-popup-content {
			width: 300px;
		}

		.map-popup-content .left {
			float: left;
			width: 40%;
		}

		.map-popup-content .left img {
			width: 100%;
			height: 100px;
			margin: -15px 0 -15px -20px;
			border-radius: 12px;
		}

		.map-popup-content .right {
			float: left;
			width: 60%;
		}

		.clearfix {
			clear: both;
		}
	</style>
</head>

<body>
	<div id="sethPhatMap"></div>
</body>

<script>
	var mapObj = null;
	var defaultCoord = [10.7743, 106.6669]; // coord mặc định
	var zoomLevel = 13;
	var mapConfig = {
		attributionControl: true,
		center: defaultCoord, // vị trí map mặc định hiện tại
		zoom: zoomLevel, // level zoom
	};

	window.onload = function () {
		// init map
		mapObj = L.map('sethPhatMap', mapConfig);

		// add tile để map có thể hoạt động
		L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
			attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
		}).addTo(mapObj);

		var customerId = window.location.pathname.split('/').pop();
		alert(customerId);
		if (customerId.trim() !== '') {
			// Gọi API để lấy thông tin khách hàng bằng id
			var url = '/get-customer/' + customerId;
			$.ajax({
				url: url,
				type: 'GET',
				dataType: 'json',
				success: function (data) {
					if (data.success && data.customer && data.customer.address.trim() !== '') {
						var searchInput = data.customer.address;
						var nominatimUrl = 'https://nominatim.openstreetmap.org/search/' + encodeURIComponent(searchInput) + '?format=json';

						$.ajax({
							url: nominatimUrl,
							type: 'GET',
							dataType: 'json',
							success: function (data) {
								if (data.length > 0) {
									var result = data[0];
									var name = result.display_name;
									var address = result.address;
									var lat = parseFloat(result.lat);
									var lon = parseFloat(result.lon);

									// Hiển thị kết quả tìm kiếm lên thanh tìm kiếm (hoặc bất kỳ đâu bạn muốn)
									alert('Tên: ' + name + '\n' + 'Địa chỉ: ' + address);

									// Tạo marker với kết quả tìm kiếm
									addMarker([lat, lon], name, {}, {
										title: name
									});

									// Di chuyển tới vị trí tìm kiếm
									mapObj.setView([lat, lon], zoomLevel);
								} else {
									alert('Không tìm thấy kết quả phù hợp.');
									// Sử dụng defaultCoord nếu không tìm thấy kết quả phù hợp
									mapObj.setView(defaultCoord, zoomLevel);
								}
							},
							error: function (xhr, status, error) {
								alert('Đã xảy ra lỗi trong quá trình tìm kiếm.');
								// Sử dụng defaultCoord nếu có lỗi trong quá trình tìm kiếm
								mapObj.setView(defaultCoord, zoomLevel);
							}
						});
					} else {
						alert('Không có địa chỉ của khách hàng trong database.');
						// Sử dụng defaultCoord nếu không có địa chỉ của khách hàng trong database
						mapObj.setView(defaultCoord, zoomLevel);
					}
				},
				error: function (xhr, status, error) {
					alert('Đã xảy ra lỗi khi lấy thông tin khách hàng.');
					// Sử dụng defaultCoord nếu có lỗi khi lấy thông tin khách hàng
					mapObj.setView(defaultCoord, zoomLevel);
				}
			});
		} else {
			alert('Không có id của khách hàng trong URL.');
			// Sử dụng defaultCoord nếu không có id của khách hàng trong URL
			mapObj.setView(defaultCoord, zoomLevel);
		}

		// tạo marker
		var popupOption = {
			className: "map-popup-content",
		};
		// var marker = addMarker([10.7743, 106.6669], `<div class='left'><img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1SGNN50inDZcOweium4llf4qacFBFgBK9sXW7fxQ_lBm6-Abcww' /></div><div class='right'><b>Đây có gì hot?</b><br>Một Popup có 1 cô gái tên là Lailah</div><div class='clearfix'></div>`, popupOption);
	};

	function addMarker(coord, popupContent, popupOptionObj, markerObj) {
		if (!popupOptionObj) {
			popupOptionObj = {};
		}
		if (!markerObj) {
			markerObj = {};
		}

		var marker = L.marker(coord, markerObj).addTo(mapObj); // chơi liều @@
		var popup = L.popup(popupOptionObj);
		popup.setContent(popupContent);

		// binding
		marker.bindPopup(popup);

		return marker;
	}	
</script>

</html>