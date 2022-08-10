SELECT ms.mhs_nama FROM tb_mahasiswa_nilai as mn JOIN tb_matakuliah as mk ON mk.mk_id = mn.mk_id 
JOIN tb_mahasiswa as ms ON ms.mhs_id = mn.mhs_id WHERE mk.mk_kode = 'MK202' AND mn.nilai = max(nilai);