<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class CreateModelsTest extends TestCase
{
    public function testCreateTelecastList()
    {
        $telecastList = new \Observatby\TelecastVault\Models\TelecastList(
            [
                new \Observatby\TelecastVault\Models\Telecast(
                    "Вместе",
                    "Все самое главное за неделю.",
                    "Все самое главное за неделю.",
                    new \Observatby\TelecastVault\Models\Leader(
                        "Екатерина Абрамова",
                        "Хобби - большой теннис, кулинария",
                        'Зам. председателя МТРК «МИР», директор телеканала «МИР», ведущая программы <a href="http://mirtv.ru/broadcast/68/">«Вместе»</a>.',
                        '<p>Окончила филологический факультет МГУ им. М.В.Ломоносова.</p>
<p>В МТРК «Мир» начала работать с октября 1994 года специальным корреспондентом студии телевизионного вещания. Параллельно работала редактором в программе «Утро» на «Первом канале», корреспондентом радиостанции Deutsche Welle («Немецкая волна») и телеканала «Деловая Россия».</p>
<p>В 2002-2006 гг. последовательно занимала должности выпускающего редактора, шеф-редактора, заместителя руководителя, руководителя службы телевизионных новостей МТРК «Мир». С апреля 2006 г. — заместитель председателя МТРК «Мир» по телерадиовещанию, директор телеканала «Мир».</p>
<p>Награждена почетной грамотой и благодарностью правительства Российской Федерации, медалью Межпарламентской Ассамблеи государств-участников СНГ и МТРК «Мир» «Древо дружбы». В 2017 году награждена орденом Дружбы.</p>
<p>Замужем, есть сын.</p>
<p>Хобби — большой теннис, кулинария.</p>'
                    ),
                    new \Observatby\TelecastVault\Models\EpisodeList([
                        new \Observatby\TelecastVault\Models\Episode(
                            "«Вместе» от 30 августа 2020",
                            "",
                            '<p><strong>Смотрите в этом выпуске программы&nbsp;<a href="http://mirtv.ru/broadcast/68/">«Вместе»</a>:</strong></p>
<ul>
	<li>«Спутник V»: первая в мире вакцина от COVID-19 готова к применению.</li>
	<li>Как будут учиться школьники и студенты в странах СНГ и Грузии в условиях пандемии?</li>
	<li>Уличные акции в Беларуси.</li>
	<li>Америка в огне: на фоне нескончаемых погромов Дональд Трамп и Джо Байден борются за президентское кресло.</li>
	<li>Срываем маски: в Берлине прошел крупнейший с 2005 года уличный протест.</li>
	<li>«Я устал, я ухожу» по-японски: премьер-министр Японии Синдзо Абэ объявил о своей отставке.</li>
	<li>Царь-гора: как активистам удалось отстоять шихан Куштау в Башкирии?</li>
</ul>',
                            "16+",
                            new \Observatby\TelecastVault\Models\Video("http://mirtv.ru/files/video/66862/video.mp4"),
                            new \Observatby\TelecastVault\Models\TagList([
                                new \Observatby\TelecastVault\Models\Tag("Вместе"),
                                new \Observatby\TelecastVault\Models\Tag("Итоги"),
                                new \Observatby\TelecastVault\Models\Tag("Политика"),
                            ])
                        ),
                        new \Observatby\TelecastVault\Models\Episode(
                            "«Вместе» от 13 сентября 2020",
                            "",
                            '<p><strong>Смотрите в этом выпуске программы&nbsp;<a href="http://mirtv.ru/broadcast/68/">«Вместе»</a>:</strong></p>
<ul>
	<li>Мир в ожидании второй волны коронавируса.</li>
	<li>Предвыборная пора в Грузии: Миша хочет домой.</li>
	<li>Александр Лукашенко провел пресс-конференцию в Минске.</li>
	<li>Чем был отравлен Алексей Навальный?</li>
	<li>Гражданин&nbsp;«Плохой» Михаил Евфремов.</li>
	<li>Куштау будет жить.</li>
	<li>Фестиваль&nbsp;«Сердце Евразии» прошел в Уфе.</li>
	<li>Блокада Ленинграда – часть семейной истории.</li>
	<li>Лесные пожары в Соединенных Штатах.</li>
	<li>«Оскар» только для меньшинств.</li>
	<li>Белорусская теннисистка Виктория Азаренко выиграла у Серены Уильямс.&nbsp;</li>
</ul>',
                            "16+",
                            new \Observatby\TelecastVault\Models\Video("http://mirtv.ru/files/video/66974/video.mp4"),
                            new \Observatby\TelecastVault\Models\TagList([
                                new \Observatby\TelecastVault\Models\Tag("Вместе"),
                                new \Observatby\TelecastVault\Models\Tag("Итоги"),
                                new \Observatby\TelecastVault\Models\Tag("Новости"),
                            ])
                        )
                    ])
                )
            ]
        );

        $this->assertInstanceOf(\Observatby\TelecastVault\Models\TelecastList::class, $telecastList);
    }
}
