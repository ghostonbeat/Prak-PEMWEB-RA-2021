$(document).ready(function(){
	var dataHasil = 0;
	Baca_Data_mhs();

	$('.btn-tambah').click(function(){
		Tambah_Data_mhs();
	});
	
	$('.btn-batal').click(function(){
		Baca_Data_mhs();
		reset();
	});

	$('.btn-ubah').click(function(){
		Ubah_Data_mhs(dataHasil);
	});

	function Baca_Data_mhs(){
		$('.targetData').html('');

		$('.btn-tambah').show();
		$('.btn-ubah').hide();
		$('.btn-batal').hide();
		$.ajax({
			type : 'GET',
			url : 'ambil_data.php',
			dataType : 'JSON',
			success : function(response){
				var i;
				var data = '';
				for( i=0; i<response.length; i++ ){
					data +=
					`
					<tr>
					<td style="text-align: center;">`+(i+1)+`</td>
					<td>`+response[i].nama+`</td>
					<td style="text-align: center;">`+response[i].nim+`</td>
					<td style="text-align: center;">`+response[i].prodi+`</td>
					<td style="text-align: center;">`+response[i].angkatan+`</td>
					<td style="text-align: center;">
						<button class='btn-edit' id='`+response[i].nim+`'>Edit</button>
						<button class='btn-delete' id='`+response[i].nim+`'>Delete</button>
					</td>
					</tr>

					`
				}
				$('.targetData').append(data);

				$('.btn-edit').click(function(){
					Ambil_Data_mhs($(this).attr('id'));
				})

				$('.btn-delete').click(function(){
					delete_data_mhs($(this).attr('id'));
				})
			}
		})
	}


	function Tambah_Data_mhs(){
		var NIM = $('.number_nim').val();
		var Nama = $('.nama').val();
		var Prodi = $('.prodi').val();
		var Angkatan = $('.number_angkatan').val();
		$.ajax({
			type : 'POST',
			url : 'input_data.php',
			data : 'nim='+NIM+'&nama='+Nama+'&prodi='+Prodi+'&angkatan='+Angkatan,
			dataType : 'JSON',
			success : function(response){
				if(response.status == '1'){
					Baca_Data_mhs();
					reset();
				}else{
					alert(response.msg);
					Baca_Data_mhs();
					reset();
				}

			}
		})
	}

	function Ambil_Data_mhs(x){
		$.ajax({
			type : 'POST',
			url : 'ambil_satu_data.php',
			data : 'id='+x,
			dataType : 'JSON',
			success : function(response){
				dataHasil = response.nim;
				$('.number_nim').val(response.nim);
				$('.nama').val(response.nama);
				$('.prodi').val(response.prodi);
				$('.number_angkatan').val(response.angkatan);

				$('.btn-tambah').hide();
				$('.btn-ubah').show();
				$('.btn-batal').show();
	
			}
		})
	}

	function Ubah_Data_mhs(x){
		var id = x;
		var nim = $('.number_nim').val();
		var nama = $('.nama').val();
		var prodi = $('.prodi').val();
		var angkatan = $('.number_angkatan').val();
		$.ajax({
			type : 'POST',
			url : 'edit_data.php',
			data : 'id='+id+'&nim='+nim+'&nama='+nama+'&prodi='+prodi+'&angkatan='+angkatan,
			success : function(response){
				Baca_Data_mhs();
				reset();
			}
		})
	}

	function delete_data_mhs(x){

		$.ajax({
			type : 'POST',
			url : 'delete_data.php',
			data : 'nim='+x,
			dataType : 'JSON',
			success : function(response){
				if(response.status == '1'){
					Baca_Data_mhs();
					reset();
				}else{
					alert(response.msg);
					Baca_Data_mhs();
					reset();
				}
			}
		})
	}

	function reset(){
		$('.number_nim').val('');
		$('.nama').val('');
		$('.prodi').val('');
		$('.number_angkatan').val('');
	}


});