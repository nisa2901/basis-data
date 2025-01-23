CREATE TABLE Laporan_pengujian (
    id INT AUTO_INCREMENT PRIMARY KEY,
    jenis_tes VARCHAR(255),
    Hasil VARCHAR(255),
    R_ID INT,
    P_ID INT,
    FOREIGN KEY (P_ID) REFERENCES Pasien(id)
);
