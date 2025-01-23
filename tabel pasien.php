CREATE TABLE Pasien (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Pendaftaran VARCHAR(255) NOT NULL,
    Daftar_orang_baru VARCHAR(255) NOT NULL,
    Nama VARCHAR(255) NOT NULL,
    Umur INT,
    Nomor_Hp VARCHAR(20),
    Jenis_Kelamin VARCHAR(10)
);
