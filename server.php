<?php
class ContactAddressService {
    private $contacts = [
        1 => ['id' => 1, 'name' => 'Firza Azka', 'phone' => '0828736332'],
        2 => ['id' => 2, 'name' => 'Amelia Salsabela', 'phone' => '0824791273']
    ];
    
    private $addresses = [
        1 => ['id' => 1, 'street' => 'Jl. diponegoro', 'city' => 'Pati'],
        2 => ['id' => 2, 'street' => 'Jl. Sudirman', 'city' => 'Kudus']
    ];

    public function GetContact($id) {
        return isset($this->contacts[$id]) ? (object) $this->contacts[$id] : null;
    }

    public function GetAddress($id) {
        return isset($this->addresses[$id]) ? (object) $this->addresses[$id] : null;
    }
}

// Inisialisasi SOAP Server
$options = [
    'uri' => "http://localhost/soap_api/",
    'soap_version' => SOAP_1_2
];

$server = new SoapServer(null, $options); // Menggunakan null jika tanpa WSDL
$server->setClass("ContactAddressService");
$server->handle();
?>