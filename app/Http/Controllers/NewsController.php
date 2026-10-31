<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class NewsController extends Controller
{
    public function index()
    {
        return view('news.index');
    }

    public function show($id)
    {
        $articles = $this->getAllArticles();
        $selected = $articles[$id] ?? $articles[1];
        $news = $this->arrayToObject($selected);

        // Trending articles (artikel lainnya yang direkomendasikan di sidebar)
        $trendingArticles = [];
        foreach ($articles as $artId => $art) {
            if ($artId != $news->id) {
                $trendingArticles[] = $this->arrayToObject($art);
            }
        }

        return view('pages.news.Readmore', compact('news', 'trendingArticles'));
    }

    /**
     * Konversi array artikel ke stdClass
     */
    private function arrayToObject($selected)
    {
        $obj = new \stdClass();
        $obj->id = $selected['id'];
        $obj->judul = $selected['judul'];
        $obj->deskripsi = $selected['deskripsi'];
        $obj->gambar_url = $selected['gambar_url'];
        $obj->gambar_list = $selected['gambar_list'] ?? [$selected['gambar_url']];
        $obj->kategori = $selected['kategori'];
        $obj->created_at = $selected['created_at'];
        $obj->tanggal_format = $selected['tanggal_format'] ?? '12 Des 2025';
        $obj->read_time = $selected['read_time'];
        $obj->anggota = $selected['anggota'];
        $obj->lead_text = $selected['lead_text'];
        $obj->paragraphs = $selected['paragraphs'];
        $obj->quote = $selected['quote'];
        $obj->tags = $selected['tags'];
        $obj->konten = collect([]);

        return $obj;
    }

    /**
     * Data artikel statis resmi NEV (Lengkap & Terverifikasi)
     */
    public function getAllArticles()
    {
        return [
            1 => [
                'id' => 1,
                'judul' => 'Recap of Studi Banding: Diskusi & Sharing Bersama Telkom University Bandung',
                'deskripsi' => "[RECAP OF STUDI BANDING]\n\nNetwork Evolution berkesempatan melakukan studi banding bersama mahasiswa dari Telkom University dalam sesi diskusi dan sharing mengenai pengembangan Adaptive Network Laboratory & Mobile Communication Laboratory🚀\n\nKegiatan ini menjadi momen berharga untuk saling bertukar wawasan, pengalaman, serta memperluas relasi dalam dunia teknologi dan jaringan. Semoga kolaborasi dan silaturahmi yang terjalin dapat membawa inovasi serta semangat baru untuk terus berkembang bersama 💡✨\n\nTerima kasih atas kunjungan dan sharing session yang luar biasa, NEVERS!\nSampai jumpa di kesempatan berikutnya 🙌",
                'gambar_url' => asset('images/news/studibanding-cover.jpg'),
                'gambar_list' => [
                    asset('images/news/studibanding-cover.jpg'),
                    asset('images/news/studibanding-slide2.jpg'),
                    asset('images/news/studibanding-diskusi.jpg'),
                    asset('images/news/studibanding-group.jpg'),
                ],
                'kategori' => 'STUDI BANDING',
                'created_at' => '2025-12-12',
                'tanggal_format' => 'Jumat, 12 Des 2025',
                'read_time' => '5 menit baca',
                'anggota' => (object)['nama' => 'Humas & Kemitraan'],
                'lead_text' => 'Network Evolution berkesempatan melakukan studi banding bersama mahasiswa dari Telkom University dalam sesi diskusi dan sharing mengenai pengembangan Adaptive Network Laboratory & Mobile Communication Laboratory 🚀',
                'paragraphs' => [
                    'Network Evolution berkesempatan melakukan studi banding bersama mahasiswa dari Telkom University dalam sesi diskusi dan sharing mengenai pengembangan Adaptive Network Laboratory & Mobile Communication Laboratory🚀',
                    'Kegiatan ini menjadi momen berharga untuk saling bertukar wawasan, pengalaman, serta memperluas relasi dalam dunia teknologi dan jaringan. Semoga kolaborasi dan silaturahmi yang terjalin dapat membawa inovasi serta semangat baru untuk terus berkembang bersama 💡✨',
                    'Diskusi hangat mencakup arsitektur server, manajemen laboratorium jaringan, riset bersama, hingga praktik terbaik pengelolaan sistem cloud lab berstandar industri.',
                    'Terima kasih atas kunjungan dan sharing session yang luar biasa, NEVERS! Sampai jumpa di kesempatan berikutnya 🙌'
                ],
                'quote' => 'Kolaborasi dan silaturahmi yang terjalin membawa inovasi serta semangat baru untuk terus berkembang bersama.',
                'tags' => ['#NetworkEvolution', '#NEVERS', '#StudiBanding', '#AdaptiveNetwork', '#TelkomUniversity', '#NetworkEngineering', '#Kolaborasi', '#OraKonekOraKepenak']
            ],
            2 => [
                'id' => 2,
                'judul' => 'Recap of Malam Keakraban: Mempererat Solidaritas & Rasa Kekeluargaan',
                'deskripsi' => "[RECAP OF MALAM KEAKRABAN]\n\nNetwork Evolution kembali mengadakan malam keakraban sebagai momen untuk mempererat solidaritas, membangun komunikasi, serta memperkuat rasa kekeluargaan antar anggota 🤝🔥\n\nMelalui kebersamaan, canda tawa, dan berbagai aktivitas yang dilakukan bersama, diharapkan seluruh anggota dapat semakin kompak dalam bertumbuh, belajar, dan berkembang bersama di lingkungan Network Evolution 🚀\n\nKarena bukan hanya tentang jaringan, tapi juga tentang membangun hubungan dan teamwork yang kuat 💡\n\nSee you on the next journey, NEVERS! 🙌",
                'gambar_url' => asset('images/news/makrab-cover.jpg'),
                'gambar_list' => [
                    asset('images/news/makrab-cover.jpg'),
                    asset('images/news/makrab-collage.jpg'),
                    asset('images/news/makrab-sate.jpg'),
                    asset('images/news/makrab-text.jpg'),
                ],
                'kategori' => 'MAKRAB',
                'created_at' => '2026-01-11',
                'tanggal_format' => 'Minggu, 11 Jan 2026',
                'read_time' => '4 menit baca',
                'anggota' => (object)['nama' => 'Divisi Internal'],
                'lead_text' => 'Network Evolution kembali mengadakan malam keakraban sebagai momen untuk mempererat solidaritas, membangun komunikasi, serta memperkuat rasa kekeluargaan antar anggota 🤝🔥',
                'paragraphs' => [
                    'Network Evolution kembali mengadakan malam keakraban sebagai momen untuk mempererat solidaritas, membangun komunikasi, serta memperkuat rasa kekeluargaan antar anggota 🤝🔥',
                    'Melalui kebersamaan, canda tawa, dan berbagai aktivitas yang dilakukan bersama, diharapkan seluruh anggota dapat semakin kompak dalam bertumbuh, belajar, dan berkembang bersama di lingkungan Network Evolution 🚀',
                    'Karena bukan hanya tentang jaringan, tapi juga tentang membangun hubungan dan teamwork yang kuat 💡',
                    'See you on the next journey, NEVERS! 🙌'
                ],
                'quote' => 'Bukan hanya tentang jaringan, tapi juga tentang membangun hubungan dan teamwork yang kuat.',
                'tags' => ['#NetworkEvolution', '#NEVERS', '#MalamKeakraban', '#Solidaritas', '#Kekeluargaan', '#TeamWork', '#OraKonekOraKepenak']
            ],
            3 => [
                'id' => 3,
                'judul' => 'Recap of Sharing Knowledge: Kolaborasi Bersama Adaptive Network Telkom University',
                'deskripsi' => "[RECAP OF SHARING KNOWLEDGE]\n\nNetwork Evolution kembali mengadakan kegiatan Sharing Knowledge sebagai wadah untuk berbagi wawasan, pengalaman, dan ilmu pengetahuan antar anggota 🚀\n\nMelalui kegiatan ini, peserta diajak untuk berdiskusi, belajar bersama, serta meningkatkan pemahaman mengenai berbagai topik yang relevan dalam dunia teknologi dan jaringan 💡✨\n\nSemoga kegiatan ini dapat terus menjadi ruang berkembang, bertukar ide, dan memperkuat semangat belajar bersama bagi seluruh anggota Network Evolution 🤝🔥\n\nKeep learning, keep growing, NEVERS! 🙌",
                'gambar_url' => asset('images/news/adaptive-1.jpg'),
                'gambar_list' => [
                    asset('images/news/adaptive-1.jpg'),
                    asset('images/news/adaptive-2.jpg'),
                    asset('images/news/adaptive-3.jpg'),
                ],
                'kategori' => 'SHARING KNOWLEDGE',
                'created_at' => '2025-12-13',
                'tanggal_format' => 'Sabtu, 13 Des 2025',
                'read_time' => '4 menit baca',
                'anggota' => (object)['nama' => 'Divisi Riset & Edukasi'],
                'lead_text' => 'Network Evolution kembali mengadakan kegiatan Sharing Knowledge sebagai wadah untuk berbagi wawasan, pengalaman, dan ilmu pengetahuan antar anggota 🚀',
                'paragraphs' => [
                    'Network Evolution kembali mengadakan kegiatan Sharing Knowledge sebagai wadah untuk berbagi wawasan, pengalaman, dan ilmu pengetahuan antar anggota 🚀',
                    'Melalui kegiatan ini, peserta diajak untuk berdiskusi, belajar bersama, serta meningkatkan pemahaman mengenai berbagai topik yang relevan dalam dunia teknologi dan jaringan 💡✨',
                    'Semoga kegiatan ini dapat terus menjadi ruang berkembang, bertukar ide, dan memperkuat semangat belajar bersama bagi seluruh anggota Network Evolution 🤝🔥',
                    'Keep learning, keep growing, NEVERS! 🙌'
                ],
                'quote' => 'Terus menjadi ruang berkembang, bertukar ide, dan memperkuat semangat belajar bersama bagi seluruh anggota Network Evolution.',
                'tags' => ['#NetworkEvolution', '#NEVERS', '#SharingKnowledge', '#AdaptiveNetwork', '#TelkomUniversity', '#BelajarBersama', '#OraKonekOraKepenak']
            ],
            4 => [
                'id' => 4,
                'judul' => 'Recap of Mini Research Expo HMTT 2026: Inovasi & Pengembangan Jaringan',
                'deskripsi' => "[RECAP OF MINI RESEARCH EXPO HMTT 2026]\n\nNetwork Evolution turut berpartisipasi dalam kegiatan Mini Research Expo HMTT 2026 sebagai wadah untuk memperkenalkan inovasi, riset, dan pengembangan di bidang teknologi serta jaringan 🌐✨\n\nMelalui kegiatan ini, peserta dapat saling bertukar ide, menampilkan hasil pengembangan, serta memperluas wawasan mengenai dunia riset dan teknologi yang terus berkembang 💡",
                'gambar_url' => asset('images/news/expo-cover.jpg'),
                'gambar_list' => [
                    asset('images/news/expo-cover.jpg'),
                    asset('images/news/expo-1.jpg'),
                    asset('images/news/expo-2.jpg'),
                    asset('images/news/expo-3.jpg'),
                ],
                'kategori' => 'RESEARCH EXPO',
                'created_at' => '2026-03-01',
                'tanggal_format' => 'Minggu, 01 Mar 2026',
                'read_time' => '4 menit baca',
                'anggota' => (object)['nama' => 'Tim Riset & Edukasi'],
                'lead_text' => 'Network Evolution turut berpartisipasi dalam kegiatan Mini Research Expo HMTT 2026 sebagai wadah untuk memperkenalkan inovasi, riset, dan pengembangan di bidang teknologi serta jaringan 🌐✨',
                'paragraphs' => [
                    'Network Evolution turut berpartisipasi dalam kegiatan Mini Research Expo HMTT 2026 sebagai wadah untuk memperkenalkan inovasi, riset, dan pengembangan di bidang teknologi serta jaringan 🌐✨',
                    'Melalui kegiatan ini, peserta dapat saling bertukar ide, menampilkan hasil pengembangan, serta memperluas wawasan mengenai dunia riset dan teknologi yang terus berkembang 💡',
                    'Kehadiran laboratorium Network Evolution di ajang ini menjadi bukti nyata komitmen riset mahasiswa dalam mengarungi dinamika teknologi telekomunikasi dan komputasi jaringan masa depan.'
                ],
                'quote' => 'Memperkenalkan inovasi, riset, dan pengembangan di bidang teknologi serta jaringan yang terus berkembang.',
                'tags' => ['#NetworkEvolution', '#NEVERS', '#MiniResearchExpo', '#HMTT2026', '#RisetJaringan', '#InovasiTeknologi', '#OraKonekOraKepenak']
            ],
            5 => [
                'id' => 5,
                'judul' => 'Recap of Pengabdian Masyarakat: Lomba Kompetensi Siswa (LKS) SMK 2026',
                'deskripsi' => "[RECAP OF PENGABDIAN MASYARAKAT — LOMBA KOMPETENSI SISWA (LKS) SMK 2026]\n\nNetwork Evolution turut berpartisipasi dalam kegiatan Pengabdian Masyarakat pada ajang Lomba Kompetensi Siswa (LKS) SMK 2026 sebagai bentuk kontribusi dalam mendukung pengembangan kompetensi dan semangat belajar siswa di bidang teknologi jaringan 🌐🚀\n\nMelalui kegiatan ini, anggota Network Evolution terlibat dalam pendampingan, persiapan, serta berbagi pengalaman dan wawasan. 💡✨\n\n🏆 Achievement:\n🥇 Juara 1 LKS INC Kabupaten Banyumas 2026\n🥉 Juara 3 LKS INC Provinsi Jawa Tengah 2026\n🥉 Juara 3 LKS INC Kabupaten Purbalingga 2026\n🥇 Juara 1 LKS ITNSA Kota Solo 2026\n\nPencapaian ini menjadi bukti kerja keras, dedikasi, dan semangat kolaborasi dalam mengembangkan potensi di bidang teknologi serta networking 🔥🤝\n\nSemoga prestasi dan pengalaman ini dapat terus menjadi motivasi untuk berkembang, berkarya, dan membawa nama baik Network Evolution ke tingkat yang lebih tinggi 🙌",
                'gambar_url' => asset('images/news/lks-1.jpg'),
                'gambar_list' => [
                    asset('images/news/lks-1.jpg'),
                    asset('images/news/lks-2.jpg'),
                    asset('images/news/lks-3.jpg'),
                    asset('images/news/lks-4.jpg'),
                ],
                'kategori' => 'PENGMAS',
                'created_at' => '2026-02-15',
                'tanggal_format' => 'Minggu, 15 Feb 2026',
                'read_time' => '4 menit baca',
                'anggota' => (object)['nama' => 'Divisi Pengabdian & Kemitraan'],
                'lead_text' => 'Network Evolution turut berpartisipasi dalam kegiatan Pengabdian Masyarakat pada ajang Lomba Kompetensi Siswa (LKS) SMK 2026 sebagai bentuk kontribusi dalam mendukung pengembangan kompetensi siswa di bidang teknologi jaringan 🌐🚀',
                'paragraphs' => [
                    'Network Evolution turut berpartisipasi dalam kegiatan Pengabdian Masyarakat pada ajang Lomba Kompetensi Siswa (LKS) SMK 2026 sebagai bentuk kontribusi dalam mendukung pengembangan kompetensi dan semangat belajar siswa di bidang teknologi jaringan 🌐🚀',
                    'Melalui kegiatan ini, anggota Network Evolution terlibat dalam pendampingan, persiapan teknis, serta berbagi pengalaman dan wawasan seputar implementasi jaringan komputer modern 💡✨',
                    "🏆 Achievement:\n• 🥇 Juara 1 LKS INC Kabupaten Banyumas 2026\n• 🥉 Juara 3 LKS INC Provinsi Jawa Tengah 2026\n• 🥉 Juara 3 LKS INC Kabupaten Purbalingga 2026\n• 🥇 Juara 1 LKS ITNSA Kota Solo 2026",
                    'Pencapaian ini menjadi bukti kerja keras, dedikasi, dan semangat kolaborasi dalam mengembangkan potensi di bidang teknologi serta networking 🔥🤝',
                    'Semoga prestasi dan pengalaman ini dapat terus menjadi motivasi untuk berkembang, berkarya, dan membawa nama baik Network Evolution ke tingkat yang lebih tinggi 🙌'
                ],
                'quote' => 'Pencapaian ini menjadi bukti kerja keras, dedikasi, dan semangat kolaborasi dalam mengembangkan potensi di bidang teknologi serta networking.',
                'tags' => ['#NetworkEvolution', '#NEVERS', '#PengmasNEV', '#LKSSMK2026', '#JuaraLKS', '#ITNetworking', '#OraKonekOraKepenak']
            ],
            6 => [
                'id' => 6,
                'judul' => 'Recap of Bootcamp: Mastering VPN — Building Your Own Gateway to the Internet',
                'deskripsi' => "[RECAP OF BOOTCAMP]\n\n“Mastering VPN: Building Your Own Gateway to the Internet”\n\nNetwork Evolution telah sukses menyelenggarakan Bootcamp Mastering VPN: Building Your Own Gateway to the Internet, sebuah kegiatan yang dirancang untuk memperdalam pemahaman peserta mengenai teknologi Virtual Private Network (VPN) serta implementasinya dalam membangun konektivitas jaringan yang aman dan andal 🚀\n\nMelalui sesi materi dan praktik langsung, peserta mempelajari konsep dasar VPN, konfigurasi layanan VPN, mekanisme tunneling, hingga penerapannya sebagai gateway untuk menghubungkan jaringan ke internet secara aman dan efisien 🔐🌍\n\nKegiatan ini menjadi wadah bagi anggota untuk meningkatkan kompetensi teknis, mengembangkan kemampuan problem solving, serta memperkuat pemahaman mengenai teknologi jaringan yang banyak digunakan dalam dunia industri saat ini 💡✨\n\nTerima kasih kepada seluruh peserta, pemateri, dan panitia yang telah berkontribusi dalam menyukseskan kegiatan ini. Semoga ilmu yang diperoleh dapat menjadi bekal untuk terus belajar, berkembang, dan berinovasi di bidang networking 🙌🔥",
                'gambar_url' => asset('images/news/bootcamp-1.jpg'),
                'gambar_list' => [
                    asset('images/news/bootcamp-1.jpg'),
                    asset('images/news/bootcamp-2.jpg'),
                    asset('images/news/bootcamp-3.jpg'),
                    asset('images/news/bootcamp-4.jpg'),
                ],
                'kategori' => 'BOOTCAMP',
                'created_at' => '2026-02-28',
                'tanggal_format' => 'Sabtu, 28 Feb 2026',
                'read_time' => '5 menit baca',
                'anggota' => (object)['nama' => 'Divisi Pelatihan & Riset'],
                'lead_text' => 'Network Evolution sukses menyelenggarakan Bootcamp Mastering VPN: Building Your Own Gateway to the Internet untuk memperdalam pemahaman teknologi tunneling dan konektivitas jaringan yang aman dan andal 🚀',
                'paragraphs' => [
                    'Network Evolution telah sukses menyelenggarakan Bootcamp “Mastering VPN: Building Your Own Gateway to the Internet”, sebuah kegiatan yang dirancang untuk memperdalam pemahaman peserta mengenai teknologi Virtual Private Network (VPN) serta implementasinya dalam membangun konektivitas jaringan yang aman dan andal 🚀',
                    'Melalui sesi materi dan praktik langsung, peserta mempelajari konsep dasar VPN, konfigurasi layanan VPN, mekanisme tunneling, hingga penerapannya sebagai gateway untuk menghubungkan jaringan ke internet secara aman dan efisien 🔐🌍',
                    'Kegiatan ini menjadi wadah bagi anggota untuk meningkatkan kompetensi teknis, mengembangkan kemampuan problem solving, serta memperkuat pemahaman mengenai teknologi jaringan yang banyak digunakan dalam dunia industri saat ini 💡✨',
                    'Terima kasih kepada seluruh peserta, pemateri, dan panitia yang telah berkontribusi dalam menyukseskan kegiatan ini. Semoga ilmu yang diperoleh dapat menjadi bekal untuk terus belajar, berkembang, dan berinovasi di bidang networking 🙌🔥'
                ],
                'quote' => 'Membangun konektivitas jaringan yang aman, andal, dan efisien melalui penguasaan teknologi tunneling VPN masa kini.',
                'tags' => ['#NetworkEvolution', '#NEVERS', '#BootcampVPN', '#MasteringVPN', '#Tunneling', '#NetworkSecurity', '#OraKonekOraKepenak']
            ],
            7 => [
                'id' => 7,
                'judul' => 'Studi Banding: UKM ITC FMIPA UNSOED x NEV Telkom Purwokerto',
                'deskripsi' => "[STUDI BANDING | UKM ITC FMIPA UNSOED x NEV TELKOM PURWOKERTO]\n\n🗓️ Minggu, 03 Mei 2026\n\nSatu pertemuan, banyak pengalaman dan inspirasi.\nMelalui kegiatan studi banding ini, UKM ITC FMIPA UNSOED bersama NEV Telkom Purwokerto saling berbagi wawasan, pengalaman, serta inovasi dalam bidang teknologi dan pengembangan organisasi.\n\nDiskusi yang terjalin menjadi ruang untuk belajar bersama, memperluas relasi, dan membangun semangat kolaborasi demi menciptakan generasi yang adaptif dan kreatif di era digital.\n\nTerima kasih atas sambutan hangat dan kesempatan berdiskusi yang penuh makna.\nSemoga silaturahmi dan kolaborasi ini terus terjalin serta membawa dampak positif ke depannya 🚀",
                'gambar_url' => asset('images/news/stuban-1.jpg'),
                'gambar_list' => [
                    asset('images/news/stuban-1.jpg'),
                    asset('images/news/stuban-2.jpg'),
                    asset('images/news/stuban-3.jpg'),
                    asset('images/news/stuban-4.jpg'),
                ],
                'kategori' => 'STUDI BANDING',
                'created_at' => '2026-05-03',
                'tanggal_format' => 'Minggu, 03 Mei 2026',
                'read_time' => '4 menit baca',
                'anggota' => (object)['nama' => 'Humas & Kemitraan'],
                'lead_text' => 'Satu pertemuan, banyak pengalaman dan inspirasi dalam kolaborasi studi banding UKM ITC FMIPA UNSOED bersama NEV Telkom Purwokerto 🚀',
                'paragraphs' => [
                    'Satu pertemuan, banyak pengalaman dan inspirasi. Melalui kegiatan studi banding ini, UKM ITC FMIPA UNSOED bersama NEV Telkom Purwokerto saling berbagi wawasan, pengalaman, serta inovasi dalam bidang teknologi dan pengembangan organisasi.',
                    'Diskusi yang terjalin menjadi ruang untuk belajar bersama, memperluas relasi, dan membangun semangat kolaborasi demi menciptakan generasi yang adaptif dan kreatif di era digital.',
                    'Terima kasih atas sambutan hangat dan kesempatan berdiskusi yang penuh makna. Semoga silaturahmi dan kolaborasi ini terus terjalin serta membawa dampak positif ke depannya 🚀'
                ],
                'quote' => 'Membangun semangat kolaborasi demi menciptakan generasi yang adaptif dan kreatif di era digital.',
                'tags' => ['#NetworkEvolution', '#NEVERS', '#StudiBanding', '#ITCUNSOED', '#UNSOED', '#TelkomPurwokerto', '#Kolaborasi', '#OraKonekOraKepenak']
            ],
            8 => [
                'id' => 8,
                'judul' => 'Open Recruitment Calon Anggota Baru Network Evolution 2026 / 2027',
                'deskripsi' => "[OPEN RECRUITMENT CALON ANGGOTA BARU NEV 2026]\n\nNetwork Evolution resmi membuka pendaftaran Calon Anggota Baru angkatan 2026/2027 untuk bergabung dalam riset laboratorium komputasi jaringan terdepan 🚀\n\nPersiapkan dirimu dan jadilah bagian dari keluarga besar Network Evolution! Ora Konek Ora Kepenak 🙌🔥",
                'gambar_url' => asset('images/news/AYP09997.JPG'),
                'gambar_list' => [
                    asset('images/news/AYP09997.JPG'),
                    asset('images/news/AYP09972.JPG'),
                    asset('images/news/news-team-banner.jpg'),
                    asset('images/dummy/hero-lab.jpg'),
                ],
                'kategori' => 'OPREC NEV',
                'created_at' => '2026-10-29',
                'tanggal_format' => 'Kamis, 29 Okt 2026',
                'read_time' => '4 menit baca',
                'anggota' => (object)['nama' => 'Panitia OPREC NEV'],
                'lead_text' => 'Network Evolution (NEV) resmi membuka pendaftaran Calon Anggota Baru angkatan 2026/2027 untuk bergabung dalam riset laboratorium komputasi jaringan terdepan 🚀',
                'paragraphs' => [
                    'Network Evolution (NEV) resmi membuka pendaftaran Calon Anggota Baru angkatan 2026/2027. Sebagai kelompok riset dan laboratorium unggulan di bidang jaringan komputer, telekomunikasi, dan keamanan siber, NEV mengajak mahasiswa bertalenta untuk bertumbuh bersama.',
                    'Tahapan seleksi meliputi pendaftaran daring, pengumpulan berkas portofolio, workshop pengenalan teknologi laboratorium, serta sesi wawancara dan uji kompetensi dasar.',
                    'Bergabung bersama NEV memberikan akses langsung ke perangkat laboratorium canggih, bimbingan riset publikasi ilmiah, kesempatan studi banding, hingga sertifikasi industri berstandar global.',
                    'Persiapkan dirimu dan jadilah bagian dari keluarga besar Network Evolution! Ora Konek Ora Kepenak 🙌🔥'
                ],
                'quote' => 'Membangun masa depan teknologi jaringan melalui riset, integritas, dan semangat kolaborasi tanpa batas.',
                'tags' => ['#NetworkEvolution', '#NEVERS', '#OprecNEV2026', '#JoinNEV', '#LaboratoriumJaringan', '#OraKonekOraKepenak']
            ],
            9 => [
                'id' => 9,
                'judul' => 'Open Laboratory: Meet The Lab & Eksplorasi Riset NETSEC',
                'deskripsi' => "[OPEN LABORATORY NEV]\n\nMeet The Lab & Eksplorasi Riset NETSEC bersama asisten laboratorium dan peneliti muda Network Evolution 🌐💡",
                'gambar_url' => asset('images/dummy/hero-lab.jpg'),
                'gambar_list' => [
                    asset('images/dummy/hero-lab.jpg'),
                    asset('images/news/AYP09972.JPG'),
                    asset('images/news/AYP09997.JPG'),
                    asset('images/dummy/hero-1.jpg'),
                ],
                'kategori' => 'OPEN LABORATORY',
                'created_at' => '2026-10-24',
                'tanggal_format' => 'Sabtu, 24 Okt 2026',
                'read_time' => '4 menit baca',
                'anggota' => (object)['nama' => 'Divisi Riset & Edukasi'],
                'lead_text' => 'Open Laboratory NEV menjadi ajang pengenalan infrastruktur riset jaringan, arsitektur server, dan demonstrasi pengujian keamanan siber NETSEC 🌐💡',
                'paragraphs' => [
                    'Laboratorium Network Evolution sukses menyelenggarakan agenda Open Laboratory bertajuk “Meet The Lab & Eksplorasi Riset NETSEC” di ruang Lab NETSEC.',
                    'Dalam agenda ini, peserta diajak berkeliling melihat langsung infrastruktur rack server, perangkat routing & switching enterprise, serta demonstrasi simulasi serangan siber dan mitigasi pertahanan jaringan.',
                    'Sesi interaktif dipandu langsung oleh para koordinator divisi dan asisten laboratorium yang berbagi pengalaman riset serta tips berkarier di industri jaringan telekomunikasi.',
                    'Terima kasih atas antusiasme luar biasa dari seluruh mahasiswa yang hadir. Sampai jumpa di agenda laboratorium selanjutnya!'
                ],
                'quote' => 'Melihat langsung dapur riset teknologi jaringan dan keamanan informasi masa depan.',
                'tags' => ['#NetworkEvolution', '#NEVERS', '#OpenLaboratory', '#LabNETSEC', '#RisetJaringan', '#CyberSecurity', '#OraKonekOraKepenak']
            ]
        ];
    }
}
