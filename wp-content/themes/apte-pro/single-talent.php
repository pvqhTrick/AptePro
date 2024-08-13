<?php get_header() ?>
<div id="content">
    <div class="areaTalent">
        <div class="inner">
            <div class="areaTitle">
                <h2 class="titleMain maven"><span>T</span>alent</h2>
                <p class="titleSub">所属タレント</p>
            </div>
            <div class="talentWrap">
                <div class="talentLeft">
                    <p class="talentPhoto">
                        <a href="javascript:void(0)" class="hover">
                            <?php the_post_thumbnail('full') ?>
                        </a>
                    </p>
                    <?php get_template_part('template-part/listNetwork'); ?>
                </div>
                <div class="talentRight">
                    <h3 class="talentName"><?php the_title() ?><span><?php echo get_field('spelling') ?></span></h3>
                    <ul class="listInfo">
                        <li>
                            <span class="infoName">誕生日</span>
                            <span class="infoTxt"><?php echo get_field('DOB') ?></span>
                        </li>
                        <li>
                            <span class="infoName">出身地</span>
                            <span class="infoTxt"><?php echo get_field('birthplace') ?></span>
                        </li>
                        <li>
                            <span class="infoName">特技・趣味</span>
                            <span class="infoTxt"><?php echo get_field('special') ?></span>
                        </li>
                    </ul>
                    <div class="talentSample">
                        <h3 class="sampleTitle">Sample voice</h3>
                        <ul class="listSample">
                            <li>
                                <p class="sampleName">セリフ</p>
                                <ul class="listVoice">
                                    <li><a href="javascript:void(0)" class="hover active">1</a></li>
                                    <li><a href="javascript:void(0)" class="hover active">2</a></li>
                                    <li><a href="javascript:void(0)" class="hover active">3</a></li>
                                    <li><a href="javascript:void(0)" class="hover active">4</a></li>
                                    <li><a href="javascript:void(0)" class="hover active">5</a></li>
                                </ul>
                            </li>
                            <li>
                                <p class="sampleName">ナレーション</p>
                                <ul class="listVoice">
                                    <li><a href="javascript:void(0)" class="hover active">1</a></li>
                                    <li><a href="javascript:void(0)" class="hover active">2</a></li>
                                    <li><a href="javascript:void(0)" class="hover">3</a></li>
                                    <li><a href="javascript:void(0)" class="hover">4</a></li>
                                    <li><a href="javascript:void(0)" class="hover">5</a></li>
                                </ul>
                            </li>
                            <li>
                                <p class="sampleName">その他</p>
                                <ul class="listVoice">
                                    <li><a href="javascript:void(0)" class="hover active">1</a></li>
                                    <li><a href="javascript:void(0)" class="hover">2</a></li>
                                    <li><a href="javascript:void(0)" class="hover">3</a></li>
                                    <li><a href="javascript:void(0)" class="hover">4</a></li>
                                    <li><a href="javascript:void(0)" class="hover">5</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <p class="print pc"><a href="javascript:void(0)" class="hover"><span>印刷する</span></a></p>
            </div>
        </div>
    </div>
    <!-- areaTalent -->
    <div class="areaAppearance">
        <div class="talentsTitle">
            <div class="inner">
                <h3 class="talentsCustody">主な出演作品</h3>
            </div>
        </div>
        <?php if (have_rows('main-appearances')): ?>
        <div class="inner">
            <div class="appearanceWrap">
                <?php 
                while (have_rows('main-appearances')) : the_row(); 
                $subtitle = get_sub_field('subtitle');
                $detail = get_sub_field('detail');
                echo get_template_part('template-part/appearanceBox', null, array('subtitle'=>$subtitle, 'detail' => $detail));
                endwhile; 
                ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>
<?php get_footer() ?>