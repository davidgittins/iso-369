<?php

namespace ISO639;

class ISO639
{
    /*
     * Language database, based on Wikipedia.
     * Source: https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes
     */
    protected $languages = array(
        array('ab', 'abk', 'abk', 'abk', 'Abkhaz', 'аҧсуа бызшәа, аҧсшәа', 'ltr'),
        array('aa', 'aar', 'aar', 'aar', 'Afar', 'Afaraf', 'ltr'),
        array('af', 'afr', 'afr', 'afr', 'Afrikaans', 'Afrikaans', 'ltr'),
        array('ak', 'aka', 'aka', 'aka', 'Akan', 'Akan', 'ltr'),
        array('sq', 'sqi', 'alb', 'sqi', 'Albanian', 'Shqip', 'ltr'),
        array('am', 'amh', 'amh', 'amh', 'Amharic', 'አማርኛ', 'ltr'),
        array('ar', 'ara', 'ara', 'ara', 'Arabic', 'العربية', 'rtl'),
        array('an', 'arg', 'arg', 'arg', 'Aragonese', 'aragonés', 'ltr'),
        array('hy', 'hye', 'arm', 'hye', 'Armenian', 'Հայերեն', 'ltr'),
        array('as', 'asm', 'asm', 'asm', 'Assamese', 'অসমীয়া', 'ltr'),
        array('av', 'ava', 'ava', 'ava', 'Avaric', 'авар мацӀ, магӀарул мацӀ', 'ltr'),
        array('ae', 'ave', 'ave', 'ave', 'Avestan', 'avesta', 'ltr'),
        array('ay', 'aym', 'aym', 'aym', 'Aymara', 'aymar aru', 'ltr'),
        array('az', 'aze', 'aze', 'aze', 'Azerbaijani', 'azərbaycan dili', 'ltr'),
        array('bm', 'bam', 'bam', 'bam', 'Bambara', 'bamanankan', 'ltr'),
        array('ba', 'bak', 'bak', 'bak', 'Bashkir', 'башҡорт теле', 'ltr'),
        array('eu', 'eus', 'baq', 'eus', 'Basque', 'euskara, euskera', 'ltr'),
        array('be', 'bel', 'bel', 'bel', 'Belarusian', 'беларуская мова', 'ltr'),
        array('bn', 'ben', 'ben', 'ben', 'Bengali, Bangla', 'বাংলা', 'ltr'),
        array('bh', 'bih', 'bih', '', 'Bihari', 'भोजपुरी', 'ltr'),
        array('bi', 'bis', 'bis', 'bis', 'Bislama', 'Bislama', 'ltr'),
        array('bs', 'bos', 'bos', 'bos', 'Bosnian', 'bosanski jezik', 'ltr'),
        array('br', 'bre', 'bre', 'bre', 'Breton', 'brezhoneg', 'ltr'),
        array('bg', 'bul', 'bul', 'bul', 'Bulgarian', 'български език', 'ltr'),
        array('my', 'mya', 'bur', 'mya', 'Burmese', 'ဗမာစာ', 'ltr'),
        array('ca', 'cat', 'cat', 'cat', 'Catalan', 'català', 'ltr'),
        array('ch', 'cha', 'cha', 'cha', 'Chamorro', 'Chamoru', 'ltr'),
        array('ce', 'che', 'che', 'che', 'Chechen', 'нохчийн мотт', 'ltr'),
        array('ny', 'nya', 'nya', 'nya', 'Chichewa, Chewa, Nyanja', 'chiCheŵa, chinyanja', 'ltr'),
        array('zh', 'zho', 'chi', 'zho', 'Chinese', '中文 (Zhōngwén), 汉语, 漢語', 'ltr'),
        array('cv', 'chv', 'chv', 'chv', 'Chuvash', 'чӑваш чӗлхи', 'ltr'),
        array('kw', 'cor', 'cor', 'cor', 'Cornish', 'Kernewek', 'ltr'),
        array('co', 'cos', 'cos', 'cos', 'Corsican', 'corsu, lingua corsa', 'ltr'),
        array('cr', 'cre', 'cre', 'cre', 'Cree', 'ᓀᐦᐃᔭᐍᐏᐣ', 'ltr'),
        array('hr', 'hrv', 'hrv', 'hrv', 'Croatian', 'hrvatski jezik', 'ltr'),
        array('cs', 'ces', 'cze', 'ces', 'Czech', 'čeština, český jazyk', 'ltr'),
        array('da', 'dan', 'dan', 'dan', 'Danish', 'dansk', 'ltr'),
        array('dv', 'div', 'div', 'div', 'Divehi, Dhivehi, Maldivian', 'ދިވެހި', 'rtl'),
        array('nl', 'nld', 'dut', 'nld', 'Dutch', 'Nederlands, Vlaams', 'ltr'),
        array('dz', 'dzo', 'dzo', 'dzo', 'Dzongkha', 'རྫོང་ཁ', 'ltr'),
        array('en', 'eng', 'eng', 'eng', 'English', 'English', 'ltr'),
        array('eo', 'epo', 'epo', 'epo', 'Esperanto', 'Esperanto', 'ltr'),
        array('et', 'est', 'est', 'est', 'Estonian', 'eesti, eesti keel', 'ltr'),
        array('ee', 'ewe', 'ewe', 'ewe', 'Ewe', 'Eʋegbe', 'ltr'),
        array('fo', 'fao', 'fao', 'fao', 'Faroese', 'føroyskt', 'ltr'),
        array('fj', 'fij', 'fij', 'fij', 'Fijian', 'vosa Vakaviti', 'ltr'),
        array('fi', 'fin', 'fin', 'fin', 'Finnish', 'suomi, suomen kieli', 'ltr'),
        array('fr', 'fra', 'fre', 'fra', 'French', 'français, langue française', 'ltr'),
        array('ff', 'ful', 'ful', 'ful', 'Fula, Fulah, Pulaar, Pular', 'Fulfulde, Pulaar, Pular', 'ltr'),
        array('gl', 'glg', 'glg', 'glg', 'Galician', 'galego', 'ltr'),
        array('ka', 'kat', 'geo', 'kat', 'Georgian', 'ქართული', 'ltr'),
        array('de', 'deu', 'ger', 'deu', 'German', 'Deutsch', 'ltr'),
        array('el', 'ell', 'gre', 'ell', 'Greek (modern)', 'ελληνικά', 'ltr'),
        array('gn', 'grn', 'grn', 'grn', 'Guaraní', 'Avañe\'ẽ', 'ltr'),
        array('gu', 'guj', 'guj', 'guj', 'Gujarati', 'ગુજરાતી', 'ltr'),
        array('ht', 'hat', 'hat', 'hat', 'Haitian, Haitian Creole', 'Kreyòl ayisyen', 'ltr'),
        array('ha', 'hau', 'hau', 'hau', 'Hausa', '(Hausa) هَوُسَ', 'rtl'),
        array('he', 'heb', 'heb', 'heb', 'Hebrew (modern)', 'עברית', 'rtl'),
        array('hz', 'her', 'her', 'her', 'Herero', 'Otjiherero', 'ltr'),
        array('hi', 'hin', 'hin', 'hin', 'Hindi', 'हिन्दी, हिंदी', 'ltr'),
        array('ho', 'hmo', 'hmo', 'hmo', 'Hiri Motu', 'Hiri Motu', 'ltr'),
        array('hu', 'hun', 'hun', 'hun', 'Hungarian', 'magyar', 'ltr'),
        array('ia', 'ina', 'ina', 'ina', 'Interlingua', 'Interlingua', 'ltr'),
        array('id', 'ind', 'ind', 'ind', 'Indonesian', 'Bahasa Indonesia', 'ltr'),
        array('ie', 'ile', 'ile', 'ile', 'Interlingue', 'Originally called Occidental; then Interlingue after WWII', 'ltr'),
        array('ga', 'gle', 'gle', 'gle', 'Irish', 'Gaeilge', 'ltr'),
        array('ig', 'ibo', 'ibo', 'ibo', 'Igbo', 'Asụsụ Igbo', 'ltr'),
        array('ik', 'ipk', 'ipk', 'ipk', 'Inupiaq', 'Iñupiaq, Iñupiatun', 'ltr'),
        array('io', 'ido', 'ido', 'ido', 'Ido', 'Ido', 'ltr'),
        array('is', 'isl', 'ice', 'isl', 'Icelandic', 'Íslenska', 'ltr'),
        array('it', 'ita', 'ita', 'ita', 'Italian', 'italiano', 'ltr'),
        array('iu', 'iku', 'iku', 'iku', 'Inuktitut', 'ᐃᓄᒃᑎᑐᑦ', 'ltr'),
        array('ja', 'jpn', 'jpn', 'jpn', 'Japanese', '日本語 (にほんご)', 'ltr'),
        array('jv', 'jav', 'jav', 'jav', 'Javanese', 'basa Jawa', 'ltr'),
        array('kl', 'kal', 'kal', 'kal', 'Kalaallisut, Greenlandic', 'kalaallisut, kalaallit oqaasii', 'ltr'),
        array('kn', 'kan', 'kan', 'kan', 'Kannada', 'ಕನ್ನಡ', 'ltr'),
        array('kr', 'kau', 'kau', 'kau', 'Kanuri', 'Kanuri', 'ltr'),
        array('ks', 'kas', 'kas', 'kas', 'Kashmiri', 'कश्मीरी, كشميري‎', 'rtl'),
        array('kk', 'kaz', 'kaz', 'kaz', 'Kazakh', 'қазақ тілі', 'ltr'),
        array('km', 'khm', 'khm', 'khm', 'Khmer', 'ខ្មែរ, ខេមរភាសា, ភាសាខ្មែរ', 'ltr'),
        array('ki', 'kik', 'kik', 'kik', 'Kikuyu, Gikuyu', 'Gĩkũyũ', 'ltr'),
        array('rw', 'kin', 'kin', 'kin', 'Kinyarwanda', 'Ikinyarwanda', 'ltr'),
        array('ky', 'kir', 'kir', 'kir', 'Kyrgyz', 'Кыргызча, Кыргыз тили', 'ltr'),
        array('kv', 'kom', 'kom', 'kom', 'Komi', 'коми кыв', 'ltr'),
        array('kg', 'kon', 'kon', 'kon', 'Kongo', 'Kikongo', 'ltr'),
        array('ko', 'kor', 'kor', 'kor', 'Korean', '한국어, 조선어', 'ltr'),
        array('ku', 'kur', 'kur', 'kur', 'Kurdish', 'Kurdî, كوردی‎', 'rtl'),
        array('kj', 'kua', 'kua', 'kua', 'Kwanyama, Kuanyama', 'Kuanyama', 'ltr'),
        array('la', 'lat', 'lat', 'lat', 'Latin', 'latine, lingua latina', 'ltr'),
        array('', '', '', 'lld', 'Ladin', 'ladin, lingua ladina', 'ltr'),
        array('lb', 'ltz', 'ltz', 'ltz', 'Luxembourgish, Letzeburgesch', 'Lëtzebuergesch', 'ltr'),
        array('lg', 'lug', 'lug', 'lug', 'Ganda', 'Luganda', 'ltr'),
        array('li', 'lim', 'lim', 'lim', 'Limburgish, Limburgan, Limburger', 'Limburgs', 'ltr'),
        array('ln', 'lin', 'lin', 'lin', 'Lingala', 'Lingála', 'ltr'),
        array('lo', 'lao', 'lao', 'lao', 'Lao', 'ພາສາລາວ', 'ltr'),
        array('lt', 'lit', 'lit', 'lit', 'Lithuanian', 'lietuvių kalba', 'ltr'),
        array('lu', 'lub', 'lub', 'lub', 'Luba-Katanga', 'Tshiluba', 'ltr'),
        array('lv', 'lav', 'lav', 'lav', 'Latvian', 'latviešu valoda', 'ltr'),
        array('gv', 'glv', 'glv', 'glv', 'Manx', 'Gaelg, Gailck', 'ltr'),
        array('mk', 'mkd', 'mac', 'mkd', 'Macedonian', 'македонски јазик', 'ltr'),
        array('mg', 'mlg', 'mlg', 'mlg', 'Malagasy', 'fiteny malagasy', 'ltr'),
        array('ms', 'msa', 'may', 'msa', 'Malay', 'bahasa Melayu, بهاس ملايو‎', 'ltr'),
        array('ml', 'mal', 'mal', 'mal', 'Malayalam', 'മലയാളം', 'ltr'),
        array('mt', 'mlt', 'mlt', 'mlt', 'Maltese', 'Malti', 'ltr'),
        array('mi', 'mri', 'mao', 'mri', 'Māori', 'te reo Māori', 'ltr'),
        array('mr', 'mar', 'mar', 'mar', 'Marathi (Marāṭhī)', 'मराठी', 'ltr'),
        array('mh', 'mah', 'mah', 'mah', 'Marshallese', 'Kajin M̧ajeļ', 'ltr'),
        array('mn', 'mon', 'mon', 'mon', 'Mongolian', 'монгол', 'ltr'),
        array('na', 'nau', 'nau', 'nau', 'Nauru', 'Ekakairũ Naoero', 'ltr'),
        array('nv', 'nav', 'nav', 'nav', 'Navajo, Navaho', 'Diné bizaad', 'ltr'),
        array('nd', 'nde', 'nde', 'nde', 'Northern Ndebele', 'isiNdebele', 'ltr'),
        array('ne', 'nep', 'nep', 'nep', 'Nepali', 'नेपाली', 'ltr'),
        array('ng', 'ndo', 'ndo', 'ndo', 'Ndonga', 'Owambo', 'ltr'),
        array('nb', 'nob', 'nob', 'nob', 'Norwegian Bokmål', 'Norsk bokmål', 'ltr'),
        array('nn', 'nno', 'nno', 'nno', 'Norwegian Nynorsk', 'Norsk nynorsk', 'ltr'),
        array('no', 'nor', 'nor', 'nor', 'Norwegian', 'Norsk', 'ltr'),
        array('ii', 'iii', 'iii', 'iii', 'Nuosu', 'ꆈꌠ꒿ Nuosuhxop', 'ltr'),
        array('nr', 'nbl', 'nbl', 'nbl', 'Southern Ndebele', 'isiNdebele', 'ltr'),
        array('oc', 'oci', 'oci', 'oci', 'Occitan', 'occitan, lenga d\'òc', 'ltr'),
        array('oj', 'oji', 'oji', 'oji', 'Ojibwe, Ojibwa', 'ᐊᓂᔑᓈᐯᒧᐎᓐ', 'ltr'),
        array('cu', 'chu', 'chu', 'chu', 'Old Church Slavonic, Church Slavonic, Old Bulgarian', 'ѩзыкъ словѣньскъ', 'ltr'),
        array('om', 'orm', 'orm', 'orm', 'Oromo', 'Afaan Oromoo', 'ltr'),
        array('or', 'ori', 'ori', 'ori', 'Oriya', 'ଓଡ଼ିଆ', 'ltr'),
        array('os', 'oss', 'oss', 'oss', 'Ossetian, Ossetic', 'ирон æвзаг', 'ltr'),
        array('pa', 'pan', 'pan', 'pan', 'Panjabi, Punjabi', 'ਪੰਜਾਬੀ, پنجابی‎', 'ltr'),
        array('pi', 'pli', 'pli', 'pli', 'Pāli', 'पाऴि', 'ltr'),
        array('fa', 'fas', 'per', 'fas', 'Persian (Farsi)', 'فارسی', 'rtl'),
        array('pl', 'pol', 'pol', 'pol', 'Polish', 'język polski, polszczyzna', 'ltr'),
        array('ps', 'pus', 'pus', 'pus', 'Pashto, Pushto', 'پښتو', 'rtl'),
        array('pt', 'por', 'por', 'por', 'Portuguese', 'português', 'ltr'),
        array('qu', 'que', 'que', 'que', 'Quechua', 'Runa Simi, Kichwa', 'ltr'),
        array('rm', 'roh', 'roh', 'roh', 'Romansh', 'rumantsch grischun', 'ltr'),
        array('rn', 'run', 'run', 'run', 'Kirundi', 'Ikirundi', 'ltr'),
        array('ro', 'ron', 'rum', 'ron', 'Romanian', 'limba română', 'ltr'),
        array('ru', 'rus', 'rus', 'rus', 'Russian', 'Русский', 'ltr'),
        array('sa', 'san', 'san', 'san', 'Sanskrit (Saṁskṛta)', 'संस्कृतम्', 'ltr'),
        array('sc', 'srd', 'srd', 'srd', 'Sardinian', 'sardu', 'ltr'),
        array('sd', 'snd', 'snd', 'snd', 'Sindhi', 'सिन्धी, سنڌي، سندھی‎', 'rtl'),
        array('se', 'sme', 'sme', 'sme', 'Northern Sami', 'Davvisámegiella', 'ltr'),
        array('sm', 'smo', 'smo', 'smo', 'Samoan', 'gagana fa\'a Samoa', 'ltr'),
        array('sg', 'sag', 'sag', 'sag', 'Sango', 'yângâ tî sängö', 'ltr'),
        array('sr', 'srp', 'srp', 'srp', 'Serbian', 'српски језик', 'ltr'),
        array('gd', 'gla', 'gla', 'gla', 'Scottish Gaelic, Gaelic', 'Gàidhlig', 'ltr'),
        array('sn', 'sna', 'sna', 'sna', 'Shona', 'chiShona', 'ltr'),
        array('si', 'sin', 'sin', 'sin', 'Sinhala, Sinhalese', 'සිංහල', 'ltr'),
        array('sk', 'slk', 'slo', 'slk', 'Slovak', 'slovenčina, slovenský jazyk', 'ltr'),
        array('sl', 'slv', 'slv', 'slv', 'Slovene', 'slovenski jezik, slovenščina', 'ltr'),
        array('so', 'som', 'som', 'som', 'Somali', 'Soomaaliga, af Soomaali', 'ltr'),
        array('st', 'sot', 'sot', 'sot', 'Southern Sotho', 'Sesotho', 'ltr'),
        array('es', 'spa', 'spa', 'spa', 'Spanish', 'español', 'ltr'),
        array('su', 'sun', 'sun', 'sun', 'Sundanese', 'Basa Sunda', 'ltr'),
        array('sw', 'swa', 'swa', 'swa', 'Swahili', 'Kiswahili', 'ltr'),
        array('ss', 'ssw', 'ssw', 'ssw', 'Swati', 'SiSwati', 'ltr'),
        array('sv', 'swe', 'swe', 'swe', 'Swedish', 'svenska', 'ltr'),
        array('ta', 'tam', 'tam', 'tam', 'Tamil', 'தமிழ்', 'ltr'),
        array('te', 'tel', 'tel', 'tel', 'Telugu', 'తెలుగు', 'ltr'),
        array('tg', 'tgk', 'tgk', 'tgk', 'Tajik', 'тоҷикӣ, toçikī, تاجیکی‎', 'ltr'),
        array('th', 'tha', 'tha', 'tha', 'Thai', 'ไทย', 'ltr'),
        array('ti', 'tir', 'tir', 'tir', 'Tigrinya', 'ትግርኛ', 'ltr'),
        array('bo', 'bod', 'tib', 'bod', 'Tibetan Standard, Tibetan, Central', 'བོད་ཡིག', 'ltr'),
        array('tk', 'tuk', 'tuk', 'tuk', 'Turkmen', 'Türkmen, Түркмен', 'ltr'),
        array('tl', 'tgl', 'tgl', 'tgl', 'Tagalog', 'Wikang Tagalog, ᜏᜒᜃᜅ᜔ ᜆᜄᜎᜓᜄ᜔', 'ltr'),
        array('tn', 'tsn', 'tsn', 'tsn', 'Tswana', 'Setswana', 'ltr'),
        array('to', 'ton', 'ton', 'ton', 'Tonga (Tonga Islands)', 'faka Tonga', 'ltr'),
        array('tr', 'tur', 'tur', 'tur', 'Turkish', 'Türkçe', 'ltr'),
        array('ts', 'tso', 'tso', 'tso', 'Tsonga', 'Xitsonga', 'ltr'),
        array('tt', 'tat', 'tat', 'tat', 'Tatar', 'татар теле, tatar tele', 'ltr'),
        array('tw', 'twi', 'twi', 'twi', 'Twi', 'Twi', 'ltr'),
        array('ty', 'tah', 'tah', 'tah', 'Tahitian', 'Reo Tahiti', 'ltr'),
        array('ug', 'uig', 'uig', 'uig', 'Uyghur', 'ئۇيغۇرچە‎, Uyghurche', 'ltr'),
        array('uk', 'ukr', 'ukr', 'ukr', 'Ukrainian', 'українська мова', 'ltr'),
        array('ur', 'urd', 'urd', 'urd', 'Urdu', 'اردو', 'rtl'),
        array('uz', 'uzb', 'uzb', 'uzb', 'Uzbek', 'Oʻzbek, Ўзбек, أۇزبېك‎', 'ltr'),
        array('ve', 'ven', 'ven', 'ven', 'Venda', 'Tshivenḓa', 'ltr'),
        array('vi', 'vie', 'vie', 'vie', 'Vietnamese', 'Việt Nam', 'ltr'),
        array('vo', 'vol', 'vol', 'vol', 'Volapük', 'Volapük', 'ltr'),
        array('wa', 'wln', 'wln', 'wln', 'Walloon', 'walon', 'ltr'),
        array('cy', 'cym', 'wel', 'cym', 'Welsh', 'Cymraeg', 'ltr'),
        array('wo', 'wol', 'wol', 'wol', 'Wolof', 'Wollof', 'ltr'),
        array('fy', 'fry', 'fry', 'fry', 'Western Frisian', 'Frysk', 'ltr'),
        array('xh', 'xho', 'xho', 'xho', 'Xhosa', 'isiXhosa', 'ltr'),
        array('yi', 'yid', 'yid', 'yid', 'Yiddish', 'ייִדיש', 'rtl'),
        array('yo', 'yor', 'yor', 'yor', 'Yoruba', 'Yorùbá', 'ltr'),
        array('za', 'zha', 'zha', 'zha', 'Zhuang, Chuang', 'Saɯ cueŋƅ, Saw cuengh', 'ltr'),
        array('zu', 'zul', 'zul', 'zul', 'Zulu', 'isiZulu', 'ltr'),
    );

