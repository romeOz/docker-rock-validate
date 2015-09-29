<?php
use rock\validate\Validate;

if (version_compare(PHP_VERSION, '5.4.0', '<')) {
    die('need to use PHP version 5.4.x or greater');
}

require(dirname(__DIR__) . '/vendor/autoload.php');

?>

<!DOCTYPE html>
<html>
<head>
    <title>Demo Rock Validate</title>
    <link href="/assets/css/demo.min.css" rel="stylesheet">
    <script src="/assets/js/demo.min.js"></script>
</head>
<body>
<main class="container main" role="main">
    <header class="header">
        <h1 class="title">Demo Rock Validate</h1>
        <p class="lead description">The example.</p>
    </header>
    <article>
        <h2 class="header">Base</h2>
        <pre><code class="php"><!--
-->use rock\validate\Validate;

// Validation length from 10 to 20 characters inclusive + regexp pattern
$v = Validate::length(10, 20, true)->regex('/^[a-z]+$/i');
$v->validate('O’Reilly'); // output: false

$v->getErrors();<!--
--></code></pre>
<?php
// Validation length from 10 to 20 characters inclusive + regexp pattern
$v = Validate::length(10, 20, true)->regex('/^[a-z]+$/i');
$v->validate('O’Reilly'); // output: false
?>
        Errors:
        <pre><code class="html"><?=var_export($v->getErrors())?></code></pre>

        First error:
        <pre><code class="html"><?=var_export($v->getFirstError())?></code></pre>

    </article>
    <article>
        <h2 class="header">Custom Placeholders</h2>
        <pre><code class="php"><!--
-->use rock\validate\Validate;
$v = Validate::length(10, 20, true)
    ->regex('/^[a-z]+$/i')
    ->placeholders(['name' => 'username']);
$v->validate('O’Reilly'); // output: false

$v->getErrors();<!--
--></code></pre>
<?php
$v = Validate::length(10, 20, true)
    ->regex('/^[a-z]+$/i')
    ->placeholders(['name' => 'username']);
$v->validate('O’Reilly'); // output: false
?>
        Errors:
        <pre><code class="html"><?=var_export($v->getErrors())?></code></pre>
    </article>
</main>
<footer class="footer">
    <p>Demo template built on <a href="http://getbootstrap.com">Bootstrap</a> by <a href="https://github.com/romeOz">@romeo</a>.</p>
    <p><a href="#">Back to top</a></p>
</footer>
</body>
</html>