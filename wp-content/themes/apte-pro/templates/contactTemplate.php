<?php
/*
Template Name: Contact Template
*/
?>

<?php get_header() ?>
<div id="content">
    <div class="areaContact">
        <div class="inner">
            <div class="areaTitle">
                <h2 class="titleMain maven"><span>C</span>ontact</h2>
                <p class="titleSub">お問い合わせ</p>
            </div>
            <div class="contactWrap">
                <p class="contactNote">出演や制作に関するご依頼・お問い合わせは下記までご連絡下さい。<br>内容を確認後、担当者よりご連絡差し上げます。</p>
                <div class="formContact">
                    <form action="#" method="post">
                        <div class="formItem">
                            <p class="formName">要件</p>
                            <div class="formInput formSelect">
                                <select required="" class="noto">
                                    <option value="" hidden=""> 出演や制作に関する内容</option>
                                    <option value="出演や制作に関する内容1">出演や制作に関する内容1</option>
                                    <option value="出演や制作に関する内容2">出演や制作に関する内容2</option>
                                    <option value="出演や制作に関する内容3">出演や制作に関する内容3</option>
                                </select>
                            </div>
                        </div>
                        <div class="formItem">
                            <p class="formName">お名前</p>
                            <p class="formInput">
                                <input class="noto" type="text" name="your-name" id="your-name" value=""
                                    placeholder="田中太郎" class="styleInput">
                            </p>
                        </div>
                        <div class="formItem">
                            <p class="formName">フリガナ</p>
                            <p class="formInput">
                                <input class="noto" type="text" name="your-furigana" id="your-furigana" value=""
                                    placeholder="タナカタロウ" class="styleInput">
                            </p>
                        </div>
                        <div class="formItem">
                            <p class="formName">メールアドレス</p>
                            <p class="formInput">
                                <input class="noto" type="text" name="your-email" id="your-email" value=""
                                    placeholder="info@aptepro.jp" class="styleInput">
                            </p>
                        </div>
                        <div class="formItem">
                            <p class="formName">電話番号</p>
                            <p class="formInput">
                                <input class="noto" type="text" name="your-phone" id="your-phone" value=""
                                    placeholder="03-1234-5678" class="styleInput">
                            </p>
                        </div>
                        <div class="formItem textarea">
                            <p class="formName">お問い合わせ内容</p>
                            <p class="formInput">
                                <textarea class="styleInput noto" name="your-content"></textarea>
                            </p>
                        </div>
                        <div class="btnSubmit">
                            <p class="submitBox">
                                <input class="formSubmit noto" type="submit" value="入力内容の確認">
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- areaContact -->
</div>
<!-- #content -->
<?php get_footer() ?>