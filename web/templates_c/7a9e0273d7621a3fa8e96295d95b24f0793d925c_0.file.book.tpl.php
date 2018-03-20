<?php
/* Smarty version 3.1.30, created on 2018-03-20 13:16:23
  from "C:\OSPanel\domains\BibliiSmarty\web\templates\book.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ab0df774be940_06396467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a9e0273d7621a3fa8e96295d95b24f0793d925c' => 
    array (
      0 => 'C:\\OSPanel\\domains\\BibliiSmarty\\web\\templates\\book.tpl',
      1 => 1521540425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ab0df774be940_06396467 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!---------------------------------------------------------------->
<!---------------------------MAIN BLOCK--------------------------->
<!---------------------------------------------------------------->
<!------><div class="row"><!------------------>
    <!-------------------------------------------->
    <div class="col-md-12">
        <div class="card" style="font-family: PT Sans Caption; min-height: 200px;">
            <div class="col-md-4">
                <label>Глава</label>
                <select class="form-control" id='select_chapter'>
                    <option disabled selected>Выберите главу</option>
                </select>
                <div class="panel-body" style="text-align: right;">
                    <a class="btn btn-default" id="chapter_left" href="#"><<<</a>&nbsp;<a class="btn btn-primary" id="chapter_right" href="#">>>></a>&nbsp;
                </div>
            </div>
            <div class="col-md-4">
                <label>Выберите перевод</label>
                <select class="form-control">
                    <option>Синодальный перевод</option>
                    <option>Церковно-славянский перевод</option>
                    <option>Церковно-славянский перевод (транслит)</option>
                    <option>Современный перевод «Радостная весть» 2004 г.</option>
                    <option>Перевод С.С. Аверинцева</option>
                    <option>Перевод епископа Кассиана (Безобразова)</option>
                    <option>Перевод проф. П.А. Юнгерова</option>
                    <option>&Epsilon;&lambda;&lambda;&eta;&nu;&iota;&kappa;&eta;</option>
                    <option>Подстрочный перевод с греческого А. Винокурова</option>
                    <option>Latina Vulgata</option>
                    <option>Український переклад І. Огієнка</option>
                    <option>Современный перевод "Российского Библейского общества" 2011 г.</option>
                    <option>English version New King James Version</option>
                    <option>Перевод А.С. Десницкого</option>
                </select>
                <div class="panel-body">
                    <div class="toggle lg">
                        <label>
                            <input type="checkbox" id="parallel_check"><span class="button-indecator"></span>Выкл/Вкл параллельные стихи
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <label>Толкования на главу</label>
                <select class="form-control" id="ekzeget_choose">
                    <option disabled selected>Выберите толкователя</option>
                    <option value='11'>Вася</option>
                </select>
                <div class="panel-body">
                    <div class="toggle lg">
                        <label>
                            <input type="checkbox" id="line_unline"><span class="button-indecator"></span>Текст/построчно
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="card">
            <div class="card-body" id="load_data">
                <h3 class="card-title">Глава 5 из 7</h3>
                <div id="common_out">
                   Здесь будет красивый текст
                </div>
            </div>
        </div>
    </div>
    <!------------------------------->
    <!------></div><!---------------->
<!---------------------------------------------------------------->
<!-------------------------END MAIN BLOCK------------------------->
<!---------------------------------------------------------------->		<?php }
}
