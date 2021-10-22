
	function subcategory(){
	let catCode = document.getElementById("cat_code").value ;
	if (catCode==="00")
		{
			document.getElementById("subcat_code").innerHTML ='<option value="">--pilih yang lain ya--</option>';
		}
	else if (catCode==="11")
		{
			document.getElementById("subcat_code").innerHTML ='<option value="11">Rumah/Apartemen</option><option value="12">Ruko/Toko</option><option value="13">Tanah/Kebun</option>';
		}
	else if (catCode==="12")
		{
			document.getElementById("subcat_code").innerHTML ='<option value="11">Mobil</option><option value="12">Sparepart</option><option value="13">Aksesoris</option>';
		}
	else if (catCode==="13")
		{
			document.getElementById("subcat_code").innerHTML ='<option value="11">Motor</option><option value="12">Sparepart</option><option value="13">Aksesoris</option>';
		}
		else if (catCode==="14")
		{
			document.getElementById("subcat_code").innerHTML ='<option value="11">AC</option><option value="12">Lemari Es</option><option value="13">Televisi</option><option value="14">Strika</option><option value="15">Dispenser</option><option value="16">Sparepart</option><option value="17">Aksesoris</option>';
		}
	else if (catCode==="15")
		{
			document.getElementById("subcat_code").innerHTML ='<option value="11">PC (Personal Computer)</option><option value="12">Laptop/Notebook</option><option value="13">Sparepart</option><option value="14">Aksesoris</option>';
		}
	else if (catCode==="16")
		{
			document.getElementById("subcat_code").innerHTML ='<option value="11">Smartphone</option><option value="12">Tablet</option><option value="13">Candybarphone</option><option value="14">Sparepart</option><option value="15">Aksesoris</option>';
		}
		else if (catCode==="17")
		{
			document.getElementById("subcat_code").innerHTML ='<option value="11">Pria</option><option value="12">Wanita</option><option value="13">Anak-anak</option><option value="14">Aksesoris Pria</option><option value="15">Aksesoris Wanita</option><option value="16">Aksesoris Anak-anak</option>';
		}
	else if (catCode==="18")
		{
			document.getElementById("subcat_code").innerHTML ='<option value="11">Perlengkapan Ibu</option><option value="12">Perlengkapan Bayi</option>';
		}
	else if (catCode==="19")
		{
			document.getElementById("subcat_code").innerHTML ='<option value="11">Ruang Tamu</option><option value="12">Ruang Tidur</option><option value="13">Dapur</option><option value="14">Kamar Mandi</option><option value="15">Luar Rumah</option>';
		}
		else if (catCode==="20")
		{
			document.getElementById("subcat_code").innerHTML ='<option value="11">Makanan</option><option value="12">Minuman</option><option value="13">Buah</option><option value="14">Sayur</option>';
		}
	else if (catCode==="21")
		{
			document.getElementById("subcat_code").innerHTML ='<option value="11">Hotel/penginapan</option><option value="12">Ruk/toko</option><option value="13">Rumah/indekos</option><option value="14">Mobil</option><option value="15">Motor</option><option value="16">Service Elektronik</option>';
		}
	else 
		{
			document.getElementById("subcat_code").innerHTML='<option value="">--gak ada pilihan--</option>';
		}
}




	function subcategorysearch(){
	let catCode = document.getElementById("cat_code").value ;
	if (catCode==="00")
		{
			document.getElementById("subcat_code").innerHTML ='<option value="">--pilih yang lain ya--</option>';
		}
	else if (catCode==="11")
		{
			document.getElementById("subcat_code").innerHTML ='<option value="">-- Semua SubKategori --</option><option value="11">Rumah/Apartemen</option><option value="12">Ruko/Toko</option><option value="13">Tanah/Kebun</option>';
		}
	else if (catCode==="12")
		{
			document.getElementById("subcat_code").innerHTML ='<option value="">-- Semua SubKategori --</option><option value="11">Mobil</option><option value="12">Sparepart</option><option value="13">Aksesoris</option>';
		}
	else if (catCode==="13")
		{
			document.getElementById("subcat_code").innerHTML ='<option value="">-- Semua SubKategori --</option><option value="11">Motor</option><option value="12">Sparepart</option><option value="13">Aksesoris</option>';
		}
		else if (catCode==="14")
		{
			document.getElementById("subcat_code").innerHTML ='<option value="">-- Semua SubKategori --</option><option value="11">AC</option><option value="12">Lemari Es</option><option value="13">Televisi</option><option value="14">Strika</option><option value="15">Dispenser</option><option value="16">Sparepart</option><option value="17">Aksesoris</option>';
		}
	else if (catCode==="15")
		{
			document.getElementById("subcat_code").innerHTML ='<option value="">-- Semua SubKategori --</option><option value="11">PC (Personal Computer)</option><option value="12">Laptop/Notebook</option><option value="13">Sparepart</option><option value="14">Aksesoris</option>';
		}
	else if (catCode==="16")
		{
			document.getElementById("subcat_code").innerHTML ='<option value="">-- Semua SubKategori --</option><option value="11">Smartphone</option><option value="12">Tablet</option><option value="13">Candybarphone</option><option value="14">Sparepart</option><option value="15">Aksesoris</option>';
		}
		else if (catCode==="17")
		{
			document.getElementById("subcat_code").innerHTML ='<option value="">-- Semua SubKategori --</option><option value="11">Pria</option><option value="12">Wanita</option><option value="13">Anak-anak</option><option value="14">Aksesoris Pria</option><option value="15">Aksesoris Wanita</option><option value="16">Aksesoris Anak-anak</option>';
		}
	else if (catCode==="18")
		{
			document.getElementById("subcat_code").innerHTML ='<option value="">-- Semua SubKategori --</option><option value="11">Perlengkapan Ibu</option><option value="12">Perlengkapan Bayi</option>';
		}
	else if (catCode==="19")
		{
			document.getElementById("subcat_code").innerHTML ='<option value="">-- Semua SubKategori --</option><option value="11">Ruang Tamu</option><option value="12">Ruang Tidur</option><option value="13">Dapur</option><option value="14">Kamar Mandi</option><option value="15">Luar Rumah</option>';
		}
		else if (catCode==="20")
		{
			document.getElementById("subcat_code").innerHTML ='<option value="">-- Semua SubKategori --</option><option value="11">Makanan</option><option value="12">Minuman</option><option value="13">Buah</option><option value="14">Sayur</option>';
		}
	else if (catCode==="21")
		{
			document.getElementById("subcat_code").innerHTML ='<option value="">-- Semua SubKategori --</option><option value="11">Hotel/penginapan</option><option value="12">Ruk/toko</option><option value="13">Rumah/indekos</option><option value="14">Mobil</option><option value="15">Motor</option><option value="16">Service Elektronik</option>';
		}
	else 
		{
			document.getElementById("subcat_code").innerHTML='<option value="">--gak ada pilihan--</option>';
		}
}

