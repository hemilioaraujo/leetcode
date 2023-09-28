<?php

const TEST_DIR = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'tests' . DIRECTORY_SEPARATOR;
const SRC_DIR = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR;
const LEETCODE_DIR = 'LeetCode' . DIRECTORY_SEPARATOR;
const TEMPLATE_CLASS = <<<TEMPLATE
<?php

namespace App\LeetCode;

class Ch{CLASS_NAME}
{
    public function ()
    {
        return 0;
    }
}
TEMPLATE;

const TEMPLATE_TEST = <<<TEMPLATE
<?php

use PHPUnit\Framework\TestCase;

class Ch{CLASS_NAME}Test extends TestCase
{
    public function test_solution_is_correct()
    {
    }
}
TEMPLATE;


if ($argc < 2) {
    $help = <<<HELP
    Para utilizar adicione o comando para qual portal de desafios e qual o desafio:
    Ex.: php make_chalenge_files.php --leetcode --nome o_nome_do_desafio

HELP;

    echo "$help";
}

function getArguments($argv): array
{
    $arguments = [];

    foreach ($argv as $key => $arg) {
        if ($arg == '--leetcode') {
            $arguments['portal'] = $arg;
        }

        if ($arg == '--name') {
            $arguments['name'] = $argv[$key + 1];
        }
    }

    return $arguments;
}

function makeCode($arguments)
{
    $codeName = $arguments['name'];
    $template = str_replace('{CLASS_NAME}', $codeName, TEMPLATE_CLASS);
    $fileName = SRC_DIR . LEETCODE_DIR . 'Ch' . $arguments['name'] . '.php';
    echo "$fileName\n";
    file_put_contents($fileName, $template);
}

function makeTest($arguments)
{
    $testName = $arguments['name'];
    $template = str_replace('{CLASS_NAME}', $testName, TEMPLATE_TEST);
    $fileName = TEST_DIR . LEETCODE_DIR . 'Ch' . $arguments['name'] . 'Test.php';
    echo "$fileName\n";
    file_put_contents($fileName, $template);
}


$arguments = getArguments($argv);
makeCode($arguments);
makeTest($arguments);
