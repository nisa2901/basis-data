CREATE TABLE Karyawan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Nama VARCHAR(255) NOT NULL,
    Nomor_Hp VARCHAR(20),
    Alamat VARCHAR(255),
    Umur INT,
    Gaji DECIMAL(10,2),
    Jenis_Kelamin VARCHAR(10),
    Status VARCHAR(20),
    ID_Card VARCHAR(20)
);
