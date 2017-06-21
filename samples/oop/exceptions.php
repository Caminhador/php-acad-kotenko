<?php

class MyException extends Exception
{
    protected $code = 121;
    protected $message = 'Some exception emessage';

    public function getApiError()
    {
        return 'Some API answer';
    }
}

class OtherException extends Exception
{
    protected $code = 122;
    protected $message = 'Some other message';
}

class Test
{
    public function __construct()
    {
        $trigger = mt_rand(0,2);
        switch ($trigger) {
            case 0:
                try {
                    throw new OtherException;
                } catch (OtherException $ex) {
                    throw new MyException(null, null, $ex);
                }

                break;
            case 1:
                throw new Exception('Default exception');
                break;
            default:
                echo 'Executed without errors';
        }
    }
}

try {
    $t = new Test();
} catch (MyException $ex) {
    echo "{$ex->getCode()}: {$ex->getMessage()}: {$ex->getApiError()}<br>";
    var_dump($ex->getPrevious()->getMessage());
} catch (Exception $ex) {
    echo $ex->getMessage();
} finally {
    echo '<br>Finally executed!!!<br>';
}
