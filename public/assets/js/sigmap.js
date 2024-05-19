const map = L.map('map').setView([-6.6094799, 106.7623284], 13);

const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

const locations = [
    { 
        coords: [-6.6094799, 106.7623284], 
        popup: 'Tambak Ikan Pak Nandang', 
        img: 'https://tse1.mm.bing.net/th?&id=OVF.d/uGKBlTEn%2b4q56i0ywXcg&w=608&h=271&c=7&pid=1.7&rs=1',
        address: 'Perumahan Bukit Asri Blok D-14 No 18-19, Pagelaran, Kec. Ciomas, Bogor',
        phone: '081314053005',
        hours: '08:00 - 17:00'
    },
    { 
        coords: [-6.591526505068433, 106.76835378326022], 
        popup: 'Qiyam Frozen Foods Bogor', 
        img: 'https://lh3.googleusercontent.com/p/AF1QipP8UnSugkvDkaXKomix-s8wmINHTv_LPfsCKmjJ=w1080-h608-p-no-v0',
        address: 'Pentongan Residence Blok B No.12, Jl. Pesantren Al-Falak, Loji, Bogor Barat, RT.03/RW.07, Loji, Kec. Bogor Bar., Kota Bogor, Jawa Barat 16117',
        phone: '085714794956',
        hours: '08:00 - 21:00'
    },
    { 
        coords: [-6.579882401016486, 106.75827818717572], 
        popup: 'Z-Frozen Foods Bogor', 
        img: 'https://i0.wp.com/sentul.city/wp-content/uploads/2020/06/amen-3.png?resize=954%2C540&ssl=1',
        address: 'Jl. Laladon Baru Residence No.50B, Laladon, Kec. Ciomas, Kabupaten Bogor, Jawa Barat 16610',
        phone: '081386296526',
        hours: '08:00 - 19:00'
    },
    { 
        coords: [-6.575619116459842, 106.75467329861137], 
        popup: 'Fansha Frozen Food Bogor', 
        img: 'https://i.gojekapi.com/darkroom/gofood-indonesia/v2/images/uploads/b01efe3e-5a76-42b1-b037-66c26b5a5419_Go-Biz_20220704_161806.jpeg',
        address: 'Jl. Raya Laladon No.69, Laladon, Kec. Ciomas, Kabupaten Bogor, Jawa Barat 16610',
        phone: '085624768114',
        hours: '08:00 - 19:00'
    },
    { 
        coords: [-6.554539791392851, 106.81161530798427], 
        popup: 'Amen Fresh & Frozen Talang', 
        img: 'https://th.bing.com/th/id/OIP.TefymQHacFbo9Cqx8pgTzgHaE5?w=237&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7',
        address: 'Jl. Raya Jakarta-Bogor No.5, RT.4/RW.8, Kedunghalang, Kec. Bogor Utara, Kota Bogor, Jawa Barat 16158',
        phone: '081319133281',
        hours: '08:00 - 21:00'
    },
    { 
        coords: [-6.605880560029463, 106.80886769489261], 
        popup: 'ADA SWALAYAN BOGOR', 
        img: 'https://cdn-2.tstatic.net/jateng/foto/bank/images/ada-swalayan-pati.jpg',
        address: 'Jl. Raya Pajajaran No.31, Baranangsiang, Kec. Bogor Tim., Kota Bogor, Jawa Barat 16143',
        phone: '08123456780',
        hours: '09:00 - 21:00'
    },
    { 
        coords: [-6.609372330503785, 106.79234359674281], 
        popup: 'Berkah Dapurku 2 Distributor Frozen food', 
        img: 'https://lh3.googleusercontent.com/p/AF1QipPBpzz0QLo_ZN_6PPeZi0ikFkeQCFTivtF13nrM=s1360-w1360-h1020',
        address: 'Jl. Kapten Yusuf No.5, RT.02/RW.08, Kp. Parung Jambu, Pasir Jaya1, Kota Bogor, Jawa Barat 16119',
        phone: '081311192004',
        hours: '08:00 - 20:00'
    },
    { 
        coords: [-6.609899904158724, 106.79529769573467], 
        popup: 'Sadane Frozen Food', 
        img: 'https://lh3.googleusercontent.com/p/AF1QipNjAIwUARhfgNGOrSZMquX9qhTQPm9L9HDQK-h3=s1360-w1360-h1020',
        address: 'Jl. Sedane No.37, RT.02/RW.03, Empang, Kec. Bogor Sel., Kota Bogor, Jawa Barat 16132',
        phone: '085945441923',
        hours: '06:00 - 16:00'
    },
    { 
        coords: [-6.596462759814261, 106.78502510457437], 
        popup: 'Riz fam frozenfood', 
        img: 'https://th.bing.com/th/id/OIP.vtaVwge7K3p9oyPNTWGoIwHaEK?rs=1&pid=ImgDetMain',
        address: 'Jalan Panaragan Kidul, Gg. Hamzah kelurahan No.9, RT.04/RW.05, Panaragan, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16125',
        phone: '081212152215',
        hours: '10:00 - 20:00'
    },
    { 
        coords: [-6.614622270101815, 106.78406371993547], 
        popup: 'D\'BESTIE FROZEN FOOD', 
        img: 'https://lh3.googleusercontent.com/p/AF1QipMzbQZldBQRes-ru5C1DWNRc94-D3ACOAMf0N_t=s1360-w1360-h1020',
        address: 'Jl. Raya Ciapus Gg. Emad, RT.04/RW.05, Cikaret, Kec. Bogor Sel., Kota Bogor, Jawa Barat 16132',
        phone: '089638854681',
        hours: '07:00 - 21:00'
    },
    { 
        coords: [-6.600407572937121, 106.75676208317478], 
        popup: 'Shanum Frozen Food 101', 
        img: 'https://lh3.googleusercontent.com/p/AF1QipN-rE4eew07Fg83cQtSqskJF67zT9dYREexN-tj=s1360-w1360-h1020',
        address: 'Jl. Ciomas Permai, Ciapus, Kec. Ciomas, Kabupaten Bogor, Jawa Barat 16610',
        phone: '087781200070',
        hours: '07:00 - 20:00'
    }
];

locations.forEach(location => {
    const googleMapsLink = `https://www.google.com/maps?q=${location.coords[0]},${location.coords[1]}`;
    const popupContent = `
        <b>${location.popup}</b><br />
        <img src="${location.img}" alt="${location.popup}" style="width:100px;height:auto;"><br />
        <b>Alamat:</b> ${location.address}<br />
        <b>No Telp:</b> ${location.phone}<br />
        <b>Jam Operasional:</b> ${location.hours}<br />
        <a href="${googleMapsLink}" target="_blank">View on Google Maps</a>
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