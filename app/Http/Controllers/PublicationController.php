<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function index()
    {
        return view('pages.publications.index');
    }

    public function show($id)
    {
        $paper = $this->getPaper((int)$id);

        if (!$paper) {
            return redirect('/publications');
        }

        return view('pages.publications.show', compact('paper'));
    }

    private function getPaper(int $id)
    {
        $papers = [
            1 => [
                'id' => 1,
                'title' => 'Hybrid Intrusion Detection System Using Machine Learning and Deep Learning',
                'year' => '2026',
                'badge_type' => 'MAKALAH KONFERENSI',
                'peer_reviewed' => true,
                'date' => 'Apr 2026',
                'topic' => 'Network Security',
                'category' => 'network-security',
                'authors' => [
                    ['name' => 'Dwi Okta Suryaningrum', 'affil' => '1'],
                    ['name' => 'Rio Adi Setiono', 'affil' => '1, 2'],
                    ['name' => 'Ahmad Fauzi', 'affil' => '1'],
                ],
                'affiliations' => [
                    '1' => 'Network and Environment Virtualization Laboratory (NEV Lab), Universitas Amikom Yogyakarta',
                    '2' => 'Department of Computer Science & Cybersecurity Research Group',
                ],
                'venue' => [
                    'name' => '2026 International Conference on Informatics and Computing (ICICIS)',
                    'short' => 'ICICIS',
                    'issn' => 'ISSN: 2477-XXXX • IEEE Xplore Digital Library',
                    'location' => 'Yogyakarta, Indonesia',
                    'date' => 'October 2026',
                    'publisher' => 'IEEE',
                ],
                'abstract' => 'Rapid advancements in modern network infrastructures and IoT deployment have significantly multiplied the surface for cyber threats and zero-day vulnerabilities. Conventional signature-based intrusion detection systems (IDS) struggle to identify novel attack vectors with minimal latency. In this paper, we propose a hybrid intrusion detection framework combining ensemble machine learning (Random Forest and XGBoost) for fast preliminary feature filtering and a deep learning convolutional bidirectional long short-term memory (CNN-BiLSTM) network for fine-grained sequential anomaly classification. Evaluated on the benchmark CIC-IDS2017 and NSL-KDD datasets, our model achieves an overall classification accuracy of 99.24% with a false positive rate reduced by 34.6% compared to baseline standalone architectures.',
                'keywords' => [
                    'Intrusion Detection System',
                    'Machine Learning',
                    'Deep Learning',
                    'Network Security',
                    'CNN-BiLSTM',
                    'Anomaly Detection',
                    'Threat Intelligence'
                ],
                'doi' => '10.1109/ICICIS.2026.1048291',
                'doi_url' => 'https://doi.org/10.1109/ICICIS.2026.1048291',
                'citation' => 'D. O. Suryaningrum, R. A. Setiono, and A. Fauzi, "Hybrid Intrusion Detection System Using Machine Learning and Deep Learning," in 2026 International Conference on Informatics and Computing (ICICIS), Yogyakarta, Indonesia, 2026, pp. 112-118.',
                'document_type' => 'Makalah Konferensi',
                'publication_year' => '2026',
                'research_group' => 'Laboratorium NEV',
                'license' => 'Terindeks Penerbit',
                'peer_review_status' => 'Telaah Anonim Ganda',
                'pages' => '112 - 118',
                'publisher_url' => 'https://ieeexplore.ieee.org',
                'contributions' => [
                    'Dwi Okta Suryaningrum: Conceptualization, deep learning model architecture, experiment execution, manuscript drafting.',
                    'Rio Adi Setiono: Network traffic dataset preprocessing, feature engineering pipeline, validation, manuscript review and supervision.',
                    'Ahmad Fauzi: Computational benchmarking, hyperparameter optimization, and formal comparative analysis.'
                ],
                'references' => [
                    'M. Tavallaee, E. Bagheri, W. Lu, and A. A. Ghorbani, "A detailed analysis of the KDD CUP 99 data set," in 2009 IEEE Symposium on Computational Intelligence for Security and Defense Applications, 2009, pp. 1-6.',
                    'I. Sharafaldin, A. H. Lashkari, and A. A. Ghorbani, "Toward generating a new intrusion detection dataset and intrusion traffic characterization," in ICISSP, 2018, pp. 108-116.',
                    'Z. Ahmad et al., "Network intrusion detection system: A systematic study of machine learning and deep learning approaches," Trans. Emerg. Telecommun. Technol., vol. 32, no. 1, p. e4150, 2021.',
                    'G. Carminati, R. Carminati, and M. Polino, "BankMarker: Simulating financial malware behavioral signatures," IEEE Trans. Inf. Forensics Security, 2020.',
                    'R. Vinayakumar et al., "Deep learning approach for intelligent intrusion detection system," IEEE Access, vol. 7, pp. 41525-41550, 2019.',
                    'S. M. Kasongo and Y. Sun, "A deep learning method with wrapper based feature extraction for wireless intrusion detection," Comput. Secur., vol. 92, p. 101752, 2020.',
                    'C. F. Tsai, Y. F. Hsu, C. Y. Lin, and W. Y. Lin, "Intrusion detection by machine learning: A review," Expert Syst. Appl., vol. 36, no. 10, pp. 11994-12000, 2009.',
                    'L. Yang, A. Moubayed, and A. Shami, "MTH-IDS: A multitiered hybrid intrusion detection system for internet of vehicles," IEEE Internet Things J., vol. 9, no. 1, pp. 616-632, 2022.',
                    'N. Moustafa and J. Slay, "UNSW-NB15: A comprehensive data set for network intrusion detection systems," in MilCIS, 2015, pp. 1-6.',
                    'M. Ring et al., "A survey of network-based intrusion detection data sets," Comput. Secur., vol. 86, pp. 147-167, 2019.',
                    'K. Scarfone and P. Mell, "Guide to intrusion detection and prevention systems (IDPS)," NIST Spec. Publ., 2007.',
                    'A. Aldweesh, A. Derhab, and A. Z. Emam, "Deep learning approaches for anomaly-based network intrusion detection systems: A review," Artif. Intell. Rev., vol. 53, no. 5, pp. 3171-3205, 2020.'
                ]
            ],
            2 => [
                'id' => 2,
                'title' => 'Development of Web-Based Event Management System Using Laravel Framework',
                'year' => '2026',
                'badge_type' => 'MAKALAH KONFERENSI',
                'peer_reviewed' => true,
                'date' => 'Mar 2026',
                'topic' => 'Web Development',
                'category' => 'web-dev',
                'authors' => [
                    ['name' => 'Nabila Putri', 'affil' => '1'],
                    ['name' => 'Dwi Okta Suryaningrum', 'affil' => '1, 2'],
                    ['name' => 'Budi Santoso', 'affil' => '1'],
                ],
                'affiliations' => [
                    '1' => 'Network and Environment Virtualization Laboratory (NEV Lab), Universitas Amikom Yogyakarta',
                    '2' => 'Department of Informatics Engineering & Software Architecture Lab',
                ],
                'venue' => [
                    'name' => '2026 International Conference on Information Technology (ICoT)',
                    'short' => 'ICoT',
                    'issn' => 'ISSN: 2548-YYYY • Springer CCIS Series',
                    'location' => 'Bandung, Indonesia',
                    'date' => 'March 2026',
                    'publisher' => 'Springer',
                ],
                'abstract' => 'Managing large-scale institutional academic conferences and internal organizational activities demands an agile, reliable, and secure web application. This research presents the design and implementation of an end-to-end event management platform leveraging the Laravel framework with asynchronous queue dispatching, automated QR code validation, and RESTful service integrations. Stress testing with Apache JMeter demonstrated continuous 99.98% uptime under concurrent 2,500 real-time check-in requests with an average response time of 142ms.',
                'keywords' => ['Web Development', 'Laravel Framework', 'Event Management', 'Software Engineering', 'REST API', 'QR Validation'],
                'doi' => '10.1007/978-3-030-89123-4_15',
                'doi_url' => 'https://doi.org/10.1007/978-3-030-89123-4_15',
                'citation' => 'N. Putri, D. O. Suryaningrum, and B. Santoso, "Development of Web-Based Event Management System Using Laravel Framework," in 2026 International Conference on Information Technology (ICoT), Bandung, Indonesia, 2026, pp. 88-94.',
                'document_type' => 'Makalah Konferensi',
                'publication_year' => '2026',
                'research_group' => 'Laboratorium NEV',
                'license' => 'Terindeks Penerbit',
                'peer_review_status' => 'Telaah Anonim Ganda',
                'pages' => '88 - 94',
                'publisher_url' => 'https://link.springer.com',
                'contributions' => [
                    'Nabila Putri: System architecture design, database schema modeling, front-end and back-end Laravel development.',
                    'Dwi Okta Suryaningrum: Security audit, API stress testing, code review, and paper manuscript revision.',
                    'Budi Santoso: User acceptance testing, deployment pipeline orchestration, and metrics evaluation.'
                ],
                'references' => [
                    'M. Stauffer, "Laravel: Up & Running: A Framework for Building Modern PHP Apps," O\'Reilly Media, 2019.',
                    'R. Pressman and B. Maxim, "Software Engineering: A Practitioner\'s Approach," McGraw-Hill Education, 2019.',
                    'E. Gamma et al., "Design Patterns: Elements of Reusable Object-Oriented Software," Addison-Wesley, 1994.',
                    'L. Bass, P. Clements, and R. Kazman, "Software Architecture in Practice," Addison-Wesley Professional, 2012.'
                ]
            ],
            3 => [
                'id' => 3,
                'title' => 'Analysis of Network Performance in IoT-Based Monitoring System',
                'year' => '2026',
                'badge_type' => 'MAKALAH KONFERENSI',
                'peer_reviewed' => true,
                'date' => 'Feb 2026',
                'topic' => 'IoT / Networking',
                'category' => 'iot',
                'authors' => [
                    ['name' => 'Muhammad Fadli', 'affil' => '1'],
                    ['name' => 'Rio Adi Setiono', 'affil' => '1, 2'],
                    ['name' => 'Nur Azizah', 'affil' => '1'],
                ],
                'affiliations' => [
                    '1' => 'Network and Environment Virtualization Laboratory (NEV Lab), Universitas Amikom Yogyakarta',
                    '2' => 'Telecommunications & Smart Sensing Network Group',
                ],
                'venue' => [
                    'name' => '2026 International Technology Conference (ITC)',
                    'short' => 'ITC',
                    'issn' => 'ISSN: 2356-ZZZZ • IEEE Xplore',
                    'location' => 'Surabaya, Indonesia',
                    'date' => 'February 2026',
                    'publisher' => 'IEEE',
                ],
                'abstract' => 'Internet of Things (IoT) monitoring systems require reliable telemetry transmission under constrained bandwidth and lossy wireless links. This empirical study analyzes Quality of Service (QoS) parameters including latency, jitter, throughput, and packet loss across MQTT, CoAP, and HTTP protocols deployed on ESP32 sensor clusters. Results indicate MQTT achieves the lowest packet drop rate (0.42%) in broker-mediated topology, making it optimal for continuous telemetry monitoring in smart laboratory environments.',
                'keywords' => ['IoT', 'Network Performance', 'MQTT', 'CoAP', 'QoS Analysis', 'Telemetry System', 'Wireless Sensor Network'],
                'doi' => '10.1109/ITC.2026.9823104',
                'doi_url' => 'https://doi.org/10.1109/ITC.2026.9823104',
                'citation' => 'M. Fadli, R. A. Setiono, and N. Azizah, "Analysis of Network Performance in IoT-Based Monitoring System," in 2026 International Technology Conference (ITC), Surabaya, Indonesia, 2026, pp. 201-207.',
                'document_type' => 'Makalah Konferensi',
                'publication_year' => '2026',
                'research_group' => 'Laboratorium NEV',
                'license' => 'Terindeks Penerbit',
                'peer_review_status' => 'Telaah Anonim Ganda',
                'pages' => '201 - 207',
                'publisher_url' => 'https://ieeexplore.ieee.org',
                'contributions' => [
                    'Muhammad Fadli: Hardware testbed deployment, sensor firmware programming, QoS data acquisition.',
                    'Rio Adi Setiono: Mathematical packet modeling, network telemetry instrumentation, paper supervision.',
                    'Nur Azizah: Statistical variance analysis, data visualization, and manuscript drafting.'
                ],
                'references' => [
                    'A. Al-Fuqaha et al., "Internet of things: A survey on enabling technologies, protocols, and applications," IEEE Commun. Surv. Tutorials, vol. 17, no. 4, pp. 2347-2376, 2015.',
                    'U. Hunkeler et al., "MQTT-S—A publish/subscribe protocol for Wireless Sensor Networks," in COMSNETS, 2008.',
                    'Z. Shelby, K. Hartke, and C. Bormann, "The Constrained Application Protocol (CoAP)," RFC 7252, 2014.'
                ]
            ],
            4 => [
                'id' => 4,
                'title' => 'User-Centered Design for Accessibility Application for Deaf and Mute Community',
                'year' => '2025',
                'badge_type' => 'MAKALAH KONFERENSI',
                'peer_reviewed' => true,
                'date' => 'Nov 2025',
                'topic' => 'Accessibility',
                'category' => 'others',
                'authors' => [
                    ['name' => 'Salsa Anindya', 'affil' => '1'],
                    ['name' => 'Dwi Okta Suryaningrum', 'affil' => '1, 2'],
                    ['name' => 'Hendra Pratama', 'affil' => '1'],
                ],
                'affiliations' => [
                    '1' => 'Network and Environment Virtualization Laboratory (NEV Lab), Universitas Amikom Yogyakarta',
                    '2' => 'Center for Inclusive Computing & Human-Computer Interaction',
                ],
                'venue' => [
                    'name' => '2025 International Conference on Informatics, Communication, and Information Technology (ICoICT)',
                    'short' => 'ICoICT',
                    'issn' => 'ISSN: 2338-8871 • IEEE Xplore',
                    'location' => 'Bali, Indonesia',
                    'date' => 'November 2025',
                    'publisher' => 'IEEE',
                ],
                'abstract' => 'Communication barriers faced by the deaf and mute community create substantial obstacles in educational and public service environments. Implementing an iterative User-Centered Design (UCD) framework, this paper develops a mobile assistive interface integrating real-time sign language recognition with tactile haptic feedback. Usability evaluation with 40 participants demonstrated a System Usability Scale (SUS) score increase from 62.4 to 86.8.',
                'keywords' => ['Accessibility', 'User-Centered Design', 'HCI', 'Sign Language Recognition', 'Inclusive UI/UX'],
                'doi' => '10.1109/ICoICT.2025.1012398',
                'doi_url' => 'https://doi.org/10.1109/ICoICT.2025.1012398',
                'citation' => 'S. Anindya, D. O. Suryaningrum, and H. Pratama, "User-Centered Design for Accessibility Application for Deaf and Mute Community," in 2025 International Conference on Informatics, Communication, and Information Technology (ICoICT), Bali, Indonesia, 2025, pp. 340-346.',
                'document_type' => 'Makalah Konferensi',
                'publication_year' => '2025',
                'research_group' => 'Laboratorium NEV',
                'license' => 'Terindeks Penerbit',
                'peer_review_status' => 'Telaah Anonim Ganda',
                'pages' => '340 - 346',
                'publisher_url' => 'https://ieeexplore.ieee.org',
                'contributions' => [
                    'Salsa Anindya: User research, persona creation, wireframing, high-fidelity UI prototype and SUS evaluation.',
                    'Dwi Okta Suryaningrum: Interaction design supervision, accessibility heuristics evaluation, paper drafting.',
                    'Hendra Pratama: Mobile front-end implementation and gesture sensor calibration.'
                ],
                'references' => [
                    'J. Nielsen, "Usability Engineering," Morgan Kaufmann, 1994.',
                    'J. Brooke, "SUS: A quick and dirty usability scale," Usability Eval. Ind., vol. 189, no. 194, pp. 4-7, 1996.'
                ]
            ],
            5 => [
                'id' => 5,
                'title' => 'Fuzzy Logic for Heart Disease Prediction Using Mamdani and Sugeno Method',
                'year' => '2025',
                'badge_type' => 'MAKALAH KONFERENSI',
                'peer_reviewed' => true,
                'date' => 'Oct 2025',
                'topic' => 'Data Science',
                'category' => 'data-science',
                'authors' => [
                    ['name' => 'Aulia Rahma', 'affil' => '1'],
                    ['name' => 'Muhammad Fadli', 'affil' => '1'],
                    ['name' => 'Dr. Bambang Kusumo', 'affil' => '2'],
                ],
                'affiliations' => [
                    '1' => 'Network and Environment Virtualization Laboratory (NEV Lab), Universitas Amikom Yogyakarta',
                    '2' => 'Medical Informatics Research Laboratory',
                ],
                'venue' => [
                    'name' => '2025 International Conference on Electrical Engineering, Telecommunication and Applied Computing (ICETEA)',
                    'short' => 'ICETEA',
                    'issn' => 'ISSN: 2715-4424 • AIP Conference Proceedings',
                    'location' => 'Semarang, Indonesia',
                    'date' => 'October 2025',
                    'publisher' => 'AIP Publishing',
                ],
                'abstract' => 'Heart disease remains one of the primary causes of worldwide mortality. This research compares the performance of Mamdani and Sugeno Fuzzy Inference Systems (FIS) in estimating cardiovascular disease risk from patient clinical markers (cholesterol, blood pressure, ECG, and maximum heart rate). Tested on the Cleveland Heart Disease Dataset, the Sugeno method achieved a diagnostic accuracy of 88.4% with lower computational overhead compared to Mamdani\'s 85.1%.',
                'keywords' => ['Fuzzy Logic', 'Heart Disease', 'Mamdani Method', 'Sugeno Method', 'Data Science', 'Healthcare Informatics'],
                'doi' => '10.1063/5.0192841',
                'doi_url' => 'https://doi.org/10.1063/5.0192841',
                'citation' => 'A. Rahma, M. Fadli, and B. Kusumo, "Fuzzy Logic for Heart Disease Prediction Using Mamdani and Sugeno Method," in AIP Conference Proceedings, Semarang, Indonesia, 2025, vol. 2940, pp. 040012.',
                'document_type' => 'Makalah Konferensi',
                'publication_year' => '2025',
                'research_group' => 'Laboratorium NEV',
                'license' => 'Terindeks Penerbit',
                'peer_review_status' => 'Ditelaah Sejawat',
                'pages' => '040012-1 - 040012-7',
                'publisher_url' => 'https://pubs.aip.org',
                'contributions' => [
                    'Aulia Rahma: Fuzzy membership functions formulation, defuzzification rules, accuracy validation.',
                    'Muhammad Fadli: Clinical dataset preprocessing, sensitivity analysis, manuscript formatting.',
                    'Dr. Bambang Kusumo: Medical domain validation, clinical insight interpretation, paper advisory.'
                ],
                'references' => [
                    'L. A. Zadeh, "Fuzzy sets," Inf. Control, vol. 8, no. 3, pp. 338-353, 1965.',
                    'E. H. Mamdani and S. Assilian, "An experiment in linguistic synthesis with a fuzzy logic controller," Int. J. Man-Mach. Stud., 1975.'
                ]
            ],
            6 => [
                'id' => 6,
                'title' => 'Redesigning BCA Mobile Application UI/UX for Better User Experience',
                'year' => '2025',
                'badge_type' => 'MAKALAH KONFERENSI',
                'peer_reviewed' => true,
                'date' => 'Aug 2025',
                'topic' => 'UI/UX',
                'category' => 'others',
                'authors' => [
                    ['name' => 'Dewi Lestari', 'affil' => '1'],
                    ['name' => 'Dwi Okta Suryaningrum', 'affil' => '1, 2'],
                    ['name' => 'Ferry Gunawan', 'affil' => '1'],
                ],
                'affiliations' => [
                    '1' => 'Network and Environment Virtualization Laboratory (NEV Lab), Universitas Amikom Yogyakarta',
                    '2' => 'Digital Experience & FinTech Innovation Group',
                ],
                'venue' => [
                    'name' => '2025 Indonesia UI/UX Conference (UIUX-ID)',
                    'short' => 'UI/UX Conference',
                    'issn' => 'ISSN: 2962-8199 • ACM Digital Library',
                    'location' => 'Jakarta, Indonesia',
                    'date' => 'August 2025',
                    'publisher' => 'ACM',
                ],
                'abstract' => 'Mobile banking apps serve millions of diverse demographic cohorts who expect intuitive information architecture. Using Design Thinking methodology, this study redesigns the user flow and visual hierarchy of the BCA Mobile application, targeting transaction speed and accessibility for elderly users. Prototype testing using Single Ease Question (SEQ) showed task completion time dropped by 41% while satisfaction scored 6.8 out of 7.0.',
                'keywords' => ['UI/UX', 'Design Thinking', 'Mobile Banking', 'FinTech', 'Usability Testing', 'Information Architecture'],
                'doi' => '10.1145/3610214.3610255',
                'doi_url' => 'https://doi.org/10.1145/3610214.3610255',
                'citation' => 'D. Lestari, D. O. Suryaningrum, and F. Gunawan, "Redesigning BCA Mobile Application UI/UX for Better User Experience," in 2025 Indonesia UI/UX Conference (UIUX-ID), Jakarta, 2025, pp. 55-61.',
                'document_type' => 'Makalah Konferensi',
                'publication_year' => '2025',
                'research_group' => 'Laboratorium NEV',
                'license' => 'Terindeks Penerbit',
                'peer_review_status' => 'Telaah Anonim Ganda',
                'pages' => '55 - 61',
                'publisher_url' => 'https://dl.acm.org',
                'contributions' => [
                    'Dewi Lestari: Empathize & define phases, user interviews, wireframing, high fidelity Figma prototype.',
                    'Dwi Okta Suryaningrum: Usability metrics analysis, heuristic review, academic writing.',
                    'Ferry Gunawan: Prototype micro-interactions and user testing facilitator.'
                ],
                'references' => [
                    'D. Norman, "The Design of Everyday Things: Revised and Expanded Edition," Basic Books, 2013.',
                    'T. Brown, "Change by Design: How Design Thinking Transforms Organizations," Harper Business, 2009.'
                ]
            ],
            7 => [
                'id' => 7,
                'title' => 'Secure File Sharing System with End-to-End Encryption',
                'year' => '2025',
                'badge_type' => 'MAKALAH KONFERENSI',
                'peer_reviewed' => true,
                'date' => 'Jun 2025',
                'topic' => 'Cyber Security',
                'category' => 'network-security',
                'authors' => [
                    ['name' => 'Rizky Maulana', 'affil' => '1'],
                    ['name' => 'Rio Adi Setiono', 'affil' => '1, 2'],
                    ['name' => 'Muhammad Fadli', 'affil' => '1'],
                ],
                'affiliations' => [
                    '1' => 'Network and Environment Virtualization Laboratory (NEV Lab), Universitas Amikom Yogyakarta',
                    '2' => 'Cryptography & Secure Systems Research Group',
                ],
                'venue' => [
                    'name' => 'Seminar Nasional Teknologi Informasi dan Aplikasinya (SINTA 2025)',
                    'short' => 'SINTA',
                    'issn' => 'ISSN: 2549-0419 • SINTA 2 Accredited',
                    'location' => 'Yogyakarta, Indonesia',
                    'date' => 'June 2025',
                    'publisher' => 'SINTA Press',
                ],
                'abstract' => 'Cloud-based document sharing faces persistent risks of unauthorized man-in-the-middle decryption and insider exfiltration. We present a Zero-Knowledge End-to-End Encrypted (E2EE) file exchange platform implementing hybrid AES-256-GCM authenticated cipher combined with RSA-4096 key agreement. Security verification confirms complete immunity against plaintext recovery even under total compromise of database server storage.',
                'keywords' => ['Cyber Security', 'End-to-End Encryption', 'AES-256', 'RSA-4096', 'Zero-Knowledge', 'Secure Storage'],
                'doi' => '10.21831/sinta.v9i1.5123',
                'doi_url' => 'https://doi.org/10.21831/sinta.v9i1.5123',
                'citation' => 'R. Maulana, R. A. Setiono, and M. Fadli, "Secure File Sharing System with End-to-End Encryption," in Seminar Nasional Teknologi Informasi dan Aplikasinya (SINTA), Yogyakarta, 2025, pp. 142-148.',
                'document_type' => 'Makalah Konferensi',
                'publication_year' => '2025',
                'research_group' => 'Laboratorium NEV',
                'license' => 'Akses Terbuka / SINTA 2',
                'peer_review_status' => 'Ditelaah Sejawat',
                'pages' => '142 - 148',
                'publisher_url' => 'https://sinta.kemdikbud.go.id',
                'contributions' => [
                    'Rizky Maulana: Cryptographic primitive implementation, WebCrypto API integration, back-end API.',
                    'Rio Adi Setiono: Cryptographic protocol threat modeling, formal security proofs, paper drafting.',
                    'Muhammad Fadli: Throughput benchmarking, encryption overhead profiling.'
                ],
                'references' => [
                    'W. Stallings, "Cryptography and Network Security: Principles and Practice," Pearson, 2017.',
                    'M. Dworkin, "Recommendation for Block Cipher Modes of Operation: Galois/Counter Mode (GCM)," NIST SP 800-38D, 2007.'
                ]
            ],
            8 => [
                'id' => 8,
                'title' => 'Performance Analysis of Routing Protocols in SDN Environment',
                'year' => '2024',
                'badge_type' => 'MAKALAH KONFERENSI',
                'peer_reviewed' => true,
                'date' => 'Dec 2024',
                'topic' => 'Networking',
                'category' => 'network-security',
                'authors' => [
                    ['name' => 'Bagas Wahyu', 'affil' => '1'],
                    ['name' => 'Raditya Rizki', 'affil' => '1'],
                    ['name' => 'Rio Adi Setiono', 'affil' => '1, 2'],
                ],
                'affiliations' => [
                    '1' => 'Network and Environment Virtualization Laboratory (NEV Lab), Universitas Amikom Yogyakarta',
                    '2' => 'Software Defined Networking Architecture Group',
                ],
                'venue' => [
                    'name' => '2024 International Conference on Network and Security (ICNSC)',
                    'short' => 'ICNSC',
                    'issn' => 'ISSN: 2475-4307 • IEEE Xplore',
                    'location' => 'Kuala Lumpur, Malaysia',
                    'date' => 'December 2024',
                    'publisher' => 'IEEE',
                ],
                'abstract' => 'Software-Defined Networking (SDN) decouples control logic from data forwarding hardware. In this study, we simulate and benchmark proactive and reactive routing controllers (Ryu and ONOS) across varying OpenFlow network topologies using Mininet. Results demonstrate ONOS exhibits 28% lower convergence delay during link failures, while Ryu delivers lower CPU utilization in small-to-medium enterprise topologies.',
                'keywords' => ['Software Defined Networking', 'OpenFlow', 'Mininet', 'ONOS Controller', 'Ryu Controller', 'Routing Protocols'],
                'doi' => '10.1109/ICNSC.2024.1084201',
                'doi_url' => 'https://doi.org/10.1109/ICNSC.2024.1084201',
                'citation' => 'B. Wahyu, R. Rizki, and R. A. Setiono, "Performance Analysis of Routing Protocols in SDN Environment," in 2024 International Conference on Network and Security (ICNSC), Kuala Lumpur, 2024, pp. 77-83.',
                'document_type' => 'Makalah Konferensi',
                'publication_year' => '2024',
                'research_group' => 'Laboratorium NEV',
                'license' => 'Terindeks Penerbit',
                'peer_review_status' => 'Telaah Anonim Ganda',
                'pages' => '77 - 83',
                'publisher_url' => 'https://ieeexplore.ieee.org',
                'contributions' => [
                    'Bagas Wahyu: Mininet topology construction, traffic injection script development, controller benchmarking.',
                    'Raditya Rizki: OpenFlow packet analysis, jitter and convergence latency logging.',
                    'Rio Adi Setiono: SDN topology architecture, research methodology, final paper supervision.'
                ],
                'references' => [
                    'N. McKeown et al., "OpenFlow: enabling innovation in campus networks," ACM SIGCOMM CCR, vol. 38, no. 2, pp. 69-74, 2008.',
                    'B. Lantz, B. Heller, and N. McKeown, "A network in a laptop: rapid prototyping for software-defined networks," in HotNets, 2010.'
                ]
            ],
            9 => [
                'id' => 9,
                'title' => 'Machine Learning for Malicious Website Detection',
                'year' => '2024',
                'badge_type' => 'MAKALAH KONFERENSI',
                'peer_reviewed' => true,
                'date' => 'Nov 2024',
                'topic' => 'Machine Learning',
                'category' => 'machine-learning',
                'authors' => [
                    ['name' => 'M. Abdad Mubarok', 'affil' => '1'],
                    ['name' => 'Danang Arifudin', 'affil' => '1'],
                    ['name' => 'Rio Adi Setiono', 'affil' => '1, 2'],
                ],
                'affiliations' => [
                    '1' => 'Network and Environment Virtualization Laboratory (NEV Lab), Universitas Amikom Yogyakarta',
                    '2' => 'Cyber Threat Intelligence & Machine Learning Lab',
                ],
                'venue' => [
                    'name' => '2024 International Conference on Computer Science (ICCS)',
                    'short' => 'ICCS',
                    'issn' => 'ISSN: 1865-0929 • Springer Nature',
                    'location' => 'Jakarta, Indonesia',
                    'date' => 'November 2024',
                    'publisher' => 'Springer',
                ],
                'abstract' => 'Phishing and drive-by malware websites cause catastrophic security breaches worldwide. This research proposes an automated lexical URL feature classification pipeline deploying LightGBM and Random Forest algorithms. Extracting 42 syntactic lexical and host-based features from 120,000 verified malicious and benign URLs, our model achieves a detection accuracy of 97.85% with an inference latency below 12 milliseconds per query.',
                'keywords' => ['Machine Learning', 'Malicious URL Detection', 'Cyber Security', 'Phishing Prevention', 'LightGBM', 'Feature Engineering'],
                'doi' => '10.1007/978-3-031-45678-9_22',
                'doi_url' => 'https://doi.org/10.1007/978-3-031-45678-9_22',
                'citation' => 'M. A. Mubarok, D. Arifudin, and R. A. Setiono, "Machine Learning for Malicious Website Detection," in 2024 International Conference on Computer Science (ICCS), Jakarta, 2024, pp. 210-217.',
                'document_type' => 'Makalah Konferensi',
                'publication_year' => '2024',
                'research_group' => 'Laboratorium NEV',
                'license' => 'Terindeks Penerbit',
                'peer_review_status' => 'Telaah Anonim Ganda',
                'pages' => '210 - 217',
                'publisher_url' => 'https://link.springer.com',
                'contributions' => [
                    'M. Abdad Mubarok: Lexical feature extraction pipeline, model training, cross-validation.',
                    'Danang Arifudin: URL corpus crawling and sanitization, confusion matrix evaluation.',
                    'Rio Adi Setiono: Algorithmic oversight, statistical significance verification, paper writing.'
                ],
                'references' => [
                    'J. Ma et al., "Identifying suspicious URLs: an application of large-scale online learning," in ICML, 2009.',
                    'G. Ke et al., "LightGBM: A highly efficient gradient boosting decision tree," in NeurIPS, 2017.'
                ]
            ],
            10 => [
                'id' => 10,
                'title' => 'Implementation of Smart Campus System Using IoT',
                'year' => '2024',
                'badge_type' => 'MAKALAH KONFERENSI',
                'peer_reviewed' => true,
                'date' => 'Sep 2024',
                'topic' => 'IoT',
                'category' => 'iot',
                'authors' => [
                    ['name' => 'Arjuna Eka', 'affil' => '1'],
                    ['name' => 'Masyul Khofif', 'affil' => '1'],
                    ['name' => 'Dwi Okta Suryaningrum', 'affil' => '1, 2'],
                ],
                'affiliations' => [
                    '1' => 'Network and Environment Virtualization Laboratory (NEV Lab), Universitas Amikom Yogyakarta',
                    '2' => 'Smart City and Embedded Systems Division',
                ],
                'venue' => [
                    'name' => '2024 International Conference on Smart Information Technology (ICeSiT)',
                    'short' => 'ICeSiT',
                    'issn' => 'ISSN: 2654-9128 • IEEE Xplore',
                    'location' => 'Yogyakarta, Indonesia',
                    'date' => 'September 2024',
                    'publisher' => 'IEEE',
                ],
                'abstract' => 'Smart campus infrastructure optimizes energy consumption and facility utilization through real-time environmental awareness. This work presents an integrated IoT framework deployed across campus classrooms, combining PIR motion detectors, DHT22 temperature sensors, and LoRaWAN gateways for automated HVAC and lighting regulation. Field deployment over 6 months demonstrated a 24.3% reduction in monthly electricity expenditures.',
                'keywords' => ['IoT', 'Smart Campus', 'LoRaWAN', 'Energy Efficiency', 'Sensors', 'Embedded Systems'],
                'doi' => '10.1109/ICeSiT.2024.1039841',
                'doi_url' => 'https://doi.org/10.1109/ICeSiT.2024.1039841',
                'citation' => 'A. Eka, M. Khofif, and D. O. Suryaningrum, "Implementation of Smart Campus System Using IoT," in 2024 International Conference on Smart Information Technology (ICeSiT), Yogyakarta, 2024, pp. 95-101.',
                'document_type' => 'Makalah Konferensi',
                'publication_year' => '2024',
                'research_group' => 'Laboratorium NEV',
                'license' => 'Terindeks Penerbit',
                'peer_review_status' => 'Telaah Anonim Ganda',
                'pages' => '95 - 101',
                'publisher_url' => 'https://ieeexplore.ieee.org',
                'contributions' => [
                    'Arjuna Eka: LoRaWAN sensor node engineering, microcontroller calibration, field deployment.',
                    'Masyul Khofif: Energy monitoring dashboard development, timeseries database schema.',
                    'Dwi Okta Suryaningrum: Project coordination, energy efficiency metrics analysis, paper drafting.'
                ],
                'references' => [
                    'F. Adelantado et al., "Understanding the limits of LoRaWAN," IEEE Commun. Mag., vol. 55, no. 9, pp. 34-40, 2017.',
                    'A. Zanella et al., "Internet of things for smart cities," IEEE Internet Things J., vol. 1, no. 1, pp. 22-32, 2014.'
                ]
            ],
            11 => [
                'id' => 11,
                'title' => 'Usability Evaluation of Academic Information System',
                'year' => '2024',
                'badge_type' => 'MAKALAH KONFERENSI',
                'peer_reviewed' => true,
                'date' => 'Aug 2024',
                'topic' => 'HCI',
                'category' => 'others',
                'authors' => [
                    ['name' => 'Naufal Auriga', 'affil' => '1'],
                    ['name' => 'Mellyta Dwi', 'affil' => '1'],
                    ['name' => 'Dwi Okta Suryaningrum', 'affil' => '1, 2'],
                ],
                'affiliations' => [
                    '1' => 'Network and Environment Virtualization Laboratory (NEV Lab), Universitas Amikom Yogyakarta',
                    '2' => 'Center for Human-Computer Interaction & User Studies',
                ],
                'venue' => [
                    'name' => '2024 International Conference on Human-Computer Interaction (HCI International)',
                    'short' => 'HCI International',
                    'issn' => 'ISSN: 1611-3349 • Springer LNCS',
                    'location' => 'Surabaya, Indonesia',
                    'date' => 'August 2024',
                    'publisher' => 'Springer',
                ],
                'abstract' => 'Academic Information Systems (AIS) are critical portals for student enrollment, grading, and faculty advisory. This study investigates usability bottlenecks using eye-tracking gaze analysis coupled with the System Usability Scale (SUS) across 150 student respondents. Findings uncover excessive cognitive load during course selection, culminating in actionable design recommendations that reduced mean task completion duration from 4.8 to 2.1 minutes.',
                'keywords' => ['HCI', 'Usability Evaluation', 'Academic Information System', 'Eye Tracking', 'System Usability Scale', 'Cognitive Load'],
                'doi' => '10.1007/978-3-031-62345-1_18',
                'doi_url' => 'https://doi.org/10.1007/978-3-031-62345-1_18',
                'citation' => 'N. Auriga, M. Dwi, and D. O. Suryaningrum, "Usability Evaluation of Academic Information System," in 2024 International Conference on Human-Computer Interaction (HCI International), Surabaya, 2024, pp. 134-141.',
                'document_type' => 'Makalah Konferensi',
                'publication_year' => '2024',
                'research_group' => 'Laboratorium NEV',
                'license' => 'Terindeks Penerbit',
                'peer_review_status' => 'Telaah Anonim Ganda',
                'pages' => '134 - 141',
                'publisher_url' => 'https://link.springer.com',
                'contributions' => [
                    'Naufal Auriga: Eye-tracking experiment methodology, heat-map fixation analysis, survey design.',
                    'Mellyta Dwi: Statistical data curation, SUS score computation, paper formatting.',
                    'Dwi Okta Suryaningrum: HCI theoretical frameworks guidance, critique and paper revision.'
                ],
                'references' => [
                    'K. Holmqvist et al., "Eye Tracking: A Comprehensive Guide to Methods and Measures," Oxford University Press, 2011.',
                    'J. R. Lewis, "The System Usability Scale: Past, Present, and Future," Int. J. Hum. Comput. Interact., 2018.'
                ]
            ],
            12 => [
                'id' => 12,
                'title' => 'Comparative Study of Blockchain Consensus Algorithms',
                'year' => '2024',
                'badge_type' => 'MAKALAH KONFERENSI',
                'peer_reviewed' => true,
                'date' => 'Jul 2024',
                'topic' => 'Blockchain',
                'category' => 'others',
                'authors' => [
                    ['name' => 'Biyan Naufal', 'affil' => '1'],
                    ['name' => 'Fatih Satrio', 'affil' => '1'],
                    ['name' => 'Rio Adi Setiono', 'affil' => '1, 2'],
                ],
                'affiliations' => [
                    '1' => 'Network and Environment Virtualization Laboratory (NEV Lab), Universitas Amikom Yogyakarta',
                    '2' => 'Distributed Ledger & Decentralized Computing Laboratory',
                ],
                'venue' => [
                    'name' => '2024 IEEE International Conference on Blockchain (Blockchain 2024)',
                    'short' => 'IEEE Blockchain',
                    'issn' => 'ISSN: 2640-3382 • IEEE Computer Society',
                    'location' => 'Bandung, Indonesia',
                    'date' => 'July 2024',
                    'publisher' => 'IEEE',
                ],
                'abstract' => 'Consensus protocols dictate the scalability, finality, and energy footprint of distributed ledger architectures. This comparative study benchmarks Proof of Work (PoW), Proof of Stake (PoS), and Practical Byzantine Fault Tolerance (PBFT) under varying network latency and node churn. PBFT demonstrated superior transactional throughput (up to 3,200 TPS) with sub-second finality in permissioned environments, while PoS exhibited the best resilience under heavy Byzantine node proportions.',
                'keywords' => ['Blockchain', 'Consensus Algorithms', 'PBFT', 'Proof of Stake', 'Distributed Systems', 'Scalability Analysis'],
                'doi' => '10.1109/Blockchain.2024.1029384',
                'doi_url' => 'https://doi.org/10.1109/Blockchain.2024.1029384',
                'citation' => 'B. Naufal, F. Satrio, and R. A. Setiono, "Comparative Study of Blockchain Consensus Algorithms," in 2024 IEEE International Conference on Blockchain, Bandung, 2024, pp. 165-172.',
                'document_type' => 'Makalah Konferensi',
                'publication_year' => '2024',
                'research_group' => 'Laboratorium NEV',
                'license' => 'Terindeks Penerbit',
                'peer_review_status' => 'Telaah Anonim Ganda',
                'pages' => '165 - 172',
                'publisher_url' => 'https://ieeexplore.ieee.org',
                'contributions' => [
                    'Biyan Naufal: Private testnet deployment, PBFT and PoS simulation, benchmarking harness.',
                    'Fatih Satrio: Network latency emulation, packet loss profiling, data charting.',
                    'Rio Adi Setiono: Cryptographic consensus theory, fault tolerance proof, manuscript review.'
                ],
                'references' => [
                    'S. Nakamoto, "Bitcoin: A Peer-to-Peer Electronic Cash System," 2008.',
                    'M. Castro and B. Liskov, "Practical Byzantine Fault Tolerance," in OSDI, 1999, pp. 173-186.',
                    'V. Buterin and V. Griffith, "Casper the Friendly Finality Gadget," arXiv:1710.09437, 2017.'
                ]
            ],
        ];

        return $papers[$id] ?? $papers[1];
    }
}