    public $indexIso639_1 = 0;
    public $indexIso639_2t = 1;
    public $indexIso639_2b = 2;
    public $indexIso639_3 = 3;
    public $indexEnglishName = 4;
    public $indexNativeName = 5;
    public $indexDirection = 6;

    /*
     * Get all language data
     *
     * @return (array)
    */
    public function allLanguages()
    {
        return $this->languages;
    }

    /*
     * Get language name from ISO-639-1 (two-letters code)
     *
     * @return (string)
     */
    public function languageByCode1($code)
    {
        $code = strtolower(trim($code));

        foreach ($this->languages as $lang) {
            if ($lang[$this->indexIso639_1] === $code) {
                return $lang[$this->indexEnglishName];
            }
        }

        return '';
    }

    /*
     * Get native language name from ISO-639-1 (two-letters code)
     *
     * @return (string)
     */
    public function nativeByCode1($code)
    {
        $code = strtolower(trim($code));

        foreach ($this->languages as $lang) {
            if ($lang[$this->indexIso639_1] === $code) {
                return $lang[$this->indexNativeName];
            }
        }

        return '';
    }

    /*
     * Get language direction from ISO-639-1 (two-letters code)
     *
     * @return (string)
     */
    public function directionByCode1($code)
    {
        $code = strtolower(trim($code));

        foreach ($this->languages as $lang) {
            if ($lang[$this->indexIso639_1] === $code) {
                return $lang[$this->indexDirection];
            }
        }

        return '';
    }

