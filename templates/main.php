<section class="promo">
        <h2 class="promo__title">Нужен стафф для катки?</h2>
        <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
        <ul class="promo__list">
            <? foreach ($categories as $category): ?>
                <li class="promo__item promo__item--boards">
                    <a class="promo__link" href="pages/all-lots.html"><?=$category?></a>
                </li>
            <? endforeach; ?>
        </ul>
    </section>
    <section class="lots">
        <div class="lots__header">
            <h2>Открытые лоты</h2>
        </div>
        <ul class="lots__list">
            <? foreach ($goods as $good): ?>
            <?
                $remaining_time = calculate_remaining_time($good["expiration_date"]);
                $isOneHourLeft = $remaining_time[0] === '0';
            ?>
                <li class="lots__item lot">
                    <div class="lot__image">
                        <img src="<?=$good["url"]?>" width="350" height="260" alt="">
                    </div>
                    <div class="lot__info">
                        <span class="lot__category"><?=$good["category"]?></span>
                        <h3 class="lot__title"><a class="text-link" href="pages/lot.html"><?=$good["title"]?></a></h3>
                        <div class="lot__state">
                            <div class="lot__rate">
                                <span class="lot__amount">Стартовая цена</span>
                                <span class="lot__cost"><?=format_price($good["price"])?></span>
                            </div>
                            <div class="lot__timer timer <?= $isOneHourLeft ? "timer--finishing" : ""; ?>">
                                <?= $remaining_time[0]; ?>:<?= $remaining_time[1]; ?>
                            </div>
                        </div>
                    </div>
                </li>
            <? endforeach; ?>
        </ul>
    </section>
