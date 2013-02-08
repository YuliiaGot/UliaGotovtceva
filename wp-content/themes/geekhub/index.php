<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package geekhub
 * @subpackage geekhub
 * @since geekhub
 */

get_header('home'); ?>

<div class="header-bot">
    <h2>Реєстрація на другий сезон <br/> відкрита!</h2>
    <a href="#">Зареєструватися</a>
</div>

<div class="content">
    <p><b>GeekHub</b> — це проект, що надає можливість отримати практичні знання та навички в сфері розробки програмного забезпечення. На відміну від традиційної освіти, викладачі GeekHub працюють з новітніми технологіями у провідних софтверних компаніях, тому слухачі GeekHub отримують тільки актуальні знання. Якщо ти зацікавлений — запрошуємо ознайомитись з деталями проекту, та <a href="#">зареєструватися</a> слухачем!</p>
    <h3>НАШИ КУРСЫ</h3>
    <ul class="courses">
        <li>
            <img src="/images/home/frontend.png" alt="frontend+cms" />
            <h3>Frontend + CMS</h3>
            <p>Цей курс допоможе вам навчитися створювати веб сайти на основі системи керування контентом. Все, від скінування дизайну до підключення CMS. Цей курс дасть вам чудовий старт для фріланса або роботи в компанії.</p>
        </li>
        <li>
            <img src="/images/home/cms.png" alt="advanced CMS" />
            <h3>Advanced CMS</h3>
            <p>Необхідні та поглибленні знання в системах керування контентом. Якщо ви хочете робити вебсайти як професіонал, цей курс для вас. Особливості різних CMS, використання та написання плагінів та компонентів, інтеграція із соціальними мережами та третьосторонніми сервісами.</p>
        </li>
        <li>
            <img src="/images/home/php.png" alt="Advanced PHP" />
            <h3>Advanced PHP</h3>
            <p>Для тих хто хоче розвити свої базові навички в PHP. Курс заглиблюється в вивчення ООП, MVC та фреймворку Symfony.</p>
        </li>
        <li>
            <img src="/images/home/java.png" alt="Basic Java" />
            <h3>Basic Java</h3>
            <p>Java -- це основа ентерпрайз технологій. Ви ознайомитесь із мовою, базовою структурю SDK основами технологій на Java. Курс вимагає підвищеного рівня самостійної роботи але отриманні знання приносять особливу винагороду в роботі.</p>
        </li>
        <li>
            <img src="/images/home/android.png" alt="Java for Android" />
            <h3>Java for Android</h3>
            <p>Розробка під мобільні технології все більше набирає популярності. GeekHub починає із найпопулярнішої відкритої платформи Android.</p>
        </li>
        <li>
            <img src="/images/home/pm.png" alt="Project Management" />
            <h3>Project Management</h3>
            <p>Щоб стати досвідченим менеджером проектів потрібні роки спроб та помилок. Geekhub дає вам можливість набути практичних навичок та уникнути неприємних ситуацій в реальній роботі. Ми навчимо вас розуміти бізнес, відносини із клієнтами і девелоперами і звичайно методології ведення проектів.</p>
        </li>
        <li>
            <img src="/images/home/quality.png" alt="Quality Assurance" />
            <h3>Quality Assurance</h3>
            <p>Контроль якості проектів -- важлива частина процесу розробки. Цей курс навчить вас систематизувати та автоматизувати процес тестування, підвищити якість та швидкість виконання проектів в компанії.</p>
        </li>
        <li>
            <img src="/images/home/english.png" alt="Technical English" />
            <h3>Technical English</h3>
            <p>Нинішні ринкові умови вимагають робочого знання англійської мови і вільним використанням технічних термінів. Немає кращого місця щоб підтягнути ці навички, ніж курс Techical English на GeekHub! Курс викладає Tim Phipps, англієць із науковим ступенем у англійскій літературі.</p>
        </li>
    </ul>
    <div class="content-bot">
        <div class="facebook">
            <img src="/images/home/facebook.png" alt="facebook" />
        </div>
        <div class="sponsors">
            <h3>НАШИ СПОНСОРЫ</h3>
            <ul>
                <li><a href="#"><img src="wp-content/themes/geekhub/images/home/sponsors-1.png" alt="спонсор" /></a></li>
                <li><a href="#"><img src="wp-content/themes/geekhub/images/home/sponsors-2.png" alt="спонсор" /></a></li>
                <li><a href="#"><img src="wp-content/themes/geekhub/images/home/sponsors-3.png" alt="спонсор" /></a></li>
                <li class="pre-last"><a href="#"><img src="wp-content/themes/geekhub/images/home/sponsors-4.png" alt="спонсор" /></a></li>
                <li><a href="#"><img src="wp-content/themes/geekhub/images/home/sponsors-5.png" alt="спонсор" /></a></li>
            </ul>
        </div>
        <div class="certificate">
            <img src="/images/home/certificate.png" alt="certificates" />
        </div>
    </div>
</div>

<!--content_end-->
<?php get_footer(); ?>
