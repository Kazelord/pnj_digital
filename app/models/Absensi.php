<?php
class Absensi extends Eloquent {
	protected $table = "tbl_absen_pegawai";
	protected $guarded = array('id_absen_pegawai');
	protected $fillable = array('nik','jam_ke','tanggal','keterangan');

	public static function tambah_absen_pegawai($id_absen_pegawai, $nik, $jam_ke, $tanggal, $keterangan)
	{
		return Absensi:: create(array('id_absen_pegawai' => $id_absen_pegawai,'nik' => $nik,  'jam_ke' => $jam_ke, 'tanggal' => $tanggal,'keterangan' => $keterangan));
	}
	public static function ubah_absen_pegawai($id_absen_pegawai, $nik, $jam_ke, $tanggal,  $keterangan)
	{
		return Absensi:: where('id_absen_pegawai', '=', $id_absen_pegawai) -> update(array('nik' => $nik,  'jam_ke' => $jam_ke,'tanggal' => $tanggal, 'keterangan' => $keterangan));
	}
	public static function hapus_absen_pegawai($id_absen_pegawai)
	{
		return Absensi:: where('id_absen_pegawai', '=', $id_absen_pegawai) -> delete();
	}
}
