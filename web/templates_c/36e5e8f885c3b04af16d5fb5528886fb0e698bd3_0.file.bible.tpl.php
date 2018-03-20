<?php
/* Smarty version 3.1.30, created on 2018-03-20 08:32:10
  from "C:\OSPanel\domains\BibliiSmarty\web\templates\bible.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ab09cda6695c4_70725622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36e5e8f885c3b04af16d5fb5528886fb0e698bd3' => 
    array (
      0 => 'C:\\OSPanel\\domains\\BibliiSmarty\\web\\templates\\bible.tpl',
      1 => 1521523871,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ab09cda6695c4_70725622 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!---------------------------------------------------------------->
<!---------------------------MAIN BLOCK--------------------------->
<!---------------------------------------------------------------->
<!------><div class="row"><!------------------>
    <!-------------------------------------------->
    <div class="col-md-12">
        <div class="card" style="font-family: PT Sans Caption;">
            <h3 class="card-title">О Библии</h3>
            <p align="justify">Собрание текстов, являющихся священными в иудаизме и христианстве. В иудаизме Священным Писанием является Танах, именуемый также еврейской Библией, в христианстве - Ветхий Завет и Новый Завет. Книги Танаха составляют иудейский канон. Книги Танаха и Нового Завета являются каноническими во всех христианских конфессиях. Различия в Библиях различных Церквей и конфессий состоят в наличии дополнительных книг и отрывков в Ветхом Завете и в некотором отличии в переводе. В православии эти дополнительные книги и отрывки названы неканоническими или «анагиноскомена», в католицизме - второканоническими, в протестантизме - апокрифическими.</p>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-title-w-btn">
                <h3 class="title">Ветхий Завет</h3>
                <p><a class="btn btn-primary icon-btn" href="#"><i class="fa fa-file-audio-o"></i>Слушать аудио</a></p>
            </div>
            <div class="card-body">
                <p align="justify">Первая, древнейшая из двух частей христианской Библии, заимствованная в христианстве из Танаха и в православии и католицизме из других древних еврейских религиозных книг. В Ветхий Завет во всех христианских конфессиях входит 39 книг Танаха, являющегося общим священным текстом иудаизма и христианства. </p>
                <h4>Читать Библию</h4>
                <select class="form-control testament" id='old_testament'>
                    <optgroup label="Выберите Книгу">
                        <option disabled selected>Книги Ветхого Завета</option>
                        <option>Бытие</option>
                        <option>Исход</option>
                        <option>Левит</option>
                        <option>Числа</option>
                        <option>Второзаконие</option>
                        <option>Книга Иисуса Навина</option>
                        <option>Книга судей Израилевых</option>
                        <option>Книга Руфь</option>
                        <option>1-я книга Царств</option>
                        <option>2-я книга Царств</option>
                        <option>3-я книга Царств</option>
                        <option>4-я книга Царств</option>
                        <option>1-я книга Паралипоменон</option>
                        <option>2-я книга Паралипоменон</option>
                        <option>1-я книга Ездры</option>
                        <option>Книга Неемии</option>
                        <option>2-я книга Ездры</option>
                        <option>Книга Товита</option>
                        <option>Книга Иудифь</option>
                        <option>Книга Есфири</option>
                        <option>Книга Иова</option>
                        <option>Псалтирь</option>
                        <option>Притчи Соломона</option>
                        <option>Книга Екклеcиаста</option>
                        <option>Песнь песней Соломона</option>
                        <option>Книга премудрости Соломона</option>
                        <option>Книга премудрости Иисуса, сына Сирахова</option>
                        <option>Книга пророка Исаии</option>
                        <option>Книга пророка Иеремии</option>
                        <option>Плач Иеремии</option>
                        <option>Послание Иеремии</option>
                        <option>Книга пророка Варуха</option>
                        <option>Книга пророка Иезекииля</option>
                        <option>Книга пророка Даниила</option>
                        <option>Книга пророка Осии</option>
                        <option>Книга пророка Иоиля</option>
                        <option>Книга пророка Амоса</option>
                        <option>Книга пророка Авдия</option>
                        <option>Книга пророка Ионы</option>
                        <option>Книга пророка Михея</option>
                        <option>Книга пророка Наума</option>
                        <option>Книга пророка Аввакума</option>
                        <option>Книга пророка Софонии</option>
                        <option>Книга пророка Аггея</option>
                        <option>Книга пророка Захарии</option>
                        <option>Книга пророка Малахии</option>
                        <option>1-я книга Маккавейская</option>
                        <option>2-я книга Маккавейская</option>
                        <option>3-я книга Маккавейская</option>
                        <option>3-я книга Ездры</option>
                    </optgroup>
                </select>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-title-w-btn">
                <h3 class="title">Новый Завет</h3>
                <p><a class="btn btn-primary icon-btn" href="#"><i class="fa fa-file-audio-o"></i>Слушать аудио</a></p>
            </div>
            <div class="card-body">
                <p align="justify">Вторая часть христианской Библии, определяет новый "договор" Бога с людьми. Происходит противопоставление "ветхому", союзу-завету, который был "заключен" с древним Израилем как народом Божьим. Бог обещал спасение лишь при условии исполнения народом воли Божьей, выраженной в Законе (Торе), Новый Завет меняет законы.</p>
                <h4>Читать Библию</h4>
                <select class="form-control testament" id='new_testament'>
                    <optgroup label="Выберите Книгу">
                        <option disabled selected>Книги Нового Завета</option>
                        <option>Евангелие от Матфея</option>
                        <option>Евангелие от Марка</option>
                        <option>Евангелие от Луки</option>
                        <option>Евангелие от Иоанна</option>
                        <option>Деяния апостолов</option>
                        <option>Послание ап.Иакова</option>
                        <option>1-ое послание ап.Петра</option>
                        <option>2-ое послание ап.Петра</option>
                        <option>1-ое послание ап.Иоанна</option>
                        <option>2-ое послание ап.Иоанна</option>
                        <option>3-ое послание ап.Иоанна</option>
                        <option>Послание ап.Иуды</option>
                        <option>К римлянам послание ап.Павла</option>
                        <option>1-ое послание к коринфянам ап.Павла</option>
                        <option>2-ое послание к коринфянам ап.Павла</option>
                        <option>К галатам послание ап.Павла</option>
                        <option>К ефесянам послание ап.Павла</option>
                        <option>К филиппийцам послание ап.Павла</option>
                        <option>К колоссянам послание ап.Павла</option>
                        <option>1-ое послание к фессалоникийцам ап.Павла</option>
                        <option>2-ое послание к фессалоникийцам ап.Павла</option>
                        <option>1-ое послание к Тимофею ап.Павла</option>
                        <option>2-ое послание к Тимофею ап.Павла</option>
                        <option>К Титу послание ап.Павла</option>
                        <option>К Филимону послание ап.Павла</option>
                        <option>К евреям послание ап.Павла</option>
                        <option>Откровение ап.Иоанна Богослова</option>
                    </optgroup>
                </select>
            </div>
        </div>
    </div>
    <div class="col-md-12" id="title_a_b" style="display: none;">
        <div class="card" style="font-family: PT Sans Caption;">
            <h3 class="card-title" id="title_about_book">Новый Завет -> Книга Моисея</h3>
            <p id="history_period">Исторический период - </p>
            <p id="place_event">Место событий - </p>
            <p id="persons">Персонаж - </p>
            <p>С какой главы желаете начать изучение книги</p>
            <p id="start_chapter">0 глав</p>
            <div style="display: none;" id="data_save"></div>
        </div>
    </div>
    <!------------------------------->
    <!------></div><!---------------->
<!---------------------------------------------------------------->
<!-------------------------END MAIN BLOCK------------------------->
<!---------------------------------------------------------------->		<?php }
}