    /*
     * Get language name from ISO-639-2/t (three-letter codes) terminologic
     *
     * @return (string)
     */
    public function languageByCode2t($code)
    {
        $code = strtolower(trim($code));

        foreach ($this->languages as $lang) {
            if ($lang[$this->indexIso639_2t] === $code) {
                return $lang[$this->indexEnglishName];
            }
        }

        return '';
    }

    /*
     * Get native language name from ISO-639-2/t (three-letter codes) terminologic
     *
     * @return (string)
     */
    public function nativeByCode2t($code)
    {
        $code = strtolower(trim($code));

        foreach ($this->languages as $lang) {
            if ($lang[$this->indexIso639_2t] === $code) {
                return $lang[$this->indexNativeName];
            }
        }

        return '';
    }

    /*
     * Get language direction from ISO-639-2/t (three-letter codes) terminologic
     *
     * @return (string)
     */
    public function directionByCode2t($code)
    {
        $code = strtolower(trim($code));

        foreach ($this->languages as $lang) {
            if ($lang[$this->indexIso639_2t] === $code) {
                return $lang[$this->indexDirection];
            }
        }

        return '';
    }

    /*
     * Get language name from ISO-639-2/b (three-letter codes) bibliographic
     *
     * @return (string)
     */
    public function languageByCode2b($code)
    {
        $code = strtolower(trim($code));

        foreach ($this->languages as $lang) {
            if ($lang[$this->indexIso639_2b] === $code) {
                return $lang[$this->indexEnglishName];
            }
        }

        return '';
    }

