<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function index()
    {
        $string = <<<XML
<?xml version="1.0" encoding="utf-8"?>
<!--<!DOCTYPE yml_catalog SYSTEM "shops.dtd">-->
<yml_catalog date="2017-09-22 21:33">
    <shop>
        <name>TryRym</name>
        <company>TryRym</company>
        <url>https://tryrym.ru/</url>
        <currencies>
            <currency id="RUR" rate="1"/>
            <currency id="USD" rate="CBRF"/>
            <currency id="EUR" rate="CBRF"/>
        </currencies>
        <delivery-options>
            <option cost="990" days="5"/>
        </delivery-options>
        <categories>
            <category id="28">Гостиная</category>
            <category id="29">Спальня</category>
            <category id="30">Кухня</category>
            <category id="31">Прихожая</category>
            <category id="32">Детская</category>
            <category id="33">Офис</category>
            <category id="34" parentId="37">Стенки в гостиную</category>
            <category id="35" parentId="37">Модульные гостиные</category>
            <category id="36" parentId="37">Журнальные столы</category>
            <category id="37" parentId="28">Мебель для гостиной</category>
            <category id="40" parentId="29">Кровати</category>
            <category id="42" parentId="29">Комоды и тумбы</category>
            <category id="44" parentId="29">Свет для спальни</category>
            <category id="45" parentId="32">Свет для детской</category>
            <category id="46" parentId="32">Детская комната</category>
            <category id="48" parentId="31">Обувницы</category>
            <category id="49" parentId="31">Прихожие</category>
            <category id="50" parentId="30">Кухонные гарнитуры</category>
            <category id="56" parentId="33">Офисные столы</category>
            <category id="58" parentId="33">Мебель для офиса</category>
            <category id="62" parentId="28">Диваны</category>
            <category id="73" parentId="30">Стулья и табуреты</category>
            <category id="79" parentId="73">Барные стулья</category>
            <category id="84" parentId="29">Шкафы</category>
            <category id="86" parentId="84">Распашные шкафы</category>
            <category id="113" parentId="62">Прямые диваны</category>
            <category id="115" parentId="62">Угловые диваны</category>
            <category id="281" parentId="28">Свет для гостиной</category>
            <category id="320" parentId="28">Кресла</category>
            <category id="323" parentId="320">Кресла дизайнерские</category>
            <category id="324" parentId="37">ТВ-тумбы</category>
            <category id="325" parentId="28">Ковры для гостиной</category>
            <category id="402">Для сада</category>
            <category id="403" parentId="40">Кровати с подъемным механизмом</category>
            <category id="406" parentId="29">Спальные гарнитуры</category>
            <category id="409" parentId="32">Ковры для детской</category>
            <category id="410" parentId="402">Комплекты садовой мебели</category>
            <category id="642" parentId="31">Шкаф-купе</category>
            <category id="1322" parentId="37">Стеллажи и полки</category>
            <category id="1469" parentId="62">Пружинные диваны</category>
            <category id="1470" parentId="62">Диваны с ящиком для белья</category>
            <category id="1499" parentId="62">Ортопедические диваны</category>
            <category id="1500" parentId="62">Диваны для ежедневного сна</category>
            <category id="1501" parentId="62">Малогабаритные диваны</category>
            <category id="1502" parentId="62">Диваны на металлокаркасе</category>
            <category id="1504" parentId="62">Диваны аккордеон</category>
            <category id="1505" parentId="62">Диваны еврокнижка</category>
            <category id="1507" parentId="62">Диваны для молодежи</category>
            <category id="1508" parentId="62">Диван выкатной</category>
            <category id="1509" parentId="62">Диваны Седафлекс</category>
            <category id="1510" parentId="62">Диваны Дельфин</category>
            <category id="1511" parentId="62">Диваны без трансформации</category>
            <category id="1512" parentId="62">Французская раскладушка</category>
            <category id="1513" parentId="62">Диваны книжка</category>
            <category id="1514" parentId="62">Офисные диваны</category>
            <category id="1515" parentId="62">Диваны для гостиной</category>
            <category id="1516" parentId="62">Диваны для кухни</category>
            <category id="1517" parentId="62">Диваны в прихожую</category>
            <category id="1518" parentId="62">Диваны для детской комнаты</category>
            <category id="1520" parentId="62">Диваны Модерн</category>
            <category id="1521" parentId="62">Классические диваны</category>
            <category id="1522" parentId="62">Диваны Ретро</category>
            <category id="1523" parentId="62">Диваны для гостиницы</category>
            <category id="1524" parentId="62">Пантограф</category>
            <category id="1601" parentId="62">Двуспальные диваны</category>
            <category id="1668" parentId="29">Матрасы</category>
            <category id="1669" parentId="1668">Беспружинные матрасы</category>
            <category id="1672" parentId="1668">Пружинные матрасы</category>
            <category id="1679" parentId="1668">Наматрасники</category>
            <category id="1685" parentId="28">Пуфы</category>
            <category id="1742" parentId="40">Металлические кровати</category>
            <category id="1772" parentId="40">Кровати с ортопедическим основанием</category>
            <category id="1808" parentId="2150">Столы дизайнерские</category>
            <category id="1809" parentId="2150">Столы обеденные</category>
            <category id="1830" parentId="2150">Столы книжки</category>
            <category id="1843" parentId="73">Табуреты</category>
            <category id="1854" parentId="31">Банкетки</category>
            <category id="1860" parentId="32">Компьютерные столы</category>
            <category id="1987" parentId="32">Детские кровати</category>
            <category id="2032" parentId="2150">Столы обеденные из массива</category>
            <category id="2046" parentId="84">Шкафы 3х створчатые</category>
            <category id="2047" parentId="84">Шкафы 2х створчатые</category>
            <category id="2149" parentId="50">Готовые комплекты</category>
            <category id="2150" parentId="30">Обеденные столы</category>
            <category id="2154" parentId="50">Модульные кухни</category>
            <category id="2157" parentId="73">Стулья</category>
        </categories>
        <offers>
            <offer id="1681" available="true">
                <url>https://tryrym.ru/katalog/spalnya/matrasy/namatrasniki/middle-slim-lux/</url>
                <price>2490</price>
                <currencyId>RUR</currencyId>
                <categoryId>1679</categoryId>
                <picture>https://tryrym.ru/assets/images/products/1681/middle-slim-lux.jpg</picture>
                <delivery>1</delivery>
                <name>Middle Slim Lux</name>
                <model>Middle Slim Lux</model>
                <description><![CDATA[
    <p><span style="color: #000000;"><span lang="ru-RU">Одной из основных задач для любого наматрасника - продлить срок эксплуатации вашего матраса. Помимо этого, он позволяет регулировать степень жесткости спального места: сделать его мягче или жестче. Если у вас жесткий матрас, а вам хочется спать на мягкой поверхности — то </span></span><span style="color: #000000;"><span lang="ru-RU">наматрасник <strong>жаккард ппу</strong></span></span><span style="color: #000000;"><span lang="ru-RU"> для Вас.Материалы в составе наматрасника гипоаллергенны и долговечны.Наматрасник фиксируется с помощью четырех угловых резинок.<br /><br />Наполнитель из <strong>нетканого</strong>, воздухопроницаемого материала будет служить «мягкой прослойкой» для вашего матраса, а чехол из <strong>жаккарда</strong> подарит приятные тактильные ощущения. Высота 2см</span></span></p>
    ]]></description>
                <vendor>ТРУРУМ</vendor>
                <vendorCode>000100019</vendorCode>
                <manufacturer_warranty>true</manufacturer_warranty>
                <sales_notes>Минимальная сумма заказа 1000 рублей.</sales_notes>
                <delivery-options>
                    <option cost="990" days=""/>
                </delivery-options>
                <param name="Размер">900*2000</param>
                <param name="Размер">900*1900</param>
                <param name="Размер">800*2000</param>
                <param name="Размер">800*1900</param>
                <param name="Размер">700*2000</param>
                <param name="Размер">700*1900</param>
                <param name="Размер">1780*2100</param>
                <param name="Размер">1780*2000</param>
                <param name="Размер">1780*1900</param>
                <param name="Размер">1600*2000</param>
                <param name="Размер">1600*1900</param>
                <param name="Размер">1500*2000</param>
                <param name="Размер">1500*1900</param>
                <param name="Размер">1400*2000</param>
                <param name="Размер">1400*1900</param>
                <param name="Размер">1200*2000</param>
                <param name="Размер">1200*1900</param>
                <param name="Размер">1100*2000</param>
                <param name="Размер">1100*1900</param>
                <param name="Размер">1000*2000</param>
            </offer>
            <offer id="1680" available="true">
                <url>https://tryrym.ru/katalog/spalnya/matrasy/namatrasniki/soft-lux-plus/</url>
                <price>3990</price>
                <currencyId>RUR</currencyId>
                <categoryId>1679</categoryId>
                <picture>https://tryrym.ru/assets/images/products/1680/soft-lux-plus.jpg</picture>
                <delivery>1</delivery>
                <name>Soft Lux Plus</name>
                <model>Soft Lux Plus</model>
                <description><![CDATA[
    <p>Мягкий наматрасник с наполнителем из натурального <strong>латекса</strong> с пакетом стежки на основе <strong>натурального волокна</strong> и чехол из хлопкового<strong> жаккарда</strong>,который дышит и обладает высокой гигроскопичностью,обеспечивает комфорт во время сна.Высота 3см.Состав <strong><em>жаккард, хлопок, холлофайбер</em></strong>.</p>
    ]]></description>
                <vendor>ТРУРУМ</vendor>
                <vendorCode>000100018</vendorCode>
                <manufacturer_warranty>true</manufacturer_warranty>
                <sales_notes>Минимальная сумма заказа 1000 рублей.</sales_notes>
                <delivery-options>
                    <option cost="990" days=""/>
                </delivery-options>
                <param name="Размер">900*2000</param>
                <param name="Размер">900*1900</param>
                <param name="Размер">800*2000</param>
                <param name="Размер">800*1900</param>
                <param name="Размер">700*2000</param>
                <param name="Размер">700*1900</param>
                <param name="Размер">1780*2100</param>
                <param name="Размер">1780*2000</param>
                <param name="Размер">1780*1900</param>
                <param name="Размер">1600*2000</param>
                <param name="Размер">1600*1900</param>
                <param name="Размер">1500*2000</param>
                <param name="Размер">1500*1900</param>
                <param name="Размер">1400*2000</param>
                <param name="Размер">1400*1900</param>
                <param name="Размер">1200*2000</param>
                <param name="Размер">1200*1900</param>
                <param name="Размер">1100*2000</param>
                <param name="Размер">1100*1900</param>
                <param name="Размер">1000*2000</param>
            </offer>
        </offers>
    </shop>
</yml_catalog>
XML;

        $xml = simplexml_load_string($string);
        foreach ($xml->shop->offers->offer as $offer) {
            dump($offer);
            foreach($offer->param as $param) {
                dump($param['name'] . ' ' . $param);
            }
        }

    }
}
