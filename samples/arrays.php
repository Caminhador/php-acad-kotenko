<?php

$array1 = array();
$array2 = [];

$a1 = [1, 2, 3, 'test', [1, 34, '123', 'rrr']];
var_dump($a1);
print_r($a1);

$a2 = [3, 55555 => 3, 3, 1];
print_r($a2);

$a3 = ['test' => 1, 'qwerty' => 4, 1];
$a3['qwerty'] = 'replaced';
print_r($a3);

$a4 = [1, 2, 'test' => 123, 3, 4];
print_r($a4);

var_dump($a4[1]);

echo PHP_EOL;

$menu = [
    [
        'url' => '/home',
        'title' => 'Homepage',
        'isActive' => true
    ],
    [
        'url' => '/contacts',
        'title' => 'Contact Us',
        'isActive' => false
    ]
];

echo '<ul>';
foreach ($menu as $item) {
    $class = $item['isActive'] ? 'active' : '';
    echo "<li class=\"{$class}\"><a href=\"{$item['url']}\">{$item['title']}</a></li>";
}
echo '</ul>';

?>

<ul>
    <?php foreach ($menu as $item) : ?>
        <li class="<?= $item['isActive'] ? 'active' : '' ?>">
            <a href="<?= $item['url'] ?>" rel="home"><?= $item['title'] ?></a>
        </li>
    <?php endforeach ?>
</ul>

<?php

$a5 = [1, 2, 'test33', 4];
$serialized = serialize($a5);
var_dump($serialized);
var_dump(unserialize($serialized));

var_dump(count($a5));

echo PHP_EOL;

$first = array_shift($a5);
$a5['test'] = $first;
array_push($a5, $first);
$a5[] = $first;

$second = array_shift($a5);
array_push($a5, $second);

var_dump($first, $second);
var_dump(count($a5));

print_r($a5);

var_dump(in_array('test33', $a5));

print_r($a5);
print_r(array_unique($a5));
print_r($a5);

echo PHP_EOL;

print_r($_ENV);
print_r($_SERVER);

echo PHP_EOL;