    /*
     * Get native language name from ISO-639-2/b (three-letter codes) bibliographic
     *
     * @return (string)
     */
    public function nativeByCode2b($code)
    {
        $code = strtolower(trim($code));

        foreach ($this->languages as $lang) {
            if ($lang[$this->indexIso639_2b] === $code) {
                return $lang[$this->indexNativeName];
            }
        }

        return '';
    }

    /*
     * Get language direction from ISO-639-2/b (three-letter codes) bibliographic
     *
     * @return (string)
     */
    public function directionByCode2b($code)
    {
        $code = strtolower(trim($code));

        foreach ($this->languages as $lang) {
            if ($lang[$this->indexIso639_2b] === $code) {
                return $lang[$this->indexDirection];
            }
        }

        return '';
    }

    /*
     * Get language name from ISO-639-3 (three-letter codes)
     *
     * @return (string)
     */
    public function languageByCode3($code)
    {
        $code = strtolower(trim($code));

        foreach ($this->languages as $lang) {
            if ($lang[$this->indexIso639_3] === $code) {
                return $lang[$this->indexEnglishName];
            }
        }

        return '';
    }

    /*
     * Get native language name from ISO-639-3 (three-letter codes)
     *
     * @return (string)
     */
    public function nativeByCode3($code)
    {
        $code = strtolower(trim($code));

        foreach ($this->languages as $lang) {
            if ($lang[$this->indexIso639_3] === $code) {
                return $lang[$this->indexNativeName];
            }
        }

        return '';
    }

