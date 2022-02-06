<?php

class pemesanan {

    private $id_pesanan;
    private $nama_pemesan;
    private $id_barang;
    private $jumlah_pesanan;
    // FIX : UNUSED VARIABLE
	private $satuan;
	private $konversi;
	private $lead_time;
	private $pakai;
    private $conn;

    function setConnection($conn)
    {
        $this->conn = $conn;
    }
    function setId_Pesanan($id_pesanan) {
        $this->id_pesanan = $id_pesanan;
    }

    function setNama_Pemesan($nama_pemesan) {
        $this->nama_pemesan = $nama_pemesan;
    }

    function setId_Barang($id_barang) {
        $this->id_barang = $id_barang;
    }

    function setJumlah_Pesanan($jumlah_pesanan) {
        $this->jumlah_pesanan = $jumlah_pesanan;
    }
		
	function setLead_Time($lead_time) {
        $this->lead_time = $lead_time;
    }
	function setPakai($pakai) {
        $this->pakai = $pakai;
    }

    function getId_Pesanan() {
        return $this->id_pesanan;
    }

    function getNama_Pemesan() {
        return $this->nama_pemesan;
    }

    function getId_Barang() {
        return $this->id_barang;
    }

    function getJumlah_Pesanan() {
        return $this->jumlah_pesanan;
    }
	
	function getSatuan() {
        return $this->jumlah_pesanan;
    }
	function getLead_Time() {
        return $this->lead_time;
    }
	function getPakai() {
        return $this->pakai;
    }

    function PesananTambah() {
        $sqlPesananTambah = mysqli_query($this->conn, "INSERT INTO pemesanan VALUES ('$this->id_pesanan', '$this->nama_pemesan', '$this->id_barang', '$this->jumlah_pesanan', '$this->lead_time','$this->pakai')");
    }

    function PesananList() {
        $sqlPesananList = mysqli_query($this->conn, "SELECT
									pemesanan.id_pesanan,
									pemesanan.nama_pemesan,
									barang.nama_barang,
									pemesanan.jumlah_pesanan,
									barang.satuan,
									barang.konversi,
									pemesanan.lead_time,
									pemesanan.pakai,
									pemesanan.jumlah_pesanan * barang.konversi AS 'jumlah_total'
									FROM pemesanan JOIN barang USING (id_barang)");
        while ($row = mysqli_fetch_array($sqlPesananList)) {
            $data [] = $row;
        }
        return $data;
    }
	function GunaBarang ()
	{
		$sqlGunaBarang = mysqli_query ($this->conn, "SELECT * FROM pemesanan");
		while ($row = mysqli_fetch_array ($sqlGunaBarang))
			{
				$data [] = $row;
			}
	}
	

    function PakaiBarangById($id) 
	{
        $sqlPakaiBarang = mysqli_query($this->conn, "SELECT * FROM pemesanan WHERE id_pesanan = '$id'");
        while ($row = mysqli_fetch_array($sqlPakaiBarang)) {
            $data [] = $row;
        }
        return $data;
    }
	function PakaiBarangUpdate ()
	{
		$sqlPakaiUpdate = mysqli_query($this->conn, "UPDATE pemesanan SET pakai = '$this->pakai' WHERE id_pesanan = '$this->id_pesanan'");
	}

}

?>