// Data wilayah Indonesia untuk dropdown dependent
const indonesiaArea = {
    "ACEH": [
        "ACEH BARAT", "ACEH BARAT DAYA", "ACEH BESAR", "ACEH JAYA", "ACEH SELATAN",
        "ACEH SINGKIL", "ACEH TAMIANG", "ACEH TENGAH", "ACEH TENGGARA", "ACEH TIMUR",
        "ACEH UTARA", "BANDA ACEH", "BENER MERIAH", "BIREUEN", "GAYO LUES",
        "LANGSA", "LHOKSEUMAWE", "NAGAN RAYA", "PIDIE", "PIDIE JAYA",
        "SABANG", "SIMEULUE", "SUBULUSSALAM"
    ],
    "BALI": [
        "BADUNG", "BANGLI", "BULELENG", "DENPASAR", "GIANYAR",
        "JEMBRANA", "KARANGASEM", "KLUNGKUNG", "TABANAN"
    ],
    "BANTEN": [
        "CILEGON", "LEBAK", "PANDEGLANG", "SERANG", "SERANG KOTA",
        "TANGERANG", "TANGERANG KOTA", "TANGERANG SELATAN"
    ],
    "BENGKULU": [
        "BENGKULU", "BENGKULU SELATAN", "BENGKULU TENGAH", "BENGKULU UTARA",
        "KAUR", "KEPAHIANG", "LEBONG", "MUKO MUKO", "REJANG LEBONG", "SELUMA"
    ],
    "DI YOGYAKARTA": [
        "BANTUL", "GUNUNGKIDUL", "KULON PROGO", "SLEMAN", "YOGYAKARTA"
    ],
    "DKI JAKARTA": [
        "JAKARTA BARAT", "JAKARTA PUSAT", "JAKARTA SELATAN", "JAKARTA TIMUR", "JAKARTA UTARA",
        "KEPULAUAN SERIBU"
    ],
    "GORONTALO": [
        "BOALEMO", "BONE BOLANGO", "GORONTALO", "GORONTALO KOTA", "GORONTALO UTARA",
        "POHUWATO"
    ],
    "JAMBI": [
        "BATANGHARI", "BUNGO", "JAMBI", "KERINCI", "MERANGIN",
        "MUARO JAMBI", "SAROLANGUN", "SUNGAI PENUH", "TANJUNG JABUNG BARAT",
        "TANJUNG JABUNG TIMUR", "TEBO"
    ],
    "JAWA BARAT": [
        "BANDUNG", "BANDUNG BARAT", "BANJAR", "BEKASI", "BEKASI KOTA",
        "BOGOR", "BOGOR KOTA", "CIAMIS", "CIANJUR", "CIMAHI",
        "CIREBON", "CIREBON KOTA", "DEPOK", "GARUT", "INDRAMAYU",
        "KARAWANG", "KUNINGAN", "MAJALENGKA", "PANGANDARAN", "PURWAKARTA",
        "SUBANG", "SUKABUMI", "SUKABUMI KOTA", "SUMEDANG", "TASIKMALAYA",
        "TASIKMALAYA KOTA"
    ],
    "JAWA TENGAH": [
        "BANJARNEGARA", "BANYUMAS", "BATANG", "BLORA", "BOYOLALI",
        "BREBES", "CILACAP", "DEMAK", "GROBOGAN", "JEPARA",
        "KARANGANYAR", "KEBUMEN", "KENDAL", "KLATEN", "KUDUS",
        "MAGELANG", "MAGELANG KOTA", "PATI", "PEKALONGAN", "PEKALONGAN KOTA",
        "PEMALANG", "PURBALINGGA", "PURWOREJO", "REMBANG", "SALATIGA",
        "SEMARANG", "SEMARANG KOTA", "SRAGEN", "SUKOHARJO", "SURAKARTA",
        "TEGAL", "TEGAL KOTA", "TEMANGGUNG", "WONOGIRI", "WONOSOBO"
    ],
    "JAWA TIMUR": [
        "BANGKALAN", "BANYUWANGI", "BATU", "BLITAR", "BLITAR KOTA",
        "BOJONEGORO", "BONDOWOSO", "GRESIK", "JEMBER", "JOMBANG",
        "KEDIRI", "KEDIRI KOTA", "LAMONGAN", "LUMAJANG", "MADIUN",
        "MADIUN KOTA", "MAGETAN", "MALANG", "MALANG KOTA", "MOJOKERTO",
        "MOJOKERTO KOTA", "NGANJUK", "NGAWI", "PACITAN", "PAMEKASAN",
        "PASURUAN", "PASURUAN KOTA", "PONOROGO", "PROBOLINGGO", "PROBOLINGGO KOTA",
        "SAMPANG", "SIDOARJO", "SITUBONDO", "SUMENEP", "SURABAYA",
        "TRENGGALEK", "TUBAN", "TULUNGAGUNG"
    ],
    "KALIMANTAN BARAT": [
        "BENGKAYANG", "KAPUAS HULU", "KAYONG UTARA", "KETAPANG", "KUBU RAYA",
        "LANDAK", "MELAWI", "MEMPAWAH", "PONTIANAK", "SAMBAS",
        "SANGGAU", "SEKADAU", "SINGKAWANG", "SINTANG"
    ],
    "KALIMANTAN SELATAN": [
        "BALANGAN", "BANJAR", "BANJARBARU", "BANJARMASIN", "BARITO KUALA",
        "HULU SUNGAI SELATAN", "HULU SUNGAI TENGAH", "HULU SUNGAI UTARA", "KOTABARU", "TABALONG",
        "TANAH BUMBU", "TANAH LAUT", "TAPIN"
    ],
    "KALIMANTAN TENGAH": [
        "BARITO SELATAN", "BARITO TIMUR", "BARITO UTARA", "GUNUNG MAS", "KAPUAS",
        "KATINGAN", "KOTAWARINGIN BARAT", "KOTAWARINGIN TIMUR", "LAMANDAU", "MURUNG RAYA",
        "PALANGKARAYA", "PULANG PISAU", "SERUYAN", "SUKAMARA"
    ],
    "KALIMANTAN TIMUR": [
        "BALIKPAPAN", "BERAU", "BONTANG", "KUTAI BARAT", "KUTAI KARTANEGARA",
        "KUTAI TIMUR", "MAHAKAM ULU", "PASER", "PENAJAM PASER UTARA", "SAMARINDA"
    ],
    "KALIMANTAN UTARA": [
        "BULUNGAN", "MALINAU", "NUNUKAN", "TANA TIDUNG", "TARAKAN"
    ],
    "KEPULAUAN BANGKA BELITUNG": [
        "BANGKA", "BANGKA BARAT", "BANGKA SELATAN", "BANGKA TENGAH", "BELITUNG",
        "BELITUNG TIMUR", "PANGKAL PINANG"
    ],
    "KEPULAUAN RIAU": [
        "BATAM", "BINTAN", "KARIMUN", "KEPULAUAN ANAMBAS", "LINGGA",
        "NATUNA", "TANJUNG PINANG"
    ],
    "LAMPUNG": [
        "BANDAR LAMPUNG", "LAMPUNG BARAT", "LAMPUNG SELATAN", "LAMPUNG TENGAH", "LAMPUNG TIMUR",
        "LAMPUNG UTARA", "MESUJI", "METRO", "PESAWARAN", "PESISIR BARAT",
        "PRINGSEWU", "TANGGAMUS", "TULANG BAWANG", "TULANG BAWANG BARAT", "WAY KANAN"
    ],
    "MALUKU": [
        "AMBON", "BURU", "BURU SELATAN", "KEPULAUAN ARU", "MALUKU BARAT DAYA",
        "MALUKU TENGAH", "MALUKU TENGGARA", "MALUKU TENGGARA BARAT", "SERAM BAGIAN BARAT", "SERAM BAGIAN TIMUR",
        "TUAL"
    ],
    "MALUKU UTARA": [
        "HALMAHERA BARAT", "HALMAHERA TENGAH", "HALMAHERA TIMUR", "HALMAHERA SELATAN", "HALMAHERA UTARA",
        "KEPULAUAN SULA", "PULAU MOROTAI", "PULAU TALIABU", "TERNATE", "TIDORE KEPULAUAN"
    ],
    "NUSA TENGGARA BARAT": [
        "BIMA", "BIMA KOTA", "DOMPU", "LOMBOK BARAT", "LOMBOK TENGAH",
        "LOMBOK TIMUR", "LOMBOK UTARA", "MATARAM", "SUMBAWA", "SUMBAWA BARAT"
    ],
    "NUSA TENGGARA TIMUR": [
        "ALOR", "BELU", "ENDE", "FLORES TIMUR", "KUPANG",
        "KUPANG KOTA", "LEMBATA", "MALAKA", "MANGGARAI", "MANGGARAI BARAT",
        "MANGGARAI TIMUR", "NAGEKEO", "NGADA", "ROTE NDAO", "SABU RAIJUA",
        "SIKKA", "SUMBA BARAT", "SUMBA BARAT DAYA", "SUMBA TENGAH", "SUMBA TIMUR",
        "TIMOR TENGAH SELATAN", "TIMOR TENGAH UTARA"
    ],
    "PAPUA": [
        "ASMAT", "BIAK NUMFOR", "BOVEN DIGOEL", "DEIYAI", "DOGIYAI",
        "INTAN JAYA", "JAYAPURA", "JAYAPURA KOTA", "JAYAWIJAYA", "KEEROM",
        "KEPULAUAN YAPEN", "LANNY JAYA", "MAMBERAMO RAYA", "MAMBERAMO TENGAH", "MAPPI",
        "MERAUKE", "MIMIKA", "NABIRE", "NDUGA", "PANIAI",
        "PEGUNUNGAN BINTANG", "PUNCAK", "PUNCAK JAYA", "SARMI", "SUPIORI",
        "TOLIKARA", "WAROPEN", "YAHUKIMO", "YALIMO"
    ],
    "PAPUA BARAT": [
        "FAKFAK", "KAIMANA", "MANOKWARI", "MANOKWARI SELATAN", "MAYBRAT",
        "PEGUNUNGAN ARFAK", "RAJA AMPAT", "SORONG", "SORONG KOTA", "SORONG SELATAN",
        "TAMBRAUW", "TELUK BINTUNI", "TELUK WONDAMA"
    ],
    "RIAU": [
        "BENGKALIS", "DUMAI", "INDRAGIRI HILIR", "INDRAGIRI HULU", "KAMPAR",
        "KEPULAUAN MERANTI", "KUANTAN SINGINGI", "PEKANBARU", "PELALAWAN", "ROKAN HILIR",
        "ROKAN HULU", "SIAK"
    ],
    "SULAWESI BARAT": [
        "MAJENE", "MAMASA", "MAMUJU", "MAMUJU TENGAH", "PASANGKAYU",
        "POLEWALI MANDAR"
    ],
    "SULAWESI SELATAN": [
        "BANTAENG", "BARRU", "BONE", "BULUKUMBA", "ENREKANG",
        "GOWA", "JENEPONTO", "KEPULAUAN SELAYAR", "LUWU", "LUWU TIMUR",
        "LUWU UTARA", "MAKASSAR", "MAROS", "PALOPO", "PANGKAJENE KEPULAUAN",
        "PAREPARE", "PINRANG", "SIDENRENG RAPPANG", "SINJAI", "SOPPENG",
        "TAKALAR", "TANA TORAJA", "TORAJA UTARA", "WAJO"
    ],
    "SULAWESI TENGAH": [
        "BANGGAI", "BANGGAI KEPULAUAN", "BANGGAI LAUT", "BUOL", "DONGGALA",
        "MOROWALI", "MOROWALI UTARA", "PALU", "PARIGI MOUTONG", "POSO",
        "SIGI", "TOJO UNA-UNA", "TOLI-TOLI"
    ],
    "SULAWESI TENGGARA": [
        "BAU-BAU", "BOMBANA", "BUTON", "BUTON SELATAN", "BUTON TENGAH",
        "BUTON UTARA", "KENDARI", "KOLAKA", "KOLAKA TIMUR", "KOLAKA UTARA",
        "KONAWE", "KONAWE KEPULAUAN", "KONAWE SELATAN", "KONAWE UTARA", "MUNA",
        "MUNA BARAT", "WAKATOBI"
    ],
    "SULAWESI UTARA": [
        "BOLAANG MONGONDOW", "BOLAANG MONGONDOW SELATAN", "BOLAANG MONGONDOW TIMUR", "BOLAANG MONGONDOW UTARA", "KEPULAUAN SANGIHE",
        "KEPULAUAN SIAU TAGULANDANG BIARO", "KEPULAUAN TALAUD", "KOTAMOBAGU", "MANADO", "MINAHASA",
        "MINAHASA SELATAN", "MINAHASA TENGGARA", "MINAHASA UTARA", "TOMOHON"
    ],
    "SUMATERA BARAT": [
        "AGAM", "BUKITTINGGI", "DHARMASRAYA", "KEPULAUAN MENTAWAI", "LIMA PULUH KOTA",
        "PADANG", "PADANG PANJANG", "PADANG PARIAMAN", "PARIAMAN", "PASAMAN",
        "PASAMAN BARAT", "PAYAKUMBUH", "PESISIR SELATAN", "SAWAHLUNTO", "SIJUNJUNG",
        "SOLOK", "SOLOK KOTA", "SOLOK SELATAN", "TANAH DATAR"
    ],
    "SUMATERA SELATAN": [
        "BANYUASIN", "EMPAT LAWANG", "LAHAT", "LUBUK LINGGAU", "MUARA ENIM",
        "MUSI BANYUASIN", "MUSI RAWAS", "MUSI RAWAS UTARA", "OGAN ILIR", "OGAN KOMERING ILIR",
        "OGAN KOMERING ULU", "OGAN KOMERING ULU SELATAN", "OGAN KOMERING ULU TIMUR", "PAGAR ALAM", "PALEMBANG",
        "PENUKAL ABAB LEMATANG ILIR", "PRABUMULIH"
    ],
    "SUMATERA UTARA": [
        "ASAHAN", "BATUBARA", "BINJAI", "DAIRI", "DELI SERDANG",
        "GUNUNGSITOLI", "HUMBANG HASUNDUTAN", "KARO", "LABUHANBATU", "LABUHANBATU SELATAN",
        "LABUHANBATU UTARA", "LANGKAT", "MANDAILING NATAL", "MEDAN", "NIAS",
        "NIAS BARAT", "NIAS SELATAN", "NIAS UTARA", "PADANG LAWAS", "PADANG LAWAS UTARA",
        "PADANG SIDEMPUAN", "PAKPAK BHARAT", "PEMATANG SIANTAR", "SAMOSIR", "SERDANG BEDAGAI",
        "SIBOLGA", "SIMALUNGUN", "TANJUNG BALAI", "TAPANULI SELATAN", "TAPANULI TENGAH",
        "TAPANULI UTARA", "TEBING TINGGI", "TOBA SAMOSIR"
    ]
}; 