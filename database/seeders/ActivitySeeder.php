<?php

namespace Database\Seeders;

use App\Models\activity;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $activities = [
            [
                'name' => 'Membuat Pending Billing Approval Order',
                'start_date' => \Carbon\Carbon::createFromDate(2023,3,16)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,3,16)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'TSQ Ulang / Resubmit Order',
                'start_date' => \Carbon\Carbon::createFromDate(2023,3,17)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,3,17)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Membuat Customer Account di UAT',
                'start_date' => \Carbon\Carbon::createFromDate(2023,3,20)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,3,20)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Membuat Attribute Product Neucentrix',
                'start_date' => \Carbon\Carbon::createFromDate(2023,3,21)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,3,24)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Query Comment Order Comment Line Item',
                'start_date' => \Carbon\Carbon::createFromDate(2023,3,27)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,3,27)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Export Database ke Excel',
                'start_date' => \Carbon\Carbon::createFromDate(2023,3,28)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,3,28)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Melanjutkan Order Sampai Billing Completed',
                'start_date' => \Carbon\Carbon::createFromDate(2023,3,29)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,3,29)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Membuat resume order',
                'start_date' => \Carbon\Carbon::createFromDate(2023,3,30)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,3,30)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => '[Meeting Online] Transfer Knowledge Pekerjaan Enhancement Product Pricing Tools: Ritel Product Management',
                'start_date' => \Carbon\Carbon::createFromDate(2023,3,31)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,3,31)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Membuat Order NeucentrIX Layer 1 Untuk Tes',
                'start_date' => \Carbon\Carbon::createFromDate(2023,4,3)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,4,3)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Membuat Disconnect Order NeuCentrIX',
                'start_date' => \Carbon\Carbon::createFromDate(2023,4,4)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,4,4)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Tes Active Order NeuCentrIX',
                'start_date' => \Carbon\Carbon::createFromDate(2023,4,5)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,4,5)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'membuat order disconnect neucentrix sampai bilkom',
                'start_date' => \Carbon\Carbon::createFromDate(2023,4,6)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,4,6)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Cek default value MRC pada produk TIE LINE',
                'start_date' => \Carbon\Carbon::createFromDate(2023,4,10)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,4,10)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Menambahkan MRC pada TIE Line',
                'start_date' => \Carbon\Carbon::createFromDate(2023,4,11)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,4,11)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Export TIE Line ke Production',
                'start_date' => \Carbon\Carbon::createFromDate(2023,4,12)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,4,12)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Uji MRC Ototmatis Product TIE Line (Active Order)',
                'start_date' => \Carbon\Carbon::createFromDate(2023,4,13)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,4,13)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Uji MRC Ototmatis Product TIE Line (Modify Order)',
                'start_date' => \Carbon\Carbon::createFromDate(2023,4,13)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,4,13)->toDateTimeString(),
                'status' => 'completed',
            ],

            [
                'name' => 'Export Database ke Excel',
                'start_date' => \Carbon\Carbon::createFromDate(2023,4,17)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,4,17)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Query TIE Line Order',
                'start_date' => \Carbon\Carbon::createFromDate(2023,4,18)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,4,18)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Query TIE Line Order',
                'start_date' => \Carbon\Carbon::createFromDate(2023,4,18)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,4,18)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Query Data Prov Start Mulai dari Tanggal 6 April Ke Bawah',
                'start_date' => \Carbon\Carbon::createFromDate(2023,4,26)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,4,26)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Export Data Order Prov Start yang sebelum tanggal 6 april via SQL query',
                'start_date' => \Carbon\Carbon::createFromDate(2023,4,27)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,4,27)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Merapihkan Produk TIE Line',
                'start_date' => \Carbon\Carbon::createFromDate(2023,4,28)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,4,28)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Menambahkan restriction pada product Masking 150AXYZ',
                'start_date' => \Carbon\Carbon::createFromDate(2023,5,2)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,5,2)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => '[Meeting On site] Pembahasan Produk Modelling FAB IT Tools New Product DataComm Test Lanjutan 8IC FAB IT Tools untuk Produk NeuCentrIX Interconnect Layer 1',
                'start_date' => \Carbon\Carbon::createFromDate(2023,5,5)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,5,5)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Tes Product untuk D2P NeuCentrIX Layer 1',
                'start_date' => \Carbon\Carbon::createFromDate(2023,5,8)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,5,8)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => '[Meeting Online] Diskusi Penyiapan Product Modeling Layanan SCC 3.0 enhancement penambahan paketisasi layanan 2 & Development fitur burstable di IT Tools pada Product IP Transit dan turunannya',
                'start_date' => \Carbon\Carbon::createFromDate(2023,5,9)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,5,9)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => '[Meeting Online] Pembahasan Penyesuaian IT Tools Layanan SIP Trunk',
                'start_date' => \Carbon\Carbon::createFromDate(2023,5,10)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,5,10)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Penambahan IP Up To di product SIP Trunk',
                'start_date' => \Carbon\Carbon::createFromDate(2023,5,11)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,5,11)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Menambahkan Product di AStinet ASTINet Single IP SDWAN attribute VPN IP Service type new value : VPN IP Netmonk',
                'start_date' => \Carbon\Carbon::createFromDate(2023,5,12)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,5,12)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Mengubah nama product Cloud PBX to SIP Trunk Plus',
                'start_date' => \Carbon\Carbon::createFromDate(2023,5,15)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,5,15)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Penyesuaian Tarif SIP Trunk',
                'start_date' => \Carbon\Carbon::createFromDate(2023,5,16)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,5,16)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'membuat constrain ke SIP Trunk',
                'start_date' => \Carbon\Carbon::createFromDate(2023,5,17)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,5,17)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => '[Meeting Online] Penyiapan FAB IT Tools penambahan fitur burstable Layanan IP Peering',
                'start_date' => \Carbon\Carbon::createFromDate(2023,5,19)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,5,19)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Menambahkan IP Peering Burstable IP Peering Installation NRC ke IP Transit',
                'start_date' => \Carbon\Carbon::createFromDate(2023,5,22)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,5,22)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Mengubah Attribute Max Value pada product IP Peering Burstable',
                'start_date' => \Carbon\Carbon::createFromDate(2023,5,23)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,5,23)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Bersama ini, kami sampaikan undangan dengan agenda pembahasan mapping ncx, tibs dan trems',
                'start_date' => \Carbon\Carbon::createFromDate(2023,5,24)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,5,24)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Test Mengubah Tarif ASTINet',
                'start_date' => \Carbon\Carbon::createFromDate(2023,5,25)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,5,25)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Menyesuaikan tarif ASTINet Fit dengan nota dinas',
                'start_date' => \Carbon\Carbon::createFromDate(2023,5,26)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,5,26)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Penyesuaian kebijakan tarif layanan di neucentrix',
                'start_date' => \Carbon\Carbon::createFromDate(2023,5,29)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,5,29)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Pra UAT Datacomm Product Q2 2023 ',
                'start_date' => \Carbon\Carbon::createFromDate(2023,5,30)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,5,30)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Diskusi Penyiapan FAB IT Tools layanan SCC 3.0 dan kesiapan UAT',
                'start_date' => \Carbon\Carbon::createFromDate(2023,5,31)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,5,31)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Menambahakan value baru pada attribute Location neuCentrIX Origin New Value : - Jakarta - Meruya New Value : - NeutraDC - Serpong',
                'start_date' => \Carbon\Carbon::createFromDate(2023,6,5)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,6,5)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Location neuCentrIX Destination New Value : - Jakarta - Meruya New Value : - NeutraDC - Serpong Name Attributed : NCIX Latency New Value : Protected',
                'start_date' => \Carbon\Carbon::createFromDate(2023,6,6)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,6,6)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Constraint LOV Location NeuCentrIX Origin Destination - Jakarta - Jatinegara',
                'start_date' => \Carbon\Carbon::createFromDate(2023,6,7)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,6,7)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => '[Meeting Online] UAT flow provisioining end to end SCC 3.0',
                'start_date' => \Carbon\Carbon::createFromDate(2023,6,7)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,6,9)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Membuat Order Dengan Product DDoS Protection',
                'start_date' => \Carbon\Carbon::createFromDate(2023,6,9)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,6,9)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => '[Meeting Online] Agenda : Show penyesuaian Activity Status Log',
                'start_date' => \Carbon\Carbon::createFromDate(2023,6,9)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,6,9)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => '[Meeting Online] Transfer Knowledge Enhancement C-CAREnt Deliverable II - Functionality C-CAREnt',
                'start_date' => \Carbon\Carbon::createFromDate(2023,6,9)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,6,9)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Membuat Order Dengan Product ASTINet Single IP SDWAN & VPN IP Netmonk (2 Orders)',
                'start_date' => \Carbon\Carbon::createFromDate(2023,6,12)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,6,12)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => '[Meeting ] UAT flow provisioining end to end SCC 3.0',
                'start_date' => \Carbon\Carbon::createFromDate(2023,6,12)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,6,14)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Membuat Activation Order 3 IP Transit WIC Lokasi STO : MDC Sumatera Latlong : 3.5833491233160633 98.66804122924806 Bandwidth : 500 Mbps Request IPv6 : no BW Performance : yes',
                'start_date' => \Carbon\Carbon::createFromDate(2023,6,12)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,6,12)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Mengubah Order SCC Netflix 450mbs ke 700mbps',
                'start_date' => \Carbon\Carbon::createFromDate(2023,6,13)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,6,13)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Diskusi Error yang terjadi pada perubahan order SCC Netflix 700mbps',
                'start_date' => \Carbon\Carbon::createFromDate(2023,6,13)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,6,13)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Koordinasi error pada order AO 2 SCC paket Bundle : Garena, Akamai, Conversant',
                'start_date' => \Carbon\Carbon::createFromDate(2023,6,14)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,6,14)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Mencari data LID, Service ID No Order melalui Query Database',
                'start_date' => \Carbon\Carbon::createFromDate(2023,6,14)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,6,14)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => '[Meeting On site] Diskusi Terkait Update Milestone Sequence via Database Query',
                'start_date' => \Carbon\Carbon::createFromDate(2023,6,14)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,6,14)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Mencari Query Untuk Cek Double Sequence via Database SQL',
                'start_date' => \Carbon\Carbon::createFromDate(2023,6,14)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,6,14)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Mencari Double Sequence via Database Query',
                'start_date' => \Carbon\Carbon::createFromDate(2023,6,14)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,6,14)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Mencari Null Milestone via Database Query',
                'start_date' => \Carbon\Carbon::createFromDate(2023,6,15)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,6,15)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Melakukan Backup Data Pada Milestone yang Memiliki Nila Null',
                'start_date' => \Carbon\Carbon::createFromDate(2023,6,15)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,6,15)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Memperbaiki Null Milestone via Database Query',
                'start_date' => \Carbon\Carbon::createFromDate(2023,6,15)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,6,15)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => 'Menambahkan milestone Fullfil billing complete yang tidak synchron antara root line item & child line item',
                'start_date' => \Carbon\Carbon::createFromDate(2023,6,15)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,6,15)->toDateTimeString(),
                'status' => 'completed',
            ],
            [
                'name' => '[Meeting On site] Finalisasi UAT & Review untuk VPN IP Netmonk & ASTINet Single IP SDWAN',
                'start_date' => \Carbon\Carbon::createFromDate(2023,6,15)->toDateTimeString(),
                'end_date' => \Carbon\Carbon::createFromDate(2023,6,26)->toDateTimeString(),
                'status' => 'completed',
            ],
            
            
        ];
        
        foreach ($activities as $activity) 
        {
            activity::create($activity);
        }
    }
}
