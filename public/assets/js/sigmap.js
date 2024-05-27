const map = L.map('map').setView([-6.6094799, 106.7623284], 13);

	const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
		maxZoom: 19,
		attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
	}).addTo(map);

	const locations = [
		{ 
			coords: [-6.6094799, 106.7623284], 
			popup: 'Tambak Ikan Pak Nandang', 
			img: 'https://down-id.img.susercontent.com/file/fd456dc7de67c0b148c9314797cc8499',
			address: 'Perumahan Bukit Asri Blok D-14 No 18-19, Pagelaran, Kec. Ciomas, Bogor',
			phone: '081314053005',
			hours: '08:00 - 17:00',
			whatsapp: 'https://iconape.com/wp-content/files/zp/114427/svg/whatsapp-logo-icon-png-svg.png'
		},
		{ 
			coords: [-6.591526505068433, 106.76835378326022], 
			popup: 'Qiyam Frozen Foods Bogor', 
			img: 'https://images.tokopedia.net/img/cache/215-square/shops-1/2017/2/17/1395678/1395678_afcf4abe-0737-4ab4-825c-e1fabf7ece64.jpg',
			address: 'Pentongan Residence Blok B No.12, Jl. Pesantren Al-Falak, Loji, Bogor Barat, RT.03/RW.07, Loji, Kec. Bogor Bar., Kota Bogor, Jawa Barat 16117',
			phone: '085714794956',
			hours: '08:00 - 21:00',
			whatsapp: 'https://iconape.com/wp-content/files/zp/114427/svg/whatsapp-logo-icon-png-svg.png'
		},
		{ 
			coords: [-6.579882401016486, 106.75827818717572], 
			popup: 'Z-Frozen Foods Bogor', 
			img: 'https://kaspin.sgp1.digitaloceanspaces.com/gambarToko/PF9qdbNAk5cIxLSoyBCI.jpeg',
			address: 'Jl. Laladon Baru Residence No.50B, Laladon, Kec. Ciomas, Kabupaten Bogor, Jawa Barat 16610',
			phone: '081386296526',
			hours: '08:00 - 19:00',
			whatsapp: 'https://iconape.com/wp-content/files/zp/114427/svg/whatsapp-logo-icon-png-svg.png'
		},
		{ 
			coords: [-6.575619116459842, 106.75467329861137], 
			popup: 'Fansha Frozen Food Bogor', 
			img: 'https://mms.img.susercontent.com/e71bf05a05ba73fdfda9866fe67ed165',
			address: 'Jl. Raya Laladon No.69, Laladon, Kec. Ciomas, Kabupaten Bogor, Jawa Barat 16610',
			phone: '085624768114',
			hours: '08:00 - 19:00',
			whatsapp: 'https://iconape.com/wp-content/files/zp/114427/svg/whatsapp-logo-icon-png-svg.png'
		},
		{ 
			coords: [-6.554539791392851, 106.81161530798427], 
			popup: 'Amen Fresh & Frozen Talang', 
			img: 'https://images.tokopedia.net/img/cache/215-square/GAnVPX/2022/3/9/3cc1f918-df31-48a2-a442-e2041c327043.jpg',
			address: 'Jl. Raya Jakarta-Bogor No.5, RT.4/RW.8, Kedunghalang, Kec. Bogor Utara, Kota Bogor, Jawa Barat 16158',
			phone: '081319133281',
			hours: '08:00 - 21:00',
			whatsapp: 'https://iconape.com/wp-content/files/zp/114427/svg/whatsapp-logo-icon-png-svg.png'
		},
		{ 
			coords: [-6.605880560029463, 106.80886769489261], 
			popup: 'ADA SWALAYAN BOGOR', 
			img: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoHjsSyyTBGrGDpYtmcaGCKaUr9Xhp0kRes3zA04Dbcg&s',
			address: 'Jl. Raya Pajajaran No.31, Baranangsiang, Kec. Bogor Tim., Kota Bogor, Jawa Barat 16143',
			phone: '08123456780',
			hours: '09:00 - 21:00',
			whatsapp: 'https://iconape.com/wp-content/files/zp/114427/svg/whatsapp-logo-icon-png-svg.png'
		},
		{ 
			coords: [-6.609372330503785, 106.79234359674281], 
			popup: 'Berkah Dapurku 2 Distributor Frozen food', 
			img: 'https://images.tokopedia.net/img/cache/215-square/GAnVPX/2024/1/18/c5f99027-3c27-405f-adb8-2fb885214e77.png',
			address: 'Jl. Kapten Yusuf No.5, RT.02/RW.08, Kp. Parung Jambu, Pasir Jaya1, Kota Bogor, Jawa Barat 16119',
			phone: '081311192004',
			hours: '08:00 - 20:00',
			whatsapp: 'https://iconape.com/wp-content/files/zp/114427/svg/whatsapp-logo-icon-png-svg.png'
		},
		{ 
			coords: [-6.609899904158724, 106.79529769573467], 
			popup: 'Sadane Frozen Food', 
			img: 'https://static.vecteezy.com/system/resources/previews/010/447/472/original/frozen-food-text-effect-template-with-3d-bold-style-use-for-logo-free-vector.jpg',
			address: 'Jl. Sedane No.37, RT.02/RW.03, Empang, Kec. Bogor Sel., Kota Bogor, Jawa Barat 16132',
			phone: '085945441923',
			hours: '06:00 - 16:00',
			whatsapp: 'https://iconape.com/wp-content/files/zp/114427/svg/whatsapp-logo-icon-png-svg.png'
		},
		{ 
			coords: [-6.596462759814261, 106.78502510457437], 
			popup: 'Riz fam frozenfood', 
			img: 'https://scontent.fcgk9-2.fna.fbcdn.net/v/t39.30808-6/302327187_509807091145964_1397880017915050441_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHkCAksa3662qISWzezvBDHBTRCXrErStMFNEJesStK05awbT6lQgX-4gazhFQ0oLdV69rCztVi7GFO5szCmDjy&_nc_ohc=LvbeZKNOscMQ7kNvgE1CCNh&_nc_zt=23&_nc_ht=scontent.fcgk9-2.fna&oh=00_AYDqc-oGjotFv1tEBbhqh8SLBez-qFL-dc9nnoTxtRWZ_A&oe=66550EDA',
			address: 'Jalan Panaragan Kidul, Gg. Hamzah kelurahan No.9, RT.04/RW.05, Panaragan, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16125',
			phone: '081212152215',
			hours: '10:00 - 20:00',
			whatsapp: 'https://iconape.com/wp-content/files/zp/114427/svg/whatsapp-logo-icon-png-svg.png'
		},
		{ 
			coords: [-6.614622270101815, 106.78406371993547], 
			popup: 'D\'BESTIE FROZEN FOOD', 
			img: 'https://images.tokopedia.net/img/cache/215-square/GAnVPX/2023/8/1/4613872e-04a2-4136-a7e7-953832fa4b74.png',
			address: 'Jl. Raya Ciapus Gg. Emad, RT.04/RW.05, Cikaret, Kec. Bogor Sel., Kota Bogor, Jawa Barat 16132',
			phone: '089638854681',
			hours: '07:00 - 21:00',
			whatsapp: 'https://iconape.com/wp-content/files/zp/114427/svg/whatsapp-logo-icon-png-svg.png'
		},
		{ 
			coords: [-6.600407572937121, 106.75676208317478], 
			popup: 'Shanum Frozen Food 101', 
			img: 'https://lh3.googleusercontent.com/p/AF1QipN-rE4eew07Fg83cQtSqskJF67zT9dYREexN-tj=s1360-w1360-h1020',
			address: 'Jl. Ciomas Permai, Ciapus, Kec. Ciomas, Kabupaten Bogor, Jawa Barat 16610',
			phone: '087781200070',
			hours: '07:00 - 20:00',
			whatsapp: 'https://iconape.com/wp-content/files/zp/114427/svg/whatsapp-logo-icon-png-svg.png'
		}
	];

	locations.forEach(location => {
		const googleMapsLink = `https://www.google.com/maps?q=${location.coords[0]},${location.coords[1]}`;
		const popupContent = `
			<b>${location.popup}</b><br />
			<a href="${location.img}" target="_blank"><img src="${location.img}" alt="${location.popup}" style="width:100px;height:100px;"></a><br />
			<b>Alamat:</b> ${location.address}<br />
			<b>No Telp:</b> <a href="https://wa.me/${location.phone}" target="_blank">${location.phone}</a><br />
			<b>Jam Operasional:</b> ${location.hours}<br />
			<a href="${googleMapsLink}" target="_blank">View on Google Maps</a><br />
			<a href="https://wa.me/${location.phone}" target="_blank"><img src="${location.whatsapp}" alt="${location.popup}" style="width:80px;height:25px;"></a>
		`;
		L.marker(location.coords).addTo(map)
			.bindPopup(popupContent);
	});

	const popup = L.popup();

	function onMapClick(e) {
		const googleMapsLink = `https://www.google.com/maps?q=${e.latlng.lat},${e.latlng.lng}`;
		const popupContent = `
			You clicked the map at ${e.latlng.toString()}<br />
			<a href="${googleMapsLink}" target="_blank">View on Google Maps</a>
		`;
		popup
			.setLatLng(e.latlng)
			.setContent(popupContent)
			.openOn(map);
	}

	map.on('click', onMapClick);