    /*
     * Get language direction from ISO-639-3 (three-letter codes)
     *
     * @return (string)
     */
    public function directionByCode3($code)
    {
        $code = strtolower(trim($code));

        foreach ($this->languages as $lang) {
            if ($lang[$this->indexIso639_3] === $code) {
                return $lang[$this->indexDirection];
            }
        }

        return '';
    }

    /*
     * Get ISO-639-1 (two-letters code) from language name
     *
     * @return (string)
     */
    public function code1ByLanguage($language)
    {
        $language_key = ucwords(strtolower($language));

        foreach ($this->languages as $lang) {
            if (in_array($language_key, explode(', ', $lang[$this->indexEnglishName]))) {
                return $lang[$this->indexIso639_1];
            }
        }

        return '';
    }

    /*
     * Get ISO-639-2/t (three-letter codes) terminologic from language name
     *
     * @return (string)
     */
    public function code2tByLanguage($language)
    {
        $language_key = ucwords(strtolower($language));


        foreach ($this->languages as $lang) {
            if (in_array($language_key, explode(', ', $lang[$this->indexEnglishName]))) {
                return $lang[$this->indexIso639_2t];
            }
        }

        return '';
    }

    /*
     * Get ISO-639-2/b (three-letter codes) bibliographic from language name
     *
     * @return (string)
     */
    public function code2bByLanguage($language)
    {
        $language_key = ucwords(strtolower($language));

        foreach ($this->languages as $lang) {
            if (in_array($language_key, explode(', ', $lang[$this->indexEnglishName]))) {
                return $lang[$this->indexIso639_2b];
                break;
            }
        }

        return '';
    }

    /*
     * Get ISO-639-3 (three-letter codes) from language name
     *
     * @return (string)
     */
    public function code3ByLanguage($language)
    {
        $language_key = ucwords(strtolower($language));

        foreach ($this->languages as $lang) {
            if (in_array($language_key, explode(', ', $lang[$this->indexEnglishName]))) {
                return $lang[$this->indexIso639_3];
            }
        }

        return '';
    }

    /**
     * Gat language array from ISO-639-2/b (three-letter code)
     *
     * @param $code
     * @return array|null
     */
    public function getLanguageByIsoCode2b($code)
    {
        $code = strtolower(trim($code));

        foreach ($this->languages as $lang) {
            if ($lang[$this->indexIso639_2b] === $code) {
                return $lang;
            }
        }

        return null;
    }

}